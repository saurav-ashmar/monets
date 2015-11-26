<?php
    $uName  = $_POST['username'];
    $eMail  = $_POST['email'];
    $comment= $_POST['comment'];
    if(isset($_POST['notify_box'])){ $notify = $_POST['notify_box']; }
	
	
	echo "<br>Your Username: ". $uName;
	echo "<br>Your Email: ". $eMail;
	echo "<br>Your Comments: ". $comment;
    // send the data to the database
?>
