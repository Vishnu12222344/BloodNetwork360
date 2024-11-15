<?php
include './bloodbank/connection.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Blood Bank</title>
    <link rel="stylesheet" href="css/home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
</head>
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
        .button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
        @keyframes glow {
    0% { text-shadow: 0 0 10px red; }
    20% { text-shadow: 0 0 10px orange; }
    40% { text-shadow: 0 0 10px yellow; }
    60% { text-shadow: 0 0 10px green; }
    80% { text-shadow: 0 0 10px blue; }
    100% { text-shadow: 0 0 10px violet; }
}

@keyframes bounce {
    0%, 100% {
        transform: translateY(0);
    }
    50% {
        transform: translateY(-10px);
    }
}


.glowing-title {
    display: flex;
    justify-content: center;
    margin: 0;
}

.glowing-title span {
    font-size: rem;
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

    </style>
<body>
    <div>
    <header>
        <div id='logo1'><img src="images/image1.jpg" alt="Logo" class="logo"></div>
        <h1 class="glowing-title">
        <span>B</span><span>L</span><span>O</span><span>O</span><span>D</span><span>N</span><span>E</span><span>T</span><span>W</span><span>O</span><span>R</span><span>K</span><span>3</span><span>6</span><span>0</span>
    </h1>
    </header>
    </div><br>
    <nav>
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="./bloodbank/registrationform.php">Donate Blood</a></li>
            <li><a href="appointment.php">Appointment</a></li>
            <li><a href="supportus.php">Support Us</a></li>
            <li><a href="Aboutus.php">About Us</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
            <li><a href="./bloodbank/view_donors.php">View Donors</a></li>

        </ul>
    </nav><br>
    <img src="./images/appointment1.jpg"><br><br><br>
    <div class="container">
    <h2>Blood Donation Appointment Form</h2>
    <form action="appointment.php" method="post">
        <label for="donor_name">Full Name:</label>
        <input type="text" id="donor_name" name="donor_name" >

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" >

        <label for="phone">Phone Number:</label>
        <input type="tel" id="phone" name="phone" >

        <label for="blood_type">Blood Type:</label>
        <select id="blood_type" name="blood_type" >
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
        </select>

        <label for="appointment_date">Appointment Date:</label>
        <input type="date" id="appointment_date" name="appointment_date" >

        <label for="appointment_time">Appointment Time:</label>
        <input type="time" id="appointment_time" name="appointment_time" >

        <label for="message">Additional Message (optional):</label>
        <textarea id="message" name="message" name="message"></textarea>

    <input type="submit" class="button" name="submit" value="Book Appointment" />
    </form>
</div>
<?php
if(isset($_POST['submit'])){
    $fullname=$_POST['donor_name'];
    $useremail=$_POST['email'];
    $usermob=$_POST['phone'];
    $bloodtype=$_POST['blood_type'];
    $appointmentdate=$_POST['appointment_date'];
    $appointmenttime=$_POST['appointment_time'];
    $additionalmessage=$_POST['message'];
    $query="INSERT INTO  appointments(fullname,user_email,	user_mobile,bloodtype,appointmentdate,appointmenttime,additionlamessage) VALUES ('$fullname',' $useremail',' $usermob','$bloodtype','$appointmentdate',' $appointmenttime','$additionalmessage')";
    $result=mysqli_query($con,$query);
    if($result){
        echo "Saved ";
    }else{
        echo "Oop's";
    }



    }


?>


</body>
</html>