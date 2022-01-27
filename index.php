<html>
<body>
    <form action="index.php" method="post">        
        <fieldset>
            <legend>
                Login:
            </legend>
            <p>username: <input type="text" name="user"></p>
            <p>password: <input type="password" name="psw"></p>
            <input type="submit" value="access">
        </fieldset>
    </form>
</body>
</html>

<?php
    if(!empty($_POST)) {
        $user = $_POST["user"];
        $psw = $_POST["psw"];
        setcookie("username", $user);
        setcookie("password", $psw);
    }
    echo "<h3>username: ".$_COOKIE[$user]." e password: ".$_COOKIE[$user]."</h3>";
?>