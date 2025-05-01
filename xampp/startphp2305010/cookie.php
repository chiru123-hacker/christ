<?php
// Set the cookie before any HTML output
setcookie("user", "John Doe", time() + (86400 * 30), "/");



if(isset($_COOKIE["user"])) {
    echo "Welcome " . $_COOKIE["user"];
} else {
    echo "Cookie not set!";
}
</body>
</html>

?>


