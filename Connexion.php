<!DOCTYPE html> 

<?php 
    if(isset($_POST['user']) && isset($_POST['login'])){               
        if ($_POST['user'] == "Admin" && $_POST['login'] == "Admin"){     
        ?>            
                <SCRIPT LANGUAGE="JavaScript">
                    document.location.href="Administrateur.php"
                </SCRIPT> 
                <?php      
        } 

        if ($_POST['user'] == "Info" && $_POST['login'] == "Info"){ 
                ?>            
                <SCRIPT LANGUAGE="JavaScript">
                    document.location.href="Informaticien.php"
                </SCRIPT> 
                <?php   
        } 
    } 
?> 

<html lang="fr"> 
  <head><meta charset="gb18030">
     
 
    <meta content="width=device-width, initial-scale=1.0" name="viewport"> 

    <!-- Favicons --> 
    <link href="img/favicon.png" rel="icon"> 
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon"> 
    <!-- Google Fonts --> 
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet"> 
    <!-- Bootstrap CSS File --> 
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">  
    <!-- Libraries CSS Files --> 
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet"> 
    <link href="lib/animate/animate.min.css" rel="stylesheet"> 
    <!-- Main Stylesheet File --> 
    <title>Decheterie</title> 
    <link href="css/style.css" rel="stylesheet"> 

  </head>

    

  <body> 
      <!--========================== 

      Header 

      ============================--> 

      <header id="header"> 
        <div class="container"> 
          <div id="logo" class="pull-left"> 
            <a href="#hero"><h1>Decheterie</h1></img></a> 
          </div> 

          <nav id="nav-menu-container"> 
            <ul class="nav-menu"> 
              <li><a href="Accueil.php">Accueil</a></li> 
              <li class="menu-active"><a href="#hero">^</a></li> 
            </ul> 
          </nav><!-- #nav-menu-container --> 

        </div> 
      </header><!-- #header --> 

      <!--========================== 

        Hero Section 

      ============================--> 
      <section id="hero"> 
        <div class="hero-container"> 
          <h1>Le site de decheterie du nord</h1> 
          <h2>Connexion</h2> 
          <div id="formContent"> 
            <form method="post" action="">  
              <input type="text" id="Utilisateur" class="fadeIn second" name="user" placeholder="Utilisateur"> 
              <input type="password" id="Mdp" class="fadeIn third" name="login" placeholder="Mot de passe"> 
              <input type="submit" class="btn-get-started" value="Valider"> 
              <button type="button" class="btn-get-started" data-toggle="modal" data-target="#myModal">Voir les mots de passe</button>
            </form> 
          </div> 
        </div> 
      </section> 


        <div id="myModal" class="modal fade" role="dialog">
          <div class="modal-dialog">
        
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <div class="modal-body">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">Utilisateur</th>
                      <th scope="col">Mot de passe</th>
                      <th scope="col">Rôle</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">Info</th>
                      <td>Info</td>
                      <td>Informaticien</td>
                    </tr>
                    <tr>
                      <th scope="row">Admin</th>
                      <td>Admin</td>
                      <td>Administrateur</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
              </div>
            </div>
        
          </div>
        </div>
      <!--========================== 

        Footer 

      ============================--> 

      <footer id="footer"> 
        <div class="footer-top"> 
          <div class="container"> 
          </div> 
        </div> 

        <div class="container"> 

          <div class="copyright"> 
            &copy; Copyright <strong>Decheterie</strong>. All Rights Reserved 
          </div> 

          <div class="credits"> 
            Designed by Elouan & Zeyd
          </div> 
        </div> 
      </footer><!-- #footer --> 

       <!-- JavaScript Libraries --> 


      <script src="lib/jquery/jquery.min.js"></script> 
      <script src="lib/jquery/jquery-migrate.min.js"></script> 
      <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script> 
      <script src="lib/easing/easing.min.js"></script> 
      <script src="lib/wow/wow.min.js"></script> 
      <script src="lib/waypoints/waypoints.min.js"></script> 
      <script src="lib/counterup/counterup.min.js"></script> 
      <script src="lib/superfish/hoverIntent.js"></script> 
      <script src="lib/superfish/superfish.min.js"></script> 
      <script src="contactform/contactform.js"></script> 
      <script src="js/main.js"></script> 
  </body> 
</html> 

 