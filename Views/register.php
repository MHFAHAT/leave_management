<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../Views/css/regis.css">

</head>
<body>
    <div class="container">
    <h2>User Registration</h2>
    <form action=""method="POST">
        <label for="userName" id="userNameLabel">Username</label>
        <input type="text" id="userName" name="userName" required><br>

        <label for="fullName">Full Name</label>
        <input type="text" id="fullName" name="fullName"  required> <br> 

        <label for="password">Password</label>
        <input type="password" id="password" name="password" required> <br>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" required> <br>

        <label for="phone">Phone</label>
        <input type="text" id="phone" name="phone" required> <br>

        <label for="address">Address</label>
        <input type="text" id="address" name="address" required> <br>

        <label for="role">Role</label>
        <input type="text" id="role" name="role" required> <br>

        <label for="departmentId">Department ID</label>
        <input type="number" id="departmentId" name="departmentId" required><br> 

        <button type="submit"name="register">Register</button>
    </form>        


    </div>
</body>
</html>