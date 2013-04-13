




<?php
//session_start();

//conect to server
$con = mysql_connect('localhost', 'jcollyer', 'jcollyer');
if (!$con) {
    die('mySQL not connected : ' . mysql_error());
    echo "mySQL not conncted";
}

// connect to database
$db_selected = mysql_select_db('pas', $con);
if (!$db_selected) {
    echo ('Can\'t use pas database : ' . mysql_error());
}

// connect to table 
$result = mysql_query("SELECT donation FROM twodollar order by donation desc limit 1");
if (!$result) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}
$row = mysql_fetch_row($result);

$value = $row[0]; 



 if (isset($_POST[submit])){
//echo "submit was posted";

		$sql = "INSERT INTO twodollar (donation)
	  	          VALUES
	    	        ('$_POST[donation]')";

	 		//$donation = $_POST['donation'];

	 		$result = mysql_query($sql);  //order executes
	 		if(!$result){
	 			 echo("<br> Input FAIL!"); 
	 		 }
	 		else{
	 		   	//echo("<br>Input data is succeed yha!");
	 		     header( 'Location: index.php' );
	 		     exit(); 
	 		}
	
}




mysql_close($con);
?>