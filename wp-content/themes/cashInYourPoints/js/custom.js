
function validateForm(){
  if(!$("input:radio[name='which_program']").is(":checked")) {
    alert('Please check which credit card program');
    $("input:radio[name='which_program']").focus();
    return false;
  }else{
    if($("input[name=which_program]:checked").val()=='Other'){
      if($("#other_which_program").val()==''){
        alert('Enter other credit card program title');
        $("#other_which_program").focus();
        return false;
      }
    }
  }


  var postData = $("#cashinform").serialize();
  var formURL = $("#cashinform").attr("action");
  $.ajax({
      url: formURL,
      type: "POST",
      data: postData,
      cache: false,
      async: true,          
      beforeSend: function() {
          $('#submit_container').hide();
          $('#hidden_loading').show();
      },
      success: function(html) {
          html = $.trim(html);
          if (html == 'subscribed') {
            $('#content_container').html('<div class="vertical_success_message">Thank you. We will get in touch with you within 24 hours!</div>');
          } else {
              $('#submit_container').show();
              $('#hidden_loading').hide();
          }
      }
  });
 
  return false;
}


function validateFormFlight(){
      var postData = $("#flightform").serialize();
      var formURL = $("#flightform").attr("action");
      $.ajax({
          url: formURL,
          type: "POST",
          data: postData,
          cache: false,
          async: true,          
          beforeSend: function() {
              $('#submit_container_2').hide();
              $('#hidden_loading_2').show();
          },
          success: function(html) {
              html = $.trim(html);
              if (html == 'subscribed') {
                $('#content_container2').html('<div class="vertical_success_message">Thank you. We will get in touch with you within 24 hours!</div>');
              } else {
				$('#submit_container_2').show();
				$('#hidden_loading_2').hide();
				$('#hidden_loading_2').html('Saving..');
              }
          }
      });
 
  return false;
}

function validateNewsletter(){
      var postData = $("#newsletterform").serialize();
      var formURL = $("#newsletterform").attr("action");
      $.ajax({
          url: formURL,
          type: "POST",
          data: postData,
          cache: false,
          async: true,          
          beforeSend: function() {
	          $('#submit_container_3').hide();
	          $('#hidden_loading_3').show();
          },
          success: function(html) {
              html = $.trim(html);
              if (html == 'subscribed') {
                $('#hidden_loading_3').html('Thank you. We will get in touch with you within 24 hours!');
                  document.getElementById("newsletterform").reset();
              }else {
                  
				  $('#submit_container_3').show();
				  $('#hidden_loading_3').hide();
				  $('#hidden_loading_3').html('Saving..');
              }
          }
      });
 
  return false;
}


 
 