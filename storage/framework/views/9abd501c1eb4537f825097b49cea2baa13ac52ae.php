<!doctype html>
<html lang='en'>
<head>
    
    <!-- Meta Tags -->
    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />

    <!-- Title -->
    <title></title>
    
    <link rel="shortcut icon" href="./img/logo.ico" type="image/x-icon" />
    
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

    <!-- Latest compiled and minified BootStrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Latest compiled and minified BootStrapJavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <!-- Font Awesome -->
    <script src="https://use.fontawesome.com/a0e8ab68c0.js"></script>
    <link href="./font-awesome/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    
    <!-- Internal StyleSheet -->
    <link rel="stylesheet" href="./css/index.css">
    
    
    
</head>
<body>
<div id='member-wrapper'>
    
    <div class='child-member-wrapper pic'>
    </div>
    
    <div class='child-member-wrapper cover'>
        
        <button class='btn btn-default hidden-xs' onclick="window.location.href='/login'">Log In</button>
        
        <div class='container form-handler'>
        
            <div class='col-sm-6 hidden-xs handlee'>
                <img class="img-responsive" id='fila' src='./img/ankara-member.png'>
            </div>
            
            <div class='col-sm-6 handlee' id='forma'>
                <img src='./img/ankara-member.png' />
                <h3>Welcome to KwaaKwaa</h3>
                <p>End that fight with your tailor</p>
                
                
                <input type='email' placeholder='Email' class='form-control' />
                <input type='password' placeholder='Create a password' class='form-control' />
                <button class='btn btn-default' id='continue'>Continue</button>
                
                <!--<p>Or</p> -->
                
                <div class="fb-login-button" data-max-rows="1" data-size="large" data-button-type="continue_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="true"></div>
                
                <p id='other'>Creating an account means you’re OK with KwaaKwaa's<br /><a href=''>Terms of Service</a> and <a href=''>Privacy Policy</a></p>
                
                <button class='btn btn-default visible-xs login-btn'>Log In</button>
            </div>
            
        </div>
        
        
        <div id='handlee-footer' class='hidden-xs'>
            <ul>
                <li>About KwaaKwaa</li>
                <li>Blog</li>
                <li>Businesses</li>
                <li>Terms of Service</li>
                <li>Privacy Policy</li>
                <li>Help</li>
                <li>iPhone App</li>
                <li>Android App</li>
            </ul>
        </div>
        
    </div>
    
    
    <nav class="navbar navbar-default navbar-fixed-bottom hidden-xs" id='member-footer'>
        <div class="container">
            <ul>Discover KwaaKwaa: 
                <li>Item</li>
                <li>Item</li>
                <li>Item</li>
                <li>Item</li>
                <li>Item</li>
                <li>Item</li>
                <li>Item</li>
            </ul>

        </div>
    </nav>
    
</div>



<script type='text/javascript' src='./js/bg_anim.js'></script>
<script type='text/javascript' src='./js/login_btn.js'></script>
</body>
</html>