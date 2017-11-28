<?php require_once '../app/views/templates/headerPublic.php' ?>

<div class="container">
  <h2>Login Page</h2>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">

        <form method="post" action="login/index">

            <label for="username">Username:</label><br/>

            <input type="text" name="username" id="username"><br/>

            <label for="password">Password:</label><br/>

            <input type="password" name="password" id="password"><br/><br/>

       
			  <input type="submit" value="Log In!">
			  <input type="submit" name ="attempt" value="attempt!">
			 
			  <a href="/login/register"> sign up!</a>
			
 
        </form>

  </div>
</div>

    <?php require_once '../app/views/templates/footer.php' ?>
