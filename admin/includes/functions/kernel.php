<?php

session_start();
require "connection.php";
require 'validator.php';



/*
** Function To get The Title Of Page V 1.0

*/

function getTitle() {
    global $pageTitle;
    
    if(isset($pageTitle)) {
        
        echo $pageTitle;
    }else {
        echo "Default";
    }
}

/*

**Function To Check adminborad isset

*/
function checkguest() {
    global $back;
    if(isset($_SESSION['user'])){
        
        
    }else {
        if(isset($back)){
            redirect('../login.php');  

        }else {
            redirect('login.php');  
        }
          
    }
  }



































function view_alerts() {
	if (isset($_SESSION['success'])) {
		echo '<div class="alert alert-success">' . $_SESSION['success'] . '</div>';

		unset($_SESSION['success']);
	}
	if (isset($_SESSION['error'])) {
		echo '<div class="alert alert-danger">' . $_SESSION['error'] . '</div>';

		unset($_SESSION['error']);
	}
	if (isset($_SESSION['errors'])) {
		
		foreach ($_SESSION['errors'] as $error) {
            echo '<div class="alert alert-danger">';
			         echo $error;
            echo '</div>';
		}


		unset($_SESSION['errors']);
	}
}


/*
** Function To Redirect Where everYou Need V.2
*/
function redirect($path = NULL) {
    
	   if($path == NULL) {
      $path = 'adminboard.php';
        
    }elseif($path == 'back') {
        if(isset($_SERVER['HTTP_REFERER']) && !empty($_SERVER['HTTP_REFERER'])){
            $path = $_SERVER['HTTP_REFERER'];
        }else {
            $path = 'adminboard.php';
        }
        
    }else {
        $path = $path;
    }
   header("refresh:0; url=$path");
    exit();
}


function query($sql) {
	global $connection;

	$query = mysqli_query($connection, $sql);

	$error = mysqli_error($connection);

	if (!empty($error)) {
		echo $error;
		die();
	}

	return $query;
}

function select_rows($sql) {
	$query = query($sql);

	$data = mysqli_fetch_all($query, true);

	return $data;
}

function select_row($sql) {
	$query = query($sql);

	$row = mysqli_fetch_assoc($query);

	return $row;
}

// $users = select_rows("SELECT * FROM users");
// $user = select_row("SELECT * FROM users LIMIT 1");

if (isset($_SESSION['user_id'])) {
	$auth = select_row("SELECT * FROM users WHERE id = {$_SESSION['user_id']} LIMIT 1");
} else {
	$auth = null;
}

function middleware_auth() {
	global $auth;

	if (empty($auth)) {
		redirect('login.php');
	}
}

function middleware_guest() {
	global $auth;

	if (!empty($auth)) {
		redirect('index.php');
	}
}

function middleware_admin() {
	global $auth;

	middleware_auth();
	if (!empty($auth) && $auth['role_id'] != 1) {
		redirect('index.php');
	}
}

function middleware_student() {
	global $auth;

	middleware_auth();
	if (!empty($auth) && $auth['role_id'] != 2) {
		redirect('index.php');
	}
}

/*
** Function The Update The Active Status To [Active Or Deactive] v.1;

*/

function updateActive($table,$date,$id,$path = 'back') {
    $sql = "UPDATE {$table} SET active = {$date} WHERE id = {$id}";
    $update = query($sql);
    if($date == 1) {
        $status = 'Active';
    }else {
        $status = 'Deactive';
    }
    $_SESSION['success'] = "Congratulation This Row Are <b> {$status}</b>";
   redirect('back');
   
 
}


function deleteRow($table,$id,$path){
    
    $sql = "DELETE FROM {$table} WHERE id = {$id}";
    $delete = query($sql);
    $_SESSION['success'] = "Congratualtion This Row Are Deleted";
    redirect($path);
}



// validator
// redirect
// select_rows
// select_row
// $auth
// middleware_auth
// middleware_admin
// middleware_student



