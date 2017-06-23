<?php
if($_SERVER['REQUEST_METHOD'] = 'POST') {
    //if ($_FILES['file']['type'] == "image/jpeg") {
    $destination_dir = __DIR__ . "/gallery/" . $_FILES['file']['name'];
    echo $destination_dir;
    move_uploaded_file($_FILES['file']['tmp_name'], $destination_dir);
    //}
}