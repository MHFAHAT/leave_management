<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Department Form</title>
    <link rel="stylesheet" type="text/css" href="../Views/css/regis.css">
</head>
<body>
    <div class="container">
        <h2>Department Form</h2>
        <form action="../Control/deptController.php" method="POST">
            <label for="deptName">Department Name</label>
            <input type="text" id="deptName" name="deptName" required><br>

            <label for="position">Position</label>
            <input type="text" id="position" name="position" required><br>

            <div style="display: flex; justify-content: flex-end;">
                <button type="submit" name="addDept">Add Department</button>
            </div>
        </form>
    </div>
</body>
</html>
<!-- This needs works -->