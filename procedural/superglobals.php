<?php

$x = 34;
$y = 54;

function sum() {
    $GLOBALS['z'] = $GLOBALS['x']+$GLOBALS['y'];
}
sum();
echo $z;


echo $_SERVER['SERVER_ADDR'];


?>


<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    Username: <input type="text" name="username">
    Password: <input type="password" name="pass">
    <input type="submit" value="Submit">
</form>


<?php
if ($_SERVER['REQUEST_METHOD'] == "POST" ) {
    $name = $_REQUEST['username'];
    if (empty($name)) {
        echo "<span style='color:red'>Please fill the username.</span>";
    } else {
        echo "<span style='color:green'>Your data is submitted </span>";
    }
}
?>

<?PHP
if ($_SERVER['REQUEST_METHOD'] =='POST') {
    $password = $_REQUEST['pass'];
    if (empty($password)) {
        echo 'No password';
    } else {
        echo 'Password submitted';
    }
}
?>