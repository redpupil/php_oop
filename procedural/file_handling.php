<?php include 'inc/header.php'; ?>
<h2>Topics: Project List</h2>
<div class="content">
    <div class="topics">


    <?php
        //echo readfile("test.txt");
        $myfile = fopen("test.txt", "r") or die("Unable to open file!");
        echo fread($myfile, filesize("test.txt"));
        
        //read single line
        //echo fgets($myfile);
        
        //end of file -> feof(fileName)
        //echo feof($myfile);
        
        //read single character
        //echo fgetc($myfile);
        
        //fwrite() function is used to write to a file.
        $txt = "Khan";
        fwrite($myfile, $txt);
        
        //Close the file
        fclose($myfile);
    ?>
    </div>
</div>
<?php include 'inc/footer.php'; ?>