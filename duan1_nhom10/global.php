<?php

// Chỉ cần khai báo 1 lần duy nhất tại đây
session_start();

const DB_HOST = 'localhost';
const DB_DATABASE = 'duan_nhom10';
const DB_USERNAME = 'root';
const DB_PASSWORD = '';

if (!function_exists('check_auth')) {
    function check_auth() {
        if (empty($_SESSION['user'])) {
            header('Location: /login');
            exit();
        }
    }
}
if (!function_exists('check_auth')) {
    function check_auth(){

        if (empty($_SESSION['is_admin'])) {
            header('Location: /login');
            exit();
        }
    }
}