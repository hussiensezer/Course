<?php

require "init.php";


session_destroy();

session_unset();

redirect('login.php');