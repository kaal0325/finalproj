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
                            if(count($symptom)<=2)
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
                                echo '<h4><b>Tonsillitis</b></h4>';
                                echo 'Tonsillitis is inflammation of the tonsils, two oval-shaped pads of tissue at the back of the throat.<br> ';
                                echo 'one tonsil on each side. Signs and symptoms of tonsillitis include swollen tonsils, <br>';
                                echo 'sore throat, difficulty swallowing and tender lymph nodes on the sides of the neck.<br><br>'; 
                                echo ' <h4><b>Treatment</b></h4>';
                                echo '* Drink plenty of fluids, especially if you have a raised temperature, to prevent dehydration<br>';
                                echo '* Dont drink hot drinks as these can make your sore throat worse. It may help to drink ice drinks instead<br>';
                                echo '* Gargle with a simple mouthwash such as warm salt water − this may help to ease the pain in your throat<br>';
                                echo '<br><hr noshade size="15" color= red ><br>';
                                echo '<h4><b>Step Throat</b></h4>';
                                echo 'Strep throat is a bacterial infection that can make your throat feel sore and scratchy.<br> ';
                                echo 'Strep throat accounts for only a small portion of sore throats.<br>';
                                echo 'Strep throat is most common in children, but it affects people of all ages.<br><br>'; 
                                echo ' <h4><b>Treatment</b></h4>';
                                echo '* Get plenty of rest. Sleep helps your body fight infection.<br>';
                                echo '* Drink plenty of water. Keeping a sore throat lubricated and moist eases swallowing and helps prevent dehydration.<br>';
                                echo '* Eat soothing foods.<br>';
                                echo '* Gargle with warm salt water.<br>';
                                echo '* Use a humidifier.<br>';
                            }
                            else 
                            {
                                echo '<h4><b>Influenza(flu)</b></h4>';
                                echo 'Influenza is a viral infection that attacks your respiratory system your nose, throat and lungs.<br> ';
                                echo 'Influenza is commonly called the flu, but its not the same as stomach flu viruses that cause diarrhea and vomiting. <br>';
                                echo ' <h4><b>Treatment</b></h4>';
                                echo '* Avoid close contact. Avoid close contact with people who are sick.<br>';
                                echo '* Stay home when they are sick. If possible, stay home from work, school, and errands when they are sick<br>';
                                echo '* Cover their mouth and nose.<br>';
                                echo '* Clean their hands.<br>';
                                echo '* Avoid touching their eyes, nose or mouth.<br>';
                                echo '* Practice other good health habits.<br>';
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
                                echo '<h4><b>Step Throat</b></h4>';
                                echo 'Strep throat is a bacterial infection that can make your throat feel sore and scratchy.<br> ';
                                echo 'Strep throat accounts for only a small portion of sore throats.<br>';
                                echo 'Strep throat is most common in children, but it affects people of all ages.<br><br>'; 
                                echo ' <h4><b>Treatment</b></h4>';
                                echo '* Get plenty of rest. Sleep helps your body fight infection.<br>';
                                echo '* Drink plenty of water. Keeping a sore throat lubricated and moist eases swallowing and helps prevent dehydration.<br>';
                                echo '* Eat soothing foods.<br>';
                                echo '* Gargle with warm salt water.';
                                echo '* Use a humidifier.';
 
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