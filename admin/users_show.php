<?php

$pageTitle = "Show Users";

require "init.php";
//Check if Who Visit Our adminBoard Are Admin Or Just Trying To Enter 
checkguest();

$sql = "SELECT users.* , roles.name AS role_name FROM users INNER JOIN roles ON roles.id = users.role_id";

$users = select_rows($sql);


?>



<div class="right-side full-width">
  <div class="container">
        <div class="row">
            <div class="users col-md-12">
                <h1 class="text-center mt-5 mb-5 title">Show Users</h1>
                <div class="table-responsive">
                    <a href="user_create.php" class="btn btn-success mb-3 btn-sm"> <i class='fas fa-plus mr-1'></i>Create User</a>
                    <?php 
                        view_alerts();
                    ?>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Avatar</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Active</th>
                                <th>Phone</th>
                                <th>Country</th>
                                <th>Gender</th>
                                <th>Age</th>
                             
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($users as $no => $user){ ?>
                            <tr>
                                <td><?php echo $no + 1?></td>
                                <td><?php echo $user['first_name'] . ' ' . $user['last_name']?></td>
                                <td>
                                    <img src="<?php echo $user['avatar'] ;?>" alt="avatar" width="50px" class=" rounded-circle"/>
                                </td>
                                <td> <?php echo $user['email'];?></td>
                                <td> <?php echo $user['role_name'];?></td>
                                <td> 
                                  <a href="_user/user_active_process.php?id=<?php echo $user['id']?>"
                                     class='<?php echo $check = $user['active'] == 1 ? 'text-success' : 'text-muted';?>'
                                     ><i class="fas fa-check-circle fa-fw"></i></a>
                                </td>
                                <td>
                                    <?php 
                                        if(!empty($user['phone'])){
                                            echo $user['phone'];
                                        }else{
                                            echo "<b class='text-danger'>Empty </b>";
                                        }
                                    ?>
                                </td>
                                <td> 
                                     <?php 
                                        if(!empty($user['country'])){
                                            echo $user['country'];
                                        }else{
                                            echo "<b class='text-danger'>Empty </b>";
                                        }
                                    ?>
                                </td>
                                <td> 
                                    <?php 
                                        if(!empty($user['gender'])){
                                            echo $user['gender'];
                                        }else{
                                            echo "<b class='text-danger'>Empty </b>";
                                        }
                                    ?>
                                </td>
                                <td> 
                                    <?php 
                                        if(!empty($user['age'])){
                                            echo $user['age'];
                                        }else{
                                            echo "<b class='text-danger'>Empty </b>";
                                        }
                                    ?>
                                
                                </td>
                    
                                <td>
                                    <a href="_user/user_delete_process.php?id=<?php echo $user['id']?>"class='confirmed'><i class="fas fa-times text-danger fa-fw mr-1"></i></a>
                                    <a href="user_edit.php?id=<?php echo $user['id']?>"><i class="fas fa-edit text-primary fa-fw ml-1"></i></a>
                                </td>
                            
                            </tr>
                        
                        <?php } ?>
                        </tbody>
                    </table>
                  </div>
            </div>
        </div>
  </div>
</div>






















<?php 

include $tpl . 'footer.php'; 
?>