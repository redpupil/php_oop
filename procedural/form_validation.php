<?php include 'inc/header.php'; ?>
<h2>Topics: Form Validation</h2>
<div class="content">
	<div class="topics">
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <table>
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name" required></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="email"></td>
                </tr>
                <tr>
                    <td>Website</td>
                    <td><input type="text" name="website"></td>
                </tr>
                <tr>
                    <td>Comment</td>
                    <td><textarea name="comment" rows="5" cols="40"></textarea></td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>
                        <input type="radio" name="gender" value="female">Female
                        <input type="radio" name="gender" value="male">Male
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit" value="Submit"></td>
                </tr>
            </table> 
            </form>
            <?php
                $username = $useremail = $userwebsite = $usercomment=$usergender='';//Flag variable->initialize with empty value
                if($_SERVER['REQUEST_METHOD'] == "POST"){
                    $username       = validate($_POST['name']);
                    $useremail      = validate($_POST['email']);
                    $userwebsite    = validate($_POST['website']);
                    $usercomment    = validate($_POST['comment']);
                    $usergender     = validate($_POST['gender']);
                    
                    echo 'Name: '.$username.'<br/>';
                    echo 'Email: '.$useremail.'<br/>';
                    echo 'Website: '.$userwebsite.'<br/>';
                    echo 'Comment: '.$usercomment.'<br/>';
                    echo 'Gender: '.$usergender;
                }
                
                function validate($data) {
                    $data = trim($data);
                    $data = stripcslashes($data);
                    $data = htmlspecialchars($data);
                    return $data;
                }
                
                
            ?>
	</div>
</div>
<?php include 'inc/footer.php'; ?>