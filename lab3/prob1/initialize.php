<?php
    $user = 'root';
    $pass = '';
    try{
        // conn is PDO object
        $conn = new PDO('mysql:host=localhost;dbname=labs', $user, $pass,
                        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    }catch (PDOException $e){
        // If conection fails we throw an exception
        echo 'Connection failed: '.$e->getMessage();
    }

    
    //Create our table
    try{
        //Sets an attribute on the database handle.
        //PDO::setAttribute in documentation ...
        //PDO::ATTR_ERRMODE: Error reporting.
        //PDO::ERRMODE_EXCEPTION: Throw exceptions.
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        //create our table
        
        $sqlCreate = "CREATE TABLE electives
                    (id INT AUTO_INCREMENT PRIMARY KEY, 
                    title VARCHAR(128),
                    description VARCHAR(1024),
                    lecturer VARCHAR(128))";
        $conn->exec($sqlCreate); 

        //created_at attribute
        /*
        $sqlAttribute = "ALTER TABLE electives 
                        ADD created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP()";
        $conn->exec($sqlAttribute); */


        //insert primary data using prepared statements
        $stmt = $conn->prepare("INSERT INTO electives (title,description,lecturer)
        VALUES (:title,:description,:lecturer)");

        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':lecturer', $lecturer);

        $title = "Programming with Go";
        $description = "Let's learn Go";
        $lecturer = "Nikolay Batchiyski";
        $stmt->execute();

        $title = "AKDU";
        $description = "Let's Graduate";
        $lecturer = "Svetlin Ivanov";
        $stmt->execute();

        $title = "Web technologies";
        $description = "Let's learn the web";
        $lecturer = "Milen Petrov";
        $stmt->execute();

        $title = "Веб технологии";
        $description = "Ще учим веб";
        $lecturer = "Нямам си идея";
        $stmt->execute();

    }catch (PDOException $e) {
        echo $e->getMessage();
        $conn->rollBack();
        die();
    }catch (Exception $e){
        echo $e->getMessage();
        $conn->rollBack();
        die();
    }
    // and now we're done; close it
    $conn = null;
?>