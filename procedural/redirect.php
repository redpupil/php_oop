<?php
    function redirect_to($location)
    {
        header("Location: " . $location);
        exit;
    }
	//redirect_to("hello.php");
    $logged_in = $_GET["logged_in"];

    if ($logged_in == 1){
        redirect_to("hello.php");
    } else{
        redirect_to("index.php");
    }

?>



<!DOCTYPE html>

<head>
<meta charset=utf-8" />
<title>Redirect</title>
</head>

<body>

<?php

function funcName($parameter){

    //function body

    }

?>

</body>
</html>