<?php
//điều chỉnh kết nối db ở đây
const DBNAME = "insightssprings";
const DBUSER = "root";
const DBPASS = "";
const DBCHARSET = "utf8";
const DBHOST = "127.0.0.1";

const BASE_URL = "http://localhost/duAnCaNhan";


function redirect($key = "",$msg = "",$url ="") {
    $_SESSION[$key] = $msg;
    switch ($key) {
        case "errors":
            unset($_SESSION['success']);
            break;
        case "success":
            unset($_SESSION['errors']);
            break;
    }
    header('location: ' . BASE_URL . $url."?msg=".$key);die;
}

function route($name) {
    return BASE_URL.$name;
}