<?php require_once '../app/views/templates/headerPublic.php' ?>
 
   <!DOCTYPE>




		<title>registertion form </title>

	</head>

	<body bgcolor="#A9A9A9">
	 <br> Hello Everyone
	 <br> Please register to the website
	 <br>

        <form name="frm-register" method="post" action="/login/register">
            <table border="0" width="500" align="center" class="demo-table">
         
                                <tr>
                                    <td>User Name</td>
                                    <td>
                                        <input type="text" class="input_field" name="username" value="<?php if(isset($_POST['username'])) echo $_POST['username']; ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Password</td>

                                    <td>
                                        <input type="password" class="input_field" name="password" value="">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Confirm Password</td>
                                    <td>
                                        <input type="password" class="input_field" name="confirm_password" value="">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>
                                        <input type="text" class="input_field" name="user_email" value="<?php if(isset($_POST['user_email'])) echo $_POST['user_email']; ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan=2>
                                        <input type="checkbox" name="terms"> I accept Terms and Conditions
                                        <input type="submit" name="register" value="Register" class="btn_register">
                                    </td>
                                </tr>
								<a href="../app/view/login.php"> back to login</a>
            </table>
        </form>
    </body>

</html>
    <?php require_once '../app/views/templates/footer.php' ?>
