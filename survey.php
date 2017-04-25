<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="icon" type="image/png" href="assets/favicon/favicon.ico">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>Result and Submit Survey</title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />

        <link href="https://fonts.googleapis.com/css?family=Josefin+Slab" rel="stylesheet">

        <link href="assets/css/bootstrap.css" rel="stylesheet" />
        <link href="assets/css/landing-page.css" rel="stylesheet"/>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    </head>
    <body class="landing-page landing-page1" style="font-family: 'Josefin Slab', serif;">
        <nav class="navbar navbar-transparent navbar-top" role="navigation"  style="background:#4FC3F7">
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
        <br><br><br>
        <div style="background:#2ecc71">
          <center style="padding:80px">
            <h1>Result and Submit Survey </h1>
          </team>
        </div>
        <br><br>
        <div class="row">
          <div class="container">
            <div class="container">
              <div class="col-lg-12">
                <div class="page-header">
                  <h3>Survey submit form</h3>
                </div>
                <?php if(isset($_GET['task']) AND $_GET['task']=="ok") { ?>
                  <div class="alert alert-success alert-dismissable">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Success!</strong> your survey Has been well sent.
                  </div>
                <?php } else if(isset($_GET['task']) AND $_GET['task']!="ok") { ?>
                  <div class="alert alert-danger alert-dismissable">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Error!</strong> something went wrong.
                  </div>
                <?php } ?>
                <div style="border-left:solid 5px #aa6708; padding-left:20px ;border-radius: 3px 0px 0px 3px; ">
                   <h4 style="color:#aa6708">Length of the survey.</h4>
                   <p>
                     The length of your survey must be resonable, that is to say not too short or too long.
                     Your survey should have the possible answer: for, against, neutral. At the moment, you will not have more
                     choice but in the future, you would have the possibility to customize the response to your survey. Thanks
                   </p>
                </div>
                <br/>
                <form action="https://pinohhbot.000webhostapp.com/api-add-survey.php" method="post">
                  <input type="text" name="nom" class="form-control input-lg" placeholder="Your name"><br/>
                  <input type="text" name="prenom" class="form-control input-lg" placeholder="Your lastname"><br/>
                  <input type="email" name="email" class="form-control input-lg" placeholder="Your email"><br/>
                  <textarea class="form-control input-lg" name="sondage" placeholder="Your survey"></textarea><br/>
                  <input type="text" name="image" class="form-control input-lg" placeholder="Image link to illustrate your survey JPG,PNG,GIF"><br/>
                  <input type="text" name="key" class="form-control input-lg" placeholder="Secret key that allow you to publish survey"><br/>
                  <button type="submit" class="btn btn-primary" name="survey"><span class="fa fa-send"></span> Submit Survey</button>
                  <button type="reset" class="btn btn-danger"><span class="fa fa-remove"></span> Delete Survey</button>
                </form>
              </div>
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
        <footer class="footer">
            <div class="container">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="https://pinohh.herokuapp.com">
                            Home
                            </a>
                        </li>
                        <li>
                            <a href="https://pinohh.herokuapp.com/team.php">
                            Team
                            </a>
                        </li>
                        <li>
                            <a href="https://pinohh.herokuapp.com/contact.php">
                            Contact
                            </a>
                        </li>
                        <li>
                            <a href="https://pinohh.herokuapp.com/survey.php">
                            Survey
                            </a>
                        </li>
                        <li>
                            <a href="https://pinohh.herokuapp.com/politics.php">
                            politics & confidentiality
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright">
                    &copy; 2016 <a href="http://pinohh.herokuapp.com">Pinohh</a>, <i class="fa fa-code"></i> with lot of <i class="fa fa-coffee"></i> and <i class="fa fa-heart"></i> by <a href="https://github.com/nejos97">Nejos97</a></li>
                </div>
            </div>
        </footer>
      </div>
    </body>
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
    <script src="assets/js/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.js" type="text/javascript"></script>
    <script src="assets/js/awesome-landing-page.js" type="text/javascript"></script>
</html>
