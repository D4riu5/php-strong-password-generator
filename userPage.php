<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body class="bg-dark text-white">
    <?php 
        include __DIR__ . './functions.php';
        session_start();
        
        if(!empty($_SESSION['user'])) {
            $password = $_SESSION['user']['password'];
            
            echo '<h2 class="my-4 text-center">Your password is' .'<br>'. $password . '</h2>';
        }

    ?>
    <div class="my-5 d-flex justify-content-center">
        <a href="./logout.php">
            <button >Reset</button>
        </a>
    </div>

</body>
</html>