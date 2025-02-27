<?php

function get(callable $function){
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        call_user_func($function);
    }
}

function post(callable $function){
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        call_user_func($function);
    }
}

function put(callable $function){
    if ($_SERVER['REQUEST_METHOD'] === 'PUT') {
        call_user_func($function);
    }
}

function delete(callable $function){
    if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
        call_user_func($function);
    }
}
