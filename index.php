<?php
session_start();
require('./includes/meta.php');
require('./services/auth-service.php');

if (!empty($_SESSION['username'])) {
    redirectAuthorized();
}
?>

<body>
    <div class="login-view">
        <div class="login">
            <div class="login__logo">
                <h1>Lo<span>gin</span></h1>
            </div>
            <form action="authenticateUser.php" class="login__form" method="POST">
                <div class="login__input">
                    <label for="usn">Username</label>
                    <input type="text" name="usn" id="usn">
                </div>
                <div class="login__input">
                    <label for="psw">Password</label>
                    <input type="password" name="psw" id="psw">
                </div>
                <button type="submit" name="Submit">Login</button>
            </form>
        </div>
    </div>
</body>

</html>