<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Log in</title>

    <link rel="stylesheet" href="../styling/style.css">



    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="container">
      <div class="left"><a href="./Home.php">FOCUS CARDS</a></div>

      <div class="right">
        <form action="../includes/Login.inc.php" method="POST">
          <label for="username">Username</label>
          <input type="text" name="username" id="username">

          <label for="password">Password:</label>
          <input type="password" name="password" id="password">

          <button type="submit"  name="submit"class="primary-btn">
            Log in
          </button>
          <button class="secondary-btn">
            <a href="./Signup.php">Sign up</a>
          </button>
        </form>
      </div>
    </div>

  </body>

  <?php
include_once '../includes/footer.php'
?>

</script>
</html>
