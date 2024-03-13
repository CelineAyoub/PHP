<!-- calendar_view.php -->
<?php
function renderCalendar($marks)
{
?>
    <div class="card">
        <h2 class="calendar-header">Calendar</h2>
        <div class="calendar">
            <div class="day">Sun</div>
            <div class="day">Mon</div>
            <div class="day">Tue</div>
            <div class="day">Wed</div>
            <div class="day">Thu</div>
            <div class="day">Fri</div>
            <div class="day">Sat</div>

            <?php
            foreach ($marks as $mark) {
                $dayClass = '';
                $dayContent = '';

                switch ($mark['day_of_week']) {
                    case 'Sun':
                        $dayClass = 'weekend';
                        break;
                    case 'Sat':
                        $dayClass = 'weekend';
                        break;
                    default:
                        $dayClass = '';
                        break;
                }

                if (!empty($mark['course_id'])) {
                    $dayClass .= ' course-day';
                    $dayContent = '<br>' . $mark['course_id'];
                }

                echo '<div class="day ' . $dayClass . '">' . $dayContent . '</div>';
            }
            ?>
        </div>
    </div>
<?php
}
?>
