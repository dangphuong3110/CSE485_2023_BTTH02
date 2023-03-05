<?php
$account = ['username' => '', 'password' => ''];
$errors  = ['username' => '', 'password' => ''];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $message = '';
    // Validation filters
    $validation_filters['username']['filter']              = FILTER_VALIDATE_REGEXP;
    $validation_filters['username']['options']['regexp']   = '/^[A-z]{2,20}$/';
    $validation_filters['password']['filter']              = FILTER_VALIDATE_REGEXP;
    $validation_filters['password']['options']['regexp']   = '/^[A-z0-9]{2,100}$/';

    $account = filter_input_array(INPUT_POST, $validation_filters); // Validate data
    // Create error messages
    $errors['username']  = $account['username']  ? '' : 'Username must be 2-20 letters using A-z';
    $errors['password']  = $account['password']  ? '' : 'Password must be more than 8 characters';
    $invalid = implode($errors);
    
    // Sanitizate data
    $account['username']  = filter_var($account['username'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $account['password']  = filter_var($account['password'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    if ($invalid) {
        $message = 'Please correct the following errors:';
    } else {
        $message = 'Thank you, your data was valid.';
        $username = $account['username'];
        $password = hash('sha256', $account['password']);
        // Kiem tra account trong DB
        header("Location: ?controller=login&action=checkLogin&username=$username&password=$password");
    }

}
?>

<?php
$title = "Login";
$name_css = "style_login.css";
include("views/layout/header_home_page.php");
?>

<!-- MAIN -->
<?php if (isset($message)) {?><div class="alert text-center <?= $invalid ? 'alert-danger' : 'alert-success'?>"><?= $message ?></div><?php } ?>
<main class="container mt-5 mb-5">
    <div class="d-flex justify-content-center h-100">
        <div class="card">
            <div class="card-header">
                <h3>Sign In</h3>
                <div class="d-flex justify-content-end social_icon">
                    <span><i class="fab fa-facebook-square"></i></span>
                    <span><i class="fab fa-google-plus-square"></i></span>
                    <span><i class="fab fa-twitter-square"></i></span>
                </div>
            </div>
            <div class="card-body">
                <form action="?controller=login" method="POST">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="txtUser"><i class="fas fa-user"></i></span>
                        <input type="text" class="w-75 form-control" name="username" value="<?= $account['username'] ?>"  placeholder="Username">
                        <span class="error"><?= $errors['username'] ?></span><br>
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="txtPass"><i class="fas fa-key"></i></span>
                        <input type="password" class="w-75 form-control" name="password" value="<?= $account['password'] ?>" name="password" placeholder="password">
                        <span class="error"><?= $errors['password'] ?></span><br>
                    </div>

                    <div class="row align-items-center remember">
                        <input type="checkbox">Remember Me
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Login" class="btn float-end login_btn">
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <div class="d-flex justify-content-center ">
                    Don't have an account?<a href="#" class="text-warning text-decoration-none">Sign Up</a>
                </div>
                <div class="d-flex justify-content-center">
                    <a href="#" class="text-warning text-decoration-none">Forgot your password?</a>
                </div>
            </div>
        </div>

    </div>
</main>


<?php
include("views/layout/footer.php");
?>