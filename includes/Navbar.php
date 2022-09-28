<?php 

include_once '../includes/dbh.inc.php';

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title></title>
    <link rel="stylesheet" href="../styling/style.css">

    
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@700&display=swap"
      rel="stylesheet"
    />
</head>
<body>
    <div class="navbar-container">
      <div class="logo">
        <h1>FOCUS CARDS</h1>
      </div>
        
      <ul class="nav-list" id="navi-list">
          <li class="list-item"><a href="../pages/Home.php">Home</a></li>
          <li class="list-item"><a href="../pages/Explore.php">Explore</a></li>
          <li class="list-item"><a href="../pages/Contact.php">Contact</a></li>
          <li class="list-item"><a href="../pages/Login.php">Log in</a></li>
          <li class="list-item"><a href="../pages/Signup.php">Sign up</a></li>
      </ul>

      <div class="menu-burger" id="toggleButton">
        <div class="burger-line"></div>
        <div class="burger-line"></div>
        <div class="burger-line"></div>
      </div>
      
    </div>
</body>

<script>
  const toggleButton = document.getElementById('toggleButton');
  const naviList = document.getElementById('navi-list');

  toggleButton.addEventListener('click', () => {
    naviList.classList.toggle('active')
  })

</script>
