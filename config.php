<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "indian_bank";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>

<script>
    
    $(document).ready(function () {
        $("a, :submit").click(function(){
            $(".spinner").css("display","block");
            setTimeout(function() {   //calls click event after a certain time
                $(".spinner").css("display","none");
        }, 5000);
        });
    });
</script>
