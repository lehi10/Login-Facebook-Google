<!DOCTYPE html>
<html>
<head>
<title>Facebook Login JavaScript Example</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Google Login -->
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <meta name="google-signin-client_id" content="660556977613-b77cll9ehait3flf2b35b5o80pmrln8p.apps.googleusercontent.com">
    <!--/Google Login -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        body {
        background-image: url("img/background.jpg");
        background-repeat: repeat;
        background-size:  100%;
        background-position: center; /* Center the image */
        }
        </style>  

<script>

  function statusChangeCallback(response) {  // Called with the results from FB.getLoginStatus().
    console.log('statusChangeCallback');
    console.log(response);                   // The current login status of the person.
    if (response.status === 'connected') {   // Logged into your webpage and Facebook.
      testAPI();  
    } else {                                 // Not logged into your webpage or we are unable to tell.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into this webpage.';
    }
  }


  function checkLoginState() {               // Called when a person is finished with the Login Button.
    FB.getLoginStatus(function(response) {   // See the onlogin handler
      statusChangeCallback(response);
    });
  }


  window.fbAsyncInit = function() {
    FB.init({
      appId      : '193323468530700',       // ID Facebook
      cookie     : true,                     // Enable cookies to allow the server to access the session.
      xfbml      : true,                     // Parse social plugins on this webpage.
      version    : 'v2.8'           // Use this Graph API version for this call.
    });


    FB.getLoginStatus(function(response) {   // Called after the JS SDK has been initialized.
      statusChangeCallback(response);        // Returns the login status.
    });
  };

  
  (function(d, s, id) {                      // Load the SDK asynchronously
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

 
  function testAPI() {                      // Testing Graph API after login.  See statusChangeCallback() for when this call is made.
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', function(response) {
      console.log('Successful login for: ' + response.name);

      
      document.getElementById('status').innerHTML =
        'Acceso exitoso de ' + response.name + '!';
    });
  }

</script>

</head>
<body>
<div class="container-fluid">
    <div class="jumbotron">
        <h1>Yachay Exploradores</h1>
    </div>

    <div class="row">
    <div class="col-sm-2" ></div>    
    <div class="col-sm-4" >
        <div class="panel panel-default">
            <div class="panel-body">
                <p>Inicia sesión con tu cuenta de Facebook o Gmail para conectarte a Yachay Exploradores</p><br>
  
                <div class="col-sm-6" >
                    <div scope="public_profile,email" onlogin="checkLoginState();" class="fb-login-button" data-width="250" data-size="large" data-button-type="continue_with" data-auto-logout-link="true" data-use-continue-as="false"></div>
                </div>
                    <div class="g-signin2" data-width="250" data-height="40" data-onsuccess="onSignIn"></div>
                <div class="col-sm-6" ></div>                
                
            </div>
            
            <strong>
                <div style="text-align:center;" id="status"></div>
            </strong>
            <div class="panel-body">
                <form action="/action_page.php">
                    <div class="form-group">
                        <label for="user">Número de Celular o correo electronico</label>
                        <input type="text" class="form-control" id="user">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Contraseña</label>
                        <input type="password" class="form-control" id="pwd">
                    </div>

                    <button type="submit" class="btn btn-primary">Ingresar</button>
                </form>
            </div>
        
        </div>


    </div>
    <div class="col-sm-4" >
        <div class="panel panel-default">
                <div class="panel-body">
                    <h3>Docentes</h3>
                        <form action="/action_page.php">
                            <div class="form-group">
                                <label for="user">Usuario</label>
                                <input type="text" class="form-control" id="user">
                            </div>
                            <div class="form-group">
                                <label for="pwd">Contraseña:</label>
                                <input type="password" class="form-control" id="pwd">
                            </div>

                            <button type="submit" class="btn btn-primary">Ingresar</button>
                        </form>
                </div>
            </div>
    </div>
    <div class="col-sm-2" ></div> 
    </div>
</div>




</body>


<!--------------------- SING IN AND SING OUT OF GOOGLE  -------------------------->
<script>
function onSignIn(googleUser) {
  var profile = googleUser.getBasicProfile();
  console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
  console.log('Name: ' + profile.getName());
  console.log('Image URL: ' + profile.getImageUrl());
  console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
}
</script>

<script>
  function signOut() {
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
      console.log('User signed out.');
    });
  }
</script>

</html>