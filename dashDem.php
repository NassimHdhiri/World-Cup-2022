<?php
session_start();


if(isset($_SESSION["username"])) {
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />

        <title>profile-user</title>
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
        <link rel="stylesheet" href="assets/css/dashDem.css" />
        <link rel="stylesheet" href="assets/css/dashDem2.css"/>
        <link rel="stylesheet" href="assets/css/cv.css"/>
        <link rel="stylesheet" href="assets/css/cv2.css"/>

        <!----===== Boxicons CSS ===== -->
        <link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet" />

        <title>Dashboard Sidebar Menu</title>
    </head>
    <body>
        <nav class="sidebar close">
            <header>
                <div class="image-text">
                    <span class="image">
                       <a href="./index.php"> <img src="assets/js/logo.png" alt="" /></a>
                    </span>

                    <div class="text logo-text">
                        <span class="name">Find Job</span>
                        <span class="profession">Together we grow</span>
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
                        <li class="nav-link">
                            <a href="#" class="btn-home">
                                <i class="bx bx-home-alt icon btn-side"></i>
                                <span class="text nav-text">Profile</span>
                            </a>
                        </li>

                        <li class="nav-link">
                            <a href="#">
                                <i class="bx bx-bar-chart-alt-2 icon btn-side"></i>
                                <!-- <i class='bx bx-save icon'></i> -->
                                <span class="text nav-text">Editor</span>
                            </a>
                        </li>

                        <li class="nav-link">
                            <a href="#">
                                <i class="bx bx-bell icon btn-side"></i>
                                <span class="text nav-text">Progress</span>
                            </a>
                        </li>

                        <li class="nav-link">
                            <a href="#">
                                <i class="bx bx-pie-chart-alt icon btn-side"></i>
                                <span class="text nav-text">Saved</span>
                            </a>
                        </li>

                        <li class="nav-link">
                            <a href="#">
                                <i class="bx bx-heart icon btn-side"></i>
                                <span class="text nav-text">CV</span>
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

        <!-- 1st bloc profile -->
        <section class="home active" style="position: absolute;">
            <!-- indetify of site -->
            <div class="identify-site">
                <a class="logo-side-profile-editor" href="#"><img src="assets/img/logo-web-png.png" width="158" height="50" /></a>
                <a class="link-img-logo" href="#"><img src="assets/img/icons8-utilisateur-64.png" width="46" height="46" /></a>
            </div>
            <div class="container-profile-editor">
                <div class="container-TPE-btnSave">
                    <h1>Dashboard Seeker&nbsp;</h1>
                    <a href="#"><img src="assets/img/floppy-disk.png" width="30" height="30" /></a>
                </div>
                <!-- FIRST COLUMN FROM THE LEFT -->
                <div class="profile-editor-1-column">
                    <img class="rounded-circle" src="assets/img/portrait-women.png" width="111" height="112" />
                    <p class="text-center" id="fullName">Fatima Ben Ahmed</p>
                    <p class="text-center" id="post">Lead - Front end developer</p>
                    <p class="text-center" id="price">$44/hr</p>
                    <p class="description">
                        Develop responsive HTML pages using bootstrap as per approved mock-ups, matching the exact look and feel and UI experience of the mock-ups. Motivated to combine the art of design with the art of programming.
                    </p>
                    <p class="skills-title">Skills :</p>
                    <div class="skills-items">
                        <p id="p-1">HTML5</p>
                        <p>CSS3</p>
                        <p>jQuery</p>
                        <p id="p-4">Bootstrap</p>
                        <p id="p-5">JavaScript</p>
                        <p id="p-6">AngularJS</p>
                        <p id="p-7">GitHub</p>
                    </div>
                </div>
                <!-- CENTRE -->
                <div class="profile-editor-2-column">
                    <!-- BX BASIC INFOS -->
                    <div class="bx-basic-infos">
                        <!-- here -->
                        <p class="bx-basic-infos-title">Basic information :</p>
                        <div class="blocs-infos">
                            <div class="age-display">
                                <p class="age-title">Age :</p>
                                <p class="age-value">28 Years</p>
                            </div>
                            <!-- BLOC Years of Experience -->
                            <div class="yrs-experience">
                                <p class="yrs-experience-title">Years of Experience&nbsp;</p>
                                <p class="yrs-experience-value">4 years&nbsp;</p>
                            </div>
                            <div class="email">
                                <p class="email-title">Email&nbsp;</p>
                                <p class="email-adr">fbenahmed@gmail.com</p>
                            </div>
                            <div class="location">
                                <p class="location-title">Location :</p>
                                <p class="location-value">Nabeul , Soliman</p>
                            </div>
                            <div class="availability">
                                <p class="availability-title">Availability&nbsp;</p>
                                <p class="availability-value">Full Time (40hrs/wk)&nbsp;</p>
                            </div>
                            <div class="phone-number">
                                <p class="phone-number-title">Phone Number :</p>
                                <p class="phone-number-value">+216 22 222 222</p>
                            </div>
                        </div>
                    </div>
                    <!-- CENTER BLOC IN BOTTOM -->
                    <div class="container-career active">
                        <!-- <div class="nav-btns-carrer" style="width: 563px;height: 42.4px;border-bottom: 2px solid var(--bs-gray-500) ;">
                                        <p class="btn-exp    btn-career"style="margin-top: 10px;margin-bottom: 0px;height: 31.4px;padding-top: 0px;padding-right: 50px;padding-left: 50px;margin-right: -16px;border-style: solid;border-top-style: none;border-right-style: none;border-bottom-style: none;border-left-style: none;font-family: Poppins, sans-serif;font-size: 15px;color: var(--bs-gray);">Experience</p>
                                        <p class="btn-edu    btn-career"style="margin-top: 10px;margin-bottom: 0px;height: 31.4px;padding-top: 0px;padding-right: 50px;padding-left: 50px;margin-right: -16px;border-style: none;border-right: 1px none var(--bs-gray-500);border-bottom-style: none;border-bottom-color: var(--bs-gray-500);border-left: 1px solid var(--bs-gray-500);font-family: Poppins, sans-serif;font-size: 15px;color: var(--bs-gray);">Education</p>
                                        <p class="btn-certif btn-career"style="margin-top: 10px;margin-bottom: 0px;height: 31.4px;padding-top: 0px;padding-right: 50px;padding-left: 50px;border-style: none;border-bottom-style: none;border-bottom-color: var(--bs-gray-500);border-left: 1px solid var(--bs-gray-500);font-family: Poppins, sans-serif;font-size: 15px;color: var(--bs-gray);">Certification</p>
                                    </div> -->
                        <div class="nav-btns-carrer">
                            <p
                                class="btn-exp btn-career-display"
                                onmouseover="this.style.color='#3a86ff'; this.style.fontWeight='bold'; this.style.borderBottom='2px solid black';"
                                onmouseout="this.style.color='var(--bs-gray)'; this.style.fontWeight='bold'; this.style.borderBottom='none';"
                            >
                                Experience
                            </p>
                            <p
                                class="btn-edu btn-career-display"
                                onmouseover="this.style.color='#3a86ff'; this.style.fontWeight='bold'; this.style.borderBottom='2px solid black';"
                                onmouseout="this.style.color='var(--bs-gray)'; this.style.fontWeight='bold'; this.style.borderBottom='none';"
                            >
                                Education
                            </p>
                            <p
                                class="btn-certif btn-career-display"
                                onmouseover="this.style.color='#3a86ff'; this.style.fontWeight='bold'; this.style.borderBottom='2px solid black';"
                                onmouseout="this.style.color='var(--bs-gray)'; this.style.fontWeight='bold'; this.style.borderBottom='none';"
                            >
                                Certification
                            </p>
                        </div>
                        <!-- BLOC DOM CAREER active career-->
                        <div class="box-singels-careers-exp display career-display" id="box-singels-careers-exp">
                            <div class="single-career-display">
                                <img src="assets/img/google.png" width="42" height="40" />
                                <p class="name-company">Google</p>
                                <p class="adr">Jan 2020 - Present | Tunis , Lac 2</p>
                                <p class="name-post">Lead - Front end developer&nbsp;</p>
                            </div>
                            <div class="single-career-display">
                                <img src="assets/img/google.png" width="42" height="40" />
                                <p class="name-company">Google</p>
                                <p class="adr">Jan 2020 - Present | Tunis , Lac 2</p>
                                <p class="name-post">Lead - Front end developer&nbsp;</p>
                            </div>
                            <div class="single-career-display">
                                <img src="assets/img/google.png" width="42" height="40" style="margin-top: 8px; margin-left: 14px;" />
                                <p class="name-company">Google</p>
                                <p class="adr">Jan 2020 - Present | Tunis , Lac 2</p>
                                <p class="name-post">Lead - Front end developer&nbsp;</p>
                            </div>
                        </div>
                    </div>
                    <!-- BLOC DOM EDUCATION -->
                    <div class="box-singels-careers-edu career-display" id="box-singels-careers-edu">
                        <div class="single-career-display">
                            <img src="assets/img/tennis.png" width="42" height="40" />
                            <p class="name-company">Google</p>
                            <p class="adr">Jan 2020 - Present | Tunis , Lac 2</p>
                            <p class="name-post">Lead - Front end developer&nbsp;</p>
                        </div>
                        <div class="single-career-display">
                            <img src="assets/img/tennis.png" width="42" height="40" />
                            <p class="name-company">Google</p>
                            <p class="adr">Jan 2020 - Present | Tunis , Lac 2</p>
                            <p class="name-post">Lead - Front end developer&nbsp;</p>
                        </div>
                        <div class="single-career-display">
                            <img src="assets/img/tennis.png" width="42" height="40" style="margin-top: 8px; margin-left: 14px;" />
                            <p class="name-company">Google</p>
                            <p class="adr">Jan 2020 - Present | Tunis , Lac 2</p>
                            <p class="name-post">Lead - Front end developer&nbsp;</p>
                        </div>
                    </div>
                    <!-- BLOC DOM CERTIF -->
                    <div class="box-singels-careers-certif career-display" id="box-singels-careers-certif">
                        <div class="single-career-display">
                            <img src="assets/img/chess.png" width="42" height="40" />
                            <p class="name-company">Google</p>
                            <p class="adr">Jan 2020 - Present | Tunis , Lac 2</p>
                            <p class="name-post">Lead - Front end developer&nbsp;</p>
                        </div>
                        <div class="single-career-display">
                            <img src="assets/img/chess.png" width="42" height="40" />
                            <p class="name-company">Google</p>
                            <p class="adr">Jan 2020 - Present | Tunis , Lac 2</p>
                            <p class="name-post">Lead - Front end developer&nbsp;</p>
                        </div>
                        <div class="single-career-display">
                            <img src="assets/img/chess.png" width="42" height="40" style="margin-top: 8px; margin-left: 14px;" />
                            <p class="name-company">Google</p>
                            <p class="adr">Jan 2020 - Present | Tunis , Lac 2</p>
                            <p class="name-post">Lead - Front end developer&nbsp;</p>
                        </div>
                    </div>
                    <!-- second -->
                </div>
                <!-- LAST COLUMN -->
                <div class="profile-editor-3-column">
                    <p class="video-title">That's My word</p>
                    <!-- VIDEO CODE  -->
                    <video
                        id="presVideo"
                        controls
                        src="assets/img/⚡🎵 Epic Electric Timer - 30 Seconds Countdown 🎵⚡.mp4"
                        style="
                            width: 262px;
                            height: 148px;
                            margin-top: 13px;
                            margin-left: 0px;
                            border-radius: 42px;
                            border-top-left-radius: 22px;
                            border-top-right-radius: 22px;
                            border-bottom-left-radius: 0px;
                            border-bottom-right-radius: 0px;
                        "
                    ></video>

                    <p class="interest-title">That's My Interested</p>
                    <!-- single interest -->
                    <div class="box-single-interests">
                        <div class="single-interest-display d-flex">
                            <div class="single-interest">
                                <img src="assets/img/like (1).png" width="25" height="24" />
                                <p class="interest-name">Team Working</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- PROFILE EDITOR -->
        <section class="home">
            <form name="frml-profile-editor" action="">
                <!-- indetify of site -->
                <div class="identify-site">
                    <a class="logo-side-profile-editor" href="#"><img src="assets/img/logo-web-png.png" width="158" height="50" /></a>
                    <a class="link-img-logo" href="#"><img src="assets/img/icons8-utilisateur-64.png" width="46" height="46" /></a>
                </div>
                <div class="container-profile-editor">
                    <div class="container-TPE-btnSave">
                        <h1>User Profile</h1>
                        <a href="#"><img src="assets/img/floppy-disk.png" width="30" height="30" /></a>
                    </div>
                    <!-- FIRST COLUMN FROM THE LEFT -->
                    <div class="profile-editor-1-column">
                        <img class="rounded-circle" src="assets/img/portrait-women.png" width="111" height="112" />
                        <input class="btn btn-primary btn-upload" type="file" name="" id="uploadPicture" value="Upload" onclick="setImgSrcFromInputFile('#uploadPicture','.profile-editor-1-column>img')" />
                        <!-- <button class="btn btn-primary" type="button" >Upload</button> -->
                        <input class="inpt-name" type="text" placeholder="Fatima Ben Ahmed" />
                        <input class="inpt-function" type="text" placeholder="Lead - Front end developer" />
                        <p class="price-editor">$<input type="number" placeholder="44" />/hr</p>
                        <textarea
                            class="profile-editor-description"
                            rows="5"
                            cols="8"
                            placeholder="Develop responsive HTML pages using bootstrap as per approved mock-ups, matching of the mock-ups. Motivated to combine the art of design with the art of programming."
                        ></textarea>
                        <p class="skills-title">Skills :</p>
                        <div class="container-skills">
                            <input class="skill" type="text" />
                            <input class="skill" type="text" />
                            <input class="skill" type="text" />
                            <input class="skill" type="text" />
                            <input class="skill" type="text" />
                            <input class="skill" type="text" />
                        </div>
                    </div>
                    <!-- CENTER COLUMN -->
                    <div class="profile-editor-2-column">
                        <!-- BX BASIC INFOS -->
                        <div class="bx-basic-infos">
                            <p class="bx-basic-infos-title">Basic information :</p>
                            <div class="blocs-infos">
                                <!-- bloc age -->
                                <div class="age">
                                    <p class="age-title">Age :</p>
                                    <div class="container-inptAge">
                                        <input type="number" placeholder="23" />
                                        <p>&nbsp;Years&nbsp;</p>
                                    </div>
                                </div>
                                <!-- BLOC Years of Experience -->
                                <div class="yrs-experience">
                                    <p class="yrs-experience-title">Years of Experience&nbsp;</p>
                                    <div class="container-inptExp">
                                        <input type="number" placeholder="3" />
                                        <p>&nbsp;Years</p>
                                    </div>
                                </div>
                                <!-- BLOC EMAIL -->
                                <div class="email" style="width: 193px;">
                                    <p class="email-title">Email&nbsp;</p>
                                    <input class="inptEmail" type="email" placeholder="fbenahmed@gmail.com" />
                                </div>
                                <!-- BLOC Location -->
                                <div class="location">
                                    <p class="location-title">Location :</p>
                                    <div class="container-location-infos">
                                        <input class="inptVille" type="text" placeholder="Soliman" />
                                        <p>&nbsp;,</p>
                                        <input class="inptGouv" type="text" placeholder="Nabeul" />
                                    </div>
                                </div>
                                <!-- BLOC Availability -->
                                <div class="availability">
                                    <p class="availability-title">Availability&nbsp;</p>
                                    <div class="availability-inptInfos">
                                        <input type="text" placeholder="Full Time" />
                                        <p class="d-flex" style="font-family: Poppins, sans-serif; margin-left: 0px; font-size: 12px; width: 14px; margin-top: 3px;">&nbsp;(&nbsp;</p>
                                        <input type="text" placeholder="40" />
                                        <p class="d-flex" style="font-family: Poppins, sans-serif; margin-left: 0px; font-size: 11px; width: 61px; margin-top: 3px;">&nbsp;hrs/wk)&nbsp;</p>
                                    </div>
                                </div>
                                <!-- BLOC Phone Number -->
                                <div class="phone-number">
                                    <p class="phone-number-title">Phone Number :</p>
                                    <div class="phone-number-inputs">
                                        <p>+216&nbsp;</p>
                                        <input type="tel" placeholder="12345678" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- CENTER BLOC IN BOTTOM -->
                        <div class="container-career">
                            <div class="nav-btns-carrer">
                                <p
                                    class="btn-exp btn-career"
                                    onmouseover="this.style.color='#3a86ff'; this.style.fontWeight='bold'; this.style.borderBottom='2px solid black';"
                                    onmouseout="this.style.color='var(--bs-gray)'; this.style.fontWeight='bold'; this.style.borderBottom='none';"
                                >
                                    Experience
                                </p>
                                <p
                                    class="btn-edu btn-career"
                                    onmouseover="this.style.color='#3a86ff'; this.style.fontWeight='bold'; this.style.borderBottom='2px solid black';"
                                    onmouseout="this.style.color='var(--bs-gray)'; this.style.fontWeight='bold'; this.style.borderBottom='none';"
                                >
                                    Education
                                </p>
                                <p
                                    class="btn-certif btn-career"
                                    onmouseover="this.style.color='#3a86ff'; this.style.fontWeight='bold'; this.style.borderBottom='2px solid black';"
                                    onmouseout="this.style.color='var(--bs-gray)'; this.style.fontWeight='bold'; this.style.borderBottom='none';"
                                >
                                    Certification
                                </p>
                            </div>
                            <!-- BLOC DOM CAREER -->
                            <div class="bx-career">
                                <!-- SINGLE CAREER EDITOR -->
                                <div class="exp-editor-display active career">
                                    <p class="title-subbx">Experience</p>
                                    <div class="single-career-editor-exp">
                                        <div class="left-col-exp">
                                            <img id="imgOne-exp" src="assets/img/unknown.png" width="36" height="36" />
                                            <input class="btn" type="file" id="uploadCompany" onclick="setImgSrcFromInputFile('#uploadCompany','.left-col-exp>img')" />
                                        </div>
                                        <input class="inputCompany" type="text" />
                                        <input class="inputPost" type="text" />
                                        <input class="inputDesc" type="text" />
                                    </div>
                                    <div class="btn-add-career">
                                        <!-- ADD BUTTON -->
                                        <button class="btn btn-primary addCareer" type="button">add</button>
                                    </div>
                                    <!-- SINGLE CAREER DISPLAY -->
                                    <div class="box-singels-careers-exp-edit">
                                        <!-- <div class="single-career-display">
                                        <img src="assets/img/google.png" width="34" height="34" />
                                        <p class="name-company">Google</p>
                                        <p class="adr">Jan 2020 - Present | Tunis , Lac 2</p>
                                        <p class="name-post">Lead - Front end developer&nbsp;</p>
                                    </div> -->
                                    </div>
                                </div>
                                <div class="edu-editor-display career">
                                    <p class="title-subbx">Education</p>
                                    <div class="single-career-editor-edu d-flex">
                                        <div class="left-col-edu">
                                            <img id="imgOne-edu" src="assets/img/unknown.png" width="36" height="36" />
                                            <input class="btn" type="file" id="uploadInstitue" onclick="setImgSrcFromInputFile('#uploadInstitue','.left-col-edu>img')" />
                                        </div>
                                        <input class="inputInstitue" type="text" />
                                        <input class="inputSpec" type="text" />
                                        <input class="inputDesc" type="text" />
                                    </div>
                                    <div class="btn-add-edu">
                                        <!-- ADD BUTTON -->
                                        <button class="btn btn-primary addEdu" type="button">add</button>
                                    </div>
                                    <!-- SINGLE CAREER DISPLAY -->
                                    <div class="box-singels-careers-edu-edit">
                                        <!-- <div class="single-career-display">
                                        <img src="assets/img/google.png" width="34" height="34" />
                                        <p class="name-company">Google</p>
                                        <p class="adr">Jan 2020 - Present | Tunis , Lac 2</p>
                                        <p class="name-post">Lead - Front end developer&nbsp;</p>
                                    </div> -->
                                    </div>
                                </div>

                                <div class="certif-editor-display career">
                                    <p class="title-subbx">Certification</p>
                                    <!-- SINGLE CERTIFICATION -->
                                    <div class="single-career-editor-certif d-flex">
                                        <div class="left-col-certif">
                                            <img id="imgOne-certif" src="assets/img/unknown.png" width="36" height="36" />
                                            <input class="btn" type="file" id="uploadCentre" onclick="setImgSrcFromInputFile('#uploadCentre','.left-col-certif>img')" />
                                        </div>
                                        <input class="inputCentre" type="text" />
                                        <input class="inputSpec" type="text" />
                                        <input class="inputDesc" type="text" />
                                    </div>
                                    <div class="btn-add-certif">
                                        <!-- ADD BUTTON -->
                                        <button class="btn btn-primary addCertif" type="button">add</button>
                                    </div>
                                    <!-- SINGLE CAREER DISPLAY -->
                                    <div class="box-singels-careers-certif-edit">
                                        <!-- <div class="single-career-display">
                                            <img src="assets/img/google.png" width="34" height="34" />
                                            <p class="name-company">Google</p>
                                            <p class="adr">Jan 2020 - Present | Tunis , Lac 2</p>
                                            <p class="name-post">Lead - Front end developer&nbsp;</p>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- LAST COLUMN -->
                    <div class="profile-editor-3-column">
                        <p class="video-title">That's My word</p>
                        <!-- VIDEO CODE  -->
                        <video
                            id="presVideo"
                            controls
                            src="⚡🎵 Epic Electric Timer - 30 Seconds Countdown 🎵⚡.mp4"
                            style="
                                width: 262px;
                                height: 148px;
                                margin-top: 13px;
                                margin-left: 0px;
                                border-radius: 42px;
                                border-top-left-radius: 22px;
                                border-top-right-radius: 22px;
                                border-bottom-left-radius: 0px;
                                border-bottom-right-radius: 0px;
                            "
                        ></video>

                        <input id="uploadVideo" onclick="setImgSrcFromInputFileMP4('uploadVideo', 'presVideo')" class="btn btn-primary btn-upload" type="file" name="" value="Upload" />
                        <p class="interest-title">That's My Interested</p>
                        <!-- single interest editor -->
                        <div class="single-interest-editor">
                            <div class="interest">
                                <img src="assets/img/like%20(1).png" width="25" height="24" />
                                <input type="text" placeholder="My .........." />
                            </div>
                            <div class="btn-block">
                                <button class="btn btn-primary btn-add-int" type="button">add</button>
                            </div>
                        </div>
                        <!-- single interest -->
                        <div class="box-single-interests-edit">
                            <!-- <div class="single-interest-display">
                            <div class="single-interest d-flex  " >
                                <img src="assets/img/like%20(1).png" width="25" height="24" />
                                <p class="interest-name">Team Working</p>
                            </div>
                        </div> -->
                        </div>
                    </div>
                </div>
            </form>
        </section>

        <section class="home home2" style=" margin-left: 1%;width: 94%;margin-bottom: 27px;">
            <!-- BLOCK APPLIED -->
            <div class="col-md-4 col-xxl-10" style="width: 87%; height: 722px;">
                <div class="d-flex d-xxl-flex justify-content-around align-items-xxl-center" style="height: 65.8px; width: 1308.4px; border-style: none; margin-left: -60px;">
                    <img src="assets/img/logo-web-png.png" width="158" height="50" style="margin-top: 9px; margin-left: 328px;" />
                    <img src="assets/img/icons8-utilisateur-64.png" width="46" height="46" style="margin-right: -197px; margin-top: -1px;" />
                </div>
                <div class="d-flex justify-content-center flex-wrap" style="height: 699.8px; width: 1345.4px; background: rgba(219, 234, 255, 0.39); border-style: none; margin-left: -60px;">
                    <div class="d-flex" style="height: 77.8px; width: 96%; margin-top: 18px; margin-left: -10px; margin-bottom: -72px; background: rgba(241, 243, 246, 0); border-style: none;">
                        <h1 style="text-align: left; padding-left: 67px; padding-top: 0px; font-size: 32px; font-family: Poppins, sans-serif; color: var(--bs-gray); width: 1037.06px; margin-top: 6.825px;">Applied Jobs</h1>
                    </div>
                    <div
                        class="d-flex justify-content-center align-items-xxl-center"
                        style="height: 572.8px; margin-left:20%;width: 79%; margin-top: 31px; background: #ffffff; border-radius: 20px; box-shadow: -1px 0px 4px 1px rgb(147, 186, 225); border-style: none; margin-bottom: 20px;"
                    >
                        <div class="col-md-6 col-xxl-11 d-flex justify-content-evenly flex-wrap" style="height: 564px; width: 96%; margin-left: 10px; margin-top: 14px;">
                            <div style="width: 288px; height: 267.8px; border-radius: 22px; border-style: solid; border-color: var(--bs-gray-300); background: var(--bs-gray-100);">
                                <div class="d-flex justify-content-between" style="height: 52px; width: 298.2px; margin-bottom: 5px; margin-top: 0px; border-width: 1px; border-color: var(--bs-blue);">
                                    <img style="margin-left: 16px; margin-top: 16px;" width="33" height="31" src="assets/img/google.png" />
                                    <p style="margin-top: 17px; margin-right: 26px; font-family: Poppins, sans-serif; font-weight: bold;">3 days</p>
                                </div>
                                <div class="justify-content-between" style="height: 119px; width: 298.2px; border-width: 1px; border-color: var(--bs-blue);">
                                    <h2 style="font-size: 22px; text-align: left; margin-left: 17px;">UI/UX Designer</h2>
                                    <p class="text-start" style="width: 274.4px; margin-right: 20px; margin-left: 17px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos libero vero aliquid est&nbsp;</p>
                                </div>
                                <div class="d-flex justify-content-between" style="height: 52px; width: 298.2px; margin-bottom: 7px; margin-top: -1px; border-width: 1px; border-color: var(--bs-blue);">
                                    <p
                                        style="
                                            border-radius: 6px;
                                            background: rgba(47, 143, 255, 0.13);
                                            font-size: 12px;
                                            padding: 5px;
                                            padding-right: 7px;
                                            padding-left: 7px;
                                            font-family: Andika, sans-serif;
                                            color: var(--bs-primary);
                                            border-width: 1px;
                                            margin-left: 14px;
                                            height: 31px;
                                            margin-bottom: 5px;
                                        "
                                    >
                                        Full Time&nbsp;
                                    </p>
                                    <p
                                        style="
                                            border-radius: 6px;
                                            background: rgba(47, 143, 255, 0.13);
                                            font-size: 12px;
                                            padding: 5px;
                                            padding-right: 7px;
                                            padding-left: 7px;
                                            font-family: Andika, sans-serif;
                                            color: var(--bs-primary);
                                            border-width: 1px;
                                            height: 31px;
                                            margin-bottom: 5px;
                                        "
                                    >
                                        Min 1 Year&nbsp;
                                    </p>
                                    <p
                                        style="
                                            border-radius: 6px;
                                            background: rgba(47, 143, 255, 0.13);
                                            font-size: 12px;
                                            padding: 5px;
                                            padding-right: 7px;
                                            padding-left: 7px;
                                            font-family: Andika, sans-serif;
                                            color: var(--bs-primary);
                                            border-width: 1px;
                                            margin-right: 27px;
                                            height: 32px;
                                            margin-bottom: 5px;
                                        "
                                    >
                                        Junior Level&nbsp;
                                    </p>
                                </div>
                                <div class="d-flex justify-content-around" style="height: 52px; width: 298.2px; margin-bottom: 15px; margin-top: -13px; border-width: 1px; border-color: var(--bs-blue);">
                                    <button class="btn btn-success" type="button" style="font-size: 13px; width: 256.4125px; height: 33px; margin-top: -6px; margin-left: -15px; font-family: Poppins, sans-serif;">Accepted</button>
                                </div>
                            </div>
                            <div style="width: 288px; height: 267.8px; border-radius: 22px; border-style: solid; border-color: var(--bs-gray-300); background: var(--bs-gray-100);">
                                <div class="d-flex justify-content-between" style="height: 52px; width: 298.2px; margin-bottom: 5px; margin-top: 0px; border-width: 1px; border-color: var(--bs-blue);">
                                    <img style="margin-left: 16px; margin-top: 16px;" width="33" height="31" src="assets/img/google.png" />
                                    <p style="margin-top: 17px; margin-right: 26px; font-family: Poppins, sans-serif; font-weight: bold;">3 days</p>
                                </div>
                                <div class="justify-content-between" style="height: 119px; width: 298.2px; border-width: 1px; border-color: var(--bs-blue);">
                                    <h2 style="font-size: 22px; text-align: left; margin-left: 17px;">UI/UX Designer</h2>
                                    <p class="text-start" style="width: 274.4px; margin-right: 20px; margin-left: 17px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos libero vero aliquid est&nbsp;</p>
                                </div>
                                <div class="d-flex justify-content-between" style="height: 52px; width: 298.2px; margin-bottom: 7px; margin-top: -1px; border-width: 1px; border-color: var(--bs-blue);">
                                    <p
                                        style="
                                            border-radius: 6px;
                                            background: rgba(47, 143, 255, 0.13);
                                            font-size: 12px;
                                            padding: 5px;
                                            padding-right: 7px;
                                            padding-left: 7px;
                                            font-family: Andika, sans-serif;
                                            color: var(--bs-primary);
                                            border-width: 1px;
                                            margin-left: 14px;
                                            height: 31px;
                                            margin-bottom: 5px;
                                        "
                                    >
                                        Full Time&nbsp;
                                    </p>
                                    <p
                                        style="
                                            border-radius: 6px;
                                            background: rgba(47, 143, 255, 0.13);
                                            font-size: 12px;
                                            padding: 5px;
                                            padding-right: 7px;
                                            padding-left: 7px;
                                            font-family: Andika, sans-serif;
                                            color: var(--bs-primary);
                                            border-width: 1px;
                                            height: 31px;
                                            margin-bottom: 5px;
                                        "
                                    >
                                        Min 1 Year&nbsp;
                                    </p>
                                    <p
                                        style="
                                            border-radius: 6px;
                                            background: rgba(47, 143, 255, 0.13);
                                            font-size: 12px;
                                            padding: 5px;
                                            padding-right: 7px;
                                            padding-left: 7px;
                                            font-family: Andika, sans-serif;
                                            color: var(--bs-primary);
                                            border-width: 1px;
                                            margin-right: 27px;
                                            height: 32px;
                                            margin-bottom: 5px;
                                        "
                                    >
                                        Junior Level&nbsp;
                                    </p>
                                </div>
                                <div class="d-flex justify-content-around" style="height: 52px; width: 298.2px; margin-bottom: 15px; margin-top: -13px; border-width: 1px; border-color: var(--bs-blue);">
                                    <button class="btn btn-warning" type="button" style="font-size: 13px; width: 256.4125px; height: 33px; margin-top: -6px; margin-left: -15px; font-family: Poppins, sans-serif;">In progress</button>
                                </div>
                            </div>
                            <div style="width: 288px; height: 267.8px; border-radius: 22px; border-style: solid; border-color: var(--bs-gray-300); background: var(--bs-gray-100);">
                                <div class="d-flex justify-content-between" style="height: 52px; width: 298.2px; margin-bottom: 5px; margin-top: 0px; border-width: 1px; border-color: var(--bs-blue);">
                                    <img style="margin-left: 16px; margin-top: 16px;" width="33" height="31" src="assets/img/google.png" />
                                    <p style="margin-top: 17px; margin-right: 26px; font-family: Poppins, sans-serif; font-weight: bold;">3 days</p>
                                </div>
                                <div class="justify-content-between" style="height: 119px; width: 298.2px; border-width: 1px; border-color: var(--bs-blue);">
                                    <h2 style="font-size: 22px; text-align: left; margin-left: 17px;">UI/UX Designer</h2>
                                    <p class="text-start" style="width: 274.4px; margin-right: 20px; margin-left: 17px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos libero vero aliquid est&nbsp;</p>
                                </div>
                                <div class="d-flex justify-content-between" style="height: 52px; width: 298.2px; margin-bottom: 7px; margin-top: -1px; border-width: 1px; border-color: var(--bs-blue);">
                                    <p
                                        style="
                                            border-radius: 6px;
                                            background: rgba(47, 143, 255, 0.13);
                                            font-size: 12px;
                                            padding: 5px;
                                            padding-right: 7px;
                                            padding-left: 7px;
                                            font-family: Andika, sans-serif;
                                            color: var(--bs-primary);
                                            border-width: 1px;
                                            margin-left: 14px;
                                            height: 31px;
                                            margin-bottom: 5px;
                                        "
                                    >
                                        Full Time&nbsp;
                                    </p>
                                    <p
                                        style="
                                            border-radius: 6px;
                                            background: rgba(47, 143, 255, 0.13);
                                            font-size: 12px;
                                            padding: 5px;
                                            padding-right: 7px;
                                            padding-left: 7px;
                                            font-family: Andika, sans-serif;
                                            color: var(--bs-primary);
                                            border-width: 1px;
                                            height: 31px;
                                            margin-bottom: 5px;
                                        "
                                    >
                                        Min 1 Year&nbsp;
                                    </p>
                                    <p
                                        style="
                                            border-radius: 6px;
                                            background: rgba(47, 143, 255, 0.13);
                                            font-size: 12px;
                                            padding: 5px;
                                            padding-right: 7px;
                                            padding-left: 7px;
                                            font-family: Andika, sans-serif;
                                            color: var(--bs-primary);
                                            border-width: 1px;
                                            margin-right: 27px;
                                            height: 32px;
                                            margin-bottom: 5px;
                                        "
                                    >
                                        Junior Level&nbsp;
                                    </p>
                                </div>
                                <div class="d-flex justify-content-around" style="height: 52px; width: 298.2px; margin-bottom: 15px; margin-top: -13px; border-width: 1px; border-color: var(--bs-blue);">
                                    <button class="btn btn-danger" type="button" style="font-size: 13px; width: 256.4125px; height: 33px; margin-top: -6px; margin-left: -15px; font-family: Poppins, sans-serif;">Rejected</button>
                                </div>
                            </div>
                            <div style="width: 288px; height: 267.8px; border-radius: 22px; border-style: solid; border-color: var(--bs-gray-300); background: var(--bs-gray-100);">
                                <div class="d-flex justify-content-between" style="height: 52px; width: 298.2px; margin-bottom: 5px; margin-top: 0px; border-width: 1px; border-color: var(--bs-blue);">
                                    <img style="margin-left: 16px; margin-top: 16px;" width="33" height="31" src="assets/img/google.png" />
                                    <p style="margin-top: 17px; margin-right: 26px; font-family: Poppins, sans-serif; font-weight: bold;">3 days</p>
                                </div>
                                <div class="justify-content-between" style="height: 119px; width: 298.2px; border-width: 1px; border-color: var(--bs-blue);">
                                    <h2 style="font-size: 22px; text-align: left; margin-left: 17px;">UI/UX Designer</h2>
                                    <p class="text-start" style="width: 274.4px; margin-right: 20px; margin-left: 17px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos libero vero aliquid est&nbsp;</p>
                                </div>
                                <div class="d-flex justify-content-between" style="height: 52px; width: 298.2px; margin-bottom: 7px; margin-top: -1px; border-width: 1px; border-color: var(--bs-blue);">
                                    <p
                                        style="
                                            border-radius: 6px;
                                            background: rgba(47, 143, 255, 0.13);
                                            font-size: 12px;
                                            padding: 5px;
                                            padding-right: 7px;
                                            padding-left: 7px;
                                            font-family: Andika, sans-serif;
                                            color: var(--bs-primary);
                                            border-width: 1px;
                                            margin-left: 14px;
                                            height: 31px;
                                            margin-bottom: 5px;
                                        "
                                    >
                                        Full Time&nbsp;
                                    </p>
                                    <p
                                        style="
                                            border-radius: 6px;
                                            background: rgba(47, 143, 255, 0.13);
                                            font-size: 12px;
                                            padding: 5px;
                                            padding-right: 7px;
                                            padding-left: 7px;
                                            font-family: Andika, sans-serif;
                                            color: var(--bs-primary);
                                            border-width: 1px;
                                            height: 31px;
                                            margin-bottom: 5px;
                                        "
                                    >
                                        Min 1 Year&nbsp;
                                    </p>
                                    <p
                                        style="
                                            border-radius: 6px;
                                            background: rgba(47, 143, 255, 0.13);
                                            font-size: 12px;
                                            padding: 5px;
                                            padding-right: 7px;
                                            padding-left: 7px;
                                            font-family: Andika, sans-serif;
                                            color: var(--bs-primary);
                                            border-width: 1px;
                                            margin-right: 27px;
                                            height: 32px;
                                            margin-bottom: 5px;
                                        "
                                    >
                                        Junior Level&nbsp;
                                    </p>
                                </div>
                                <div class="d-flex justify-content-around" style="height: 52px; width: 298.2px; margin-bottom: 15px; margin-top: -13px; border-width: 1px; border-color: var(--bs-blue);">
                                    <button class="btn btn-warning" type="button" style="font-size: 13px; width: 256.4125px; height: 33px; margin-top: -6px; margin-left: -15px; font-family: Poppins, sans-serif;">In progress</button>
                                </div>
                            </div>
                            <div style="width: 288px; height: 267.8px; border-radius: 22px; border-style: solid; border-color: var(--bs-gray-300); background: var(--bs-gray-100);">
                                <div class="d-flex justify-content-between" style="height: 52px; width: 298.2px; margin-bottom: 5px; margin-top: 0px; border-width: 1px; border-color: var(--bs-blue);">
                                    <img style="margin-left: 16px; margin-top: 16px;" width="33" height="31" src="assets/img/google.png" />
                                    <p style="margin-top: 17px; margin-right: 26px; font-family: Poppins, sans-serif; font-weight: bold;">3 days</p>
                                </div>
                                <div class="justify-content-between" style="height: 119px; width: 298.2px; border-width: 1px; border-color: var(--bs-blue);">
                                    <h2 style="font-size: 22px; text-align: left; margin-left: 17px;">UI/UX Designer</h2>
                                    <p class="text-start" style="width: 274.4px; margin-right: 20px; margin-left: 17px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos libero vero aliquid est&nbsp;</p>
                                </div>
                                <div class="d-flex justify-content-between" style="height: 52px; width: 298.2px; margin-bottom: 7px; margin-top: -1px; border-width: 1px; border-color: var(--bs-blue);">
                                    <p
                                        style="
                                            border-radius: 6px;
                                            background: rgba(47, 143, 255, 0.13);
                                            font-size: 12px;
                                            padding: 5px;
                                            padding-right: 7px;
                                            padding-left: 7px;
                                            font-family: Andika, sans-serif;
                                            color: var(--bs-primary);
                                            border-width: 1px;
                                            margin-left: 14px;
                                            height: 31px;
                                            margin-bottom: 5px;
                                        "
                                    >
                                        Full Time&nbsp;
                                    </p>
                                    <p
                                        style="
                                            border-radius: 6px;
                                            background: rgba(47, 143, 255, 0.13);
                                            font-size: 12px;
                                            padding: 5px;
                                            padding-right: 7px;
                                            padding-left: 7px;
                                            font-family: Andika, sans-serif;
                                            color: var(--bs-primary);
                                            border-width: 1px;
                                            height: 31px;
                                            margin-bottom: 5px;
                                        "
                                    >
                                        Min 1 Year&nbsp;
                                    </p>
                                    <p
                                        style="
                                            border-radius: 6px;
                                            background: rgba(47, 143, 255, 0.13);
                                            font-size: 12px;
                                            padding: 5px;
                                            padding-right: 7px;
                                            padding-left: 7px;
                                            font-family: Andika, sans-serif;
                                            color: var(--bs-primary);
                                            border-width: 1px;
                                            margin-right: 27px;
                                            height: 32px;
                                            margin-bottom: 5px;
                                        "
                                    >
                                        Junior Level&nbsp;
                                    </p>
                                </div>
                                <div class="d-flex justify-content-around" style="height: 52px; width: 298.2px; margin-bottom: 15px; margin-top: -13px; border-width: 1px; border-color: var(--bs-blue);">
                                    <button class="btn btn-success" type="button" style="font-size: 13px; width: 256.4125px; height: 33px; margin-top: -6px; margin-left: -15px; font-family: Poppins, sans-serif;">Accepted</button>
                                </div>
                            </div>
                            <div style="width: 288px; height: 267.8px; border-radius: 22px; border-style: solid; border-color: var(--bs-gray-300); background: var(--bs-gray-100);">
                                <div class="d-flex justify-content-between" style="height: 52px; width: 298.2px; margin-bottom: 5px; margin-top: 0px; border-width: 1px; border-color: var(--bs-blue);">
                                    <img style="margin-left: 16px; margin-top: 16px;" width="33" height="31" src="assets/img/google.png" />
                                    <p style="margin-top: 17px; margin-right: 26px; font-family: Poppins, sans-serif; font-weight: bold;">3 days</p>
                                </div>
                                <div class="justify-content-between" style="height: 119px; width: 298.2px; border-width: 1px; border-color: var(--bs-blue);">
                                    <h2 style="font-size: 22px; text-align: left; margin-left: 17px;">UI/UX Designer</h2>
                                    <p class="text-start" style="width: 274.4px; margin-right: 20px; margin-left: 17px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos libero vero aliquid est&nbsp;</p>
                                </div>
                                <div class="d-flex justify-content-between" style="height: 52px; width: 298.2px; margin-bottom: 7px; margin-top: -1px; border-width: 1px; border-color: var(--bs-blue);">
                                    <p
                                        style="
                                            border-radius: 6px;
                                            background: rgba(47, 143, 255, 0.13);
                                            font-size: 12px;
                                            padding: 5px;
                                            padding-right: 7px;
                                            padding-left: 7px;
                                            font-family: Andika, sans-serif;
                                            color: var(--bs-primary);
                                            border-width: 1px;
                                            margin-left: 14px;
                                            height: 31px;
                                            margin-bottom: 5px;
                                        "
                                    >
                                        Full Time&nbsp;
                                    </p>
                                    <p
                                        style="
                                            border-radius: 6px;
                                            background: rgba(47, 143, 255, 0.13);
                                            font-size: 12px;
                                            padding: 5px;
                                            padding-right: 7px;
                                            padding-left: 7px;
                                            font-family: Andika, sans-serif;
                                            color: var(--bs-primary);
                                            border-width: 1px;
                                            height: 31px;
                                            margin-bottom: 5px;
                                        "
                                    >
                                        Min 1 Year&nbsp;
                                    </p>
                                    <p
                                        style="
                                            border-radius: 6px;
                                            background: rgba(47, 143, 255, 0.13);
                                            font-size: 12px;
                                            padding: 5px;
                                            padding-right: 7px;
                                            padding-left: 7px;
                                            font-family: Andika, sans-serif;
                                            color: var(--bs-primary);
                                            border-width: 1px;
                                            margin-right: 27px;
                                            height: 32px;
                                            margin-bottom: 5px;
                                        "
                                    >
                                        Junior Level&nbsp;
                                    </p>
                                </div>
                                <div class="d-flex justify-content-around" style="height: 52px; width: 298.2px; margin-bottom: 15px; margin-top: -13px; border-width: 1px; border-color: var(--bs-blue);">
                                    <button class="btn btn-danger" type="button" style="font-size: 13px; width: 256.4125px; height: 33px; margin-top: -6px; margin-left: -15px; font-family: Poppins, sans-serif;">Rejected</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- SAVED JOBS -->
        <section class="home saved-jobs" style=" margin-left: 1%;width: 94%;margin-bottom: 27px;">
            <div class="col-md-4 col-xxl-10" style="width: 87%; height: 722px;">
                <div class="d-flex d-xxl-flex justify-content-around align-items-xxl-center" style="height: 65.8px; width: 1308.4px; border-style: none;">
                    <img src="assets/img/logo-web-png.png" width="158" height="50" style="margin-top: 9px; margin-left: 328px;" />
                    <img src="assets/img/icons8-utilisateur-64.png" width="46" height="46" style="margin-right: -197px; margin-top: -1px;" />
                </div>
                <div class="d-flex justify-content-around flex-wrap align-items-xxl-start" style="height: 675.8px; width: 1308.4px; background: rgba(219, 234, 255, 0.39); border-style: none; margin-left: 30px;">
                    <div class="d-flex" style="height: 77.8px; width: 96%; margin-top: 18px; margin-left: -10px; margin-bottom: -72px; background: rgba(241, 243, 246, 0); border-style: none;">
                        <h1 style="text-align: left; padding-left: 0px; padding-top: 0px; font-size: 32px; font-family: Poppins, sans-serif; color: var(--bs-gray); width: 1037.06px; margin-top: 8.1125px;">Saved Jobs</h1>
                    </div>
                    <div
                        class="d-flex justify-content-center flex-wrap align-items-xxl-center"
                        style="height: 593.8px; width: 78%; margin-top: 59px; background: #ffffff; border-radius: 20px; box-shadow: -1px 0px 4px 1px rgb(147, 186, 225); border-style: none;"
                    >
                        <div class="col-md-6 col-xxl-11 d-flex justify-content-evenly flex-wrap align-items-xxl-center" style="height: 564px; width: 96%; margin-left: 10px; margin-top: 14px;">
                            <div style="width: 288px; height: 267.8px; border-radius: 22px; border-style: solid; border-color: var(--bs-gray-300); background: var(--bs-gray-100);">
                                <div class="d-flex justify-content-between" style="height: 52px; width: 298.2px; margin-bottom: 5px; margin-top: 0px; border-width: 1px; border-color: var(--bs-blue);">
                                    <img style="margin-left: 16px; margin-top: 16px;" width="33" height="31" src="assets/img/google.png" />
                                    <img style="margin-left: 27px; margin-top: 20px; color: var(--bs-secondary); margin-right: 27px;" width="23" height="22" src="assets/img/bookmark.png" />
                                </div>
                                <div class="justify-content-between" style="height: 119px; width: 298.2px; border-width: 1px; border-color: var(--bs-blue);">
                                    <h2 style="font-size: 22px; text-align: left; margin-left: 17px;">UI/UX Designer</h2>
                                    <p class="text-start" style="width: 274.4px; margin-right: 20px; margin-left: 17px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos libero vero aliquid est&nbsp;</p>
                                </div>
                                <div class="d-flex justify-content-between" style="height: 52px; width: 298.2px; margin-bottom: 7px; margin-top: -1px; border-width: 1px; border-color: var(--bs-blue);">
                                    <p
                                        style="
                                            border-radius: 6px;
                                            background: rgba(47, 143, 255, 0.13);
                                            font-size: 12px;
                                            padding: 5px;
                                            padding-right: 7px;
                                            padding-left: 7px;
                                            font-family: Andika, sans-serif;
                                            color: var(--bs-primary);
                                            border-width: 1px;
                                            margin-left: 14px;
                                            height: 31px;
                                            margin-bottom: 5px;
                                        "
                                    >
                                        Full Time&nbsp;
                                    </p>
                                    <p
                                        style="
                                            border-radius: 6px;
                                            background: rgba(47, 143, 255, 0.13);
                                            font-size: 12px;
                                            padding: 5px;
                                            padding-right: 7px;
                                            padding-left: 7px;
                                            font-family: Andika, sans-serif;
                                            color: var(--bs-primary);
                                            border-width: 1px;
                                            height: 31px;
                                            margin-bottom: 5px;
                                        "
                                    >
                                        Min 1 Year&nbsp;
                                    </p>
                                    <p
                                        style="
                                            border-radius: 6px;
                                            background: rgba(47, 143, 255, 0.13);
                                            font-size: 12px;
                                            padding: 5px;
                                            padding-right: 7px;
                                            padding-left: 7px;
                                            font-family: Andika, sans-serif;
                                            color: var(--bs-primary);
                                            border-width: 1px;
                                            margin-right: 27px;
                                            height: 32px;
                                            margin-bottom: 5px;
                                        "
                                    >
                                        Junior Level&nbsp;
                                    </p>
                                </div>
                                <div class="d-flex justify-content-around" style="height: 52px; width: 298.2px; margin-bottom: 15px; margin-top: -13px; border-width: 1px; border-color: var(--bs-blue);">
                                    <button class="btn btn-primary" type="button" style="width: 113.5px; height: 29px; padding-top: 3px; font-size: 13px; margin-left: 26px;">Apply Now</button>
                                    <button class="btn btn-secondary" type="button" style="width: 113.5px; height: 29px; padding-top: 3px; font-size: 13px; margin-right: 29px;">See Details</button>
                                </div>
                            </div>
                            <div style="width: 288px; height: 267.8px; border-radius: 22px; border-style: solid; border-color: var(--bs-gray-300); background: var(--bs-gray-100);">
                                <div class="d-flex justify-content-between" style="height: 52px; width: 298.2px; margin-bottom: 5px; margin-top: 0px; border-width: 1px; border-color: var(--bs-blue);">
                                    <img style="margin-left: 16px; margin-top: 16px;" width="33" height="31" src="assets/img/google.png" />
                                    <img style="margin-left: 27px; margin-top: 20px; color: var(--bs-secondary); margin-right: 27px;" width="23" height="22" src="assets/img/bookmark.png" />
                                </div>
                                <div class="justify-content-between" style="height: 119px; width: 298.2px; border-width: 1px; border-color: var(--bs-blue);">
                                    <h2 style="font-size: 22px; text-align: left; margin-left: 17px;">UI/UX Designer</h2>
                                    <p class="text-start" style="width: 274.4px; margin-right: 20px; margin-left: 17px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos libero vero aliquid est&nbsp;</p>
                                </div>
                                <div class="d-flex justify-content-between" style="height: 52px; width: 298.2px; margin-bottom: 7px; margin-top: -1px; border-width: 1px; border-color: var(--bs-blue);">
                                    <p
                                        style="
                                            border-radius: 6px;
                                            background: rgba(47, 143, 255, 0.13);
                                            font-size: 12px;
                                            padding: 5px;
                                            padding-right: 7px;
                                            padding-left: 7px;
                                            font-family: Andika, sans-serif;
                                            color: var(--bs-primary);
                                            border-width: 1px;
                                            margin-left: 14px;
                                            height: 31px;
                                            margin-bottom: 5px;
                                        "
                                    >
                                        Full Time&nbsp;
                                    </p>
                                    <p
                                        style="
                                            border-radius: 6px;
                                            background: rgba(47, 143, 255, 0.13);
                                            font-size: 12px;
                                            padding: 5px;
                                            padding-right: 7px;
                                            padding-left: 7px;
                                            font-family: Andika, sans-serif;
                                            color: var(--bs-primary);
                                            border-width: 1px;
                                            height: 31px;
                                            margin-bottom: 5px;
                                        "
                                    >
                                        Min 1 Year&nbsp;
                                    </p>
                                    <p
                                        style="
                                            border-radius: 6px;
                                            background: rgba(47, 143, 255, 0.13);
                                            font-size: 12px;
                                            padding: 5px;
                                            padding-right: 7px;
                                            padding-left: 7px;
                                            font-family: Andika, sans-serif;
                                            color: var(--bs-primary);
                                            border-width: 1px;
                                            margin-right: 27px;
                                            height: 32px;
                                            margin-bottom: 5px;
                                        "
                                    >
                                        Junior Level&nbsp;
                                    </p>
                                </div>
                                <div class="d-flex justify-content-around" style="height: 52px; width: 298.2px; margin-bottom: 15px; margin-top: -13px; border-width: 1px; border-color: var(--bs-blue);">
                                    <button class="btn btn-primary" type="button" style="width: 113.5px; height: 29px; padding-top: 3px; font-size: 13px; margin-left: 26px;">Apply Now</button>
                                    <button class="btn btn-secondary" type="button" style="width: 113.5px; height: 29px; padding-top: 3px; font-size: 13px; margin-right: 29px;">See Details</button>
                                </div>
                            </div>
                            <div style="width: 288px; height: 267.8px; border-radius: 22px; border-style: solid; border-color: var(--bs-gray-300); background: var(--bs-gray-100);">
                                <div class="d-flex justify-content-between" style="height: 52px; width: 298.2px; margin-bottom: 5px; margin-top: 0px; border-width: 1px; border-color: var(--bs-blue);">
                                    <img style="margin-left: 16px; margin-top: 16px;" width="33" height="31" src="assets/img/google.png" />
                                    <img style="margin-left: 27px; margin-top: 20px; color: var(--bs-secondary); margin-right: 27px;" width="23" height="22" src="assets/img/bookmark.png" />
                                </div>
                                <div class="justify-content-between" style="height: 119px; width: 298.2px; border-width: 1px; border-color: var(--bs-blue);">
                                    <h2 style="font-size: 22px; text-align: left; margin-left: 17px;">UI/UX Designer</h2>
                                    <p class="text-start" style="width: 274.4px; margin-right: 20px; margin-left: 17px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos libero vero aliquid est&nbsp;</p>
                                </div>
                                <div class="d-flex justify-content-between" style="height: 52px; width: 298.2px; margin-bottom: 7px; margin-top: -1px; border-width: 1px; border-color: var(--bs-blue);">
                                    <p
                                        style="
                                            border-radius: 6px;
                                            background: rgba(47, 143, 255, 0.13);
                                            font-size: 12px;
                                            padding: 5px;
                                            padding-right: 7px;
                                            padding-left: 7px;
                                            font-family: Andika, sans-serif;
                                            color: var(--bs-primary);
                                            border-width: 1px;
                                            margin-left: 14px;
                                            height: 31px;
                                            margin-bottom: 5px;
                                        "
                                    >
                                        Full Time&nbsp;
                                    </p>
                                    <p
                                        style="
                                            border-radius: 6px;
                                            background: rgba(47, 143, 255, 0.13);
                                            font-size: 12px;
                                            padding: 5px;
                                            padding-right: 7px;
                                            padding-left: 7px;
                                            font-family: Andika, sans-serif;
                                            color: var(--bs-primary);
                                            border-width: 1px;
                                            height: 31px;
                                            margin-bottom: 5px;
                                        "
                                    >
                                        Min 1 Year&nbsp;
                                    </p>
                                    <p
                                        style="
                                            border-radius: 6px;
                                            background: rgba(47, 143, 255, 0.13);
                                            font-size: 12px;
                                            padding: 5px;
                                            padding-right: 7px;
                                            padding-left: 7px;
                                            font-family: Andika, sans-serif;
                                            color: var(--bs-primary);
                                            border-width: 1px;
                                            margin-right: 27px;
                                            height: 32px;
                                            margin-bottom: 5px;
                                        "
                                    >
                                        Junior Level&nbsp;
                                    </p>
                                </div>
                                <div class="d-flex justify-content-around" style="height: 52px; width: 298.2px; margin-bottom: 15px; margin-top: -13px; border-width: 1px; border-color: var(--bs-blue);">
                                    <button class="btn btn-primary" type="button" style="width: 113.5px; height: 29px; padding-top: 3px; font-size: 13px; margin-left: 26px;">Apply Now</button>
                                    <button class="btn btn-secondary" type="button" style="width: 113.5px; height: 29px; padding-top: 3px; font-size: 13px; margin-right: 29px;">See Details</button>
                                </div>
                            </div>
                            <div style="width: 288px; height: 267.8px; border-radius: 22px; border-style: solid; border-color: var(--bs-gray-300); background: var(--bs-gray-100);">
                                <div class="d-flex justify-content-between" style="height: 52px; width: 298.2px; margin-bottom: 5px; margin-top: 0px; border-width: 1px; border-color: var(--bs-blue);">
                                    <img style="margin-left: 16px; margin-top: 16px;" width="33" height="31" src="assets/img/google.png" />
                                    <img style="margin-left: 27px; margin-top: 20px; color: var(--bs-secondary); margin-right: 27px;" width="23" height="22" src="assets/img/bookmark.png" />
                                </div>
                                <div class="justify-content-between" style="height: 119px; width: 298.2px; border-width: 1px; border-color: var(--bs-blue);">
                                    <h2 style="font-size: 22px; text-align: left; margin-left: 17px;">UI/UX Designer</h2>
                                    <p class="text-start" style="width: 274.4px; margin-right: 20px; margin-left: 17px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos libero vero aliquid est&nbsp;</p>
                                </div>
                                <div class="d-flex justify-content-between" style="height: 52px; width: 298.2px; margin-bottom: 7px; margin-top: -1px; border-width: 1px; border-color: var(--bs-blue);">
                                    <p
                                        style="
                                            border-radius: 6px;
                                            background: rgba(47, 143, 255, 0.13);
                                            font-size: 12px;
                                            padding: 5px;
                                            padding-right: 7px;
                                            padding-left: 7px;
                                            font-family: Andika, sans-serif;
                                            color: var(--bs-primary);
                                            border-width: 1px;
                                            margin-left: 14px;
                                            height: 31px;
                                            margin-bottom: 5px;
                                        "
                                    >
                                        Full Time&nbsp;
                                    </p>
                                    <p
                                        style="
                                            border-radius: 6px;
                                            background: rgba(47, 143, 255, 0.13);
                                            font-size: 12px;
                                            padding: 5px;
                                            padding-right: 7px;
                                            padding-left: 7px;
                                            font-family: Andika, sans-serif;
                                            color: var(--bs-primary);
                                            border-width: 1px;
                                            height: 31px;
                                            margin-bottom: 5px;
                                        "
                                    >
                                        Min 1 Year&nbsp;
                                    </p>
                                    <p
                                        style="
                                            border-radius: 6px;
                                            background: rgba(47, 143, 255, 0.13);
                                            font-size: 12px;
                                            padding: 5px;
                                            padding-right: 7px;
                                            padding-left: 7px;
                                            font-family: Andika, sans-serif;
                                            color: var(--bs-primary);
                                            border-width: 1px;
                                            margin-right: 27px;
                                            height: 32px;
                                            margin-bottom: 5px;
                                        "
                                    >
                                        Junior Level&nbsp;
                                    </p>
                                </div>
                                <div class="d-flex justify-content-around" style="height: 52px; width: 298.2px; margin-bottom: 15px; margin-top: -13px; border-width: 1px; border-color: var(--bs-blue);">
                                    <button class="btn btn-primary" type="button" style="width: 113.5px; height: 29px; padding-top: 3px; font-size: 13px; margin-left: 26px;">Apply Now</button>
                                    <button class="btn btn-secondary" type="button" style="width: 113.5px; height: 29px; padding-top: 3px; font-size: 13px; margin-right: 29px;">See Details</button>
                                </div>
                            </div>
                            <div style="width: 288px; height: 267.8px; border-radius: 22px; border-style: solid; border-color: var(--bs-gray-300); background: var(--bs-gray-100);">
                                <div class="d-flex justify-content-between" style="height: 52px; width: 298.2px; margin-bottom: 5px; margin-top: 0px; border-width: 1px; border-color: var(--bs-blue);">
                                    <img style="margin-left: 16px; margin-top: 16px;" width="33" height="31" src="assets/img/google.png" />
                                    <img style="margin-left: 27px; margin-top: 20px; color: var(--bs-secondary); margin-right: 27px;" width="23" height="22" src="assets/img/bookmark.png" />
                                </div>
                                <div class="justify-content-between" style="height: 119px; width: 298.2px; border-width: 1px; border-color: var(--bs-blue);">
                                    <h2 style="font-size: 22px; text-align: left; margin-left: 17px;">UI/UX Designer</h2>
                                    <p class="text-start" style="width: 274.4px; margin-right: 20px; margin-left: 17px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos libero vero aliquid est&nbsp;</p>
                                </div>
                                <div class="d-flex justify-content-between" style="height: 52px; width: 298.2px; margin-bottom: 7px; margin-top: -1px; border-width: 1px; border-color: var(--bs-blue);">
                                    <p
                                        style="
                                            border-radius: 6px;
                                            background: rgba(47, 143, 255, 0.13);
                                            font-size: 12px;
                                            padding: 5px;
                                            padding-right: 7px;
                                            padding-left: 7px;
                                            font-family: Andika, sans-serif;
                                            color: var(--bs-primary);
                                            border-width: 1px;
                                            margin-left: 14px;
                                            height: 31px;
                                            margin-bottom: 5px;
                                        "
                                    >
                                        Full Time&nbsp;
                                    </p>
                                    <p
                                        style="
                                            border-radius: 6px;
                                            background: rgba(47, 143, 255, 0.13);
                                            font-size: 12px;
                                            padding: 5px;
                                            padding-right: 7px;
                                            padding-left: 7px;
                                            font-family: Andika, sans-serif;
                                            color: var(--bs-primary);
                                            border-width: 1px;
                                            height: 31px;
                                            margin-bottom: 5px;
                                        "
                                    >
                                        Min 1 Year&nbsp;
                                    </p>
                                    <p
                                        style="
                                            border-radius: 6px;
                                            background: rgba(47, 143, 255, 0.13);
                                            font-size: 12px;
                                            padding: 5px;
                                            padding-right: 7px;
                                            padding-left: 7px;
                                            font-family: Andika, sans-serif;
                                            color: var(--bs-primary);
                                            border-width: 1px;
                                            margin-right: 27px;
                                            height: 32px;
                                            margin-bottom: 5px;
                                        "
                                    >
                                        Junior Level&nbsp;
                                    </p>
                                </div>
                                <div class="d-flex justify-content-around" style="height: 52px; width: 298.2px; margin-bottom: 15px; margin-top: -13px; border-width: 1px; border-color: var(--bs-blue);">
                                    <button class="btn btn-primary" type="button" style="width: 113.5px; height: 29px; padding-top: 3px; font-size: 13px; margin-left: 26px;">Apply Now</button>
                                    <button class="btn btn-secondary" type="button" style="width: 113.5px; height: 29px; padding-top: 3px; font-size: 13px; margin-right: 29px;">See Details</button>
                                </div>
                            </div>
                            <div style="width: 288px; height: 267.8px; border-radius: 22px; border-style: solid; border-color: var(--bs-gray-300); background: var(--bs-gray-100);">
                                <div class="d-flex justify-content-between" style="height: 52px; width: 298.2px; margin-bottom: 5px; margin-top: 0px; border-width: 1px; border-color: var(--bs-blue);">
                                    <img style="margin-left: 16px; margin-top: 16px;" width="33" height="31" src="assets/img/google.png" />
                                    <img style="margin-left: 27px; margin-top: 20px; color: var(--bs-secondary); margin-right: 27px;" width="23" height="22" src="assets/img/bookmark.png" />
                                </div>
                                <div class="justify-content-between" style="height: 119px; width: 298.2px; border-width: 1px; border-color: var(--bs-blue);">
                                    <h2 style="font-size: 22px; text-align: left; margin-left: 17px;">UI/UX Designer</h2>
                                    <p class="text-start" style="width: 274.4px; margin-right: 20px; margin-left: 17px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos libero vero aliquid est&nbsp;</p>
                                </div>
                                <div class="d-flex justify-content-between" style="height: 52px; width: 298.2px; margin-bottom: 7px; margin-top: -1px; border-width: 1px; border-color: var(--bs-blue);">
                                    <p
                                        style="
                                            border-radius: 6px;
                                            background: rgba(47, 143, 255, 0.13);
                                            font-size: 12px;
                                            padding: 5px;
                                            padding-right: 7px;
                                            padding-left: 7px;
                                            font-family: Andika, sans-serif;
                                            color: var(--bs-primary);
                                            border-width: 1px;
                                            margin-left: 14px;
                                            height: 31px;
                                            margin-bottom: 5px;
                                        "
                                    >
                                        Full Time&nbsp;
                                    </p>
                                    <p
                                        style="
                                            border-radius: 6px;
                                            background: rgba(47, 143, 255, 0.13);
                                            font-size: 12px;
                                            padding: 5px;
                                            padding-right: 7px;
                                            padding-left: 7px;
                                            font-family: Andika, sans-serif;
                                            color: var(--bs-primary);
                                            border-width: 1px;
                                            height: 31px;
                                            margin-bottom: 5px;
                                        "
                                    >
                                        Min 1 Year&nbsp;
                                    </p>
                                    <p
                                        style="
                                            border-radius: 6px;
                                            background: rgba(47, 143, 255, 0.13);
                                            font-size: 12px;
                                            padding: 5px;
                                            padding-right: 7px;
                                            padding-left: 7px;
                                            font-family: Andika, sans-serif;
                                            color: var(--bs-primary);
                                            border-width: 1px;
                                            margin-right: 27px;
                                            height: 32px;
                                            margin-bottom: 5px;
                                        "
                                    >
                                        Junior Level&nbsp;
                                    </p>
                                </div>
                                <div class="d-flex justify-content-around" style="height: 52px; width: 298.2px; margin-bottom: 15px; margin-top: -13px; border-width: 1px; border-color: var(--bs-blue);">
                                    <button class="btn btn-primary" type="button" style="width: 113.5px; height: 29px; padding-top: 3px; font-size: 13px; margin-left: 26px;">Apply Now</button>
                                    <button class="btn btn-secondary" type="button" style="width: 113.5px; height: 29px; padding-top: 3px; font-size: 13px; margin-right: 29px;">See Details</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class=" home2 cvs-containers " style="width: 94%;margin-left: 94px;">
            <div class="cv-editor">
    
                <!-- buttons test -->
                <!-- <button onclick="addProfile()">profile</button>
                <button onclick="addInfoPer()">information-personnelles</button>
                <button onclick="addFromation()">formation</button>
                <button onclick="addCompetence()">competence</button>
                <button onclick="addLangue()">Langue</button>
                <button onclick="addInteret()">interet</button>
                <button onclick="addProfile()">add</button>
                <button onclick="downloadPDF()">Downlaod PDF</button>
                <input type="file" onchange="previewImage(event)" value="me"> -->
    
                <!-- start of boxes -->
                <div class="info">
                    <div class="showen-box">
                        <span class="title">Information personnelles</span>
                        <button class="open-key">show</button>
                    </div>
                    <div class="hidden-box">
                        <div class="info-hidden-box">
                            <div class="up-box">
                                <div class="up-box-left">
                                    <img src="noPhoto.png" alt="" class="preview1" >
                                    <input type="file" name="" id="" onchange="previewImage(event, 'preview1')">
                                </div>
                                <div class="up-box-right">
                                    <label for="prenom">prenom</label><input type="text" name="prenom" id="" class="inpt-prenom">
                                    <label for="nom">nom</label><input type="text" name="nom" id="" class="inpt-nom">
                                    <label for="addr-email">Adresse e-mail</label><input type="text" name="addr-email" id="">
                                </div>
                            </div>
                            <div class="down-box">
                                <label for="title-profile">Titre du profil</label><input type="text" name="title-profile" id="" class="title-profile">
                                <label for="num-tel">Numero telephoe</label><input type="text" class="num-tel" name="num-tel" id="">
                                <label for="addr">addresse</label><input type="text" class="addr" name="addr" id="">
                                <label for="code-postal">Code postal</label><input type="text" name="code-postal" id="">
                                <label for="ville">ville</label><input type="text" name="ville" id="" class="ville">
                                <label for="linkedin">linkedin</label><input type="text" name="linkedin" class="linkedin" id="">
                            </div>
                            <button class="send-description btn-send-infos" >Send ddd</button>
                        </div>
                        
                    </div>
                </div>
                <div class="profil">
                    <div class="showen-box">
                        <span class="title">Profile</span>
                        <button class="open-key">show</button>
                    </div>
                    <div class="hidden-box">
                        <div class="hide-box-profile">
                            <label for="description-profile">Description</label>
                            <textarea class="description-profile" name="description-profile" id="" cols="20" rows="10"></textarea>
                            <button class="send-description" onclick="addProfile()">send</button>
                        </div>
                        
                    </div>
                </div>
                <div class="exp-pro">
                    <div class="showen-box">
                        <span class="title">Experience professionlle</span>
                        <button class="open-key">show</button>
                    </div>
                    <div class="hidden-box">
                        <!-- container for the saved experiences -->
                        <div id="saved-experiences-container"></div>
                        <!-- container for the experiences -->
                        <div id="experiences-container" ></div>
                        <button onclick="addExperience()" class="send-description">Add experience</button>
                    </div>
                    
                </div>
                
                <div class="competenece">
                    <div class="showen-box">
                        <span class="title">Competenece</span>
                        <button class="open-key">show</button>
                    </div>
                    <div class="hidden-box">
                        <div class="container-l-i"> 
                            <label>skill</label>
                            <input type="text" class="inpt-comp"/>
                            <input type="range" class="range-comp"/> 
                            <button class="btn-add" onclick="addCompetence()">add</button>
                        </div>
                    </div>
                </div>
                <div class="langue">
                    <div class="showen-box">
                        <span class="title">Langue</span>
                        <button class="open-key">show</button>
                    </div>
                    <div class="hidden-box">
                        <div class="container-l-i"> 
                            <label>langue</label>
                            <input type="text"class='inpt-lang' />
                            <input type="range" class="range-lan"/> 
                            <button class="btn-add" onclick="addLangue()">add</button>
                        </div> 
                    </div>
                </div>
                <div class="formation">
                    <div class="showen-box">
                        <span class="title">Formation</span>
                        <button class="open-key">show</button>
                    </div>
                    <div class="hidden-box">
                        <!-- container for the saved experiences -->
                        <div id="saved-formation-container"></div>
                        <!-- container for the experiences -->
                        <div id="formation-container"></div>
                        <button onclick="addFormation()" class="send-description">Add experience</button>
                    </div>
                </div>
                <div class="stages">
                    <div class="showen-box">
                        <span class="title">Stages</span>
                        <button class="open-key">show</button>
                    </div>
                    <div class="hidden-box">
                        <!-- container for the saved experiences -->
                        <div id="saved-stage-container"></div>
                        <!-- container for the experiences -->
                        <div id="stage-container"></div>
                        <button onclick="addStages()" class="send-description">Add stage</button>
                    </div>
                </div>
                <div class="certificats">
                    <div class="showen-box">
                        <span class="title">Certificats</span>
                        <button class="open-key">show</button>
                    </div>
                    <div class="hidden-box">
                        <!-- container for the saved experiences -->
                        <div id="saved-certificat-container"></div>
                        <!-- container for the experiences -->
                        <div id="certificat-container"></div>
                        <button onclick="addCertificat()" class="send-description">Add certificat</button>
                    </div>
                </div>
                <div class="centre-interet">
                    <div class="showen-box">
                        <span class="title">Centre d'interet</span>
                        <button class="open-key">show</button>
                    </div>
                    <div class="hidden-box">
                        <div class="container-l-i"> 
                            <label>Interet</label>
                            <input type="text" class="inpt-interet"/>
                            <button class="btn-add" onclick="addInteret()">add</button>
                        </div> 
                    </div>
                </div>
    
                
    
    
            </div><!-- END CV EDITOR -->
    
            <!-- CV VIEW  -->
            <div class="cv-view " style="background: var(--bs-link-hover-color);">
                <div class="result-frame" id="result-frame">
                    <!-- container image and info personnelles -->
                    <div class="conatiner-image-info">
                        <!-- img -->
                        <img src="assets/img/asil.jpg" height="175" class="preview2" alt="" width="130px">
                        <!-- img -->
                        <div class="info" style="height: 172.2px;">
                            <!-- full name and jb --> <!-- edit here -->
                            <p class="full-name text-capitalize" style="margin-left: 17px;font-size: 31px;margin-top: 32px;"></p>
                            <p class="title-profile-value text-capitalize" style="margin-left: 17px;font-size: 25px;font-family: 'Albert Sans', sans-serif;margin-top: -15px;color: var(--bs-orange);"></p>
                            <!-- informations -->
                            <img src="email (1).png" alt="" width="21" style="margin-left: 23px;margin-right: 11px;" height="17">
                            <label class="addr-view form-label form-label " for="" style="margin-right: 17px;"></label>
                            <img src="assets/img/email%20(1).png" alt="" width="20px" style="margin-right: 11px;">
                            <label class="form-label form-label num-tel" for="" style="margin-right: 15px;"></label>
                            <img src="assets/img/emplacements.png" width="20px" style="margin-right: 11px;">
                            <label class="form-label form-label ville-view" for=""></label>
                        </div>
                    </div>
                    <div class="rest-of-infos">
                        <div class="left-column"  style="background: var(--bs-gray-100);font-size: 18px;">
                            <div class="profile-box">
    
                            </div>
                            <div class="experience-box">
    
                            </div>
                            <div class="formation-box">
    
                            </div>
                            <div class="stage-box">
    
                            </div>
                            <div class="certificat-box">
    
                            </div>
                        </div>
    
                        <div class="right-column">
                            <div class="info-perso"></div>
                            <div class="competence-box"></div>
                            <div class="langue-box"></div>
                            <div class="interet-box"></div>
                        </div>                    
                    </div>
                </div>
                <div style="margin-top: 8px;position: fixed;right: 1%;">
                    <button class="btn btn-warning downloadPDF"  type="button" >Download</button>
                </div >
            </div>
        </section>
        
        <script src="assets/js/cv.js"></script>
        <script src="assets/js/dashDem.js"></script>
        <script src="assets/js/dashDem2.js"></script>
    </body>
</html>
<?php
}else {
    header("location: index.php");
}


?>