<?php
$title = "login";
include "layouts/header.php";
include "middlewares/guest.php";
include "layouts/navbar.php";
include "users.php";
$errors = [];
if ($_SERVER['REQUEST_METHOD'] == "POST" && $_POST ){
    //print_r($_POST);die;
    if(empty($_POST['email'])){
        $errors['email'] = "<div class='text-danger font-weight-bold'>Email Is Required</div>";
    }
    if(empty($_POST['password'])){
        $errors['password'] = "<div class='text-danger font-weight-bold'>Password Is Required</div>";
    }
    if(empty($errors)){
        //login
        foreach($users as $user){
            if($user['email'] == $_POST['email'] && $user['password'] == $_POST['password'] ){
                $_SESSION['user'] = $user;
                header('location:index.php');die;
            }
        }
        $errors['email-password'] = "<div class='text-danger font-weight-bold'>Wrong Email Or Password</div>";
    }
}

?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-dark text-center h1 mt-5">
                Log In
            </h1>
        </div>
        <div class="col-4 offset-4">
            <form action="" method="post">
                <div class="form-group">
                    <label for="Email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                    <?= $errors['email'] ?? "" ?>
                </div>
                <div class="form-group">
                    <label for="Password">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                    <?= $errors['password'] ?? "" ?>
                </div>
                <button type="submit" class="btn btn-outline-dark btn-lg">Login</button>
                <?= $errors['email-password'] ?? "" ?>
            </form>
        </div>
    </div>
</div>
<?php
include "layouts/footer.php";
include "layouts/footer-scripts.php";
?>