<?php
if (isset($marks) && is_array($marks)) {
    ?>
    <div class="card">
        <h2 class="card-heading">Your Marks</h2>

        <!-- Marks Table -->
        <table>
            <thead>
                <tr>
                    <th>Student id</th>
                    <th>Subject</th>
                    <th>Marks</th>
                    <th>Exam Type</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $totalWeightedMarks = 0;
                $totalWeight = 0;

                foreach ($marks as $mark) {
                    $weight = 1; // Default weight

                    // Adjust weights based on exam type
                    switch ($mark['exam_type']) {
                        case 'final':
                            $weight = 1; // No weight adjustment for 'final'
                            break;
                        case 'partial':
                            $weight = 0.5; // 50% weight for 'partial'
                            break;
                        // Add more cases as needed
                    }

                    $weightedMarks = $mark['score'] * $weight;
                    $totalWeightedMarks += $weightedMarks;
                    $totalWeight += $weight;

                    ?>
                    <tr>
                        <td><?php echo $mark['student_id']; ?></td>
                        <td><?php echo $mark['course_id']; ?></td>
                        <td><?php echo $mark['score']; ?></td>
                        <td><?php echo $mark['exam_type']; ?></td>
                        <td><?php echo ($weightedMarks >= 50) ? '<span style="color: green;">Passed</span>' : '<span style="color: red;">Failed</span>'; ?></td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </div>

    <?php
    // Calculate and display overall average score
    $overallAverage = ($totalWeight > 0) ? $totalWeightedMarks / $totalWeight : 0;
    ?>
    <div class="card">
        <h2 class="card-heading">Overall Average Score</h2>
        <p><?php echo "Your overall average score for all courses: " . $overallAverage; ?></p>
        <p>Status: <?php echo ($overallAverage >= 50) ? '<span style="color: green;">Passed</span>' : '<span style="color: red;">Failed</span>'; ?></p>
    </div>
    <?php
} else {
    echo "<p>No marks available for the student.</p>";
}
?>


