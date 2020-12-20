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
                            if(count($symptom)<=4)
                            {
                                echo '<h4><b>Common cold</b></h4>';
                                echo 'The common cold is a viral infection of your nose and throat (upper respiratory tract).<br> ';
                                echo 'It is usually harmless, although it might not feel that way. <br>';
                                echo 'Many types of viruses can cause a common cold.<br><br>'; 
                                echo ' <h4><b>Treatment</b></h4>';
                                echo '* Steer clear of anyone who has a cold<br>';
                                echo '* Avoid secondhand smoke<br>';
                                echo '* Wash their hands well and often, especially after blowing their noses<br>';
                                echo '* Sneeze or cough into a tissue or their elbow, not into their hands<br>';
                                echo '* Not share towels, drinking glasses, or eating utensils with someone who has a cold<br>';
                                echo '* Not pick up other peoples used tissues<br>';
                                echo '<br><hr noshade size="15" color= red ><br>';
                                echo '<h4><b>Acute sinusitis</b></h4>';
                                echo 'Acute sinusitis causes the spaces inside your nose (sinuses) to become inflamed and swollen.<br> ';
                                echo 'This interferes with drainage and causes mucus to build up. <br>';
                                echo 'With acute sinusitis, it might be difficult to breathe through your nose.<br>'; 
                                echo 'The area around your eyes and face might feel swollen, and you might have throbbing facial pain or a headache.<br><br>';
                                echo ' <h4><b>Treatment</b></h4>';
                                echo '* Bathe your nasal passages daily.<br>';
                                echo '* Drink lots of water.<br>';
                                echo '* Inhale steam.<br>';
                                echo '* Avoid dry environments.<br>';
                                echo '* Sleep with your head elevated.<br>';
                                echo '* Be nice to your nose.<br>';
                                echo '* Avoid antihistamines unless prescribed.<br>';
                                echo '* Be careful with decongestants<br>';
                                echo '<br><hr noshade size="15" color= red ><br>';
                                echo '<h4><b>Chronic sinusitis</b></h4>';
                                echo 'Chronic sinusitis occurs when the spaces inside your nose and head (sinuses) are swollen<br> ';
                                echo 'and inflamed for three months or longer, despite treatment.<br>';
                                echo 'This common condition interferes with the way mucus normally drains, and makes your nose stuffy.<br>'; 
                                echo 'Breathing through your nose may be difficult, and the area around your eyes might feel swollen or tender.<br><br>';
                                echo ' <h4><b>Treatment</b></h4>';
                                echo '* Fluids. A glass of water or juice every hour or two is a good rule.<br>';
                                echo '* Fluids help thin mucus, allowing it to drain more easily.<br>';
                                echo '* Saline wash. This helps keep the sinuses and nose moist.<br>';
                                echo '* Warm compresses. Apply a warm, moist towel to your childs nose, cheeks, and eyes to help ease pain in the face.<br>';
                            }
                            else 
                            {
                                echo '<h4><b>Hey Fever</b></h4>';
                                echo 'Hay fever, also called allergic rhinitis, causes cold-like signs and symptoms, such as <br> ';
                                echo ' a runny nose, itchy eyes, congestion, sneezing and sinus pressure. <br>';
                                echo 'Hay fever is caused by an allergic response to outdoor or indoor allergens, such as pollen, dust mites, or tiny flecks of skin and saliva shed.<br><br>'; 
                                echo ' <h4><b>Treatment</b></h4>';
                                echo '* Keep the windows closed, use air conditioning if possible, and stay indoors when pollen/mold/weed counts are high.<br>';
                                echo '* Its also a good idea for kids with seasonal allergies to wash their hands or shower and change clothing after playing outside.<br>';
                                echo '* Medicines can help ease allergy symptoms. These may include decongestants, antihistamines, and nasal spray steroids<br>';
                                echo '<br><hr noshade size="15" color= red ><br>';
                                echo '<h4><b>Common cold</b></h4>';
                                echo 'The common cold is a viral infection of your nose and throat (upper respiratory tract).<br> ';
                                echo 'It is usually harmless, although it might not feel that way. <br>';
                                echo 'Many types of viruses can cause a common cold.<br><br>'; 
                                echo ' <h4><b>Treatment</b></h4>';
                                echo '* Steer clear of anyone who has a cold<br>';
                                echo '* Avoid secondhand smoke<br>';
                                echo '* Wash their hands well and often, especially after blowing their noses<br>';
                                echo '* Sneeze or cough into a tissue or their elbow, not into their hands<br>';
                                echo '* Not share towels, drinking glasses, or eating utensils with someone who has a cold<br>';
                                echo '* Not pick up other peoples used tissues<br>';
                                echo '<br><hr noshade size="15" color= red ><br>';
                                echo '<h4><b>Acute sinusitis</b></h4>';
                                echo 'Acute sinusitis causes the spaces inside your nose (sinuses) to become inflamed and swollen.<br> ';
                                echo 'This interferes with drainage and causes mucus to build up. <br>';
                                echo 'With acute sinusitis, it might be difficult to breathe through your nose.<br>'; 
                                echo 'The area around your eyes and face might feel swollen, and you might have throbbing facial pain or a headache.<br><br>';
                                echo ' <h4><b>Treatment</b></h4>';
                                echo '* Bathe your nasal passages daily.<br>';
                                echo '* Drink lots of water.<br>';
                                echo '* Inhale steam.<br>';
                                echo '* Avoid dry environments.<br>';
                                echo '* Sleep with your head elevated.<br>';
                                echo '* Be nice to your nose.<br>';
                                echo '* Avoid antihistamines unless prescribed.<br>';
                                echo '* Be careful with decongestants<br>';
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