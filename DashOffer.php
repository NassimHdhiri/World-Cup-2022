<?php 
session_start();

require_once 'includes/dbh.inc.php';

$sql = "SELECT code_offre_emploi ,titre FROM offre_emploi";
$result = mysqli_query($conn, $sql);



if(isset($_SESSION["username"])) {
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />

        <title>Dashboard Offerer</title>
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=ABeeZee&amp;display=swap" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Advent+Pro&amp;display=swap" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allerta&amp;display=swap" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Andika&amp;display=swap" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Archivo+Narrow&amp;display=swap" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&amp;display=swap" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Spline+Sans+Mono&amp;display=swap" />

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.css" />
        <link rel="stylesheet" href="assets/css/Navbar-Centered-Links-icons.css" />
   
        <!----======== CSS ======== -->
        <link rel="stylesheet" href="assets/css/DashOff.css" />

        <!----===== Boxicons CSS ===== -->
        <link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet" />

        <title>Dashboard Sidebar Menu</title>
    </head>
    <body>
        <nav class="sidebar close">
            <header>
                <div class="image-text">
                    <span class="image">
                        <img src="assets/img/logo.png" alt="" />
                    </span>

                    <div class="text logo-text">
                        <span class="name">Find Job</span>
                        
                    </div>
                </div>

                <i class="bx bx-chevron-right toggle"></i>
            </header>

            <div class="menu-bar">
                <div class="menu">
                    <li class="search-box">
                        <i class="bx bx-search icon"></i>
                        <input type="text" placeholder="Search..." />
                    </li>

                    <ul class="menu-links" style="padding-left: 0rem;" ;>
                        <li class="nav-link btn-side">
                            <a href="#" class="btn-home">
                                <i class="bx bx-home-alt icon "></i>
                                <span class="text nav-text">Add Job</span>
                            </a>
                        </li>

                        <li class="nav-link btn-side">
                            <a href="#">
                                <i class="bx bx-bar-chart-alt-2 icon "></i>
                                <span class="text nav-text">All Jobs</span>
                            </a>
                        </li>

                        <li class="nav-link btn-side">
                            <a href="#">
                                <i class="bx bx-bell icon "></i>
                                <span class="text nav-text">Single Job</span>
                            </a>
                        </li>   
                    </ul>
                </div>

                <div class="bottom-content">
                    <li class="">
                        <a href="includes/logout.inc.php">
                            <i class="bx bx-log-out icon"></i>
                            <span class="text nav-text">Logout</span>
                        </a>
                    </li>

                    <li class="mode">
                        <div class="sun-moon">
                            <i class="bx bx-moon icon moon"></i>
                            <i class="bx bx-sun icon sun"></i>
                        </div>
                        <span class="mode-text text">Dark mode</span>

                        <div class="toggle-switch">
                            <span class="switch"></span>
                        </div>
                    </li>
                </div>
            </div>
        </nav>

        
        <section class="home active" style="position: absolute;padding:11%;padding-top: 1%;">
            <h1>Ajouter un offre d'emploi</h1>
            <form onsubmit="validateForm()" action="includes/ajoutoffre.inc.php" method="post">
              <div class="form-group">
                <label for="titre">Titre de l'offre</label>
                <input type="text" class="form-control" id="titre" name="titre" required>
              </div>
              <div class="form-group">
                <label for="description">Description de l'offre</label>
                <textarea class="form-control" id="description" name="description" rows="5" required></textarea>
              </div>
              <div class="form-group">
                <label for="experience">Nombre d'années d'expérience requises</label>
                <input type="number" class="form-control" id="experience" name="nbex" required>
              </div>
              <div class="form-group">
                <label for="salaire">Salaire proposé</label>
                <input type="number" class="form-control" id="salaire" name="salaire" required>
              </div>
              <div class="form-group">
                <label for="diplome">Type de diplome</label>
                <select class="form-control" id="contrat" name="diplome" required>
                  <option value="">-- Sélectionnez un diplome --</option>
                  <option value="1">Business Information System</option>
                  <option value="2">Business Intelligence</option>
                  <option value="3">Marketing</option>
                  <option value="4">comptabilité et de gestion</option>
                </select>
              </div>
              <div class="form-group" >
                <label for="diplome" style="margin-top: 1%;">Type de skills</label>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="skills" value="css" id="css">
                  <label class="form-check-label" for="css">CSS</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="skills" value="html" id="html">
                  <label class="form-check-label" for="html">HTML</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="skills" value="analyse financiere" id="analyse financiere">
                  <label class="form-check-label" for="analyse financiere">Analyse financière</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="skills" value="java" id="java">
                  <label class="form-check-label" for="java">Java</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="skills" value="gestion de projet" id="gestion de projet">
                    <label class="form-check-label" for="gestion de projet">gestion de projet</label>
                </div>
              </div>

              <button type="submit" class="btn btn-primary" style="margin-top: 2%;">Soumettre</button>
            </form>
        
         </section>
        <section class="home">
           
                <div class="main">
                    <!-- INDENDITY WEBSITE -->
                    <div class="identity-website">
                        <img src="assets/img/logo-web-png.png" width="158" height="50">
                    </div>
                    
                    <!-- BLUE BLOC ESTHETIC ONE -->
                    <div class="bloc-esthetic-one">
                    <!-- BLUE BLOC ESTHETIC TWO -->
                    <div class="bloc-esthetic-two">
                    <!-- CONTAINER OF ALL OFFERS  -->
                            <div class="container-offers">
                                <!-- HEAD OF TABLE -->
                                <div class="head-table">
                                    <p class="picture">Picture</p>
                                    <p class="title">Title</p>
                                    <p class="post"><strong>Post</strong><br></p>
                                    <p class="details">Details</p>
                                    <p class="delete">Delete</p>
                                </div>
                                
                                <!-- LOAD OFFERS -->
                                <div class="load-offer">
                                    <!-- single-offer -->
                                    <?php
                                    if ($result) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            $titre = $row['titre']; // Replace 'column_name' with the actual column name
                                            $id = $row["code_offre_emploi"];
                                    ?>
                                    <form action="includes/deleteoffre.inc.php" method="post">
                                    <div class="single-offer">
                                        <!-- IMAGE OF OFFER -->
                                        <picture>
                                            <img class="rounded-circle" width="50" height="45"  src="assets/img/portrait-women.png">
                                        </picture>
                                        <!-- TITLE OF JOB  -->
                                        <p class="title" ><?php echo $titre ?></p>
                                        <?php echo '<input type="text" style="display:none" name="id" value="'.$id.'">'?>
                                        <!-- POST -->
                                        <p class="post">Developer</p>
                                        
                                            <!-- BUTTON DETAILS  -->
                                            <button class="btn-details btn btn-info" type="button" >Details</button>
                                            <!-- BUTTON DELETE -->
                                            <button class="btn-delete btn btn-danger" type="submit" name="delete" >Delete</button>
                                        </form>
                                    </div>         
                                    <?php
                                        }
                                        } else {
                                        echo "Error: " . mysqli_error($conn);
                                            }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
     
        </section>
        <section class="home">
            <div class="main">
                <!-- INDENDITY WEBSITE -->
                <div class="identity-website">
                    <img src="assets/img/logo-web-png.png" width="158" height="50">
                </div>
                        <!-- BLUE BLOC ESTHETIC ONE -->
                        <div class="bloc-esthetic-one-sing-offer">
                            <!-- BLUE BLOC ESTHETIC TWO -->
                            <div class="bloc-esthetic-two-sing-offer">
                                <!-- INFOs OFFER -->
                                <div class="offer-infos">
                                    <p class="title-offer">Front-end web application</p>
                                    <div class="single-infos-offer">
                                        <!-- CODE OFFER -->
                                        <div class="bloc-code">
                                            <p class="lblCode text-start">code :</p>
                                            <p class="valueCode text-start">22-11-00</p>
                                        </div>
                                        <!-- Yrs of experience -->
                                        <div class="bloc-info">
                                            <p class="lblYrs ">Years of Experience&nbsp;</p>
                                            <p class="valueYrs ">4 years&nbsp;</p>
                                        </div>
                                        <!-- DOMAIN -->
                                        <div class="bloc-info">
                                            <p class="lblDiplom" >diplome</p>
                                            <p class="valueDiplom" >IT&nbsp;</p>
                                        </div>
                                        <!-- SALARY -->
                                        <div class="bloc-info">
                                            <p class="lblSalary">Salary&nbsp;</p>
                                            <p class="valueSalary">3K /mon</p>
                                        </div>
                                        <!-- DESCRIPTION  -->
                                        <div  class="bloc-description">
                                            <p class="lblDescription">Description :</p>
                                            <p class="valueDescription"><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut a sapiente nulla vitae consequatur mollitia quae temporibus, illum quos dolore omnis accusamus. Accusantium facilis eligendi esse cupiditate odit dolore suscipit.<br></p>
                                        </div>
                                    </div>
                                </div>
                                <p class="lblCandidat">Candidats</p>
                                <!-- CONTAINER OF ALL OFFERS  -->
                                <div class="container-candidats">
                                    <!-- HEAD OF TABLE -->
                                    <div class="head-table">
                                        <p class="picture">Picture</p>
                                        <p class="lblFullName" >Full name&nbsp;</p>
                                        <p class="post"><strong>Post</strong><br></p>
                                        <p class="resume" >Resume</p>
                                        <p class="lblAccept" >Accept</p>
                                        <p class="lblReject">Reject</p>
                                    </div>
                                    <!-- LOAD CANDIDATS -->
                                    <div class="load-candidats">
                                        <!-- single-candidat -->
                                        <div class="single-candidat">
                                            <!-- IMAGE OF candidat -->
                                            <picture>
                                                <img class="rounded-circle" width="50" height="45" src="assets/img/portrait-women.png" >
                                            </picture>
                                            <!-- FULL NAME -->
                                            <p class="fullName">Hdhiri Mohamed Nassim</p>
                                            <!-- POST -->
                                            <p class="post">Developer</p>
                                            <!-- LINK TO GET RESUME -->
                                            <a class="linkResume"href="#">Get Resume</a>
                                            <!-- BUTTON ACCEPT  -->
                                            <button class="btn-accept btn btn-success" type="button" >Accept</button>
                                            <!-- BUTTON REJECT -->
                                            <button class="btn-reject btn btn-danger" type="button" >Reject</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </section>
        <script src="assets/js/dashOffer.js"></script>
    </body>
</html>
<?php
}else {
    header("location: index.php");
}

?>