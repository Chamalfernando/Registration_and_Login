<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Registration | PHP</title>
</head>
<body>
    <div>
        <form action="registration.php" method="post">
            <div class="container">
                <h1>Registration</h1>
                <p>Fill up the form with the correct values.</p>
                <label for="firstname"><b>First Name</b></label>
                <input type="text" name="firstname" required>

                <label for="lastname"><b>Last Name</b></label>
                <input type="text" name="lastname" required>

                <label for="email"><b>Email Address</b></label>
                <input type="email" name="email" required>

                <label for="phonenumber"><b>Phone Number</b></label>
                <input type="text" name="phonenumber" required>

                <label for=""></label>
                <input type="text">

                <label for=""></label>
                <input type="text">
            </div>
        </form>
    </div>

</body>
</html>
