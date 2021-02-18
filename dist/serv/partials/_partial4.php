<?php
$data = array();
$data = $_POST;

$work = array();
$aff = array();

/* get optionals */
foreach ($data as $k => $d) {
    if (preg_match('/(affiliate)/', $k) && getData($data, $k)) {
        $filter = (int)filter_var($k, FILTER_SANITIZE_NUMBER_INT);
        if ($filter > 0) {
            array_push($aff, $filter);
        }
        continue;
    } else if (preg_match('/(work)/', $k) && $d !== "") {
        $filter = (int)filter_var($k, FILTER_SANITIZE_NUMBER_INT);
        if ($filter > 0) {
            array_push($work, $filter);
        }
        continue;
    }
}

function getData($arr, $column)
{
    foreach ($arr as $key => $data) {
        if ($key === $column && $data !== "") {
            return $data;
        }
    }
    return false;
}

function getSkillPerc($arr, $column)
{
    if (getData($arr, $column) > 100) {
        return 100;
    } else {
        return getData($arr, $column);
    }
}


/* IMG */
$img_dir = "../img/";
$img_name = $img_dir . basename($_FILES['img']['name']);
$uploadSuccess = 1;
$img_file_type = strtolower(pathinfo($img_name, PATHINFO_EXTENSION));
$check = getimagesize($_FILES["img"]["tmp_name"]);

move_uploaded_file($_FILES["img"]["tmp_name"], $img_name);
