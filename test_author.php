<?php
require('wp-load.php');
$u = get_userdata(6);
if ($u) {
    echo "Username: " . $u->user_login;
} else {
    echo "User not found";
}
