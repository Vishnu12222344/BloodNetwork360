<?php
// Start PHP code for handling form submission
include './bloodbank/connection.php';
$title = "Support Us";
$success_message = $error_message = "";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Support Us - Online Blood Bank</title>
    <link rel="stylesheet" href="css/home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        /* General Page Styles */
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            background-color: white;
        }
        header {
            text-align: center;
            margin-bottom: 20px;
        }
        header img.logo {
            width: 100px;
            margin: 10px;
        }
        nav ul {
            list-style-type: none;
            padding: 0;
            display: flex;
            justify-content: center;
            gap: 20px;
        }
        nav ul li {
            display: inline;
        }
        nav ul li a {
            text-decoration: none;
            color: black;
            
        }
        nav ul li a:hover {
            color: orange;
        }

        /* Glowing Title */
        @keyframes glow {
            0% { text-shadow: 0 0 10px red; }
            20% { text-shadow: 0 0 10px orange; }
            40% { text-shadow: 0 0 10px yellow; }
            60% { text-shadow: 0 0 10px green; }
            80% { text-shadow: 0 0 10px blue; }
            100% { text-shadow: 0 0 10px violet; }
        }
        @keyframes bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }
        .glowing-title {
            display: flex;
            justify-content: center;
            margin: 0;
            font-size: 2rem;
            font-weight: bold;
        }
        .glowing-title span {
            display: inline-block;
            animation: glow 2s infinite alternate, bounce 1.5s infinite;
        }
        .glowing-title span:nth-child(1) { color: red; }
        .glowing-title span:nth-child(2) { color: red; }
        .glowing-title span:nth-child(3) { color: red; }
        .glowing-title span:nth-child(4) { color: red; }
        .glowing-title span:nth-child(5) { color: red; }
        .glowing-title span:nth-child(13) { color: red; }
        .glowing-title span:nth-child(14) { color: red; }
        .glowing-title span:nth-child(15) { color: red; }


        /* Support Us Section Styles */
        .container {
            background-color: white;
            max-width: 800px;
            margin: auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .support-options {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }
        .support-option {
            border: 1px solid #ccc;
            padding: 20px;
            text-align: center;
            border-radius: 8px;
        }
        .support-option h3 {
            color: #d32f2f;
        }
        .support-option a {
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
        }
        .support-option img {
            width: 100%;
            height: 150px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 10px;
        }

        /* Form Styles */
        .form-group {
            margin-bottom: 15px;
        }
        input, select, textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        .button[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .button[type="submit"]:hover {
            background-color: #45a049;
        }
        .ii {
            text-align: center;
            color: green;
        }

        /* Success/Error Messages */
        .success { color: green; }
        .error { color: red; }
    </style>
</head>
<body>
    <header>
        <div id='logo1'><img src="images/image1.jpg" alt="Logo" class="logo"></div>
        <h1 class="glowing-title">
            <span>B</span><span>L</span><span>O</span><span>O</span><span>D</span><span>N</span><span>E</span><span>T</span><span>W</span><span>O</span><span>R</span><span>K</span><span>3</span><span>6</span><span>0</span>
        </h1>
    </header>

    <nav>
        <ul>
            <li><a href="./home.php">Home</a></li>
            <li><a href="./bloodbank/registrationform.php">Donate Blood</a></li>
            <li><a href="./appointment.php">Appointment</a></li>
            <li><a href="./supportus.php">Support Us</a></li>
            <li><a href="./Aboutus.php">About Us</a></li>
            <li><a href="./contactus.php">Contact Us</a></li>
            <li><a href="./bloodbank/view_donors.php">View Donors</a></li>
        </ul>
    </nav><br>

    <div class="container">
        <h1>Support Us - Make a Difference</h1>
        <p>Your support is vital to our mission of saving lives. Explore the ways you can contribute below:</p>

        <!-- Support Options -->
        <div class="support-options">
            <?php
            // Support options array with image paths
            $support_options = [
                ["title" => "Give a Financial Gift", "description" => "There are many ways to give a financial gift to help support our lifesaving mission and help community members in need.", "link" => "#financial-gift", "image" => "./images/financial_gift.jpg"],
                ["title" => "Volunteer Your Time", "description" => "Be the positive change in someone’s life! Volunteer with us to make a difference in the community.", "link" => "#volunteer", "image" => "./images/volunteer.avif"],
                ["title" => "Donate Blood", "description" => "Find a convenient donor center or blood drive near you, and schedule your lifesaving appointment today.", "link" => "./bloodbank/registrationform.php", "image" => "./images/Donate Blood.jpg"],
                ["title" => "Host a Blood Drive", "description" => "Sign up to host a Blood Drive with us! Support the health of your community and impact the lives of patients in need.", "link" => "#host-blood-drive", "image" => "./images/host_blood_drive.jpg"]
            ];

            // Generate support options with images
            foreach ($support_options as $option) {
                echo '<div class="support-option">';
                echo '<img src="' . $option["image"] . '" alt="' . $option["title"] . '">';
                echo '<h3>' . $option["title"] . '</h3>';
                echo '<p>' . $option["description"] . '</p>';
                echo '<a href="' . $option["link"] . '">Learn More</a>';
                echo '</div>';
            }
            ?>
        </div>

        <!-- Success/Error Message -->
        <?php if (!empty($success_message)): ?>
            <p class="success"><?php echo $success_message; ?></p>
        <?php elseif (!empty($error_message)): ?>
            <p class="error"><?php echo $error_message; ?></p>
        <?php endif; ?>

        <!-- Support Form -->
        <form action="" method="post">
            <div class="form-group">
                <label for="name">Your Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            
            <div class="form-group">
                <label for="email">Your Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            
            <div class="form-group">
                <label for="donation_type">Donation Type:</label>
                <select id="donation_type" name="donation_type" required>
                    <option value="blood">Blood Donation</option>
                    <option value="volunteer">Volunteer</option>
                    <option value="financial">Financial Donation</option>
                    <option value="spread_awareness">Spread Awareness</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="message">Message (Optional):</label>
                <textarea id="message" name="message"></textarea>
            </div>

            <div class="form-group">
                <input type="submit" value="Submit Support" name="sbt" class="button"/>
            </div>
        </form>
    </div>
</body>
<?php
if(isset($_POST['sbt'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $donationtype=$_POST['donation_type'];
    $message=$_POST['message'];
    $query="INSERT INTO supportus(user_name,user_email,donation_type,message1) VALUES ('$name','$email','$donationtype','$message')";
    $result=mysqli_query($con,$query);
    if($result){
        echo "<p class='ii'>Submitted Successfully</p>";
    }else{
        echo "Oop's Something went wrong";
    }
}
?>
</html>
