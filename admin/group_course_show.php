<?php

$pageTitle = "Show Group Courses";
require "init.php";
checkguest();
$sql = "SELECT course_groups.* , courses.name AS course_name, users.first_name, users.last_name FROM course_groups INNER JOIN courses ON course_id = courses.id INNER JOIN users ON course_groups.user_id =  users.id ORDER BY course_groups.id DESC";
$groups = select_rows($sql);
?>








<div class="right-side full-width">

 <div class="container">
        <div class="row">
            <div class="roles col-md-12">
                <h1 class="text-center mt-5 mb-5 title">Show Group Courses</h1>
                <div class="table-responsive">
                    <a href="group_course_create.php" class="btn btn-success mb-3 btn-sm"> <i class='fas fa-plus mr-1'></i>Create Group</a>
                    <?php 
                        view_alerts();
                    ?>
               
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Course</th>
                            <th>Instructor</th>
                            <th>Start_Date</th>
                            <th>End_Date</th>
                            <th>Active</th>
                            <th>Session's</th>
                            <th>Max_Student's</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <?php 
                            foreach($groups as $no => $group) { ?>
                            <tr>
                                <td><?php echo $no + 1 ;?></td>
                                <td> 
                            <a href="students_course_group_show.php?id=<?php echo $group['id'] . "&count=" . $group['max_students']?>"> 
                                        <?php echo $group['name'] ;?>
                                    </a>
                                </td>
                                <td> <?php echo $group['course_name'] ;?></td>
                                <td><?php echo $group['first_name'] . ' ' . $group['last_name'];?></td>
                                <td><?php echo $group['start_date'];?></td>
                                <td><?php echo $group['end_date'];?></td>
                                <td><?php 
                                      if($group['active'] == 1) {
                                                echo "<a href='__course_group/group_course_active_process.php?id={$group['id']}'><i class='fas fa-check-circle text-success'></i></a>";
                                            }else {

                                                echo "<a href='__course_group/group_course_active_process.php?id={$group['id']}'><i class='fas fa-check-circle text-muted'></i></a>";
                                            }

                                    
                                        ?>
                                </td>
                                <td><?php echo $group['session_count'];?></td>
                                <td><?php echo $group['max_students'];?></td>
                                 <td>
                                        <a href="__course_group/group_course_delete_process.php?id=<?php echo $group['id']?>"class='confirmed'><i class="fas fa-times text-danger fa-fw mr-1"></i></a>
                                        <a href="group_course_edit.php?id=<?php echo $group['id']?>"><i class="fas fa-edit text-primary fa-fw ml-1"></i></a>
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


include $tpl . "footer.php";