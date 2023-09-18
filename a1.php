<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A1</title>
</head>

<body>
    <div style="margin-left: 2vw">
        <h2>1.</h2>

        <?php

        // 1.
        $courseGrades = array(
            // Define array of course grades.
            array("Webcoding", 88),
            array("User Centred Design", 66),
            array("Graphic Design Prinsiples", 80),
            array("Exphil", 13),
            array("Math", -3)
        );

        // Define a function to check and display grades.
        function checkGrade($gradeArray)
        {
            foreach ($gradeArray as $course) {
                $name = $course[0];
                $grade = $course[1];

                // Check the grade and assign a corresponding letter grade.
                if ($grade >= 85 && $grade <= 100) {
                    echo $name . ": A";
                } elseif ($grade >= 75 && $grade <= 84) {
                    echo $name . ": B";
                } elseif ($grade >= 65 && $grade <= 74) {
                    echo $name . ": C";
                } elseif ($grade >= 50 && $grade <= 64) {
                    echo $name . ": D";
                } elseif ($grade < 50 && $grade >= 0) {
                    echo $name . ": F";
                } else {
                    echo "Error - <i>$name</i> does not have a valid score"; // Display an error message for invalid grades.
                }
                echo "<br>";
            }
        }


        // Call function.   
        checkGrade($courseGrades);


        // 2.  
        echo "<h2>2.</h2>";

        // Define function.
        function printStar($nr)
        {
            for ($i = $nr; $i > 0; $i--) { // Loop controls number of lines printed.  
                for ($j = $i; $j > 0; $j--) { // Loop controls number of asterisks printed in each line.
                    echo "*";
                }
                echo "<br>";
            }
        }

        // Call function. Para = max number of asterisks printed.
        printStar(25);

        ?>
    </div>
</body>

</html>