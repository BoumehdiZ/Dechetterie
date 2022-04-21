<!DOCTYPE html>  

  

<?php  


    $c = new PDO('mysql:host=localhost;dbname=zeydkrsv_ppe_bm','zeydkrsv_ppe_bm','zeydboumehdi');  


    //Insertion de données  


    if (isset($_POST['Code_Dechetterie']) AND isset($_POST['Code_Type_Dechet']) AND isset($_POST['Date_Levee']) AND isset($_POST['Quantite_Levee'])){  
  

        //Recuperation des codes en fonction des dechetterie  

  

        $adresse = $_POST['Code_Dechetterie'];  

  

        $req_val = $c->prepare('SELECT CodeDechetterie as codeD FROM dechetterie WHERE Adresse=?');  

  

        $req_val->execute(array($adresse));  

  

        $value = $req_val->fetch();  

  

        $val = $value[0];  

  

   

  

        //Recuperation des valeurs  

  

          

  

        $type = $_POST['Code_Type_Dechet'];  

  

        $date = $_POST['Date_Levee'];  

  

        $quantite = $_POST['Quantite_Levee'];  

  

   

  

        //connexion  

  

          

  

        $c = new PDO('mysql:host=localhost;dbname=zeydkrsv_ppe_bm','zeydkrsv_ppe_bm','zeydboumehdi');  

  

          

  

        //Requête(Insert)  

  

          

  

        $req = $c->prepare('INSERT INTO leveedechetterie(CodeDechetterie,CodeTypeDechet,DateLevee,QuantiteLevee) VALUES (?,?,?,?)');  

  

        $req->execute(array($val, $type, $date, $quantite));  

  

    }  

  

      

  

      

  

      

  

      

  

    //Adresse Dynamique  

  

      

  

    $req_add = $c->prepare('SELECT Adresse FROM dechetterie');  

  

    $req_add->execute();  

  

    $adresse = $req_add->fetchall();  

  

      

  

    $req_nb_ligne_dechetterie = $c->prepare('SELECT Count(*)as codeA FROM dechetterie');  

  

    $req_nb_ligne_dechetterie->execute();  

  

    $nb_ligne_D = $req_nb_ligne_dechetterie -> fetch();  

  

      

  

    $nbD = $nb_ligne_D['codeA'];  

  

      

  

    //Type Dynamique  

  

      

  

    $request = $c->prepare('SELECT CodeTypeDechet FROM typedechetd');  

  

    $request->execute();  

  

    $type = $request -> fetchall();  

  

      

  

    $req_nb_ligne_type = $c->prepare('SELECT Count(*)as codeT FROM typedechetd');  

  

    $req_nb_ligne_type->execute();  

  

    $nb_ligne_T = $req_nb_ligne_type -> fetch();  

  

      

  

    $nbT = $nb_ligne_T['codeT'];  

  

      

  

?>  

<?php 

  

    //Connexion a la base de donnée 

  

    $c = new PDO('mysql:host=localhost;dbname=zeydkrsv_ppe_bm','zeydkrsv_ppe_bm','zeydboumehdi'); 

  

    //Requete affichage de la table LeveeDechettterie 

  

    $req1 = $c->query('SELECT * FROM leveedechetterie'); 

  

    //Requete du tonnage 

  

    if (isset($_POST['Submit'])) { 

        $date = $_POST['Date']; 

  

  

        $req2 = $c->prepare('SELECT sum(QuantiteLevee) as Qte, CodeTypeDechet as CTD FROM leveedechetterie WHERE  DateLevee = ? GROUP BY CodeTypeDechet'); 

        $req2->execute(array($date)); 

    } 

  

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

  

      <h2>Administrateur</h2>  

  

        

  

    </div>  

  

  </section>  

  

    

  

   

  

   

  

  <section id="contact" class="">  

  

    <div class="container">  

    <div class="section-header"> 

    <h3 class="section-title">La saisie</h3> 

  

     <form method="post" action="" >  

  

            <br/>  

  

              

  

              

  

                <div class="row">  

  

                    <div class="col-lg-10">  

  

                      

  

                        <h2>Lieu de la Déchèterie :</h2>  

  

                          

  

                        <select name="Code_Dechetterie" onchange="updated(this)" class="form-control form-control-lg">  

  

                              

  

                            <?php  

  

                            for($i = 0; $i<$nbD; $i++){  

  

                                ?>  

  

                                <option><?php echo $adresse[$i][0]; ?></option>  

  

                                <?php  

  

                            }  

  

                            ?>  

  

                              

  

                        </select>  

  

                      

  

                      

  

              

  

              

  

            <br/>  

  

            <br/>  

  

   

  

            <h2>Type de Déchets :</h2>  

  

              

  

            <select name="Code_Type_Dechet" onchange="updated(this)" class="form-control form-control-lg">  

  

                <?php  

  

                for($i = 0; $i<$nbT; $i++){  

  

                        ?>  

  

                        <option><?php echo $type[$i][0]; ?></option>  

  

                        <?php  

  

                }      

  

                ?>  

  

            </select>  

  

              

  

            <br/>  

  

            <br/>  

  

   

  

            <h2>Date de la levée :</h2>  

  

              

  

            <input name="Date_Levee" placeholder="AAAA-MM-JJ" type="date" class="form-control form-control-lg" />  

  

              

  

            <br/>  

  

            <br/>  

  

              

  

            </div>  

  

              

  

   

  

            <div class="col-lg-3">   

  

              

  

            <h2>La quantité de la levée:</h2>  

  

              

  

            <input name="Quantite_Levee" placeholder="Quantité" type="text" class="form-control form-control-lg"/>  

  

              

  

            <br/>  

  

            <br/>  

  

              

  

            <input type="submit" class="btn-get-started" class="form-control form-control-lg"/>  

  

              

  

        </form>  

  

        </div>  

  

        </div>  

   <h3 class="section-title">Tonnage</h3> 

  

    <form method="post" action=""> 

        Date de la levée :  

        <br/> 

        <input name="Date" placeholder="AAAA-MM-JJ" type="date" class="form-control form-control-lg"/> 

        <br/> 

         

            <input name="Submit" type="submit" class="form-control form-control-lg"/> 

    </form> 

    <br/> 

        <div align="center">  

  

        <table class="table table-hover">             

  

            <thead>  

  

                <tr>  

  

                  <th scope="col">CodeTypeDechet</th>  

  

                  <th scope="col">Quantité</th>  

  

                </tr>  

  

            </thead>  

    <?php 

  

    //Affichage Tonnage 

  

    if (isset($_POST['Submit'])) { 

        while ($affiche1 = $req2->fetch()) { 

        ?> 

        <tr> 

            <td><h2><?php echo $affiche1['CTD']?></h2></td> 

            <td><h2><?php echo $affiche1['Qte']; ?></h2></td> 

        </tr> 

        <?php 

        } 

    } 

        ?> 

        </div> 

        </table> 

     

  

  </section>  

  

   

  

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

  

 