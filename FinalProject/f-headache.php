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
                                echo '<h4><b>Migraine</b></h4>';
                                echo 'A migraine can cause severe throbbing pain or a pulsing sensation, usually on one side of the head.<br> ';
                                echo 'Its often accompanied by nausea, vomiting, and extreme sensitivity to light and sound. <br>';
                                echo 'Migraine attacks can last for hours to days, and the pain can be so severe that it interferes with your daily activities<br><br>';
                                echo ' <h4><b>Treatment</b></h4>';
                                echo '* Sleep hygiene.<br>';
                                echo '* Children, especially those with migraines, should get 8-10 hours of sleep daily<br>';
                                echo '* If your child has trouble sleeping, your pediatrician may recommend tests to monitor for snoring or sleep disorders<br>';
                                echo '* ​Healthy diet.<br>';
                                echo '* Eat three regular meals each day at consistent times.<br>';
                                echo '* Avoid heavily processed foods, which tend to contain more migraine triggers like additives and artificial colors and sweeteners.<br>';
                                echo '<br><hr noshade size="15" color= red ><br>';
                                echo '<h4><b>Tension headache</b></h4>';
                                echo 'A tension headache is generally a diffuse, mild to moderate pain in your head thats often.<br> ';
                                echo 'described as feeling like a tight band around your head. <br>';
                                echo 'A tension headache (tension-type headache) is the most common type of headache, and yet its causes arent well-understood.<br><br>'; 
                                echo ' <h4><b>Treatment</b></h4>';
                                echo '* Your child should go to a quiet, dark place and relax.<br>';
                                echo '* Be careful about using pain relievers every day, because over time this can make your childs headaches worse.<br>';
                                echo '* Give your child water, juice, and other drinks that do not contain caffeine.<br>';
                                echo '* This may help the headache go away faster. Water is the best choice. <br>';
                                echo '* Do not use heat on your childs head, because it can make the pain worse.<br>';
                                echo '* Gently massage your childs neck and shoulders.<br>';
                                echo '* Do not ignore new symptoms that occur with a headache<br>';
                                echo '<br><hr noshade size="15" color= red ><br>';
                                echo '<h4><b>Concussion</b></h4>';
                                echo 'A concussion is a traumatic brain injury that affects your brain function<br> ';
                                echo 'Effects are usually temporary but can include headaches and problems<br>';
                                echo 'with concentration, memory, balance and coordination.<br>';
                                echo ' <h4><b>Treatment</b></h4>';
                                echo '* Make sure the child has physical rest and avoids sports or physical activity.<br>';
                                echo '* Allow the child to rest mentally, too.<br>';
                                echo '* They should not do anything that needs a lot of concentration, such as school work. <br>';
                                echo '* Limit their screen time, such as video games and television.<br>';
                            }
                            else 
                            {
                                echo '<h4><b>Concussion</b></h4>';
                                echo 'A concussion is a traumatic brain injury that affects your brain function<br> ';
                                echo 'Effects are usually temporary but can include headaches and problems<br>';
                                echo 'with concentration, memory, balance and coordination.<br>';
                                echo ' <h4><b>Treatment</b></h4>';
                                echo '* Make sure the child has physical rest and avoids sports or physical activity.<br>';
                                echo '* Allow the child to rest mentally, too.<br>';
                                echo '* They should not do anything that needs a lot of concentration, such as school work. <br>';
                                echo '* Limit their screen time, such as video games and television.<br>';
                                echo '<h4><b>Migraine</b></h4>';
                                echo 'A migraine can cause severe throbbing pain or a pulsing sensation, usually on one side of the head.<br> ';
                                echo 'Its often accompanied by nausea, vomiting, and extreme sensitivity to light and sound. <br>';
                                echo 'Migraine attacks can last for hours to days, and the pain can be so severe that it interferes with your daily activities<br><br>';
                                echo ' <h4><b>Treatment</b></h4>';
                                echo '* Sleep hygiene.<br>';
                                echo '* Children, especially those with migraines, should get 8-10 hours of sleep daily<br>';
                                echo '* If your child has trouble sleeping, your pediatrician may recommend tests to monitor for snoring or sleep disorders<br>';
                                echo '* ​Healthy diet.<br>';
                                echo '* Eat three regular meals each day at consistent times.<br>';
                                echo '* Avoid heavily processed foods, which tend to contain more migraine triggers like additives and artificial colors and sweeteners.<br>';
                                echo '<br><hr noshade size="15" color= red ><br>';
                                echo '<h4><b>Tension headache</b></h4>';
                                echo 'A tension headache is generally a diffuse, mild to moderate pain in your head thats often.<br> ';
                                echo 'described as feeling like a tight band around your head. <br>';
                                echo 'A tension headache (tension-type headache) is the most common type of headache, and yet its causes arent well-understood.<br><br>'; 
                                echo ' <h4><b>Treatment</b></h4>';
                                echo '* Your child should go to a quiet, dark place and relax.<br>';
                                echo '* Be careful about using pain relievers every day, because over time this can make your childs headaches worse.<br>';
                                echo '* Give your child water, juice, and other drinks that do not contain caffeine.<br>';
                                echo '* This may help the headache go away faster. Water is the best choice. <br>';
                                echo '* Do not use heat on your childs head, because it can make the pain worse.<br>';
                                echo '* Gently massage your childs neck and shoulders.<br>';
                                echo '* Do not ignore new symptoms that occur with a headache<br>';
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