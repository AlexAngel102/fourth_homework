<?php

$email = $_POST['email'];
$password = $_POST['password'];

$users = [];

if (file_exists('users.json')) {
    $users = json_decode(file_get_contents('users.json') ,true);
}


}

die("Credentials are incorrect!");