<?php
require '../kernel.php';

$categories = select_rows("SELECT * FROM categories");
