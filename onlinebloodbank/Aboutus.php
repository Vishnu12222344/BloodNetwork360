<?php
$title = "About Us";
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
    .container {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: flex-start;
        max-width: 1200px; /* Adjust as needed */
        margin: 0 auto;
        padding: 20px;
    }

    .text-section {
        flex: 1; /* Allows text section to take available space */
        padding-right: 20px; /* Space between text and images */
    }

    .image-section {
        flex: 0 0 300px; /* Fixed width for image section */
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .image-section img {
        max-width: 100%; /* Responsive image */
        margin-bottom: 10px; /* Space between images */
    }

    h1, h2 {
        color: #2c3e50; /* Heading color */
    }

    p, li {
        color: #34495e; /* Text color */
        line-height: 1.6; /* Improved readability */
    }

    ul {
        list-style-type: disc;
        padding-left: 20px; /* Indentation for list */
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
.glowing-title span:nth-child(6) { color: white; }
.glowing-title span:nth-child(7) { color: white; }
.glowing-title span:nth-child(8) { color: white; }
.glowing-title span:nth-child(9) { color: white; }
.glowing-title span:nth-child(10) { color: white; }
.glowing-title span:nth-child(11) { color: white; }
.glowing-title span:nth-child(12) { color: white; }
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


<div class="container">
    <div class="text-section">
        
        <h2>Welcome to BloodNetwork360</h2>
        <p>At BloodNetwork360, we are dedicated to saving lives through the power of blood donation. Our mission is to connect generous donors with patients in need, ensuring that every individual has access to safe and life-saving blood products.</p>
        
        <h2>Our Vision</h2>
        <p>We envision a world where every patient receives the blood they need, when they need it. By leveraging technology and community engagement, we strive to eliminate shortages and create a sustainable network of donors.</p>
        
        <h2>What We Do</h2>
        <ul>
            <li><strong>Connect Donors and Recipients:</strong> We provide a user-friendly interface for donors to schedule appointments, find donation events, and learn about their blood type's impact.</li>
            <li><strong>Educate and Inform:</strong> We offer resources and information on the importance of blood donation, the donation process, and how to encourage others to give.</li>
            <li><strong>Support Healthcare Providers:</strong> We collaborate with hospitals and clinics to ensure that they have a steady supply of blood products for their patients.</li>
        </ul>
        
        <h2>Why Choose Us?</h2>
        <ul>
            <li><strong>Safety First:</strong> We adhere to the highest standards of safety and quality in blood collection and processing, ensuring that every donation is handled with care.</li>
            <li><strong>Community Focused:</strong> We are committed to building a strong community of donors, volunteers, and supporters. Together, we can make a difference in the lives of many.</li>
            <li><strong>Transparent Impact:</strong> We believe in transparency and keep our donors informed about how their contributions are making a difference.</li>
        </ul>
        
        <h2>Join Us</h2>
        <p>Join us in our mission to save lives. Whether you’re a first-time donor or a seasoned veteran, every drop counts. Sign up today and help us create a healthier tomorrow.</p>

        <p>Thank you for being a part of our community.</p>
    </div>

    <div class="image-section">
        <img src="./images/bde1.jpg" alt="Blood Donation Event" />
        <img src="./images/image2.png" alt="Community Support" />
        <img src="./images/image4.jpg" alt="Healthy Blood" />
    </div>
    
</div>
