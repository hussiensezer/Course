<?php

require 'kernel.php';

session_destroy();

redirect('login.php');
