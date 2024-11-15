<?php
session_start();

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Blood Bank</title>
    <link rel="stylesheet" href="css/home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .content-container {
            display: flex;
            justify-content: flex-start;
            align-items: center;
            margin: 20px;
        }
        .content-container .info {
            width: 60%; /* Adjust the width of the text content */
        }
        .content-container img {
            width: 40%; /* Adjust the width of the image */
            height: 400px;
            margin-left: 20px; /* Space between image and text */
        }
        .content-container h2 {
            margin-bottom: 15px;
        }

        /* Adjust margin for image on left layout */
        .content-container.image-left img {
            margin-right: 20px; /* Space between image and text */
            margin-left: 0; /* Remove left margin for image on left */
        }

        /* Adjust order for text on left layout */
        .content-container.image-left .info {
            order: 2; /* Ensure the text comes after the image */
        }

        /* Adjust order for image on left layout */
        .content-container.image-left img {
            order: 1; /* Image comes first */
        }

        /* Styles for blood donation types */
        .tab-content {
            margin-top: 20px;
            border: 1px solid #ced4da;
            border-radius: 5px;
            background-color: #ffffff; /* White background for content */
            padding: 20px;
        }
        .tab-pane {
            padding: 15px;
        }
        .tab-content h2 {
            margin-top: 20px;
            margin-bottom: 15px;
        }
        .tab-content p {
            margin-bottom: 15px;
        }

        /* New styles for side-by-side layout */
        .question-answer {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
            border: 1px solid #ced4da;
            border-radius: 5px;
            padding: 15px;
        }
        .question-answer .question,
        .question-answer .answer {
            width: 48%; /* Adjusted to leave space between question and answer */
        }
    </style>
</head>
<body>
    <div>
    <header>
    <div id='logo1'><img src="images/image1.jpg" alt="Logo" class="logo"></div>
    <h1 class="glowing-title">
        <span>B</span><span>L</span><span>O</span><span>O</span><span>D</span><span>N</span><span>E</span><span>T</span><span>W</span><span>O</span><span>R</span><span>K</span><span>3</span><span>6</span><span>0</span>
    </h1>
    <?php
    echo $_SESSION["user"]."<br>";
    ?>

    <form method="POST" action="logout.php">
        <button type="submit" class="btn btn-danger">Logout</button>
    </form>
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
    
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-interval="1500">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./images/image2.jpg" class="d-block w-100" alt="First slide" />
                <div class="carousel-caption d-none d-md-block"></div>
            </div>
            <div class="carousel-item">
                <img src="./images/image2.jpg" class="d-block w-100" alt="Second slide" />
                <div class="carousel-caption d-none d-md-block"></div>
            </div>
            <div class="carousel-item">
                <img src="./images/image2.jpg" class="d-block w-100" alt="Third slide" />
                <div class="carousel-caption d-none d-md-block"></div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    
    <div class="container">
        <div class="content-container image-left">
            <?php
            $image_path = "images/slide1.jpg"; 
            echo "<img src='$image_path' alt='Blood Bank'>";
            ?>
            <div class="info">
                <?php
                $title = "Why Donate Blood?";
                $description = "Helps patients
                Blood is needed by patients with conditions like sickle cell disease, thalassemia, and hemophilia, as well as those undergoing surgery or recovering from injuries. Blood donations can also help cancer patients, burn victims, and heart surgery patients.<br><br>
                Saves multiple lives:<br>
                A single donation can save up to three lives. When separated into its components, blood can be used to help multiple people.<br><br>
                Improves health:<br>
                Donating blood can improve your health. The body's process of replacing blood cells can stimulate hair follicles, which may encourage new hair growth. <br><br>
                Simple procedure:<br>
                Donating blood is a safe and simple procedure. The donation itself is quick, but you should plan to spend about an hour at the donation center. <br><br>
                ";
                echo "<h2>$title</h2>";
                echo "<p>$description</p>";
                ?>
            </div>
        </div>
        
        <div class="content-container">
        <div class="info">
        <h2 style="color: orange;">Compatible Blood Type Donors</h2>
        <table class="table table-bordered">
            <thead>
                <tr style="background-color: red; color: white;">
                    <th>Blood Type</th>
                    <th>Donate Blood To</th>
                    <th>Receive Blood From</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>A+</td>
                    <td>A+ AB+</td>
                    <td>A+ O- O-</td>
                </tr>
                <tr>
                    <td>O+</td>
                    <td>O+ A+ B+ AB+</td>
                    <td>O-</td>
                </tr>
                <tr>
                    <td>B+</td>
                    <td>B+ AB+</td>
                    <td>B- O-</td>
                </tr>
                <tr>
                    <td>AB+</td>
                    <td>AB+</td>
                    <td>Everyone</td>
                </tr>
                <tr>
                    <td>A-</td>
                    <td>A+ A- AB+ AB-</td>
                    <td>A- O-</td>
                </tr>
                <tr>
                    <td>O-</td>
                    <td>Everyone</td>
                    <td>O-</td>
                </tr>
                <tr>
                    <td>B-</td>
                    <td>B+ B- AB+ AB-</td>
                    <td>B- O-</td>
                </tr>
                <tr>
                    <td>AB-</td>
                    <td>AB+ AB-</td>
                    <td>AB- A- B- O-</td>
                </tr>
            </tbody>
        </table>
    </div>
            <?php
            $image_path = "images/image3.jpg"; 
            echo "<img src='$image_path' alt='Blood Bank'>";
            ?>
        </div>
        
        <!-- Section for Types of Blood Donation -->
        <h1 style="color: orange;">Types of Blood Donation</h1>

        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="packed-red-blood-cells-tab" data-bs-toggle="tab" href="#packed-red-blood-cells" role="tab" aria-controls="packed-red-blood-cells" aria-selected="true">Packed Red Blood Cells</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="plasma-tab" data-bs-toggle="tab" href="#plasma" role="tab" aria-controls="plasma" aria-selected="false">Plasma</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="platelet-tab" data-bs-toggle="tab" href="#platelet" role="tab" aria-controls="platelet" aria-selected="false">Platelet</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="packed-red-blood-cells" role="tabpanel" aria-labelledby="packed-red-blood-cells-tab">
                <div class="question-answer">
                    <div class="question">
                        <h2>What is it?</h2>
                        <p>Blood Collected straight from the donor into a blood bag and mixed with an anticoagulant is called as whole blood. This collected whole blood is then centrifuged and red cell, platelets and plasma are separated. The separated Red cells are mixed with a preservative to be called as packed red blood cells.</p>
                    </div>
                    <div class="answer">
                        <h2>Who can donate?</h2>
                        <p>Correction of severe anemia in a number of conditions and blood loss in case of child birth, surgery or trauma settings.</p>
                        <h2>Used for?</h2>
                        <p>You need to be 18-65 years old, weight 45kg or more and be fit and healthy.</p>

                        
                        <h2>Lasts for?</h2>
                        <p>Red cells can be stored for 42 days at 2-6 degree celsius.</p>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="plasma" role="tabpanel" aria-labelledby="plasma-tab">
                <div class="question-answer">
                    <div class="question">
                        <h2>What is it?</h2>
                        <p>The straw-coloured liquid in which red blood cells, white blood cells, and platelets float in is called plasma. Contains special nutrients which can be used to create 18 different type of medical products to treat many different medical conditions. Plasma can be obtained from the collected whole blood after red blood cells and platelets have been separated. Additionally, it can also be collected using an apheresis equipment where other components are returned to the donor. The former is a common method of plasma preparation in our country.</p>
                    </div>
                    <div class="answer">
                        <h2>Who can donate?</h2>
                        <p>The donation criteria is similar to that of red blood cell. However, for apheresis plasma collection minimum weight is 50 kgs.</p>
                                                
                        <h2>Used for?</h2>
                        <p>You need to be 18-65 years old, weight 45kg or more and be fit and healthy.</p>

                        
                        <h2>Lasts for?</h2>
                        <p>can be stored for 5 days at 20-24 degree celsius.</p>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="platelet" role="tabpanel" aria-labelledby="platelet-tab">
                <div class="question-answer">
                    <div class="question">
                        <h2>What is it?</h2>
                        <p>These are cellular elements in blood which wedge together to help to clot and reduce bleeding. Always in high demand, Vital for people with low platelet count, like hematology and cancer patients.</p>
                    </div>
                    <div class="answer">
                        <h2>Who can donate?</h2>
                        <p>One can donate whole blood from which the blood centre will separate platelets from other components. Criteria similar to whole blood donation apply. Alternatively, one can donate using apheresis equipment where only platelets are collected and rest components are returned back to donate. One need to satisfy whole blood criteria and pre- donation screening which include negative infectious markers and platelet count >1,50,000 per microlitre of blood. Weight should be >50kgs.</p>
                      
                                                
                        <h2>Used for?</h2>
                        <p>Conditions with very low platelet count such as Cancer, blood diseases, trauma, dengue etc.</p>

                        
                        <h2>Lasts for?</h2>
                        <p>can be stored for 5 days at 20-24 degree celsius.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Online Blood Bank. All rights reserved.</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
