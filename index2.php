<?php 

/*
---------------
SETUP & CONFIG
---------------

Set up some shit for the database connection
and specify how many text fields our meme
needs to have.
 */


// DB Variables
$db = 'wfh_original';
$db_host = 'localhost';
$db_user = 'wfh';
$db_pass = 'wfh';

// DB Connection
$db_connect = new mysqli($db_host, $db_user, $db_pass, $db);

if($db_connect->connect_errno > 0){
    die('Unable to connect to database [' . $db->connect_error . ']');
}

// Total fields
$total_fields = 6;



/*
--------------
MEME GENERATOR
-------------- 

Look for any URL parameters that would tell
us if there are any text fields already defined. 
If there are, grab those values from the DB.

Otherwise, we grab a value at random from the DB. 

 */

for ($i=1; $i < $total_fields ; $i++) { 
	
	//Assign the URL parameter's value to a PHP variable
	$value_id = $_GET['v_'.$i];

	
	if(!$value_id){
		//If there's nothing there, we'll pull one at random from the DB
		$value = 'value_'.$i;
		$query = 'SELECT `'.$value.'`
					FROM `values`
					ORDER BY RAND()
					LIMIT 1';
	}else{
		//If there is a value_id contained in the request, query against that id
		$value = 'value_'.$i;
		$query = 'SELECT `'.$value.'`
					FROM `values`
					WHERE `id` = '.$value_id;
	}


	$result = mysqli_query($db_connect, $query) or die($db_connect->error.__LINE__);
	$row = $result->fetch_array(MYSQLI_NUM);
	$statement[] = $row[0];
}

//Build the right strings

$text_top = $statement[0].' '.$statement[1].' '.$statement[2];
$text_bottom = $statement[3].$statement[4];


//set up random function
$randomChoice  = function($array) {return $array[array_rand($array)];};
//set up image list
$image = ['fbcdn-sphotos-c-a.akamaihd.net/hphotos-ak-ash3/t1/1505571_10101891487929963_2065050108_n.jpg','scontent-a-mia.xx.fbcdn.net/hphotos-ash2/t1/428841_10101472140300843_139453634_n.jpg','scontent-b-mia.xx.fbcdn.net/hphotos-prn2/t1/1384307_10151775979749010_1286460210_n.jpg','scontent-b-mia.xx.fbcdn.net/hphotos-ash3/t1/547835_10200167488364808_1495373769_n.jpg','scontent-b-mia.xx.fbcdn.net/hphotos-prn1/t1/41037_617280472838_1906670_n.jpg','pbs.twimg.com/profile_images/2236661645/cab.png','fbcdn-sphotos-d-a.akamaihd.net/hphotos-ak-ash4/t1/1385179_10153412392165113_224529396_n.jpg'.'scontent-b-mia.xx.fbcdn.net/hphotos-frc1/t1/1925298_10102085495861380_203332790_n.jpg','scontent-b-mia.xx.fbcdn.net/hphotos-prn2/t1/603155_10200625526705796_1989014551_n.jpg','scontent-a-mia.xx.fbcdn.net/hphotos-ash2/t1/247861_2004323955006_7442915_n.jpg'];


?>


<!-- /*
--------------
HTML PAGE
-------------- 

Build us some HTML to reflect the meme. 


 */ -->

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
                    <p class="text_top"><?php echo $text_top; ?><p>
                    <p class="text_bottom"><?php echo $text_bottom; ?></p>
                </div>

            </div> <!-- #main -->
        </div> <!-- #main-container -->

        <div class="footer-container">
            <footer class="wrapper">
                <h3>meow.</h3>
            </footer>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>

        <script src="js/main.js"></script>
    </body>
</html>