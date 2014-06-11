<?php 
/*
---------------
REQUIREMENTS
---------------

@file config.php
*/

require 'config.php';


//Grab item from 
$table = $_POST['table'];
$value = $_POST['value'];

if($table && $value){
	addItem($table,$value);
}

function addItem($table,$value){
	
	global $db_connect;
	$value = mysql_real_escape_string($value);

	if($table == 'images'){
		$query = 'INSERT INTO `'.$table.'` (url) VALUES ("'.$value.'")';
	}else{
		$query = 'INSERT INTO `'.$table.'` (text) VALUES ("'.$value.'")';	
	}

	$result = mysqli_query($db_connect, $query) or die($db_connect->error.__LINE__);
}
?>




<?php require 'views/header.php'  ?>
<div class="container manage">
	<form action="" method="POST" role="form">
		<legend>Add a new Statement item</legend>

		<div class="form-group">
			<label for="value">Statement</label>
			<input type="text" class="form-control" id="value" name="value" placeholder="something like 'I should'">
			<input type="hidden" id="table" name="table" value="statements">
		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>


	<form action="" method="POST" role="form">
		<legend>Add a new Action item</legend>

		<div class="form-group">
			<label for="value">Action</label>
			<input type="text" class="form-control" id="value" name="value" placeholder="something like 'work from home'">
			<input type="hidden" id="table" name="table" value="actions">
		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>


	<form action="" method="POST" role="form">
		<legend>Add a new Operator item</legend>

		<div class="form-group">
			<label for="value">Operator</label>
			<input type="text" class="form-control" id="value" name="value" placeholder="something like 'becuase' ">
			<input type="hidden" id="table" name="table" value="operators">
		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>


	<form action="" method="POST" role="form">
		<legend>Add a new Excuse item</legend>

		<div class="form-group">
			<label for="value">Excuse</label>
			<input type="text" class="form-control" id="value" name="value" placeholder="something like 'cuccipox' ">
			<input type="hidden" id="table" name="table" value="excuses">
		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>


	<form action="" method="POST" role="form">
		<legend>Add a new Ending item</legend>

		<div class="form-group">
			<label for="value">Ending</label>
			<input type="text" class="form-control" id="value" name="value" placeholder="something like '!' ">
			<input type="hidden" id="table" name="table" value="endings">
		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>

	<form action="" method="POST" role="form">
		<legend>Add a new Image URL</legend>

		<div class="form-group">
			<label for="value">Image URL</label>
			<input type="text" class="form-control" id="value" name="value" placeholder="make it a sexy one ">
			<input type="hidden" id="table" name="table" value="images">
		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>

<?php require 'views/footer.php'  ?>




