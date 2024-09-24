<!DOCTYPE html>
<html lang="en-ca">
<head>
    <meta charset="utf-8">
    <meta name="description" content="My first webpage, with MDL">
    <meta name="keywords" content="mths, ics2o">
    <meta name="author" content="Mr. Coxall">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My first webpage, with MDL</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
</head>

<body>
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

  <main class="mdl-layout__content">
    <div class="page-content">
      <!-- Your content goes here -->
      <form action="welcome.php" method="POST">
        <div class="mdl-textfield mdl-js-textfield">
          <input class="mdl-textfield__input" type="text" id="name" name="name">
          <label class="mdl-textfield__label" for="name">Name</label>
        </div>
        <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" type="submit">
          Submit
        </button>
      </form>
    </div>
  </main>
</div>

</body>
</html>
