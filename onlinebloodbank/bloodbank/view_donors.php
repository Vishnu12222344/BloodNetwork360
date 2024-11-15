<?php
include 'connection.php';
session_start(); // Start the session at the beginning

if (!isset($_SESSION["user"])) {
    $_SESSION["user"] = "Guest"; // Default to "Guest" if no user is logged in
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Donor Records</title>
    <link rel="stylesheet" href="../css/home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: whitesmoke;
            color: white;
        }
        h2 {
            color: #b30000;
            text-align: center;
            margin-top: 20px;
        }
        .box{
          display:flex;
     justify-content:center;
        }
        .box1{
         width:350px;
        }
        nav ul {
    list-style-type: none;
    padding: 0;
    display: flex;
    justify-content: center;
    background-color: whitesmoke;
    margin: 0;
}

nav ul li {
    margin: 0 15px;
}

nav ul li a {
    text-decoration: none;
    color: #333;
    padding: 10px 15px;
    transition: background-color 0.3s, color 0.3s;
}

nav ul li a:hover {
    background-color: #ff3d3d;
    color: white;
    border-radius: 5px;
}

    </style>
</head>
<body>
    <div>
        <header>
            <div id='logo1'>
                <img src="../images/image1.jpg" alt="Logo" class="logo">
            </div>
            <h1 class="glowing-title">
                <span>B</span><span>L</span><span>O</span><span>O</span><span>D</span><span>N</span><span>E</span><span>T</span><span>W</span><span>O</span><span>R</span><span>K</span><span>3</span><span>6</span><span>0</span>
            </h1>
            <p><?php echo htmlspecialchars($_SESSION["user"]); ?></p> <!-- Display session user safely -->
            <form method="POST" action="../logout.php">
                <button type="submit" class="btn btn-danger" name="out">Logout</button>
            </form>
        </header>
    </div><br>

    <nav >
        <ul>
            <li><a href="../home.php">Home</a></li>
            <li><a href="./registrationform.php">Donate Blood</a></li>
            <li><a href="../appointment.php">Appointment</a></li>
            <li><a href="../supportus.php">Support Us</a></li>
            <li><a href="../Aboutus.php">About Us</a></li>
            <li><a href="../contactus.php">Contact Us</a></li>
            <li><a href="./view_donors.php">View Donors</a></li>
        </ul>
    </nav><br>

    <div class="box">
        <div class="box1">
            <form action="" method="POST">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="searchfilter" placeholder="Search by Blood Type" aria-label="Search by Blood Type" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <input type="submit" class="btn btn-outline-secondary" name="search" value="Search">
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="container">
        <h2>Donor Records</h2>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Blood Type</th>
                    <th>Address</th>
                    <th>Gender</th>
                    <th>Date of Birth</th>
                    <th>Last Donation Date</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Set default query to retrieve all donors
                $query = "SELECT * FROM donors";

                // If search is performed, modify the query to include the search filter
                if (isset($_POST['search'])) {
                    $searchfor = mysqli_real_escape_string($con, $_POST['searchfilter']); // Securely handle user input
                    $query = "SELECT * FROM donors WHERE blood_type LIKE '%$searchfor%'";
                }

                // Execute query and check results
                $data = mysqli_query($con, $query);
                if ($data && mysqli_num_rows($data) > 0) {
                    while ($row = mysqli_fetch_array($data)) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($row['username']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['email']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['user_phone']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['blood_type']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['user_address']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['gender']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['user_dob']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['donation_date']) . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='8'>No donor records found</td></tr>";
                }
                
                ?>
            </tbody>
        </table>

        <a href="registrationform.php" class="btn btn-primary">Add New Donor</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
