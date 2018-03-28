<?php
    $username = $password = $confirm = $gender = $subscribe = $description = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = modify_input($_POST["username"]);
        $password = modify_input($_POST["password"]);
        $confirm = modify_input($_POST["confirm"]);
        $gender = modify_input($_POST["gender"]);
        $subscribe = !empty($_POST["subscribe"]);
        $description = modify_input($_POST["description"]);
    }
    //Масив за грешки
    $errors = array();
    if(empty($username)) {
        array_push($errors,"Username is required");
    }
    if(empty($password)) {
        array_push($errors,"Password is required");
    }
    if(empty($confirm)) {
        array_push($errors,"Confirm password is required");
    }
    if(!empty($password) && !empty($confirm) && $password != $confirm) {
        array_push($errors,"Password and confirm password do not match");
    }
    if(empty($gender)) {
        array_push($errors,"Gender is required");
    }
    if (count($errors) > 0) {
        echo '<ul style="color: red;">';
        foreach ($errors as $error) {
            echo "<li>$error</li>";
        }
        echo '</ul>';
    } else {
        echo "<h1>Registration successful!</h1>";
    }


    function modify_input($data) {
        //Тази функция връща низа data с премахнати в началото и в края знаци.
        //Например " ", "\n", "\t" и т.н.
        $data = trim($data);
        //Премахва \
        //Например echo stripslashes("Who\'s Peter Griffin?");
        // -> Who's Peter Griffin?
        $data = stripslashes($data);
        //Ескейпва html таговете
        $data = htmlspecialchars($data);
        return $data;
    }
    

?>