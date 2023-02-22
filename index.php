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

        <div class="my-5">

            <form>
                <div class="d-flex align-items-center justify-content-center ">
                    <h4 class="mx-4">Insert password length:</h4>
                    <input type="number" name="length" min="6" max="25" required>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="mx-2">
                        <input  type="checkbox" name="include_letters" id="include_letters" checked>
                        <label for="include_letters">Include letters</label>
                    </div>
                    <div class="mx-2">
                        <input type="checkbox" name="include_numbers" id="include_numbers" checked>
                        <label for="include_numbers">Include numbers</label>
                    </div>
                    <div class="mx-2">
                        <input type="checkbox" name="include_symbols" id="include_symbols" checked>
                        <label for="include_symbols">Include symbols</label>
                    </div>
                    <div class="mx-2">
                        <input type="checkbox" name="repeat_characters" id="repeat_characters" checked>
                        <label for="repeat_characters">Repeat characters</label>
                    </div>
                </div>
                <div class="d-flex justify-content-center my-4">
                    <button type="submit" class="btn btn-primary"> Generate password</button>
                </div>
            </form>
            <!-- <h5 class="text-center my-4"> Select at least 1 of the checkboxes (letters, numbers, symbols) </h5> -->
        </div>

        <?php 
            include __DIR__ . '/functions.php';
            session_start();

            if (isset($passwordLength) && $passwordLength != '' && is_numeric($passwordLength)) {
                if (!isset($_GET['include_letters']) && !isset($_GET['include_numbers']) && !isset($_GET['include_symbols'])) {
                    echo "<h5 class='text-center my-4'>Select at least 1 of the checkboxes (letters, numbers, symbols)</h5>";
                    exit();
                }
                $password = generateRandomPassword($passwordLength, isset($_GET['include_letters']), isset($_GET['include_numbers']), isset($_GET['include_symbols']), isset($_GET['repeat_characters']));
                $_SESSION['user'] = [
                    'password' => $password,
                ];
    
                header('Location: ./userPage.php');
                
            } else {
                echo "<h5 class='text-center my-4'>Only numbers allowed in the input!</h5>";
            }

        ?>

    </div>

</body>
</html>