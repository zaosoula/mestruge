<?php

/**
 * @i18n
 * @author     Zao Soula - Zarque
 * @version    1.1

 */
$i18nStatic = null;
class i18n {
    private $currentLang;
    private $defaultLang;
    private $availableLang;
    private $availableLangDir;
    private $lang = array();



    public function __construct($data)
    {
        if(!empty($data))
            $this->hydrate($data);

        if(empty($this->availableLang) && !empty($this->availableLangDir)){
          $scanned_directory = array_diff(scandir($this->availableLangDir), array('..', '.'));
          foreach (glob($this->availableLangDir."/*.json") as $filename) {
              $this->availableLang[] = pathinfo($filename)['filename'];
          }
        }

        if(empty($this->currentLang)){
          if(empty($this->defaultLang)){
            throw new \Exception("No default lang defined", 1);
          }else{
            $this->currentLang = $this->defaultLang;
          }
        }

        $this->lang[$this->currentLang] = $this->readLangFile($this->currentLang);
        if($this->currentLang != $this->defaultLang){
          $this->lang[$this->defaultLang] = $this->readLangFile($this->defaultLang);
        }

    }

    public function readLangFile($lang) {

      if(!function_exists('magicVar')){
        function magicVar($key, $lang){
          $text = $lang[$key];
          $text = str_replace("%baseurl%", BaseUrl, $text);

          if(preg_match_all('/\{([^\{\}]*)\}/', $text, $matches)>0){

            // print_r($matches[1].' REPLACE ->');
            $searchFor = array();
            $replaceBy = array();
            foreach ($matches[1] as $match) {
              $searchFor[] = '{'.$match.'}';
              $replaceBy[] = magicVar($match, $lang);
            }

            $text = str_replace($searchFor, $replaceBy, $text);
          }

          return $text;
        }
      }

      $fileContent = file_get_contents($this->availableLangDir."/".$lang.".json");
      $lang = json_decode($fileContent, true);


      array_walk($lang, function(&$i, $k) use($lang) {
        $i = magicVar($k, $lang);
      });


      return $lang;


    }
    public function hydrate($donnees)
    {
        foreach ($donnees as $attribut => $valeur)
        {
        $methode = 'set'.str_replace(' ', '', ucwords(str_replace('_', ' ', $attribut)));

        if (is_callable(array($this, $methode)))
        {
            $this->$methode($valeur);
        }
        }
    }

    public function load(){
      if(!empty($this->assets)){
        foreach($this->assets as $asset){
          if(file_exists('assets/'.$asset)){
            switch (pathinfo('assets/'.$asset)['extension']) {
              case 'js':
                echo '<script src="'.BaseUrl.'/assets/'.$asset.'"></script>';
                break;
              case 'css':
                echo '<link href="'.BaseUrl.'/assets/'.$asset.'" rel="stylesheet">';
                  break;
              default:
            }
          }else{
            switch (pathinfo($asset)['extension']) {
              case 'js':
                echo '<script src="'.$asset.'"></script>';
                break;
              case 'css':
                echo '<link href="'.$asset.'" rel="stylesheet">';
                  break;
              default:
            }
          }
        }
      }
    }

  public function getCurrentLang(){
      return $this->currentLang;
  }

  public function setCurrentLang($currentLang){
      $this->currentLang = $currentLang;
      return $this;
  }

  public function getAvailableLang(){
      return $this->availableLang;
  }

  public function setAvailableLang($availableLang){
      $this->availableLang = $availableLang;
      return $this;
  }

  public function getAvailableLangDir(){
      return $this->availableLangDir;
  }

  public function setAvailableLangDir($availableLangDir){
      $this->availableLangDir = $availableLangDir;
      return $this;
  }

  public function getLang(){
      return $this->lang;
  }

  public function setLang($lang){
      $this->lang = $lang;
      return $this;
  }

  public function getDefaultLang(){
      return $this->defaultLang;
  }

  public function setDefaultLang($defaultLang){
      $this->defaultLang = $defaultLang;
      return $this;
  }

  public function get($key){
    $print = "{text_not_found}";
    if(isset($this->lang[$this->currentLang][$key])){
      $print = $this->lang[$this->currentLang][$key];
    }else{
      if(isset($this->lang[$this->defaultLang][$key])){
        $print = $this->lang[$this->defaultLang][$key];
      }
    }

    return $print;
  }

  public function empty($key){
    return empty($this->get($key));
  }

  public function passToJavascript(){

    $passToJsLang = [];

    foreach ($this->lang[$this->defaultLang] as $key => $value) {
      $passToJsLang[$key] = $this->get($key);
    }
    echo '<script>window.i18n = '.json_encode($passToJsLang).';</script>';
  }
}
?>
