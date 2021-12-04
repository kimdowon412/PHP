<?php

$tmpName = $_FILES["upload"]["tmp_name"];
$realName =$_FILES["upload"]["name"];

if(!file_exists("upload")) {
    mkdir("upload");
}

move_uploaded_file($tmpName, "upload/" .$realName);
