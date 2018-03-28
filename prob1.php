<?php
require("data.php");

function show_page($course, $data) {
    return '<h1>'.$data[$course]['title']."</h1>".
        '<h2>'.$data[$course]['lecturer']."</h2>".
        '<p>'.$data[$course]['description'].'</p>';
}

function show_nav($data, $course){
    
    $output = "<nav>";

    foreach($data as $key=>$val){
        if($_GET['page'] == $key){
            $output=$output."<a href='?page=".$key."' class=selected>".$val['title']."</a>";
        } else {
            $output=$output."<a href='?page=".$key."'>".$val['title']."</a>";
        }
    }
    $output=$output."</nav>"; 

    return $output;
    
}



echo show_nav($data, 'go');

if (isset($_GET['page'])){
    echo show_page($_GET['page'],$data);
} else {
    echo "Select elective";
}

var_dump($_SERVER);
?>