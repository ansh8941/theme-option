var clicked=false;//Global Variable
function ClickLogin()
{
    clicked=true;
}

     
    function onFailure(error) {
    	
      console.log(error);
    }
    function renderButton() {
      gapi.signin2.render('my-signin2', {
        'scope': 'profile email',
        'width': ' ',
        'height': 40,
        'longtitle': true,
        'theme': 'dark',
        'onsuccess': onSignIn,
        'onfailure': onFailure
       });
    }
 

function onSignIn(googleUser) {
  var profile = googleUser.getBasicProfile();

if (clicked) {
        var user_name = profile.getName();
        var user_email = profile.getEmail();
        var user_image = profile.getImageUrl();


        $.ajax({
            type: "POST",
            dataType: "json",
            url: Purl.pluginUrl + "/inc/ajax.php",
            data: { user_login: user_name,
             user_email: user_email,
            user_image: user_image },
            cache: false,
            success: function(data, status) {
                data.loginStatus = $.trim(data.loginStatus);
                if (data.loginStatus === 'logindone') {

                		alert(data.loginResult);
                		location.reload();
                } else {

                    alert(data.loginResult);
                    


                }

            }

        });

        return false;

    }

    }




