<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/login_style.css">
    <link rel="shortcut icon" href="<?php echo base_url()?>assets/favicon.png" type="image/x-icon">
    <title>Login</title>
  </head>
  <body class="loginbody">
    <?php 
    // echo password_hash("jomar", PASSWORD_BCRYPT)
    ?>
        <div class="login" id="login_container">
            <div class="login_logo logo">
                <div class="logo__pic">
                        <svg id='logo__pic' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 880.9 113.8">
                                <style type="text/css">  
                                .logopiece-isatright{
                                    transform: translateX(100px);
                                    opacity: 0;
                                    transition: transform 0.2s,
                                    opacity 0.2s;
                                }
                                .st0{fill:#E61C2F;}
                                .st1{fill:#005F27;}
                            </style>
                            <polygon class="st0 logopiece-isatright logo_piece piece_first" points="60.8 0 23.9 113.8 0 113.8 36.9 0 "/>
                            <polygon class="st0 logopiece-isatright logo_piece piece" points="90.5 0 53.6 113.8 30.3 113.8 67.3 0 "/>
                            <polygon class="st0 logopiece-isatright logo_piece piece" points="120.2 0 83.3 113.8 60 113.8 97 0 "/>
                            <polygon class="st0 logopiece-isatright logo_piece piece" points="149.8 0 113 113.8 89.7 113.8 126.7 0 "/>
                            <polygon class="st1 logopiece-isatright logo_piece piece" points="269.4 0 232.4 113.8 119.3 113.8 156.3 0 "/>
                        </svg>
                        
                    <!-- <img src="assets/images/logopic.png" alt=""> -->
                </div>
                <div class="logo__text">
                    <img src="<?php echo base_url() ?>assets/images/logotext.png" alt="">
                </div>
            </div>
            
            
            <form class='login_loginForm loginForm' error='<?php echo $this->session->flashdata('error');?>' action="<?php echo base_url().'login/login_validation'?>" method="post">
                <div class="loginForm__headtext">
                    <h1 class="loginForm__h1">Sign in</h1>
                    <p class="loginForm__p">to your account</p>
                </div>
                <div class="loginForm__inputWrapper">
                    <span class="loginForm__placeholder">Username</span>
                    <input id='input_user' type="text" name="username" class="loginForm__input" error='' autocomplete="off">
                    <div class="loginForm__underline"><span class="coloredline"></span></div>
                    <span class='loginForm__errormessage'></span>
                </div>
                <div class="loginForm__inputWrapper">
                    <span class="loginForm__placeholder">Password</span>
                    <input id='input_pass' type="password" name="password" class="loginForm__input" error=''>
                    <div class="loginForm__underline"><span class="coloredline"></span></div>
                    <span class='loginForm__errormessage'></span>
                </div>
                <div class="loginForm__inputWrapper">
                    <a href="#" class='loginForm__forgotLink'>Forgot Password?</a>
                    <input id='signin_btn' class='loginForm__button' type="submit" name="signin" value="SIGN IN">
                </div>
            </form>
        </div>
    <script src="<?php echo base_url() ?>assets/js/jquery.js"></script> 
    <script src="<?php echo base_url() ?>assets/js/login_script.js"></script>
  </body>
</html>
