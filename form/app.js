$(function(){
  //Get form
  var form = $('#add-school');

  //Get form message div
  var formMessage = $('#form-message');

  $(form).submit(function(event){
    //Stop browser from submitting the form
    event.preventDefault();

    //Select form data
    var formData = $(form).serialize();

    $.ajax({
      type: "POST",
      url: 'form/mail.php',
      data: formData
    })

    .done(function(response){
      $(formMessage).removeClass("error");
      $(formMessage).addClass('success');

      //Set success message
      $(formMessage).text(response);

      //Clear form value
      $('#schoolName').val('');
      $('#state').val('');
      $('#schoolType').val('');
      $('#ownership').val('');
      $('#address').val('');
      $('#year').val('');
      $('#contact').val('');
    })

    .fail(function(data){
      $(formMessage).removeClass('success');
      $(formMessage).addClass('error');

      //Set the message if the form fails
      if(data.responseText !== ''){
        $(formMessage).text(data.responseText);
      } else{
        $(formMessage).text('Oops! An error occured and your message could not be sent.');
      }
    })
  })

});
