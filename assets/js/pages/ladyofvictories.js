$(function() {


  function setStellar(){
    console.log($( window ).width());
    if($( window ).width() > 1023){
      $('.site-hero').stellar({
        verticalOffset: -400,
      });
    }else{
      $('.site-hero').stellar({
        // verticalOffset: 0,
      });
    }
  }

  $(window).resize(function(){
    setStellar();
  });

  setStellar();

})
