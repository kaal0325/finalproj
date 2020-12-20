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
                                echo '<h4><b>Uveitis</b></h4>';
                                echo 'Uveitis is a form of eye inflammation. It affects the middle layer of tissue in the eye wall (uvea).<br> ';
                                echo 'Uveitis (u-vee-I-tis) warning signs often come on suddenly and get worse quickly. <br>';
                                echo 'They include eye redness, pain and blurred vision. The condition can affect one or both eyes <br>'; 
                                echo 'and it can affect people of all ages, even children.<br><br>';
                                echo ' <h4><b>Treatment</b></h4>';
                                echo '* Warm or cool compresses to relieve pain or swelling<br>';
                                echo '* Sunglasses to protect your eyes if they are sensitive to light<br>';
                                echo '* A daily multivitamin<br>';
                                echo '* Omega-3 fatty acid supplements or eating cold-water fish, These can reduce inflammation and boost your immune system.<br>';
                                echo '* Lutein supplements to support general eye health<br>';
                                echo '* A diet that supports eye health, Focus on antioxidant-rich foods<br>';
                                echo '<br><hr noshade size="15" color= red ><br>';
                                echo '<h4><b>Astigmatism</b></h4>';
                                echo 'Astigmatism (uh-STIG-muh-tiz-um) is a common and generally treatable imperfection<br> ';
                                echo 'in the curvature of your eye that causes blurred distance and near vision.<br>';
                                echo 'Astigmatism occurs when either the front surface of your eye (cornea) or the lens, inside your eye,<br>'; 
                                echo 'has mismatched curves. Instead of having one curve like a round ball, the surface is egg shaped.<br>';
                                echo 'This causes blurred vision at all distances.<br><br>';
                                echo ' <h4><b>Treatment</b></h4>';
                                echo '* Keep a distance of at least 30 cm between the eyes and the books<br>';
                                echo '* Do not read lying in bed as you may move the book closer and closer to the eyes without noticing it.<br>';
                                echo '* Use ceiling lights when reading. Lighting should be even and bright but without excessive glare.<br>';
                                echo '* Eat food rich in vitamin A (e.g. tomatoes and carrots) since it is good for your eyesight.<br>';
                                echo '* Outdoor activities can relieve eye strain.<br>';
                                echo '* Have adequate sleep to rest your eyes.<br>';
                                echo '<br><hr noshade size="15" color= red ><br>';
                                echo '<h4><b>Color Blindness</b></h4>';
                                echo 'Color blindness or more accurately, poor or deficient color vision is an inability to see the difference between certain colors.<br> ';
                                echo 'Color blindness is usually inherited. Men are more likely to be born with color blindness<br><br>';
                                echo ' <h4><b>Treatment</b></h4>';
                                echo '* Memorize the order of colored objects. If its important to know individual colors,<br>';
                                echo '* such as with traffic lights, memorize the order of the colors.<br>';
                                echo '* Label colored items that you want to match with other items. Have someone with good color<br>';
                                echo '* vision help you sort and label your clothing. Arrange your clothes in your closet or drawers so that colors that can be worn together are near each other.<br>';
                                echo '* Use technology. There are apps for phones and digital devices that can help you identify colors.<br>';
                            }
                            else 
                            {
                                echo '<h4><b>Migraine with aura</b></h4>';
                                echo 'Migraine with aura (also called classic migraine) is a recurring headache that strikes <br> ';
                                echo 'after or at the same time as sensory disturbances called aura.<br>';
                                echo 'These disturbances can include flashes of light, blind spots and other vision changes or tingling in your hand or face.<br><br>';
                                echo ' <h4><b>Treatment</b></h4>';
                                echo 'Avoid your triggers. Common ones include: <br>';
                                echo '* Certain foods<br>';
                                echo '* Medications<br>';
                                echo '* Stress<br>';
                                echo '* Being tired, sick, or hungry<br>';
                                echo '* Flickering or flashing light<br>';
                                echo '* Air pressure or altitude changes<br>';
                                echo '<br><hr noshade size="15" color= red ><br>';
                                echo '<h4><b>Astigmatism</b></h4>';
                                echo 'Astigmatism (uh-STIG-muh-tiz-um) is a common and generally treatable imperfection<br> ';
                                echo 'in the curvature of your eye that causes blurred distance and near vision.<br>';
                                echo 'Astigmatism occurs when either the front surface of your eye (cornea) or the lens, inside your eye,<br>'; 
                                echo 'has mismatched curves. Instead of having one curve like a round ball, the surface is egg shaped.<br>';
                                echo 'This causes blurred vision at all distances.<br><br>';
                                echo ' <h4><b>Treatment</b></h4>';
                                echo '* Keep a distance of at least 30 cm between the eyes and the books<br>';
                                echo '* Do not read lying in bed as you may move the book closer and closer to the eyes without noticing it.<br>';
                                echo '* Use ceiling lights when reading. Lighting should be even and bright but without excessive glare.<br>';
                                echo '* Eat food rich in vitamin A (e.g. tomatoes and carrots) since it is good for your eyesight.<br>';
                                echo '* Outdoor activities can relieve eye strain.<br>';
                                echo '* Have adequate sleep to rest your eyes.<br>';
                                echo '<br><hr noshade size="15" color= red ><br>';
                                echo '<h4><b>Iritis</b></h4>';
                                echo 'Iritis (i-RYE-tis) is swelling and irritation (inflammation) in the colored ring around your eyes pupil (iris).<br> ';
                                echo 'Another name for iritis is anterior uveitis.<br>';
                                echo 'The uvea is the middle layer of the eye between the retina and the white part of the eye.<br>'; 
                                echo 'The iris is located in the front portion (anterior) of the uvea. <br><br>';
                                echo ' <h4><b>Treatment</b></h4>';
                                echo '* Use prescription medications exactly as prescribed.<br>';
                                echo '* Wear dark glasses if light worsens your eye pain.<br>';
 
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