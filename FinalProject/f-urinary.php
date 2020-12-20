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
                                echo '<h4><b>Urinary tract infection (UTI)</b></h4>';
                                echo 'A urinary tract infection (UTI) is an infection in any part of your urinary system your kidneys,<br> ';
                                echo 'ureters, bladder and urethra. Most infections involve the lower urinary tract — the bladder and the urethra.<br>';
                                echo 'Women are at greater risk of developing a UTI than are men.<br><br>'; 
                                echo ' <h4><b>Treatment</b></h4>';
                                echo '* Wear cotton underpants and avoid very tight-fitting jeans and other pants<br>';
                                echo '* Avoid bubble baths, perfumed soaps, and other substances that can irritate the genitals and urethra.<br>';
                                echo '* After swimming, change into dry clothes instead of sitting around in a wetsuit.<br>';
                                echo '* Avoid foods and beverages that can cause bladder irritation. Common offenders include colas<br>';
                                echo '* and other caffeinated drinks, chocolate, and some spices.<br>';
                                echo '<br><hr noshade size="15" color= red ><br>';
                                echo '<h4><b>Hemolytic uremic syndrome (HUS)</b></h4>';
                                echo 'Hemolytic uremic syndrome (HUS) is a condition that can occur when the small blood vessels in your kidneys<br> ';
                                echo 'become damaged and inflamed. This damage can cause clots to form in the vessels. <br>';
                                echo 'The clots clog the filtering system in the kidneys and lead to kidney failure<br><br>'; 
                                echo ' <h4><b>Treatment</b></h4>';
                                echo '* Be careful when handling raw meat that may contain E. coli. Wash your hands and all surfaces.<br>';
                                echo '* Don’t cross-contaminate clean surfaces.<br>';
                                echo '* Thoroughly cook all foods that may contain E. coli. Hamburger meat is a common source of E. coli.<br>';
                                echo '* Don’t let your child drink unpasteurized juices or milk.<br>';
                                echo '* Have your child wash their hands before eating and after using the bathroom.<br>';
                                echo '* Do nott swim in unclean swimming areas.<br>';
                                echo '<br><hr noshade size="15" color= red ><br>';
                                echo '<h4><b>Kidney infection</b></h4>';
                                echo 'Kidney infection (pyelonephritis) is a type of urinary tract infection (UTI) that generally begins<br> ';
                                echo 'in your urethra or bladder and travels to one or both of your kidneys.<br>';
                                echo ' <h4><b>Treatment</b></h4>';
                                echo '* Give your child antibiotics as directed. Do not stop using them just because your child feels better.<br>';
                                echo '* Have your child drink plenty of water each day. This helps your child urinate often, which clears bacteria from the system.<br>';
                                echo '* Have your child urinate often. Your child should try to empty his or her bladder each time.br>';
                                echo '* To relieve pain, have your child take a hot bath, or lay a hot water bottle over your childs lower belly<br>';
                                echo '* Be safe with medicines. Read and follow all instructions on the label.<br>';
                            }
                            else 
                            {
                                echo '<h4><b>Kidney infection</b></h4>';
                                echo 'Kidney infection (pyelonephritis) is a type of urinary tract infection (UTI) that generally begins<br> ';
                                echo 'in your urethra or bladder and travels to one or both of your kidneys.<br>';
                                echo ' <h4><b>Treatment</b></h4>';
                                echo '* Give your child antibiotics as directed. Do not stop using them just because your child feels better.<br>';
                                echo '* Have your child drink plenty of water each day. This helps your child urinate often, which clears bacteria from the system.<br>';
                                echo '* Have your child urinate often. Your child should try to empty his or her bladder each time.br>';
                                echo '* To relieve pain, have your child take a hot bath, or lay a hot water bottle over your childs lower belly<br>';
                                echo '* Be safe with medicines. Read and follow all instructions on the label.<br>';
                                echo '<br><hr noshade size="15" color= red ><br>';
                                echo '<h4><b>Urinary tract infection (UTI)</b></h4>';
                                echo 'A urinary tract infection (UTI) is an infection in any part of your urinary system your kidneys,<br> ';
                                echo 'ureters, bladder and urethra. Most infections involve the lower urinary tract — the bladder and the urethra.<br>';
                                echo 'Women are at greater risk of developing a UTI than are men.<br><br>'; 
                                echo ' <h4><b>Treatment</b></h4>';
                                echo '* Wear cotton underpants and avoid very tight-fitting jeans and other pants<br>';
                                echo '* Avoid bubble baths, perfumed soaps, and other substances that can irritate the genitals and urethra.<br>';
                                echo '* After swimming, change into dry clothes instead of sitting around in a wetsuit.<br>';
                                echo '* Avoid foods and beverages that can cause bladder irritation. Common offenders include colas<br>';
                                echo '* and other caffeinated drinks, chocolate, and some spices.<br>';
                                echo '<br><hr noshade size="15" color= red ><br>';
                                echo '<h4><b>Hemolytic uremic syndrome (HUS)</b></h4>';
                                echo 'Hemolytic uremic syndrome (HUS) is a condition that can occur when the small blood vessels in your kidneys<br> ';
                                echo 'become damaged and inflamed. This damage can cause clots to form in the vessels. <br>';
                                echo 'The clots clog the filtering system in the kidneys and lead to kidney failure<br><br>'; 
                                echo ' <h4><b>Treatment</b></h4>';
                                echo '* Be careful when handling raw meat that may contain E. coli. Wash your hands and all surfaces.<br>';
                                echo '* Don’t cross-contaminate clean surfaces.<br>';
                                echo '* Thoroughly cook all foods that may contain E. coli. Hamburger meat is a common source of E. coli.<br>';
                                echo '* Don’t let your child drink unpasteurized juices or milk.<br>';
                                echo '* Have your child wash their hands before eating and after using the bathroom.<br>';
                                echo '* Do nott swim in unclean swimming areas.<br>';
 
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