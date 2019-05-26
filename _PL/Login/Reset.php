<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Reset</title>
</head>
<body>

<h1>Reset</h1>
<form method="POST">
    <label for="newpassword">password</label>
    <input type="text" id="newpassword" name="newpassword"><br>
    <label for="confirmpassword">confirmpassword</label>
    <input type="text" id="confirmpassword" name="confirmpassword"><br>
    <input type="submit" name="Reset" value="Reset">
    <input type="hidden" id="email" name="email" value="<?php echo $_GET['email'];?>">
    <input type="hidden" id="code_hash" name="code_hash" value="<?php echo $_GET['code_hash'];?>">



</form>
</body>
</html>