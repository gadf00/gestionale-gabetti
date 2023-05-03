$(document).ready(function () {
  $("#login").click(function (event) {
    event.preventDefault();
    var username = $("#username").val();
    var password = $("#password").val();
    $.ajax({
      url: "control/login.php",
      type: "POST",
      async: false,
      data: {
        username: username,
        password: password,
      },
    })
      .done(function (response) {
        console.log(response);
        if (response == "ok") {
            console.log("sa");
            gapi.load('auth2:client', function(){
                console.log("sium");
                gapi.auth2.init({
                    apiKey: 'AIzaSyDXPLNcp8fTvqA-luQ_N2wdZoGqVwNeisU',
                    discoveryDocs: ['https://www.googleapis.com/discovery/v1/apis/drive/v3/rest'],    
                    client_id: '49085586669-jami426l3ejbpot9o45ln368udjf512d.apps.googleusercontent.com',
                    scope: 'https://www.googleapis.com/auth/drive.file'
                }).then(function(){
                    console.log("ole");
                })
            })
        } else if (response == "error") {
          console.log("Username o password errati");
        } else if (response == "sessione") {
          console.log("Utente in sessione");
        }
      })
      .fail(function (xhr, status, error) {
        //console.log(xhr.responseText);
      });
  });
});

(function ($) {
  "use strict";

  /*==================================================================
    [ Focus Contact2 ]*/
  $(".input100").each(function () {
    $(this).on("blur", function () {
      if ($(this).val().trim() != "") {
        $(this).addClass("has-val");
      } else {
        $(this).removeClass("has-val");
      }
    });
  });

  /*==================================================================
    [ Validate ]*/
  var input = $(".validate-input .input100");

  $(".validate-form").on("submit", function () {
    var check = true;

    for (var i = 0; i < input.length; i++) {
      if (validate(input[i]) == false) {
        showValidate(input[i]);
        check = false;
      }
    }

    return check;
  });

  $(".validate-form .input100").each(function () {
    $(this).focus(function () {
      hideValidate(this);
    });
  });

  function validate(input) {
    if ($(input).val().trim() == "") {
      return false;
    }
  }

  function showValidate(input) {
    var thisAlert = $(input).parent();

    $(thisAlert).addClass("alert-validate");
  }

  function hideValidate(input) {
    var thisAlert = $(input).parent();

    $(thisAlert).removeClass("alert-validate");
  }
})(jQuery);
