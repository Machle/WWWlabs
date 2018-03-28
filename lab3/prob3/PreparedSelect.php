<?php
    require("connect.php");

    try{
        echo '<ul>';
        $stmt = $conn->prepare("SELECT * FROM electives where title = ?");
        if ($stmt->execute(array('Web technologies'))) {
            while ($row = $stmt->fetch()) {
                echo '<li>'.$row["lecturer"].'</li>';
            }
        }
        echo '</ul>';
    }catch (PDOException $e){
        echo 'Something went wrong: ' . $e->getMessage(); 
    }

?>