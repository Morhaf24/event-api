<?php
    //Connect to database.
    $database = new mysql("localhost", "root", "uek295");

    //Get all students.
    $result = $database->query("SELECT * FROM *student");

    //Echo all students.
    if ($result == false) {
        echo "An error occurred while fetching the student data.";
    }
    else if ($result !== true) {
        if($result->num_rows > 0) {
            while ($student = $result->fetch_assoc()) {
                echo 
                <tr>"
                <td>" . $student["student_id"] . "</td>
                <td>" . $student["name"] . "</td>
                <td>" . $student["age"] . "</td>
                </tr>";
                    
                
            }
        }
    }
  
?>