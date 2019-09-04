<?php

$pageTitle = "Show Courses";
require "init.php";
checkguest();
$sql = "SELECT courses.* , created.first_name AS create_first , created.last_name AS create_last ,instructor.first_name AS instructor_first  ,instructor.last_name AS instructor_last ,categories.name AS cat_name FROM courses INNER JOIN users created ON courses.user_id = created.id INNER JOIN categories ON courses.cateogry_id = categories.id INNER JOIN users instructor ON courses.instructor_id = instructor.id";
$courses = select_rows($sql);


?>








<div class="right-side full-width">

 <div class="container">
        <div class="row">
            <div class="roles col-md-12">
                <h1 class="text-center mt-5 mb-5 title">Show Courses</h1>
                <div class="table-responsive table-sm">
                    <a href="course_create.php" class="btn btn-success mb-3 btn-sm"> <i class='fas fa-plus mr-1'></i>Create Course</a>
                    <?php 
                        view_alerts();
                    ?>
               
                <table class="table table-hover ">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Title</th>
                            <th>Price</th>
                            <th>Duration</th>
                            <th>Active</th>
                            <th>Discount</th>
                            <th>Dis_Type</th>
                            <th>Category</th>
                            <th>Instructor</th>
                            <th>Create_By</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <?php 
                            foreach($courses as $no => $course) { ?>
                            <tr>
                                <td> <?php echo $no + 1;?></td>
                                <td> <?php echo $course['name'];?></td>
                                <td> <?php echo $course['title']?></td>
                                <td> <?php echo $course['price']?></td>
                                <td> <?php echo $course['duration']?></td>
                                <td> <?php 
                                            if($course['active'] == 1) {
                                                echo "<a href='_course/course_active_process.php?id={$course['id']}'><i class='fas fa-check-circle text-success'></i></a>";
                                            }else {

                                                echo "<a href='_course/course_active_process.php?id={$course['id']}'><i class='fas fa-check-circle text-muted'></i></a>";
                                            }
                                        ?>
                                </td>
                                <td> <?php echo $course['discount']?></td>
                                <td> <?php echo $course['discount_type']?></td>
                                <td> <?php echo $course['cat_name']?></td>
                                <td> <?php echo $course['instructor_first'] . " " . $course['instructor_last']?></td>
                                 <td> <?php echo $course['create_first'] . " " . $course['create_last']?>
                                </td>
                                      <td>
                                        <a href="_course/course_delete_process.php?id=<?php echo $course['id']?>"class='confirmed'><i class="fas fa-times text-danger fa-fw mr-1"></i></a>
                                        <a href="course_edit.php?id=<?php echo $course['id']?>"><i class="fas fa-edit text-primary fa-fw ml-1"></i></a>
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