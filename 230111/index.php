<?php
    include("includes/header.php");

    if(isset($_POST['reg']))
    {
        $vnev = null;
        $knev = null;
        $usernev = null;
        $pass = null;
        $passconfirm = null;
        $error = '';
        if(empty($_POST['vnev']))
        {
            $vnev = $_POST['vnev'];
        }
        else
        {
            $error = '';
        }
        if(empty($_POST['knev']))
        {
            $knev = $_POST['knev'];
        }
        if(empty($_POST['usernev']))
        {
            $usernev = $_POST['usernev'];
        }
        if(empty($_POST['pass']))
        {
            $pass = $_POST['pass'];
        }
        if(empty($_POST['passconfirm']))
        {
            $passconfirm = $_POST['passconfirm'];
        }
    }
?>
<div class="container pb-2">
    <h1 class="text-center display-6 py-3">Regisztráció</h1>
    <div class="card m-auto" style="width: 20rem;">
        <div class="card-body">
            <form action="./" method="post">
                <p class='mt-2 text-danger text-center'>Error</p>
                <div class="mt-3">
                    <label for="vnev" class="form label">Vezetéknév</label>
                    <input type="text" name="vnev" class="form-control">
                </div>
                <div class="mt-3">
                    <label for="knev" class="form label">Keresztnév</label>
                    <input type="text" name="knev" class="form-control">
                </div>
                <div class="mt-3">
                    <label for="usernev" class="form label">Felhasználónév</label>
                    <input type="text" name="usernev" class="form-control">
                </div>
                <div class="mt-3">
                    <label for="pass" class="form label">Jelszó</label>
                    <input type="password" name="pass" class="form-control">
                </div>
                <div class="mt-3">
                    <label for="passconfirm" class="form label">Jelszó újra</label>
                    <input type="password" name="passconfirm" class="form-control">
                </div>
                
                <button type='submit' name='reg' class='btn btn-primary mt-3 d-block m-auto'>Regisztráció</button>
            </form>
        </div>
    </div>
</div>
<?php
    include("includes/footer.php");
?>