<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="icon" type="image/png" href="assets/favicon/favicon.ico">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>Pinohh Messenger Bot</title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

        <link href="assets/css/bootstrap.css" rel="stylesheet" />
        <link href="assets/css/landing-page.css" rel="stylesheet"/>

    </head>
    <body class="landing-page landing-page1">
        <nav class="navbar navbar-transparent navbar-top" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button id="menu-toggle" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar bar1"></span>
                    <span class="icon-bar bar2"></span>
                    <span class="icon-bar bar3"></span>
                    </button>
                    <a href="https://pinohh.herokuapp.com">
                        <div class="logo-container">
                            <div class="logo">
                                <img src="assets/img/logo_pinohh.png" alt="Pinohh Logo">
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="example" >
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="https://facebook.com/pinohh">
                            <i class="fa fa-facebook-square"></i>
                            Like
                            </a>
                        </li>
                        <li>
                            <a href="https://github.com/nejos97/pinohh">
                            <i class="fa fa-github"></i>
                            Github
                            </a>
                        </li>
                        <li>
                            <a href="mailto:jonathannenba@gmail.com">
                            <i class="fa fa-envelope"></i>
                            Mail
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
        </nav>
        <div class="wrapper">
            <div class="parallax filter-gradient blue" data-color="blue">
                <div class="parallax-background">
                    <img class="parallax-background-image" src="assets/img/template/bg3.jpg">
                </div>
                <div class= "container">
                    <div class="row">
                        <div class="col-md-5 hidden-xs">
                            <div class="parallax-image">
                                <img class="phone" src="assets/img/template/iphone3.png" style="margin-top: 20px"/>
                            </div>
                        </div>
                        <div class="col-md-6 col-md-offset-1">
                            <div class="description">
                                <h2><center>Pinohh Bot</center></h2>
                                <br>
                                <h5>Be surprised by everything that pinohh does with its features and services. Your detailed road traffic, the poll vote and the programming of the anniversaries - all this regrouping within a single Bot Pinohh. I invite you to communicate with him in order to discover it completely.</h5>
                            </div>
                            <div class="buttons">
                                <center>
                                  <a href="https://m.me/pinohh">
                                    <img src="assets/img/contactus.png" style="width: 50%;border-radius:4px;" />
                                  </a>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section section-gray section-clients">
                <?php
                  $data = file_get_contents("http://pinohhbot.000webhostapp.com/api-statistic.php");
                  $data = json_decode($data,true);
                ?>
                <div class="container text-center">
                    <h4 class="header-text">PINOHH STATISTICS</h4>
                    <div class="row">
                      <div class="col-lg-3">
                        <h1><?php echo $data["nbrMessage"] ; ?></h1>
                        <h5>Messages</h5>
                      </div>
                      <div class="col-lg-3">
                        <h1><?php echo $data["nbrUser"] ; ?></h1>
                        <h5>Users</h5>
                      </div>
                      <div class="col-lg-3">
                        <h1><?php echo $data["nbrBirthday"] ; ?></h1>
                        <h5>Birthday programming</h5>
                      </div>
                      <div class="col-lg-3">
                        <h1><?php echo $data["nbrVoteSurvey"] ; ?></h1>
                        <h5>Survey Vote</h5>
                      </div>
                    </div>
                </div>
            </div>
            <!--Insersion de la video youtube -->
            <br/><br/>
            <center>
              <iframe width="660" height="415" src="https://www.youtube.com/embed/l_xzlzD2PDU" frameborder="0" allowfullscreen></iframe>
            </center>
            <div class="section section-presentation">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="description">
                                <h4 class="header-text">🇨🇲🤖❤ Pinohh</h4>
                                <p>
                                  Hello, view the progress that the bot has made to our leading century, we have designed pinohh which is a bot from the messenger platform and which allows to make a number of basic service. By communicating with him, he will present you his main services and you can then test and approve.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-5 col-md-offset-1 hidden-xs">
                            <img src="assets/img/template/mac.png"/>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section section-demo">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div id="description-carousel" class="carousel fade" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="item">
                                        <img src="assets/img/template/examples/home_33.jpg" alt="">
                                    </div>
                                    <div class="item active">
                                        <img src="assets/img/template/examples/home_22.jpg" alt="">
                                    </div>
                                    <div class="item">
                                        <img src="assets/img/template/examples/home_11.jpg" alt="">
                                    </div>
                                </div>
                                <ol class="carousel-indicators carousel-indicators-blue">
                                    <li data-target="#description-carousel" data-slide-to="0" class=""></li>
                                    <li data-target="#description-carousel" data-slide-to="1" class="active"></li>
                                    <li data-target="#description-carousel" data-slide-to="2" class=""></li>
                                </ol>
                            </div>
                        </div>
                        <div class="col-md-5 col-md-offset-1">
                            <h4>EASY TO UNDERSTAND 👌👌</h4>
                            <p>
                                Pinohh is easy to understand because from the beginning of your conversation, it learns to know you and will answer you with kindness. Do not be afraid to communicate with him because he wants only good for you.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section section-features">
                <div class="container">
                    <h4 class="header-text text-center">Features</h4>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card card-blue">
                                <div class="icon">
                                    <img src="assets/img/rtl.jpg" class="img-responsive">
                                </div>
                                <div class="text">
                                    <h4>Road Traffic Layer</h4>
                                    <p>The service ROAD TRAFFIC LAYER is a service that helps you to determine the road traffic that happens in a precise position. It can allow you to have a help on the traffics and thus take the path that you like the most.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-blue">
                                <div class="icon">
                                    <img src="assets/img/vos.jpg" class="img-responsive">
                                </div>
                                <h4>Vote Of Survey</h4>
                                <p>This service helps you to give your opinion about some trending subjects. Every week a poll is submitted by admins or if you want to submit one you can contact admins and get their approval. To see results please visit my <a href="https://pinohh.herokuapp.com/survey.php">website.</a></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-blue">
                                <div class="icon">
                                    <img src="assets/img/bp.jpg" class="img-responsive">
                                </div>
                                <h4>Birthday Programming</h4>
                                <p>Too many birthday misses? I come to end all this with my BIRTHDAY PROGRAMMING service which allows you to program the birthday of your loved ones and after I take everything in hand to satisfy your friends.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section section-testimonial">
                <div class="container">
                    <h4 class="header-text text-center">What people think</h4>
                    <div id="carousel-example-generic" class="carousel fade" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item">
                                <div class="mask">
                                    <img src="assets/img/faces/face-4.jpg">
                                </div>
                                <div class="carousel-testimonial-caption">
                                    <p>Avaika Troumba, Engineering student</p>
                                    <h3>"I absolutely love your Messenger Bot! It's truly amazing and looks awesome!"</h3>
                                </div>
                            </div>
                            <div class="item active">
                                <div class="mask">
                                    <img src="assets/img/faces/face-3.jpg">
                                </div>
                                <div class="carousel-testimonial-caption">
                                    <p>Biroue Isaac, Engineering student</p>
                                    <h3>"This is one of the most awesome Messenger Bot  I've ever seen! Wish you luck Pinohh Team !"</h3>
                                </div>
                            </div>
                            <div class="item">
                                <div class="mask">
                                    <img src="assets/img/faces/face-2.jpg">
                                </div>
                                <div class="carousel-testimonial-caption">
                                    <p>Tcheobe Abel, CEO Founder</p>
                                    <h3>"It is incredible what this application does. I am delighted because it help me very much."</h3>
                                </div>
                            </div>
                        </div>
                        <ol class="carousel-indicators carousel-indicators-blue">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="section section-no-padding">
                <div class="parallax filter-gradient blue" data-color="blue">
                    <div class="parallax-background">
                        <img class ="parallax-background-image" src="assets/img/template/bg3.jpg"/>
                    </div>
                    <div class="info">
                        <h1>Go and Tchat with Pinohh </h1>
                        <p>Powerful messenger Bot to help</p>
                        <div class="buttons">
                            <center>
                              <a href="https://m.me/pinohh">
                                <img src="assets/img/contactus.png" style="width: 50%;border-radius:4px;" />
                              </a>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
            <?php include_once("footer.php"); ?>
        </div>
        <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
        <script src="assets/js/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script>
        <script src="assets/js/bootstrap.js" type="text/javascript"></script>
        <script src="assets/js/awesome-landing-page.js" type="text/javascript"></script>
    </body>
</html>
