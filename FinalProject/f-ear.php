<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet">

    <title>Children's Health Prediction</title>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">

    <link rel="stylesheet" type="text/css" href="css/fullpage.min.css">

    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">

    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/templatemo-style.css">

    <link rel="stylesheet" href="css/responsive.css">

    </head>
    
    <body>
    
	<div id="video">
        <div class="preloader">
            <div class="preloader-bounce">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <header id="header">
            <div class="container-fluid">
                <div class="navbar">
                    <a href="#" id="logo" title="Elegance by TemplateMo">
                        Welcome
                    </a>
                    <div class="navigation-row">
                        <nav id="navigation">
                            <button type="button" class="navbar-toggle"> <i class="fa fa-bars"></i> </button>
                            <div class="nav-box navbar-collapse">
                                <ul class="navigation-menu nav navbar-nav navbars" id="nav">
                                    <li data-menuanchor="" class="active"><a href="index.php">Home</a></li>
                                    <li data-menuanchor=""><a href="tips.html">Healthy Tips</a></li>
                                    <li data-menuanchor="slide03"><a href="possible.html">Possible Diseases</a></li>
                                    <li data-menuanchor="slide04"><a href="contact.html">Contact Us</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>

        <video autoplay muted loop id="myVideo">
          <source src="images/video-bg.mp4" type="video/mp4">
        </video>

        <div id="fullpage" class="fullpage-default">

            <div class="section animated-row" data-section="slide01">
                <div class="section-inner">
                    <div class="welcome-box">
                    <?php
                    include('func.php');
                    ?>
                    <br><h3> Possible Disease </h3><br>
                    <?php 
                        if(!empty($_POST["accomp"]))
                        $symptom = $_POST["accomp"];
                        {
                            if(count($symptom)<=3)
                            {
                                echo '<h4><b>Ear infection (middle ear)</b></h4>';
                                echo 'An ear infection (sometimes called acute otitis media) is an infection of the middle ear, <br> ';
                                echo 'the air-filled space behind the eardrum that contains the tiny vibrating bones of the ear. <br>';
                                echo 'Children are more likely than adults to get ear infections.<br><br>'; 
                                echo ' <h4><b>Treatment</b></h4>';
                                echo '* Fever and pain medicine: use acetaminophen or ibuprofen.<br>';
                                echo '* Over-the-counter medications can reduce pain and fever if your child.<br>';
                                echo '* Place a cold pack or warm compress over your childs ear.<br>';
                                echo '* Keep the child hydrated.<br>';
                                echo '* Elevate your childs head.<br>';
                                echo '* Watch for ear discharge<br>';
                                echo '<br><hr noshade size="15" color= red ><br>';
                                echo '<h4><b>Earwax blockage</b></h4>';
                                echo 'Earwax blockage occurs when earwax (cerumen) accumulates in your ear or becomes too hard to wash away naturally.<br> ';
                                echo 'Earwax is a helpful and natural part of your bodys defenses. It cleans, lubricates and protects <br>';
                                echo 'your ear canal by trapping dirt and slowing the growth of bacteria.<br><br>'; 
                                echo ' <h4><b>Treatment</b></h4>';
                                echo '* Do not try to remove earwax with cotton swabs, fingers, or other objects.<br>';
                                echo '* This can make the blockage worse and damage the eardrum.<br>';
                                echo '* If the doctor recommends that you try to remove earwax at home<br>';
                                echo '<br><hr noshade size="15" color= red ><br>';
                                echo '<h4><b>Ruptured eardrum (perforated eardrum)</b></h4>';
                                echo 'A ruptured eardrum (tympanic membrane perforation) is a hole or tear in the thin tissue <br> ';
                                echo 'that separates your ear canal from your middle ear (eardrum).<br>';
                                echo 'A ruptured eardrum can result in hearing loss. It can also make your middle ear vulnerable to infections.<br><br>'; 
                                echo ' <h4><b>Treatment</b></h4>';
                                echo '* If the doctor prescribed antibiotics for your child, give them as directed. <br>';
                                echo '* Do not stop using them just because your child feels better. Your child needs to take the full course of antibiotics.<br>';
                                echo '* Give your child an over-the-counter pain medicine, Be safe with medicines. Read and follow all instructions on the label..<br>';
                                echo '* To ease pain, put a warm cloth on your childs ear. There may be some drainage from the ear.<br>';
                                echo '* Ask your doctor if you should give your child oral or nasal decongestants to relieve ear pain.<br>';
                            }
                            else 
                            {
                                echo '<h4><b>Airplane ear</b></h4>';
                                echo 'Airplane ear (ear barotrauma) is the stress on your eardrum that occurs when the air pressure in your middle ear<br> ';
                                echo 'and the air pressure in the environment are out of balance. <br>';
                                echo 'You might get airplane ears when on an airplane thats climbing after takeoff or descending for landing. <br>';
                                echo ' <h4><b>Treatment</b></h4>';
                                echo '* Yawn and swallow during ascent and descent.<br>';
                                echo '* Use the Valsalva maneuver during ascent and descent.<br>';
                                echo '* Dont sleep during takeoffs and landings.<br>';
                                echo '* Use an over-the-counter nasal spray.<br>';
                                echo '* Use decongestant pills cautiously.<br>';
                                echo '* Take allergy medication.<br>';
                                echo '<br><hr noshade size="15" color= red ><br>';
                                echo '<h4><b>Earwax blockage</b></h4>';
                                echo 'Earwax blockage occurs when earwax (cerumen) accumulates in your ear or becomes too hard to wash away naturally.<br> ';
                                echo 'Earwax is a helpful and natural part of your bodys defenses. It cleans, lubricates and protects <br>';
                                echo 'your ear canal by trapping dirt and slowing the growth of bacteria.<br><br>'; 
                                echo ' <h4><b>Treatment</b></h4>';
                                echo '* Do not try to remove earwax with cotton swabs, fingers, or other objects.<br>';
                                echo '* This can make the blockage worse and damage the eardrum.br>';
                                echo '* If the doctor recommends that you try to remove earwax at home<br>';
                                echo '<br><hr noshade size="15" color= red ><br>';
                                echo '<h4><b>Ear infection (middle ear)</b></h4>';
                                echo 'An ear infection (sometimes called acute otitis media) is an infection of the middle ear, <br> ';
                                echo 'the air-filled space behind the eardrum that contains the tiny vibrating bones of the ear. <br>';
                                echo 'Children are more likely than adults to get ear infections.<br><br>'; 
                                echo ' <h4><b>Treatment</b></h4>';
                                echo '* Fever and pain medicine: use acetaminophen or ibuprofen.<br>';
                                echo '* Over-the-counter medications can reduce pain and fever if your child.<br>';
                                echo '* Place a cold pack or warm compress over your childs ear.<br>';
                                echo '* Keep the child hydrated.<br>';
                                echo '* Elevate your childs head.<br>';
                                echo '* Watch for ear discharge<br>';
                                echo '<br><hr noshade size="15" color= red ><br>';
 
                            }
                        }
                    ?>
                    </div>
                </div>
            </div>		
		</div>	
	</div>
    <script src="js/jquery.js"></script>

    <script src="js/bootstrap.min.js"></script>

    <script src="js/fullpage.min.js"></script>

    <script src="js/scrolloverflow.js"></script>

    <script src="js/owl.carousel.min.js"></script>

    <script src="js/jquery.inview.min.js"></script>

    <script src="js/form.js"></script>

    <script src="js/custom.js"></script>



  </body>
</html>