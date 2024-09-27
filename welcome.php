<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <title>Welcome Page</title>
    <style>
        /* Optional: Set a minimum font size */
        h1 {
            font-size: 25px; /* Initial font size */
            transition: font-size 0.3s; /* Smooth transition */
        }
    </style>
</head>
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
  <header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
      <span class="mdl-layout-title">Title</span>
      <div class="mdl-layout-spacer"></div>
      <nav class="mdl-navigation mdl-layout--large-screen-only">
        <a class="mdl-navigation__link" href="">Link</a>
        <a class="mdl-navigation__link" href="">Link</a>
        <a class="mdl-navigation__link" href="">Link</a>
        <a class="mdl-navigation__link" href="">Link</a>
      </nav>
    </div>
  </header>
  
  <div class="mdl-layout__drawer">
    <span class="mdl-layout-title">Title</span>
    <nav class="mdl-navigation">
      <a class="mdl-navigation__link" href="">Link</a>
      <a class="mdl-navigation__link" href="">Link</a>
      <a class="mdl-navigation__link" href="">Link</a>
      <a class="mdl-navigation__link" href="">Link</a>
    </nav>
  </div>


<body>
    <?php
    $userName = "";
    if (isset($_POST['name'])) { // Adjusted to match the form input name
        $userName = $_POST['name'];
    }
    echo "<h1 id='welcome-message'>Welcome " . htmlspecialchars($userName) . "!</h1>\n"; // Added htmlspecialchars for security
    ?>

    <!-- Slider with Starting Value -->
    <input class="mdl-slider mdl-js-slider" type="range" min="10" max="100" value="25" tabindex="0" id="font-size-slider">

    <script>
        // Get references to the slider and the welcome message
        const slider = document.getElementById('font-size-slider');
        const welcomeMessage = document.getElementById('welcome-message');

        // Function to update font size based on slider value
        slider.addEventListener('input', function() {
            const fontSize = slider.value + 'px'; // Get slider value and convert to px
            welcomeMessage.style.fontSize = fontSize; // Update the font size of the welcome message
        });
    </script>
</body>
</html>
