<?php
    require("connect.php");
    /*  *****************************************************************************************************************
    Some databases, including MySQL, automatically issue an implicit COMMIT 
    when a database definition language (DDL) statement such as DROP TABLE or CREATE TABLE is issued within a transaction. 
    The implicit COMMIT will prevent you from rolling back any other changes within the transaction boundary.
    ******************************************************************************************************************* */ 
    $conn->beginTransaction();
    $sth = $conn->exec("DROP TABLE electives");
    $conn->rollBack(); 
?>