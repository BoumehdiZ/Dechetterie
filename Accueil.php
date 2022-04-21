<!DOCTYPE html> 

<?php 

    $c = new PDO('mysql:host=localhost;dbname=zeydkrsv_ppe_bm','zeydkrsv_ppe_bm','zeydboumehdi');  

    $req1 = $c->query('SELECT * FROM leveedechetterie'); 

?> 

<html lang="fr"> 

<head> 

  <meta charset="utf-8"> 

  <title>Déchèterie</title> 

  <meta content="width=device-width, initial-scale=1.0" name="viewport"> 

  <meta content="" name="keywords"> 

  <meta content="" name="description"> 

  

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

  <link href="css/style.css" rel="stylesheet"> 

  

  <!-- ======================================================= 

    Theme Name: Regna 

    Theme URL: https://bootstrapmade.com/regna-bootstrap-onepage-template/ 

    Author: BootstrapMade.com 

    License: https://bootstrapmade.com/license/ 

  ======================================================= --> 

</head> 

  

<body> 

  

  <!--========================== 

  Header 

  ============================--> 

  <header id="header"> 

    <div class="container"> 

  

      <div id="logo" class="pull-left"> 

        <a href="#hero"><h1>Déchèterie</h1></img></a> 

        <!-- Uncomment below if you prefer to use a text logo --> 

        <!--<h1><a href="#hero">Regna</a></h1>--> 

      </div> 

  

      <nav id="nav-menu-container"> 

        <ul class="nav-menu"> 

         

           

          <li><a href="Accueil.php">Accueil</a></li> 

          <li><a href="Connexion.php">Connexion</a></li> 

          <li class="menu-active"><a href="#hero">▲</a></li> 

           

        </ul> 

      </nav><!-- #nav-menu-container --> 

    </div> 

  </header><!-- #header --> 

  

  <!--========================== 

    Hero Section 

  ============================--> 

  

  <section id="hero"> 

   

    <div class="hero-container"> 

     

      <h1>Le site de déchèterie du nord</h1> 

      <h2>Accueil</h2> 

       

    </div> 

     

  </section> 

   

  </br> 

  </br> 

  </br> 

  

  <section> 
    <div class="container"> 

        <div class="section-header"> 

            <h3 class="section-title">Levée de Déchèterie</h3> 
        </div> 
        <br/>  
    <div align="center"> 
        <table class="table table-hover"> 
            <thead> 
                <tr> 
                  <th scope="col">Id</th> 
                  <th scope="col">CodeDéchèterie</th> 
                  <th scope="col">CodeTypeDechet</th> 
                  <th scope="col">DateLevee</th> 
                  <th scope="col">QuantiteLevee</th> 
                </tr> 
            </thead> 
              <?php 
             //Affichage LeveeDechetterie 

            while($affiche = $req1->fetch()) 
           { 
           ?> 
            <tr> 
                <td><?php echo $affiche['Id']; ?></td> 
                <td><?php echo $affiche['CodeDechetterie'];?></td> 
                <td><?php echo $affiche['CodeTypeDechet'];?></td> 
                <td><?php echo $affiche['DateLevee'];?></td> 
                <td><?php echo $affiche['QuantiteLevee'];?></td> 
            </tr>  
    </div> 
    <?php 
    } 
    ?> 
    </table> 
    </div> 
    </section> 

     

  </br> 

  </br> 

  </br> 

  </br> 

  </br> 

  

   

   

   

   

   

   

   

   

   

   

   

   

   

   

   

   

   

   

   

   

   

   

  

  

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

        &copy; Copyright <strong>Déchèterie</strong>. All Rights Reserved 

      </div> 

      <div class="credits"> 

        <!-- 

          All the links in the footer should remain intact. 

          You can delete the links only if you purchased the pro version. 

          Licensing information: https://bootstrapmade.com/license/ 

          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Regna 

        --> 

        Designed by Elouan & Zeyd</a> 

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

  

  <!-- Contact Form JavaScript File --> 

  <script src="contactform/contactform.js"></script> 

  

  <!-- Template Main Javascript File --> 

  <script src="js/main.js"></script> 

  

</body> 

</html> 

 