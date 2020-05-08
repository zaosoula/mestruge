$(function(){
  autosize($('#message'));

  $('#checkin_date').datepicker({
    'format': window.i18n['#datepickerFormat'],
    'startDate': 'today',
    'autoclose': true,
  });
  $('#checkout_date').datepicker({
    'format': window.i18n['#datepickerFormat'],
    'startDate': 'today',
    'autoclose': true,
  });

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


    console.log(errors);

    if(errors.length>0){
      return false;
    }else{
      return true;
    }
  });
})()
