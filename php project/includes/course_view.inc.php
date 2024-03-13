<?php
if (isset($enrolledCourses) && is_array($enrolledCourses)) {
    foreach ($enrolledCourses as $course) {
        ?>
        <div class="sections-container ">
        <div class="course-box">
            <div class="course">
                <div>
                    <p class="course-info">Course ID: <?= $course['course_id'] ?></p>
                    <p class="course-info">Course Name:<?= $course['course_name'] ?></p>
                    <p class="course-info">Course Credit:<?= $course['numofCredites'] ?></p>
                </div>
            </div>
            </div>
        </div> 
    <?php
    }
} else {
    echo "<p>No courses available for the student.</p>";
}
?>
