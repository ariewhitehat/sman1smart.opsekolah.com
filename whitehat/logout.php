<?php
session_start();
session_unset();
session_destroy();
# Unset Cookie
setcookie('username', '', 0, '/');
setcookie('name', '', 0, '/');
setcookie('level', '', 0, '/');

# Redirect page
header('location:./');
