<!--#5FCF80 is color-->
<!DOCTYPE html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

    @media screen and (max-width: 1000px) {
        .coursecards {
            display: block;
        }

        .card {
            display: block;
            min-width: 300px;
        }
    }

    @media screen and (max-width: 1000px) {
        #cform {
            min-width: 500px;
        }
    }


    .mouse {
        transform: rotate(90deg);
        background-color: black;
    }

    .price-table:hover {
        box-shadow: 5px 5px 5px lightgrey, -5px 0px 5px lightgrey;
    }

    .modal-header {
        background-color: #ff9000;

    }

    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        transition: 0.3s;
        width: 20%;
        float: left;
        margin: 8px;

    }

    .card:hover {
        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
    }

    .cardcontainer {
        padding: 2px 16px;


    }


    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        max-width: 300px;
        margin: auto;
        text-align: center;
        font-family: arial;
        float: left;
        margin: 5px;
        margin-left: 50px;
        background-color: #4b4d50;
        border: 3px solid black;
        border-radius: 10px;
    }

    .title {
        color: grey;
        font-size: 18px;
    }

    button {
        border: none;
        outline: 0;
        display: inline-block;
        padding: 8px;
        color: white;
        background-color: #000;
        text-align: center;
        cursor: pointer;
        width: 100%;
        font-size: 18px;
    }

    a {
        text-decoration: none;
        font-size: 22px;
        color: black;
    }

    button:hover, a:hover {
        opacity: 0.7;
        color: white;
    }

    img {
        width: 100%;
        height: 150px;
    }

    #cform {
        display: none;
        position: absolute;
        top: -20px;
        left: 500px

    }


</style>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>learntocode.com</title>
    <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
    <meta name="keywords"
          content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/imagehover.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body class="courses">
<!--Navigation bar-->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><span> Learn to Code</span></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#feature">LOGIC</a></li>
                <li><a href="#organisations">RESEARCH</a></li>
                <li><a href="#courses">WEB</a></li>
                <li><a href="#pricing">OTHERS</a></li>
                <li><a href="#" data-target="#login" data-toggle="modal">Log in</a></li>
                <li class="btn-trial"><a href="#" data-target="#signin" data-toggle="modal">Sign in</a></li>
            </ul>
        </div>
    </div>
</nav>
<!--/ Navigation bar-->

<br>
<br>
<br>

<script>
    function showMessage(btnId) {

        document.getElementById("cform").style.display = "block";
        document.getElementById("coursecards").style.display = "none";

        document.getElementById("couselect").value = btnId;
        document.getElementById("couselect").readOnly = true;


    }
</script>


<!--Modal box-->
<div class="modal fade" id="login" role="dialog">
    <div class="modal-dialog modal-sm">

        <!-- Modal content no 1-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title text-center form-title" style="color:white;">Login</h4>
            </div>
            <div class="modal-body padtrbl">

                <div class="login-box-body">
                    <p class="login-box-msg">Log in to start your session</p>
                    <div class="form-group">
                        <form id="loginForm" action="loginltc.php" method="post">
                            <div class="form-group has-feedback">
                                <!----- username -------------->
                                <input class="form-control" placeholder="Username" id="loginid" type="text"
                                       autocomplete="off" name="fname"/>
                                <span style="display:none;font-weight:bold; position:absolute;color: red;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;"
                                      id="span_loginid"></span>
                                <!---Alredy exists  ! -->
                                <span class="glyphicon glyphicon-user form-control-feedback"
                                      style="background-color: rgb(230,230,230);"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <!----- password -------------->
                                <input class="form-control" placeholder="Password" id="loginpsw" type="password"
                                       autocomplete="off" name="pwd"/>
                                <span style="display:none;font-weight:bold; position:absolute;color: grey;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;"
                                      id="span_loginpsw"></span>
                                <!---Alredy exists  ! -->
                                <span class="glyphicon glyphicon-lock form-control-feedback"
                                      style="background-color: rgb(230,230,230);"></span>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="checkbox icheck">
                                        <label>
                                            <input type="checkbox" id="loginrem"> Remember Me
                                        </label>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <button type="submit" class="btn btn-green btn-block btn-flat">Log In</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!--/ Modal box-->
<!--Banner-->

<!--    signup form-->
<div class="modal fade" id="signin" role="dialog">
    <div class="modal-dialog modal-sm">

        <!-- Modal content no 1-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" style="color:white;">&times;</button>
                <h4 class="modal-title text-center form-title" style="color:white;">Create Account</h4>
            </div>
            <div class="modal-body padtrbl">

                <div class="login-box-body">
                    <p class="login-box-msg">Sign in to start your session</p>
                    <div class="form-group">
                        <form name="" id="loginForm" method="post" action="signupltc.php">
                            <div class="form-group has-feedback">
                                <!----- username -------------->
                                <input class="form-control" placeholder="Username" id="loginid" type="text"
                                       autocomplete="off" name="fname"/>
                                <span style="display:none;font-weight:bold; position:absolute;color: red;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;"
                                      id="span_loginid"></span>
                                <!---Alredy exists  ! -->
                                <span class=" form-control-feedback glyphicon glyphicon-user"
                                      style="background-color: rgb(230,230,230);"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <!----- mail -------------->
                                <input class="form-control" placeholder="E-mail" type="text" autocomplete="off"
                                       name="email"/>
                                <span style="display:none;font-weight:bold; position:absolute;color: red;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;"
                                      id="span_loginid"></span>
                                <!---Alredy exists  ! -->
                                <span class="glyphicon glyphicon-envelope form-control-feedback"
                                      style="background-color: rgb(230,230,230);"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <!----- password -------------->
                                <input class="form-control" placeholder="Password" id="loginpsw" type="password"
                                       autocomplete="off" name="pass"/>
                                <span style="display:none;font-weight:bold; position:absolute;color: grey;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;"
                                      id="span_loginpsw"></span>
                                <!---Alredy exists  ! -->
                                <span class="glyphicon glyphicon-lock form-control-feedback"
                                      style="background-color: rgb(230,230,230);"></span>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="checkbox icheck">
                                        <label>
                                            <input type="checkbox" id="loginrem"> Remember Me
                                        </label>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <button type="submit" class="btn btn-green btn-block btn-flat">Sign In</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


<!--    end of signup form-->
<div class="modal-dialog modal-sm" id="cform">

    <!-- Modal content no 1-->
    <div class="modal-content">
        <div class="modal-header">

            <h4 class="modal-title text-center form-title" style="color:white;">Payment Gateway</h4>
            <button type="button" class="close" data-dismiss="modal"><a href='http://localhost/coursework/courses.php'
                                                                        style='font-size: 30px;color:black;float:right;'>&times;</a>
            </button>
        </div>
        <div class="modal-body padtrbl">

            <div class="login-box-body">
                <p class="login-box-msg">Please fill following deatils to procced</p>
                <div class="form-group">
                    <form action="payment.php" method="post">
                        <div class="form-group has-feedback">
                            <!----- username -------------->
                            <input class="form-control" placeholder="Username" id="loginid" type="text"
                                   autocomplete="off" name="fname"/>
                            <span style="display:none;font-weight:bold; position:absolute;color: red;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;"
                                  id="span_loginid"></span>
                            <!---Alredy exists  ! -->
                            <span class="glyphicon glyphicon-user form-control-feedback"
                                  style="background-color: rgb(230,230,230);"></span>
                        </div>
                        <!--                  password-->
                        <div class="form-group has-feedback">

                            <input class="form-control" placeholder="Password" id="loginpsw" type="password"
                                   autocomplete="off" name="pass"/>
                            <span style="display:none;font-weight:bold; position:absolute;color: grey;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;"
                                  id="span_loginpsw"></span>
                            <!---Alredy exists  ! -->
                            <span class="glyphicon glyphicon-lock form-control-feedback"
                                  style="background-color: rgb(230,230,230);"></span>
                        </div>


                        <div class="form-group has-feedback">
                            <!----- credit card number -------------->
                            <input class="form-control" placeholder="Credit card number" id="loginpsw" type="password"
                                   autocomplete="off" name="cred" min-length=6/>
                            <span style="display:none;font-weight:bold; position:absolute;color: grey;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;"
                                  id="span_loginpsw"></span>
                            <!---Alredy exists  ! -->
                            <span class="glyphicon glyphicon-credit-card form-control-feedback"
                                  style="background-color: rgb(230,230,230);"></span>
                        </div>

                        <div class="form-group has-feedback">
                            <!----- coursename -------------->
                            <input class="form-control" name="coursename" id="couselect" type="text" autocomplete="off"
                                   name="pwd"/>
                            <span style="display:none;font-weight:bold; position:absolute;color: grey;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;"
                                  id="span_loginpsw"></span>
                            <!---Alredy exists  ! -->
                            <span class="glyphicon glyphicon-education form-control-feedback"
                                  style="background-color: rgb(230,230,230);"></span>
                        </div>


                        <div class="row">
                            <div class="col-xs-12">
                                <div class="checkbox icheck">

                                </div>
                            </div>
                            <div class="col-xs-12">
                                <button type="submit" class="btn btn-green btn-block btn-flat">Buy this course!</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>


<div id="coursecards">


    <div class="card">

        <img src="img/course1.jpg" alt="John">
        <h1>Java Script</h1>
        <p class="title">CEO & Founder, Example</p>
        <p>Harvard University</p>
        <div style="margin: 24px 0;">
            <a href="#"><i class="fa fa-dribbble"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-facebook"></i></a>
        </div>
        <p>
            <button style="background-color: #ff9000 !important;" type="submit" id="javascript"
                    onClick='showMessage(this.id)'>Buy the course
            </button>
        </p>
    </div>


    <div class="card">
        <img src="img/course2.jpg" alt="John">
        <h1>React JS</h1>
        <p class="title">CEO & Founder, Example</p>
        <p>Harvard University</p>
        <div style="margin: 24px 0;">
            <a href="#"><i class="fa fa-dribbble"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-facebook"></i></a>
        </div>
        <p>
            <button type="submit" style="background-color: #ff9000 !important;" id="reactjs"
                    onClick='showMessage(this.id)'>Buy the course
            </button>
        </p>
    </div>
    <div class="card" id="coursecard">
        <img src="img/course3.jpg" alt="John">
        <h1>Android</h1>
        <p class="title">CEO & Founder, Example</p>
        <p>Harvard University</p>
        <div style="margin: 24px 0;">
            <a href="#"><i class="fa fa-dribbble"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-facebook"></i></a>
        </div>
        <p>
            <button type="submit" style="background-color: #ff9000 !important;" id="android"
                    onClick='showMessage(this.id)'>Buy the course
            </button>
        </p>
    </div>
    <div class="card">
        <img src="img/course5.jpg" alt="John">
        <h1>JAVA</h1>
        <p class="title">CEO & Founder, Example</p>
        <p>Harvard University</p>
        <div style="margin: 24px 0;">
            <a href="#"><i class="fa fa-dribbble"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-facebook"></i></a>
        </div>
        <p>
            <button type="submit" style="background-color: #ff9000 !important;" id="java"
                    onClick='showMessage(this.id)'>Buy the course
            </button>
        </p>
    </div>
    <br><br>
    <!--    row2-->
    <div class="card">

        <img src="img/course4.png" alt="John">
        <h1>Angular JS</h1>
        <p class="title">CEO & Founder, Example</p>
        <p>Harvard University</p>
        <div style="margin: 4px 0;">
            <a href="#"><i class="fa fa-dribbble"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-facebook"></i></a>
        </div>
        <p>
            <button type="submit" style="background-color: #ff9000 !important;" id="angularjs"
                    onClick='showMessage(this.id)'>Buy the course
            </button>
        </p>
    </div>
    <div class="card">
        <img src="img/course5.png" alt="John">
        <h1>C++</h1>
        <p class="title">CEO & Founder, Example</p>
        <p>Harvard University</p>
        <div style="margin: 24px 0;">
            <a href="#"><i class="fa fa-dribbble"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-facebook"></i></a>
        </div>
        <p>
            <button type="submit" style="background-color: #ff9000 !important;" id="c++" onClick='showMessage(this.id)'>
                Buy the course
            </button>
        </p>
    </div>
    <div class="card">
        <img src="img/course6.jpg" alt="John">
        <h1>Jade</h1>
        <p class="title">CEO & Founder, Example</p>
        <p>Harvard University</p>
        <div style="margin: 24px 0;">
            <a href="#"><i class="fa fa-dribbble"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-facebook"></i></a>
        </div>
        <p>
            <button type="submit" style="background-color: #ff9000 !important;" id="jade"
                    onClick='showMessage(this.id)'>Buy the course
            </button>
        </p>
    </div>
    <div class="card">
        <img src="img/course7.jpg" alt="John">
        <h1>Boot Strap</h1>
        <p class="title">CEO & Founder, Example</p>
        <p>Harvard University</p>
        <div style="margin: 24px 0;">
            <a href="#"><i class="fa fa-dribbble"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-facebook"></i></a>
        </div>
        <p>
            <button type="submit" style="background-color: #ff9000 !important;" id="bootstrap"
                    onClick='showMessage(this.id)'>Buy the course
            </button>
        </p>
    </div>

    <br><br>


    <!--row3-->
    <div class="card">

        <img src="img/course8.jpg" alt="John">
        <h1>PHP</h1>
        <p class="title">CEO & Founder, Example</p>
        <p>Harvard University</p>
        <div style="margin: 24px 0;">
            <a href="#"><i class="fa fa-dribbble"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-facebook"></i></a>
        </div>
        <p>
            <button type="submit" style="background-color: #ff9000 !important;" id="php" onClick='showMessage(this.id)'>
                Buy the course
            </button>
        </p>
    </div>


    <div class="card">
        <img src="img/course9.png" alt="John">
        <h1>Web UI</h1>
        <p class="title">CEO & Founder, Example</p>
        <p>Harvard University</p>
        <div style="margin: 24px 0;">
            <a href="#"><i class="fa fa-dribbble"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-facebook"></i></a>
        </div>
        <p>
            <button type="submit" style="background-color: #ff9000 !important;" id="web-ui"
                    onClick='showMessage(this.id)'>Buy the course
            </button>
        </p>
    </div>
    <div class="card" id="coursecard">
        <img src="img/course10.png" alt="John">
        <h1>Node JS</h1>
        <p class="title">CEO & Founder, Example</p>
        <p>Harvard University</p>
        <div style="margin: 24px 0;">
            <a href="#"><i class="fa fa-dribbble"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-facebook"></i></a>
        </div>
        <p>
            <button type="submit" style="background-color: #ff9000 !important;" id="Nodejs"
                    onClick='showMessage(this.id)'>Buy the course
            </button>
        </p>
    </div>
    <div class="card">
        <img src="img/course11.png" alt="John">
        <h1>Vue JS</h1>
        <p class="title">CEO & Founder, Example</p>
        <p>Harvard University</p>
        <div style="margin: 24px 0;">
            <a href="#"><i class="fa fa-dribbble"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-facebook"></i></a>
        </div>
        <p>
            <button type="submit" style="background-color: #ff9000 !important;" id="vue-js"
                    onClick='showMessage(this.id)'>Buy the course
            </button>
        </p>
    </div>
    <br><br>


    <!--    row4-->
    <div class="card">

        <img src="img/course16.png" alt="John">
        <h1>Maven</h1>
        <p class="title">CEO & Founder, Example</p>
        <p>Harvard University</p>
        <div style="margin: 24px 0;">
            <a href="#"><i class="fa fa-dribbble"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-facebook"></i></a>
        </div>
        <p>
            <button type="submit" style="background-color: #ff9000 !important;" id="maven"
                    onClick='showMessage(this.id)'>Buy the course
            </button>
        </p>
    </div>


    <div class="card">
        <img src="img/course15.jpg" alt="John">
        <h1>Perl</h1>
        <p class="title">CEO & Founder, Example</p>
        <p>Harvard University</p>
        <div style="margin: 24px 0;">
            <a href="#"><i class="fa fa-dribbble"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-facebook"></i></a>
        </div>
        <p>
            <button type="submit" style="background-color: #ff9000 !important;" id="perl"
                    onClick='showMessage(this.id)'>Buy the course
            </button>
        </p>
    </div>
    <div class="card" id="coursecard">
        <img src="img/course13.png" alt="John">
        <h1>Chart JS</h1>
        <p class="title">CEO & Founder, Example</p>
        <p>Harvard University</p>
        <div style="margin: 24px 0;">
            <a href="#"><i class="fa fa-dribbble"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-facebook"></i></a>
        </div>
        <p>
            <button type="submit" style="background-color: #ff9000 !important;" id="chart-js"
                    onClick='showMessage(this.id)'>Buy the course
            </button>
        </p>
    </div>
    <div class="card">
        <img src="img/course14.png" alt="John">
        <h1>Mongo DB</h1>
        <p class="title">CEO & Founder, Example</p>
        <p>Harvard University</p>
        <div style="margin: 24px 0;">
            <a href="#"><i class="fa fa-dribbble"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-facebook"></i></a>
        </div>
        <p>
            <button type="submit" style="background-color: #ff9000 !important;" id="mongodb"
                    onClick='showMessage(this.id)'>Buy the course
            </button>
        </p>
    </div>
    <br><br>
</div>

</body>


<!--    php for calculating visits in courses-->
<?php


if ($_SERVER['REQUEST_METHOD'] == "GET") {
    include "admin/mydb.php";
    $sql = "UPDATE counter SET visit=visit+1 WHERE id = 1";
    $result = mysqli_query($conn, $sql);

}

?>
    
    
    
    
    
    
    
    
    