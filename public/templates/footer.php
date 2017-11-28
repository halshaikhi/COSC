

<!DOCTYPE html>
<footer class="footer">    
    <div class="row">
        <div class="col-lg-12">

      
</footer>

<html>
<head>
<style>
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: red;
   color: white;
   text-align: center;
}
</style>
</head>
<body>

<h2>welcome to my website</h2>
<p>The footer is placed at the bottom of the page.</p>
            <?php
echo "<p>Copyright &copy; 1999-" . date("Y") . " </p>";
?>
<div class="footer">
  <p>Footer</p>
</div>

</body>
</html> 

<?php

<?php
function set_last_login($login) {
  $user = get_userdatabylogin($login);
  update_usermeta( $user->ID, 'last_login', current_time('mysql') );
}
add_action('wp_login', 'set_last_login');

// Function to display the time
function get_last_login($user_id) {
  $last_login = get_user_meta($user_id, 'last_login', true);
  $date_format = get_option('date_format') . ' ' . get_option('time_format');
  $the_last_login = mysql2date($date_format, $last_login, false);
  return $the_last_login;
}
?>
	?>