<?php
$xml = simplexml_load_file("xml/students.xml") or die("Error loading data!");

if (!empty($xml->student)) {
    foreach ($xml->student as $student)
    {
        # Load data from xml as variables
        $firstname =    !empty($student->firstname) ? $student->firstname : null;
        $grade =        !empty($student->grade) ? $student->grade : null;
        $id =           !empty($student->attributes()->id) ? $student->attributes()->id : null;
        $lastname =     !empty($student->lastname) ? $student->lastname : null;
        $price =        !empty($student->price) ? $student->price : null;
        $subjects =     !empty($student->subjects) ? $student->subjects : null;
        # Create strings for later usage
        $grade_list_string = "";
        $subject_list_string = "";
        $subject_list_display= "";

        foreach ($grade as $item) {
            $grade_list_string = $grade_list_string . substr($item, 0, 1) . "|?|" . substr($item, 2, 4);
        }

        if (!empty($subjects->subject)) {
            foreach ($subjects->subject as $subject) {
                $subject_list_string = $subject_list_string . "|?|" . $subject;
                $subject_list_display = $subject_list_display . $subject . " ";
            }
        }

        $grade_list_string = strtoupper($grade_list_string);
        $subject_list_string = strtoupper($subject_list_string);
        # Build our entry
        echo "
            <!--$id-->
            <div id=\"$id\" class=\"entry\" content=\"$subject_list_string|?|$grade_list_string|?|$price|\">
                <div class=\"button\" onclick=\"toggle('$id-content')\">
                    <div class=\"button-bar\"></div>
                    <div class=\"button-box\">
                        <p>$grade - $subject_list_display<br>
                        <span>$firstname $lastname</span></p>
                    </div>
                </div>

                <div id=\"$id-content\" class=\"content\" hidden>
                    <div class=\"content-bar\"></div>
                    <div class=\"content-box\">
                        <p><span>Preis: </span>".$price."€ <small>p. Stunde</small></p>
                        <p><span>Kontakt: </span>$id @student.tgm.ac.at</p>
                    </div>
                </div>
            </div>
            ";
    }
}