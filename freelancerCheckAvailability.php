<?php 
require_once("includes/config.php");
if(!empty($_POST["emailaddress"])) {
	$emailaddress= $_POST["emailaddress"];
	
		$result =mysqli_query($con,"SELECT emailaddress FROM freelancer WHERE emailaddress='$emailaddress'");
		$count=mysqli_num_rows($result);
if($count>0)
{
echo "<span style='color:red'> Email Address already exists.</span>";
echo "<script>$('#submit').prop('disabled',true);</script>";
} else{
	echo "<script>$('#submit').prop('disabled',false);</script>";
}

}


?>
