<?php

    $connect = mysqli_connect('localhost', 'koshurbj_users', 'KoshI1234', 'koshurbj_users');

    if (!$connect) {
        die('Error connect to DataBase');
    }