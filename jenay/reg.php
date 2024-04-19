<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
</head>

<body>
<div class=main>
    <h1>Registration Form</h1>
    <form action="process.php" method= "POST">
        <div class="row">
            <div class=text>
                <label>Name</label> <br>
                <input type="text" name="nm" required>
            </div>
            <div class=text>
                <label>Email</label> <br>
                <input type="text" name="Email" required>
            </div>
            <div class=text>
                <label>Password</label> <br>
                <input type="password" name="password" required>
            </div>
            <div class=text>
                <label>Phone Number</label> <br>
                <input type="text" name="pn" required>
            </div>

            <div class="last">
                <input type="submit" name="reg" value="Register">
            </div>
        </div>
    </form>

    <div class="singup_link">
    
    <a href="index.php">Log-in</a>
    <label>All ready log-in </label>
    </div>
    
</div>
    
</body>
</html>