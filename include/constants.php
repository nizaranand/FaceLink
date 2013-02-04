<?php

define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "social_network");


define("TBL_USERS", "users");
define("TBL_ACTIVE_USERS",  "active_users");
define("TBL_ACTIVE_GUESTS", "active_guests");
define("TBL_BANNED_USERS",  "banned_users");


define("ADMIN_NAME", "admin");
define("GUEST_NAME", "Guest");
define("ADMIN_LEVEL", 9);
define("USER_LEVEL",  1);
define("GUEST_LEVEL", 0);

define("TRACK_VISITORS", true);


define("USER_TIMEOUT", 10);
define("GUEST_TIMEOUT", 5);


define("COOKIE_EXPIRE", 60*60*24*100);  //100 days by default
define("COOKIE_PATH", "/");  //Avaible in whole domain


define("EMAIL_FROM_NAME", "YourName");
define("EMAIL_FROM_ADDR", "youremail@address.com");
define("EMAIL_WELCOME", false);

define("ALL_LOWERCASE", false);
?>
