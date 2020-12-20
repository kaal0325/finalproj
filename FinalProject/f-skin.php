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
                            if(count($symptom)<=6)
                            {
                                echo '<h4><b>Impetigo</b></h4>';
                                echo 'Impetigo is a common and highly contagious skin infection that mainly affects infants and children.<br> ';
                                echo 'Impetigo usually appears as red sores on the face, especially around a childs nose <br>';
                                echo 'and mouth, and on hands and feet. The sores burst and develop honey-colored crusts.<br><br>'; 
                                echo ' <h4><b>Treatment</b></h4>';
                                echo '* Call the childs medical provider for a treatment plan.<br>';
                                echo '* Clean the infected area with soap and water.<br>';
                                echo '* Cover the infected area loosely.<br>';
                                echo '* Keep sores covered until they are healed<br>';
                                echo '* Wash hands well after treating sores.<br>';
                                echo '* Try to keep your child from scratching.<br>';
                                echo '<br><hr noshade size="15" color= red ><br>';
                                echo '<h4><b>Parvovirus infection</b></h4>';
                                echo 'Parvovirus infection is a common and highly contagious childhood illness.<br> ';
                                echo 'It is sometimes called slapped-cheek disease because of the distinctive face rash that develops.<br> <br>';
                                echo ' <h4><b>Treatment</b></h4>';
                                echo '* For an uncomplicated parvovirus infection, self-care treatment at home is generally sufficient.<br>';
                                echo '* People with severe anemia may need to stay in the hospital and receive blood transfusions.<br>';
                                echo '* Those with weakened immune systems may receive antibodies, via immune globulin injections, to treat the infection.<br>';
                                echo '<br><hr noshade size="15" color= red ><br>';
                                echo '<h4><b> Heat rash</b></h4>';
                                echo 'Heat rash also known as prickly heat and miliaria<br> ';
                                echo 'is not just for babies. It affects adults, too, especially during hot, humid weather.<br>';
                                echo 'Heat rash develops when blocked pores (sweat ducts) trap perspiration under your skin.<br><br>'; 
                                echo ' <h4><b>Treatment</b></h4>';
                                echo '* Dress the child in clothing that keeps the skin cool and dry.<br>';
                                echo '* Pay special attention to skin folds that stay wet with perspiration, urine, or drool.<br>';
                                echo '* Use cool water to remove body oil and sweat.<br>';
                                echo '* Leave areas open to air without clothing.<br>';
                            }
                            else 
                            {
                                echo '<h4><b> Heat rash</b></h4>';
                                echo 'Heat rash also known as prickly heat and miliaria<br> ';
                                echo 'is not just for babies. It affects adults, too, especially during hot, humid weather.<br>';
                                echo 'Heat rash develops when blocked pores (sweat ducts) trap perspiration under your skin.<br><br>'; 
                                echo ' <h4><b>Treatment</b></h4>';
                                echo '* Dress the child in clothing that keeps the skin cool and dry.<br>';
                                echo '* Pay special attention to skin folds that stay wet with perspiration, urine, or drool.<br>';
                                echo '* Use cool water to remove body oil and sweat.<br>';
                                echo '* Leave areas open to air without clothing.<br>';
                                echo '<br><hr noshade size="15" color= red ><br>';
                                echo '<h4><b>Diaper rash</b></h4>';
                                echo 'Diaper rash is a common form of inflamed skin (dermatitis) that appears as a patchwork of bright red skin on your babys bottom.<br> ';
                                echo 'Diaper rash is often related to wet or infrequently changed diapers, skin sensitivity, and chafing.<br>';
                                echo 'It usually affects babies, though anyone who wears a diaper regularly can develop the condition.<br><br>'; 
                                echo ' <h4><b>Treatment</b></h4>';
                                echo '* Change diapers frequently.<br>';
                                echo '* Clean the skin gently during changes.<br>';
                                echo '* Coat the skin with a thick layer of barrier paste.<br>';
                                echo '* Choose a highly absorbent diaper.<br>';
                                echo '* Leave some breathing room.<br>';
                                echo '* Keep the area clean<br>';
                                echo '<br><hr noshade size="15" color= red ><br>';
                                echo '<h4><b>Impetigo</b></h4>';
                                echo 'Impetigo is a common and highly contagious skin infection that mainly affects infants and children.<br> ';
                                echo 'Impetigo usually appears as red sores on the face, especially around a childs nose <br>';
                                echo 'and mouth, and on hands and feet. The sores burst and develop honey-colored crusts.<br><br>'; 
                                echo ' <h4><b>Treatment</b></h4>';
                                echo '* Call the childs medical provider for a treatment plan.<br>';
                                echo '* Clean the infected area with soap and water.<br>';
                                echo '* Cover the infected area loosely.<br>';
                                echo '* Keep sores covered until they are healed<br>';
                                echo '* Wash hands well after treating sores.<br>';
                                echo '* Try to keep your child from scratching.<br>';
 
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