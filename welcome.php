<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <title>Welcome Page</title>
  </head>

  <body>
    <?php
    $userName = "";
    if (isset($_POST['name'])) { // Adjusted to match the form input name
      $userName = $_POST['name'];
    }
    echo "<h1>Welcome " . htmlspecialchars($userName) . "!</h1>\n"; // Added htmlspecialchars for security
    ?>
  </body>
</html>
