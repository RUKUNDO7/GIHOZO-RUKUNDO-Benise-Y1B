<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST") {
        $favcolor = isset($_POST['favcolor']) ? htmlspecialchars($_POST['favcolor']) : 'No color selected';
        // Mapping of color hex codes to color names
      //  $colorNames = [
            '#ff0000' == 'Red';
            '#00ff00' == 'Green';
            '#0000ff' == 'Blue';
            '#ffff00' == 'Yellow';
            '#ffa500' == 'Orange';
            '#800080' == 'Purple';
            '#a72525' == 'Dark Red';
            // Add more colors as needed
        //];

        // Get the color name or use the hex code if not found
        //$colorName = isset($colorNames[strtolower($favcolor)]) ? $colorNames[strtolower($favcolor)] : 'Unknown Color';
        $username =htmlspecialchars($_POST['username']);
        $dateofbirth = isset($_POST['dateofbirth']) ? htmlspecialchars($_POST['dateofbirth']) : 'Not provided';
        $email =htmlspecialchars($_POST['email']);
        $phone =htmlspecialchars($_POST['phone']);
        $password =htmlspecialchars($_POST['password']);
        $age =htmlspecialchars($_POST['age']);
        $gender = htmlspecialchars($_POST['gender']);
        $interests = htmlspecialchars($_POST['interests']);
        $description = htmlspecialchars($_POST['description']);
        $timeofregistration = htmlspecialchars($_POST['timeofregistration']);
        $weekofregistration = htmlspecialchars($_POST['weekofregistration']);
        $message = htmlspecialchars($_POST['message']);
        $terms =isset($_POST['terms']) ? 'Agreed' : 'Not agreed';
        echo "<h2>Form Submission Details</h2>";
        echo "<table border='1'>
                <tr>
                   <th>Favorite color</th>
                   <th>Username</th>
                   <th>Email</th>
                   <th>Date of Birth(DoB)</th>
                   <th>Phone</th>
                   <th>Password</th>
                   <th>Age</th>
                   <th>Gender</th>
                   <th>Interests</th>
                   <th>Description</th>
                   <th>Time of Registration</th>
                   <th>Week of Registration</th>
                   <th>Message left behind by registrant</th>
                   <th>Terms</th>
                </tr>
                <tr>
                    <td>$favcolor</td>
                    <td>$username </td> 
                    <td>$email</td>
                    <td>$dateofbirth</td>
                    <td>$phone</td>
                    <td>$password</td>
                    <td>$age</td>
                    <td>$gender</td>
                    <td>$interests</td>
                    <td>$description</td>
                    <td>$timeofregistration</td>
                    <td>$weekofregistration</td>
                    <td>$message</td>
                    <td>$terms</td>
                </tr>
                </table>";   
                
    } else {
        echo "Invalid request method.";
    }
        
    ?>
    
</body>
</html>