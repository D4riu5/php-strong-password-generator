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

        <div class="d-flex align-items-center justify-content-center my-5">
            <h4 class="mx-4">Insert password length:</h4>
            <form>
                <input type="text" name="length">
            </form>
        </div>

        <?php 
            include __DIR__ . '/functions.php';
            session_start();

            if (isset($passwordLength)) {
                $_SESSION['user'] = [
                    'passwordLength' => $passwordLength,
                ];
    
                header('Location: ./userPage.php');
                
            }

        ?>

    </div>

</body>
</html>