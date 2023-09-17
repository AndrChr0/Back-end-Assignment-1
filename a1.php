<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A1</title>
</head>

<body>

    <?php
    // 1.
    $courseGrades = array(
        array("Webcoding:", 88),
        array("UCD:", 66),
        array("Graphic Design Prinsiples:", 95),
        array("Exphil:", 13)
    );


    $checkGrade = function ($gradeArray) {

        foreach ($gradeArray as $course) {
            $name = $course[0];
            $grade = $course[1];
            if ($grade >= 85 && $grade <= 100) {
                echo "$name A<br>";
            } elseif ($grade >= 75 && $grade <= 84) {
                echo "$name B<br>";

            } elseif ($grade >= 65 && $grade <= 74) {
                echo "$name C<br>";

            } elseif ($grade >= 50 && $grade <= 64) {
                echo "$name D<br>";

            } elseif ($grade < 50 && $grade >= 0) {
                echo "$name F<br>";

            } else {
                echo "Error - $name does not a valid score<br>";
            }
        }
    };

    $checkGrade($courseGrades);


    echo "<br><br><br><br><br><br>";

    // 2.  
    
    $printStars = function ($nr) {

        for ($i = $nr; $i > 0; $i--) {
            for ($j = $i; $j > 0; $j--) {
                echo "*";
            }
            echo "<br>";
        };

    };

    $printStars(20);

    ?>

</body>

</html>