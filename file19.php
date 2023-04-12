<?php

/* working with cookies: to identify the user. complete network functions: https://www.w3schools.com/php/php_ref_network.asp
The Network functions contains various network function and let you manipulate information 
sent to the browser by the Web server, before any other output has been sent.  */

# syntax: setcookie(name, value, expire, path, domain, secure, httponly);
?>

<?php
// this part have to come before html code
$cookie_name = "user";
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value); // 86400 = 1 day
?>
<html>
<body>

<?php
// this part have to be in html code
if(!isset($_COOKIE[$cookie_name])) {
  echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
  echo "Cookie '" . $cookie_name . "' is set!<br>";
  echo "Value is: " . $_COOKIE[$cookie_name];
}
?>
</body>
</html>



<?php
// another example: Check if Cookies are Enabled
setcookie("test_cookie", "test", time() + 3600, '/');
echo "<br><hr>"
?>

<html>
<body>

<?php
if(count($_COOKIE) > 0) {
  echo "Cookies are enabled.";
} else {
  echo "Cookies are disabled.";
}
?>

</body>
</html>