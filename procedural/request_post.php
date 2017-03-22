<?php include 'inc/header.php'; ?>
<h2>$_REQUEST & $_POST</h2>
<div class="content">
	<div class="topics">

        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            Name: <input type="text" name="fname">
            <input type="submit">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // collect value of input field
            $name = $_REQUEST['fname'];
            if (empty($name)) {
                echo "<span style='color:red'>Name is empty</span>";
            } else {
                echo "<span style='color:green'>Welcome ".$name."</span>";
            }
        }
        ?>


	</div>
</div>
<?php include 'inc/footer.php'; ?>