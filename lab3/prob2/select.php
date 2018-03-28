 <?php
    require("connect.php");


    $sql = "SELECT * FROM electives";
    //Връща резултата от заявката под формата на обект от класа PDOStatement;
    $result = $conn->query($sql);
    //Използваме метода fetch(PDO::FETCH_ASSOC) на класа PDOStatement,
    //за да извлечем асоциативен масив от резултата.
    //ВАЖНО: Асоциативният масив съдържа само един ред от резултата!
    //Чрез while извличаме по 1 ред на всяка итерация и така докато резултатите не свършат.
    echo "<ul>";

    $rows = $result->fetchAll();
    var_dump($rows);
    /*while ($row = $result->fetch(PDO::FETCH_ASSOC)){
        echo "<li>".$row['title']."</li>";
        var_dump($row);
    } */
?>