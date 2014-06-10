<?php

//set up random function
$randomChoice  = function($array) {return $array[array_rand($array)];};

//set up data matrix
$statement = ['I will be', 'I need to', 'I must', 'I have to'];
$action = ['work from home', 'wfh', 'come in at noon', 'spend my day on the couch','ooo today'];
$operator = ['due to','as a result of','because of','since I have this crap with' ];
$excuse = ['my dog walker being late', 'the lack of proper pants', 'cuccipox', 'zombies', 'Jury Duty', 'my third dentist appointment this week','child care',"a one night stand who just won't leave",'a terrible hangover','a suprise visit from my mother','I cannot stop vomiting',' shoveling for a while longer','snow',"The roads around my house haven't been plowed yet, so I'm stuck here",'trying to get rid of sore throat and ear',"The train I'm on broke down, waiting on the next train to push us in","Plumbers are here now.  Just referred to my sink as 'the sink from hell'.  If they're done before 10, I'll probably make it in.",'I have another doctor appointment'];
$close = ['!','?','...',"<eom>"];

//set up image list
$image = ['w','fbcdn-sphotos-c-a.akamaihd.net/hphotos-ak-ash3/t1/1505571_10101891487929963_2065050108_n.jpg','scontent-a-mia.xx.fbcdn.net/hphotos-ash2/t1/428841_10101472140300843_139453634_n.jpg','scontent-b-mia.xx.fbcdn.net/hphotos-prn2/t1/1384307_10151775979749010_1286460210_n.jpg','scontent-b-mia.xx.fbcdn.net/hphotos-ash3/t1/547835_10200167488364808_1495373769_n.jpg','scontent-b-mia.xx.fbcdn.net/hphotos-prn1/t1/41037_617280472838_1906670_n.jpg','pbs.twimg.com/profile_images/2236661645/cab.png','fbcdn-sphotos-d-a.akamaihd.net/hphotos-ak-ash4/t1/1385179_10153412392165113_224529396_n.jpg'.'scontent-b-mia.xx.fbcdn.net/hphotos-frc1/t1/1925298_10102085495861380_203332790_n.jpg','scontent-b-mia.xx.fbcdn.net/hphotos-prn2/t1/603155_10200625526705796_1989014551_n.jpg','scontent-b-mia.xx.fbcdn.net/hphotos-prn2/v/t35/1556977_10152239799352275_1763528645_o.jpg?oh=fa49f9a0640701903a64675e2a596ab3&oe=531449DB','scontent-a-mia.xx.fbcdn.net/hphotos-ash2/t1/247861_2004323955006_7442915_n.jpg'];

?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>WFH Generator</title>
        <meta name="description" content="A Simple Excuse Meme Generator">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <div class="header-container">
            <header class="wrapper clearfix">
                <h1 class="title">The WFH Generator</h1>
            </header>
        </div>

        <div class="main-container">
            <div class="main wrapper clearfix">

                <div class="meme_image" style="background:transparent url('https://<?php echo$randomChoice($image);?>') no-repeat scroll top left; background-size:cover;">
                    <p class="text_top"><?php echo$randomChoice($statement);?> <?php echo$randomChoice($action);?> <?php echo$randomChoice($operator);?><p>
                    <p class="text_bottom"><?php echo$randomChoice($excuse); echo $randomChoice($close);?></p>
                </div>

            </div> <!-- #main -->
        </div> <!-- #main-container -->

        <div class="footer-container">
            <footer class="wrapper">
                <h3>crafted with love. you're welcome.</h3>
            </footer>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>

        <script src="js/main.js"></script>
    </body>
</html>
