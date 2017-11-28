<?php require_once '../app/views/templates/header.php' ?>
<div class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
                <h1>Create Your Profile</h1>
                <p class="lead"> <?= date("F jS, Y"); ?></p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <h6> Please enter profile infomation for creating</h6>
            <form  method="post" action="/personaldetails/create">
                Firstname:<input type="text" name="firstname" value="<?=$data['firstname']?>"><br><br>
                Lastname:<input type="text" name="lastname" value="<?=$data['lastname']?>"><br><br>
                Birthdate:<input type="text" name="birthdate" placeholder="mm/dd/yyyy" value="<?=$data['birthdate']?>"><br><br>
                Phone number:<input type="text" name="phonenumber" value="<?=$data['phonenumber']?>"><br><br>
                Email:   <input type="text" name="email" value="<?=$data['email']?>"><br><br>
                <input type="submit" name="save" value="save">

            </form>

        </div>
        <div class="row">
            <div class="col-lg-12">
                <p style="color: red"> <?=$data['message']?> </p>
            </div>
        </div>
    </div>
    <div class="row">
        <a href="/personaldetails">Go to my profile</a>
    </div>

    <?php require_once '../app/views/templates/footer.php' ?>
