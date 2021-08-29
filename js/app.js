var submitted = false;

function displaySuccessMessage() {

  if (mbrform) {

    
      $('input').each(function() {
        if(!$(this).val()){
          $('#successMessage').addClass('hidden');
        }
        else{
          $('#successMessage').removeClass('hidden');
        }
        if (!$("#message").val()) {
          $('#successMessage').addClass('hidden');
        }
        else if (!$("#message").val()) {
          $('#successMessage').removeClass('hidden');
        }

    });
  }
  
   
}