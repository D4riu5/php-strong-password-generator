<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body class="bg-dark text-white">
    <div class="container">
        <h1 class="text-center my-4">Password generator</h1>

        <div class="d-flex align-items-center">
            <h4 class="mx-4">insert password length</h4>
            <form>
                <input type="text" name="length">
            </form>
        </div>

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

        if (isset($passwordLength)) {
            $password = generateRandomPassword($passwordLength);
            echo '<h2 class="my-4">Your password is: ' . $password . '</h2>';
        }



        ?>

    </div>

</body>
</html>