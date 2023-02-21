<?php 
    $passwordLength = $_GET['length'];

    function generateRandomPassword($input_length, $include_letters, $include_numbers, $include_symbols, $repeat_characters) {
        $chars = '';
        if ($include_letters) {
            $chars .= 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        }
        if ($include_numbers) {
            $chars .= '0123456789';
        }
        if ($include_symbols) {
            $chars .= '!?@#$%^&*()_+{}[]|:;"<>,./';
        }
        $password = '';
        $chars_length = strlen($chars);
        for ($i = 0; $i < $input_length; $i++) {
            $index = rand(0, $chars_length - 1);
            if (!$repeat_characters && $i > 0) {
                while ($chars[$index] === $password[$i - 1]) {
                    $index = rand(0, $chars_length - 1);
                }
            }
            $password .= $chars[$index];
        }
        return $password;
    }

?>