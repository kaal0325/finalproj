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
                                echo '<h4><b>Viral gastroenteritis (stomach flu)</b></h4>';
                                echo 'Viral gastroenteritis is an intestinal infection marked by watery diarrhea.<br> ';
                                echo 'abdominal cramps, nausea or vomiting, and sometimes fever.<br>';
                                echo ' <h4><b>Treatment</b></h4>';
                                echo '* Let the stomach settle. Stop eating solid foods for a few hours.<br>';
                                echo '* Try sucking on ice chips or taking small sips of water..<br>';
                                echo '* Ease back into eating.<br>';
                                echo '* Avoid certain foods and substances until the child feels better.<br>';
                                echo '* Get plenty of rest, Be cautious with medications.  ';
                                echo '<br><hr noshade size="15" color= red ><br>';
                                echo '<h4><b>Appendicitis</b></h4>';
                                echo 'Appendicitis is an inflammation of the appendix, a finger-shaped pouch that projects from your colon on the lower right side of your abdomen.<br> ';
                                echo 'Appendicitis causes pain in your lower right abdomen. <br>';
                                echo 'Most often it occurs in people between the ages of 10 and 30.<br><br>'; 
                                echo ' <h4><b>Treatment</b></h4>';
                                echo '* Drink ginseng tea twice a day till you notice some relief in pain.<br>';
                                echo '* Vegetable juices like carrot juice, cucumber, and beetroot juice can work wonders in treating appendicitis pain for the child<br>';
                                echo '* Drink this juice twice daily to get relief from appendix pain.<br>';
                                echo '* Foods that need to avoid: <br>';
                                echo '* High fat, high sugar food, Aerated drinks, Processed food.<br>';
                                echo '* Beans, broccoli, and vegetables that form gas, Bakery items made from refined flour.<br>';
                                echo '* Spicy and fried food, Alcohol and caffeine.<br>';
                                echo '<br><hr noshade size="15" color= red ><br>';
                                echo '<h4><b>Motion sickness: First aid</b></h4>';
                                echo 'Motion sickness is a sensation of dizziness. <br> ';
                                echo 'It usually occurs when youre traveling by car, boat, plane, or train.<br>';
                                echo 'Your bodys sensory organs send mixed messages to your brain, causing dizziness, lightheadedness, or nausea. <br>'; 
                                echo 'Some people learn early in their lives that they are prone to the condition.<br><br>';
                                echo ' <h4><b>Treatment</b></h4>';
                                echo '* Reduce sensory input.<br>';
                                echo '* Encourage your child to look at things outside the car rather than focusing on books, games or screens.<br>';
                                echo '* If your child naps, traveling during nap time might help. <br>';
                                echo '* Carefully plan pre-trip meals.<br>';
                                echo '* Do not give your child a large meal immediately before or during car travel.<br>';
                                echo '* Provide air ventilation. Adequate air ventilation might help prevent car sickness.<br>';
                                echo '* Offer distractions. If your child is prone to car sickness, try distracting him or her during car trips<br>';
                                echo '* Use medication.<br>';
                            }
                            else 
                            {
                                echo '<h4><b>Motion sickness: First aid</b></h4>';
                                echo 'Motion sickness is a sensation of dizziness. <br> ';
                                echo 'It usually occurs when youre traveling by car, boat, plane, or train.<br>';
                                echo 'Your bodys sensory organs send mixed messages to your brain, causing dizziness, lightheadedness, or nausea. <br>'; 
                                echo 'Some people learn early in their lives that they are prone to the condition.<br><br>';
                                echo ' <h4><b>Treatment</b></h4>';
                                echo '* Reduce sensory input.<br>';
                                echo '* Encourage your child to look at things outside the car rather than focusing on books, games or screens.<br>';
                                echo '* If your child naps, traveling during nap time might help. <br>';
                                echo '* Carefully plan pre-trip meals.<br>';
                                echo '* Do not give your child a large meal immediately before or during car travel.<br>';
                                echo '* Provide air ventilation. Adequate air ventilation might help prevent car sickness.<br>';
                                echo '* Offer distractions. If your child is prone to car sickness, try distracting him or her during car trips<br>';
                                echo '* Use medication.<br>';
                                echo '<h4><b>Food Poisoning</b></h4>';
                                echo 'Food poisoning, also called foodborne illness, is illness caused by eating contaminated food<br> ';
                                echo 'Infectious organisms including bacteria, viruses and parasites or. <br>';
                                echo 'their toxins are the most common causes of food poisoning..<br><br>'; 
                                echo ' <h4><b>Treatment</b></h4>';
                                echo '* Let the stomach settle.<br>';
                                echo '* After experiencing the most explosive symptoms of food poisoning,<br>';
                                echo '* like vomiting, diarrhea, and upset stomach, experts recommend letting the stomach rest.<br>';
                                echo '* that means avoiding food and drink altogether for a few hours.<br>';
                                echo '* Stay hydrated - Liquid intake is crucial for helping the body fight off food poisoning effects<br>';
                                echo '* Vomiting and diarrhea can cause dehydration, so sucking on ice chips or taking small sips of water is a good starting point.<br>';
                                echo '<br><hr noshade size="15" color= red ><br>';
                                echo '<h4><b>Viral gastroenteritis (stomach flu)</b></h4>';
                                echo 'Viral gastroenteritis is an intestinal infection marked by watery diarrhea.<br> ';
                                echo 'abdominal cramps, nausea or vomiting, and sometimes fever.<br>';
                                echo ' <h4><b>Treatment</b></h4>';
                                echo '* Let the stomach settle. Stop eating solid foods for a few hours.<br>';
                                echo '* Try sucking on ice chips or taking small sips of water..<br>';
                                echo '* Ease back into eating.<br>';
                                echo '* Avoid certain foods and substances until the child feels better.<br>';
                                echo '* Get plenty of rest, Be cautious with medications.  ';

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