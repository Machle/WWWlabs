<?php

    require("connect.php");

    //We start our transaction.
    $conn->beginTransaction();

    //We will need to wrap our queries inside a TRY / CATCH block.
    //That way, we can rollback the transaction if a query fails and a PDO exception occurs.
    try{

        $stmt = $conn->prepare(" INSERT INTO electives (title, description, lecturer)
                                VALUES (:title, :description, :lecturer)");
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':lecturer', $lecturer);

        $title = 'Programming with Go';
        $description = 'In this course we will ....';
        $lecturer = 'N. Batchyisky';
        $stmt->execute();

        $title = 'Data mining';
        $description = 'In this course we will ....';
        $lecturer = 'Unknown';
        $stmt->execute(); 

    }catch (PDOException $e){
        //An exception has occured, which means that one of our database queries failed.
        //Rollback the transaction.
        $conn->rollBack();
        //Print out the error message.
        echo  $e->getMessage();
        die();
    }

    //We've got this far without an exception, so commit the changes.
    $conn->commit();
?>