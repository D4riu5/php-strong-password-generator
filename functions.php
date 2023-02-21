<?php 
    $passwordLength = $_GET['length'];

    function generateRandomPassword($input_length) {
        $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!?@#$%^&*_:;,.';
        $password = '';
        for ($i = 0; $i < $input_length; $i++) {
            $password .= $chars[rand(0, strlen($chars) - 1)];
        }
        return $password;
    }

?>