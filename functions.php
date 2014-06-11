<?php 

/*
---------------
REQUIREMENTS
---------------
*/

require 'config.php';


/*
--------------
MEME GENERATOR
-------------- 

Section contains three functions:

getMeme() is a controller/dispatch function
newMeme() generates a random meme and checks for uniqueness
pullMeme() displays an existing meme given an ID
buildMeme() is a helper function to build the actual meme HTML

 */

// Determine if the HTTP request contains an ID for an existing meme and then dispatch to the right handler
function getMeme(){
	$meme_id = $_GET['mid'];

	if(isset($meme_id)){
		pullMeme($meme_id);
	}else{
		newMeme();
	}
}


// Generate a random meme, check if it's a new one, and store in the DB if it is. 
function newMeme(){

	//Grab some globals from config
	global $text_fields;
	global $db_connect;

	//Grab us an image from the DB
	$img_query = "SELECT * FROM `images` ORDER BY RAND() LIMIT 1";
	$img_result = mysqli_query($db_connect, $img_query) or die($db_connect->error.__LINE__);
	$img_row = $img_result->fetch_array(MYSQLI_ASSOC);
	$img_src = $img_row['url'];

	//Grab us our text values from the DB
	foreach ($text_fields as $text_field) {
		$text_query = "SELECT * FROM `".$text_field."` ORDER BY RAND() LIMIT 1";
		$text_result = mysqli_query($db_connect, $text_query) or die($db_connect->error.__LINE__);
		$text_row = $text_result->fetch_array(MYSQLI_ASSOC);
		$text_array[] = mysql_real_escape_string($text_row['text']);
	}

	//Check if this fucker is unique
	$meme_dup_query = "SELECT * FROM `memes` WHERE 
							`image` = '".$img_src."' AND 
							`statement` = '".$text_array[0]."' AND
							`action` = '".$text_array[1]."' AND
							`operator` = '".$text_array[2]."' AND
							`excuse` = '".$text_array[3]."' AND
							`ending` = '".$text_array[4]."'
						LIMIT 1";
	$meme_dup_result = mysqli_query($db_connect, $meme_dup_query) or die($db_connect->error.__LINE__);
	$meme_dup_count = $meme_dup_result->num_rows;
	$meme_dup_array = $meme_dup_result->fetch_array(MYSQLI_ASSOC);

	
	//If it's unique, store it for later
	if($meme_dup_count == 0){
		$meme_query = "INSERT INTO `memes` VALUES ('','".$img_src."','".$text_array[0]."','".$text_array[1]."','".$text_array[2]."','".$text_array[3]."','".$text_array[4]."','')";
		$meme_result = mysqli_query($db_connect, $meme_query) or die($db_connect->error.__LINE__);
		$meme_id  = mysqli_insert_id($db_connect);
		$new_meme_query = "SELECT * FROM `memes` WHERE `id` = '".$meme_id."'";
		$meme_result = mysqli_query($db_connect, $new_meme_query) or die($db_connect->error.__LINE__);
		$meme_array = $meme_result->fetch_array(MYSQLI_ASSOC);
	}else{
		$meme_array = $meme_dup_array;
	}

	//Build us some meme to display
	buildMeme($meme_array);
}


// Pull an existing meme from the DB
function pullMeme($meme_id){
	global $db_connect;

	$meme_query = "SELECT * FROM `memes` WHERE `id` = '".$meme_id."'";
	$meme_result = mysqli_query($db_connect, $meme_query) or die($db_connect->error.__LINE__);
	$meme_array = $meme_result->fetch_array(MYSQLI_ASSOC);

	//Build us some meme to display
	buildMeme($meme_array);

}

// Construct the HTML content for our meme
function buildMeme($meme_array){

	global $base_url;

	//Pull my values from the array
	$meme_id = $meme_array['id'];
	$img_src = $meme_array['image'];
	$statement = $meme_array['statement'];
	$action = $meme_array['action'];
	$operator = $meme_array['operator'];
	$excuse = $meme_array['excuse'];
	$ending = $meme_array['ending'];

	//Build the HTML
	$html = '
	<div class="meme_image" style="background:transparent url('.$img_src.') no-repeat scroll top left; background-size:cover;">
        <p class="text_top">'.$statement.' '.$action.' '.$operator.'<p>
        <p class="text_bottom">'.$excuse.' '.$ending.'</p>
    </div>

    <a href="'.$base_url.'/index.php?mid='.$meme_id.'"> Permalink </a>
    <a href="'.$base_url.'"> New Meme </a>
    ';

    //Spit that shit out
    echo $html;
}

?>