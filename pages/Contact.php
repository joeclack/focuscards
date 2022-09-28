<?php
    include_once '../includes/Navbar.php';
    
?>


<section class='home' id="home">
    <div class="home-main">
    <form action="">

          <label for="email">Email:</label>
          <input type="email" name="email" id="email">

          <label for="message">Message:</label>
          <input type="text" name="message" id="message">


          <button type="submit" class="primary-btn" onclick="error()">
            Send
          </button>
        </form> 
    </div>
</section>

<?php
include_once '../includes/footer.php'
?>