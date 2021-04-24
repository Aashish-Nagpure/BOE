<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style1.css">
    <title>Document</title>
</head>

<body>

    <div class="wrapper">

        <div class="logo">
            <img src="./icon.svg" alt="icon">
        </div>


        <form action="havaldar_validation.php" method="post">

            <div class="e-field">
                <label  for="">Enter Your Email Address</label><br>
                <input  type="email" name="email" required>
            </div>
            <div class="p-field">
                <label for="">Password</label><br>
                <input type="password" name="password" required><br>
            </div>
<br>

            <button type="submit" name="submit"> Login</button>
        </form>

        <div class="or"> </div>

<br>

        <div class="o-signup">
            Dont have account ? <span><a href="havaldar_sign.php" >SignUp</a></span>
        </div>




    </div>


</body>

</html>
