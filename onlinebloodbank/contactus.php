<?php
// Start the session at the beginning of the file
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Online Blood Bank - Contact Us</title>
  <link rel="stylesheet" href="css/home.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    /* General styles */
    body {
      font-family: Arial, sans-serif;
      padding: 20px;
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
    }

    .container {
      display: flex;
      justify-content: space-between;
      max-width: 1200px;
      margin: auto;
      padding: 20px;
      background-color: white;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .form-container {
      flex: 1;
      padding-right: 20px;
    }

    .map-container {
      flex: 1;
    }

    .map-container iframe {
      width: 100%;
      height: 100%;
      border: 0;
    }

    /* Contact Form Styling */
    .contact-section {
      width: 100%;
    }

    .contact-intro > * + * {
      margin-top: 1rem;
    }

    .contact-title {
      font-size: 1.875rem;
      line-height: 2.25rem;
      font-weight: 700;
    }

    .contact-description {
      color: rgb(107 114 128);
    }

    .form-group-container {
      display: grid;
      gap: 1rem;
      margin-top: 2rem;
    }

    .form-group {
      display: flex;
      flex-direction: column;
    }

    .form-label {
      margin-bottom: 0.5rem;
    }

    .form-input,
    .form-textarea {
      padding: 0.5rem;
      border: 1px solid #e5e7eb;
      display: flex;
      height: 2.5rem;
      width: 100%;
      border-radius: 0.375rem;
      font-size: 0.875rem;
      line-height: 1.25rem;
    }

    .form-input::placeholder,
    .form-textarea:focus-visible {
      color: #6b7280;
    }

    .form-input:focus-visible,
    .form-textarea:focus-visible {
      outline: 2px solid #2563eb;
      outline-offset: 2px;
    }

    .form-textarea {
      min-height: 120px;
    }

    .form-submit {
      width: 100%;
      margin-top: 1.2rem;
      background-color: #3124ca;
      color: #fff;
      padding: 13px 5px;
      border-radius: 0.375rem;
    }

    /* Title Animation */
    @keyframes glow {
      0% { text-shadow: 0 0 10px red; }
      20% { text-shadow: 0 0 10px orange; }
      40% { text-shadow: 0 0 10px yellow; }
      60% { text-shadow: 0 0 10px green; }
      80% { text-shadow: 0 0 10px blue; }
      100% { text-shadow: 0 0 10px violet; }
    }

    .glowing-title {
      display: flex;
      justify-content: center;
      margin: 0;
    }

    .glowing-title span {
      font-size: 2rem;
      display: inline-block;
      animation: glow 2s infinite alternate;
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
</head>
<body>
  <header>
    <div id="logo1"><img src="images/image1.jpg" alt="Logo" class="logo"></div>
    <h1 class="glowing-title">
      <span>B</span><span>L</span><span>O</span><span>O</span><span>D</span><span>N</span><span>E</span><span>T</span><span>W</span><span>O</span><span>R</span><span>K</span><span>3</span><span>6</span><span>0</span>
    </h1>

    <?php
      if (isset($_SESSION["user"])) {
          echo "<p>Welcome, " . htmlspecialchars($_SESSION["user"]) . "</p>";
      } else {
          echo "<p>Welcome, Guest</p>";
      }
    ?>

    <form method="POST" action="logout.php">
      <button type="submit" class="btn btn-danger">Logout</button>
    </form>
  </header>
  <br>
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
    <div class="form-container">
      <section class="contact-section">
        <div class="contact-intro">
          <h2 class="contact-title">Get in Touch</h2>
          <p class="contact-description">
            Fill out the form below and we'll get back to you as soon as possible.
          </p>
        </div>

        <form class="contact-form" action="https://api.web3forms.com/submit" method="POST">
          <input type="hidden" name="access_key" value="6eb4915c-953a-44ff-bd18-cd3c07f39feb" />
          <input type="hidden" name="subject" value="New Contact Form Submission from Web3Forms" />
          <input type="hidden" name="from_name" value="My Website" />

          <div class="form-group-container">
            <div class="form-group">
              <label for="name" class="form-label">Name</label>
              <input id="name" name="name" class="form-input" placeholder="Your name" type="text" />
            </div>
            <div class="form-group">
              <label for="email" class="form-label">Email</label>
              <input id="email" name="email" class="form-input" placeholder="Your email" type="email" />
            </div>
            <div class="form-group">
              <label for="phone" class="form-label">Phone</label>
              <input id="phone" name="phone" class="form-input" placeholder="+1 (234) 56789" type="text" />
            </div>
            <div class="form-group">
              <label for="message" class="form-label">Message</label>
              <textarea class="form-textarea" id="message" name="message" placeholder="Your message"></textarea>
            </div>
          </div>
          <button class="form-submit" type="submit">Send Message</button>
        </form>
      </section>
    </div>
    <div class="map-container">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3412.215774037486!2d75.7720598750569!3d31.214750862178956!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391af4c374b1ee15%3A0x890c6d5b074c3239!2sBlood%20Bank!5e0!3m2!1sen!2sin!4v1731427188804!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
</body>
</html>
