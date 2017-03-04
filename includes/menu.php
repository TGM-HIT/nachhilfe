<?php
$xml = simplexml_load_file("xml/students.xml") or die("Error loading data!");

$subject_list = array();
$grade_list = array();
$year_list = array();

if (!empty($xml->student)) {
    foreach ($xml->student as $student) {
        if (!empty($student->subjects)) {
            foreach ($student->subjects as $subjects) {
                if (!empty($subjects->subject)) {
                    foreach ($subjects->subject as $subject) {
                        if (!in_array($subject . "", $subject_list)) {
                            array_push($subject_list, $subject);
                        }
                    }
                }
            }
        }

        if (!empty($student->grade)) {
            foreach ($student->grade as $grade) {
                $grade = substr($grade, 2);
                if (!in_array($grade, $grade_list)) {
                    array_push($grade_list, $grade);
                }
            }
        } else {
            break;
        }

        foreach ($student->grade as $year) {
            $year = substr($year, 0, 1);
            if (!in_array($year, $year_list)) {
                array_push($year_list, $year);
            }
        }
    }
}
?>

<div class="button" onclick="toggle('sj')">Fach</div>
<div id="sj" class="content" hidden>
    <?php
    foreach($subject_list as $item) {
        echo "
    <div>
        <input id=\"sj-$item\" type=\"checkbox\" name=\"sj\" onchange=\"search()\">
        <label for=\"sj-$item\">$item</label>
    </div>";
    }
    ?>
</div>

<div class="button" onclick="toggle('gd')">Abteilung</div>
<div id="gd" class="content" hidden>
    <?php
    foreach($grade_list as $item) {
        echo "
    <div>
        <input id=\"gd-$item\" type=\"checkbox\" name=\"gd\" onchange=\"search()\">
        <label for=\"gd-$item\">$item</label>
    </div>";
    }
    ?>
</div>

<div class="button" onclick="toggle('jg')">Jahrgang</div>
<div id="jg" class="content" hidden>
    <?php
    foreach($year_list as $item) {
    echo "
    <div>
        <input id=\"jg-$item\" type=\"checkbox\" name=\"jg\" onchange=\"search()\">
        <label for=\"jg-$item\">$item</label>
    </div>";
    }
    ?>
</div>