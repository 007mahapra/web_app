<!DOCTYPE html>
<!--
 @author : Mahaveer Prajapati
 @license : Yet to be defined 
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>Sign In</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" id="bootstrap-css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        
        
        <link href="assets/css/custom_locker.css" rel="stylesheet" type="text/css"/>
        <!-- https://fontawesome.com/get-started -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">


        <!------ Include the above in your HEAD tag ---------->

    </head>

    <script>


        function showSignUp() {
            $('#loginbox').hide();
            $('#signupbox').show();
            $('#card_title_id').text("SIGN UP");
        }

        function showSignIn() {
            $('#loginbox').show();
            $('#signupbox').hide();
            $('#card_title_id').text("SIGN IN");
        }

    </script>


    <body>
        <?php
// put your code here
        ?>


        <!--  References : https://www.w3schools.com/bootstrap4/bootstrap_cards.asp
                https://bootsnipp.com/snippets/featured/login-amp-signup-forms-in-panel
        -->
        <div class="container-fluid">   

            <!--Writing layout for login box with card header , body and footer  -->


            <div class="card" >
                <div class="card-header">
                    <div class="card-title" ><h2 id="card_title_id">SIGN IN</h2></div>
                </div>     

                <div class="card-body" >
                    <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

                    <div id="loginbox" style="margin:50px auto;position:relative;" class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">

                        <form id="loginform" class="form-horizontal" role="form">

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="far fa-envelope"></i></span>
                                </div>
                                <input type="email" class="form-control" name="login_user_email" placeholder="Your ING Email.." aria-label="Email" aria-describedby="basic-addon1" required="true" tabindex="1" maxlength="100">
                            </div>



                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-key" ></i></span>
                                </div>
                                <input type="password" class="form-control" name="login_user_password" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" required="true" tabindex="2" maxlength="8">
                            </div>


                            <div class="input-group">
                                <div class="checkbox">
                                    <label>
                                        <input id="login-remember" type="checkbox" disabled="true" name="remember" value="1"> Remember me
                                    </label>
                                </div>
                            </div>


                            <div class="form-group custom-button-group">
                                <!-- Button -->

                                <div class="col-sm-12 controls">
                                    <button name="submit" type="submit" id="login-submit" data-submit="...Sending" tabindex="3" class="btn btn-success custom-button"><i class="fas fa-sign-in-alt"></i>&nbsp;SIGN IN</button>                                    
                                    <button name="submit" type="submit" id="forgot-submit" data-submit="...Sending" tabindex="4" class="btn btn-danger custom-button"><i class="fas fa-user-plus"></i>&nbsp;Forgot Password</button>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-md-12 control">
                                    <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                        Don't have an account! 
                                        <a href="#" onClick="showSignUp();">
                                            Sign Up Here
                                        </a>
                                    </div>
                                </div>
                            </div>    
                        </form> 

                    </div>  

                    <!-- Register Form start from here  -->    

                    <div id="signupbox" style="display:none; margin:50px auto;position:relative;" class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">

                        <form id="signupform" class="form-horizontal" role="form">

                            <div id="signupalert" style="display:none" class="alert alert-danger">
                                <p>Error:</p>
                                <span></span>
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="far fa-user"></i></span>
                                </div>
                                <input type="text" class="form-control" name="register_user_name" placeholder="Your Name.." aria-label="User Name" aria-describedby="basic-addon1" required="true" tabindex="1" maxlength="100">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="far fa-envelope"></i></span>
                                </div>
                                <input placeholder="Your Email Address.." class="form-control"  type="email" name="register_user_email" aria-label="Email" aria-describedby="basic-addon1"  maxlength="24"  required="true" tabindex="2">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-key" ></i></span>
                                </div>                                
                                <input placeholder="Choose Password.." class="form-control" type="password" name="register_user_password1" aria-label="Password" aria-describedby="basic-addon1" maxlength="8"  required="true" tabindex="3">

                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-key" ></i></span>
                                </div>
                                <input placeholder="Type Password Again.." class="form-control" type="password" name="register_user_password2" aria-label="Password" aria-describedby="basic-addon1" maxlength="8"  required="true" tabindex="4">

                            </div>


                            <div class="input-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="terms_and_condition" required tabindex="5"> I have read <a href="#" >ING Locker Policies</a> and I shall abide by it.
                                    </label>
                                </div>
                            </div>


                            <div class="form-group custom-button-group">
                                <!-- Button -->

                                <div class="col-sm-12 controls">

                                    <button id="register-submit" type="submit" name="submit" data-submit="...Sending" class="btn btn-primary custom-button"><i class="fas fa-user-plus"></i>&nbsp;Register</button>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-md-12 control">
                                    <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                        Already a member ! &nbsp; 
                                        <a href="#" onClick="showSignIn();">
                                            Log in here..
                                        </a>
                                    </div>
                                </div>
                            </div>  

                        </form>

                    </div>

                    <!-- Register Form ends from here  --> 

                </div>   

                <!-- card-body ends here  -->

                <div class="card-footer"> 
                    <div class="footer-copyright text-center py-3 ">
                        <p class="version_para_l"> Orange Locker v1.0 </p>


                        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                            <!-- Links -->
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Policies</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Contact</a>
                                </li>
                            </ul>

                            <!-- Navbar text-->
                            <span class="navbar-text">
                                © 2018 Copyright : Mahaveer P. 
                            </span>

                        </nav>


                    </div>
                </div>
            </div>  

        </div>

    </body>

</html>
