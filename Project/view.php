<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Login Form</title>
</head>
<body>
    <div id="form">
        <h1>LOGIN FORM</h1>
        <div class="imgcontainer">
    <img src="https://img.freepik.com/premium-photo/memoji-handsome-guy-man-with-glasses-white-background-emoji-cartoon-character_826801-6958.jpg" alt="Login Image" class="img-fluid mx-auto" style="width: 200px;">
</div>
        <form action="/action_page.php" method="post">
            <div class="mb-3">
                <label for="username" class="form-label">Email:</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
        </form>
    </div>






   
</body>
</html>
