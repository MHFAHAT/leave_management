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

        <label>Gender</label>
        <div class="gender" style="display:inline;">
            <input type="radio" id="male" name="gender" value="male" required>
            <label for="male">Male</label>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Female</label>
            <input type="radio" id="other" name="gender" value="other">
            <label for="other">Other</label>
        </div>
        <br>

        <label for="role">Role</label>
        <select id="role" name="role" required style="width:auto; margin-left:10px;">
              <option value="empty">Please select one</option>                                                                      
            <option value="admin">Admin</option>
            <option value="manager">Manager</option>
            <option value="employee">Employee</option>
        </select> <br>

        <label for="departmentId">Department ID</label>
        <input type="number" id="departmentId" name="departmentId" required><br> 

        <div style="display: flex; ">
            <button name="login">Log in</button>
            <button type="submit"name="register">Register</button>
        </div>
    </form>        


    </div>
</body>
</html>