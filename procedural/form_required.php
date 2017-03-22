<?php 
include 'inc/header.php'; 
$errname=$erremail=$errwebsite =$errcomment=$errgender = '';//Flag variable->initialize with empty value
?>
<?php
    $username = $useremail = $userwebsite = $usercomment=$usergender='';//Flag variable->initialize with empty value

    if($_SERVER['REQUEST_METHOD'] == "POST"){

        if (empty($_POST['name'])) {
            $errname = "<span style='color:red'>Name requried</span>";
        } else {
            $username = validate($_POST['name']);
        }


        if (empty($_POST['email'])) {
            $erremail = "<span style='color:red'>E-mail requried</span>";
        } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL )) {
            $erremail = "<span style='color:red'>Invalid email format</span>";
        } else {  
            $useremail      = validate($_POST['email']);
        }
        
        
        if (empty($_POST['website'])) {
            $errwebsite = "<span style='color:red'>URL requried</span>";
        } elseif (!filter_var($_POST['website'], FILTER_VALIDATE_URL)) {
            $errwebsite = "<span style='color:red'>Bad URL!</span>";
        } else {
            $userwebsite    = validate($_POST['website']);
        }
        

        if (empty($_POST['gender'])) {
            $errgender = "<span style='color:red'>Gender requried</span>";
        }   else {  
            $usergender     = validate($_POST['gender']);
        }
               
        $usercomment    = validate($_POST['comment']);

    }

    function validate($data) {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }


?>

<h2>Topics: Form Validation</h2>
<div class="content">
    <div class="topics">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <table>
            <p style="color: red">* Required field</p>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" >*<?php echo $errname;?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email">*<?php echo $erremail;?></td>
            </tr>
            <tr>
                <td>Website</td>
                <td><input type="text" name="website">*<?php echo $errwebsite;?></td>
            </tr>
            <tr>
                <td>Comment</td>
                <td><textarea name="comment" rows="5" cols="40"></textarea></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>
                    <input type="radio" name="gender" value="female">Female
                    <input type="radio" name="gender" value="male">Male *<?php echo $errgender;?>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Submit"></td>
            </tr>
        </table> 
        </form>
            
    </div>
</div>
<?php include 'inc/footer.php'; ?>