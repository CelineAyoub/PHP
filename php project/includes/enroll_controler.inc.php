<?php
declare(strict_types=1);

// Start the session

function is_input_empty(string $enrolledcourse)
{
    if (empty($enrolledcourse)) {
        return true;
    } else {
        return false;
    }
}

function enroll(object $pdo, string $enrolledcourse, int $student_id)
{
    set_course($pdo, $enrolledcourse, $student_id);
}
?>
