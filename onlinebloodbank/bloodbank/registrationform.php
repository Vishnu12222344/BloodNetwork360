<?php
include 'connection.php';

if (isset($_POST['register_btn'])) {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $dob=$_POST['dob'];
    $gender=$_POST['gender'];
    $blood=$_POST['blood_type'];
    $donation_date=$_POST['last_donation'];
    $query="INSERT INTO donors(username,email,user_phone,user_address,blood_type,user_dob,gender,donation_date) VALUES ('$name','$email','$phone','$address','$blood','$dob','$gender','$donation_date')";
      
    $result = mysqli_query($con, $query);

    if ($result) {
        echo "<div class='alert alert-success'>Donor registered successfully!</div>";
        header("Location: ../home.php");
    } else {
        echo "<div class='alert alert-danger'>Error: " . mysqli_error($con) . "</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Donor Registration</title>
    <link rel="stylesheet" href="./registrationform.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        .container {
            background-color: white;
            max-width: 600px;
            margin: auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
        }
        input, select, textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
        .bgr{
            background-image:url("../images/background.jpg");
            padding:20px;
            border-radius:10px;
        }
    </style>
</head>
<body>

<div>
    <header>
        <div id='logo1'><img src="../images/image1.jpg" alt="Logo" class="logo"></div>
        <h1 class="glowing-title">
            <span>B</span><span>L</span><span>O</span><span>O</span><span>D</span><span>N</span><span>E</span><span>T</span><span>W</span><span>O</span><span>R</span><span>K</span><span>3</span><span>6</span><span>0</span>
        </h1>
    </header>
</div><br>
<nav>
    <ul>
        <li><a href="../home.php">Home</a></li>
        <li><a href="registrationform.php">Donate Blood</a></li>
        <li><a href="../appointment.php">Appointment</a></li>
        <li><a href="../supportus.php">Support Us</a></li>
        <li><a href="../Aboutus.php">About Us</a></li>
        <li><a href="../contactus.php">Contact Us</a></li>
        <li><a href="./view_donors.php">View Donors</a></li>

    </ul>
</nav><br>
<div class="bgr">
<div class="container">
    <h2>Blood Donor Registration Form</h2>
    <form action="" method="post">
        <label for="name">Full Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="phone">Phone Number:</label>
        <input type="tel" id="phone" name="phone" required>

        <label for="blood_type">Blood Type:</label>
        <select id="blood_type" name="blood_type" required>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
        </select>

        <label for="address">Address:</label>
        <textarea id="address" name="address" required></textarea>

        <label for="gender">Gender:</label>
        <select id="gender" name="gender" required>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
        </select>

        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="dob" required>

        <label for="last_donation">Last Donation Date (optional):</label>
        <input type="date" id="last_donation" name="last_donation">

        <button type="submit" name="register_btn">Register</button>
    </form>
</div>
    </div>
</body>
</html>
