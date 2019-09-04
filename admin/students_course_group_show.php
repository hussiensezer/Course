<?php

$pageTitle = "Show Group Courses";
require "init.php";
checkguest();
$id = $_GET['id'];
$sql = " SELECT course_group_students.*, course_groups.name, users.first_name, users.last_name FROM course_group_students INNER JOIN course_groups ON group_id = course_groups.id INNER JOIN users ON student_id = users.id WHERE group_id = {$id} ";
$students = select_rows($sql);

?>








<div class="right-side full-width">

 <div class="container">
        <div class="row">
            <div class="roles col-md-12">
                <h1 class="text-center mt-5 mb-5 title"><?php echo $_GET['name']?> Student</h1>
                <div class="table-responsive">
                    <a href="group_course_create.php" class="btn btn-success mb-3 btn-sm"> <i class='fas fa-plus mr-1'></i>Join Student</a>
                    <?php 
                        view_alerts();
                    ?>
                </div>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Group_Name</th>
                            <th>Student</th>
                            <th>Created_At</th>
                            <th>Updated_At</th>

                            <th>Action</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <?php 
                            foreach($students as $no => $student) { ?>
                            <tr>
                                <td><?php echo $no + 1 ;?></td>

                                <td> <?php echo $student['name'] ;?></td>
                                <td> <?php echo $student['first_name'] . " " . $student['last_name'] ;?></td>
                                <td> <?php echo $student['created_at'] ;?></td>
                                <td> <?php echo $student['updated_at'] ;?></td>

                                 <td>
                                        <a href="__group_student/student_delete_process.php?id=<?php echo $student['id']?>"class='confirmed'><i class="fas fa-times text-danger fa-fw mr-1"></i></a>
                                        <a href="student_course_group_edit.php?id=<?php echo $student['id']?>"><i class="fas fa-edit text-primary fa-fw ml-1"></i></a>
                                 </td>
                        
                        
                        
                            </tr>
                        
                        
                        
                     <?php } ?>
                    
                    </tbody>
                
                </table>
            </div>
        </div>
    </div>
</div>




















<?php


include $tpl . "footer.php";