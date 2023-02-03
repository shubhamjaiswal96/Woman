<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "woman";

$con = mysqli_connect($server,$user,$password,$db);

if ($con){ 
	?>
	<script>
		alert('Connection succesfully');
	</script>
	<?php

}else{
	?>
	<script>
		alert(' No connection succesfully');
	</script>
	<?php
}

?>
