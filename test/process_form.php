<?php
    $data['file'] = $_FILES;
    $data['text'] = $_POST;
 
    echo json_encode($data);
?>