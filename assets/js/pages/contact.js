$(() => {
  autosize($('#message'));

  $('#contactForm').submit(function(e){
    let form = $(this);
    let errors = [];
    form.find('input, textarea').each(function(){
      $(this).val($(this).val().trim());
      if($(this).attr('required')=='required' && $(this).val()==""){
        errors.push({
          field: $(this).attr('name'),
          message: 'empty',
        })
      }
    });

    if(grecaptcha.getResponse()==""){
      errors.push({
        field: "recaptch",
        message: "empty"
      });
      alert('Merci de vérifier que vous n\'êtes pas un robot');
    }

    console.log(errors);

    if(errors.length>0){
      return false;
    }else{
      return true;
    }
  });
})
