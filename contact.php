<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="icon" type="image/png" href="assets/favicon/favicon.ico">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>Contact</title>
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
        <div style="background:#fbbc05">
          <center style="padding:70px">
            <h1>Contact Pinohh Team </h1>
          </center>
        </div>
        <br><br>
        <div class="row">
          <div class="container">
            <?php if(isset($_GET['task']) AND $_GET['task']=="ok") { ?>
              <div class="alert alert-success alert-dismissable">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Success!</strong> your request Has been well sent.
              </div>
            <?php } else if(isset($_GET['task']) AND $_GET['task']!="ok") { ?>
              <div class="alert alert-danger alert-dismissable">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Error!</strong> something went wrong.
              </div>
            <?php } ?>
            <div class="container">
              <div class="col-lg-12">
                <div class="page-header">
                  <h3>Form contact</h3>
                </div>
                <br/>
                <form action="https://pinohhbot.000webhostapp.com/api-contact.php" method="post">
                  <input type="text" name="nom" class="form-control input-lg" placeholder="Your name"><br/>
                  <input type="text" name="prenom" class="form-control input-lg" placeholder="Your lastname"><br/>
                  <input type="email" name="email" class="form-control input-lg" placeholder="Your email"><br/>
                  <select class="form-control" name="raison">
                    <option value="Alert Bug">Alert Bug</option>
                    <option value="Be part of team">Be part of team</option>
                    <option value="Alert Abuse">Alert Abuse</option>
                    <option value="Other">Other</option>
                  </select>
                  <br>
                  <textarea class="form-control input-lg" name="description" placeholder="Describe your raison"></textarea><br/>
                  <button type="submit" class="btn btn-primary btn-success" name="contact"><span class="fa fa-send"></span> Submit Request</button>
                  <button type="reset" class="btn btn-danger"><span class="fa fa-remove"></span> Delete All</button>
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
        <?php include_once("footer.php"); ?>
        <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
        <script src="assets/js/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script>
        <script src="assets/js/bootstrap.js" type="text/javascript"></script>
        <script src="assets/js/awesome-landing-page.js" type="text/javascript"></script>
    </body>
</html>
