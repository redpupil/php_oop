<?php include 'inc/header.php'; ?>
<h2>Topics: Project List</h2>
<div class="content">
    <div class="topics">


    <?php

    if (isset($_FILES['image'])) {
        $filename = $_FILES['image']['name'];
        $filetmp = $_FILES['image']['tmp_name'];
        move_uploaded_file($filetmp, "image_upload/".$filename);
        echo "Image uploaded successfully";
    }


    ?>
        <form method="post" action="" enctype="multipart/form-data">
            <input type="file" name="image">
            <input type="submit" value="Submit">
            
        </form>
    </div>
    
</div>
<?php include 'inc/footer.php'; ?>