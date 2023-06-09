<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login Form </title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <section class="container">

        <h2> Login Form </h2>
        <form action="connect.php" method="POST">
            <label for="userId"><span> Email or Phone </span></label>
            <input type="text" name="username" id="userId"></br>

            <label for="password"><span> Password </span></label>

            <input type="password" name="pass" id="password"></br>

            <button>login</button>
      </form>

        <p class="newUser">
            Not a member? <span>Signup now</span>
        </p> </section>

</body>
</html>
