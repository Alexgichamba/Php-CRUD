<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <div class="save_div">
        <form action="saveUserProcess.php" method="get">
            <input type="text" placeholder="Name here" name="x" required class="inputs"> <br>
            <input type="email" placeholder="Email here" name="y" required class="inputs"> <br>
            <input type="text" placeholder="Password here" name="z" required class="inputs"> <br>
            <input type="submit" value="Save" name="btn_save" class="s_btn"> <br>
            <a href="viewUsers.php" class="v_link">View users</a> <br>
        </form>
    </div>

</body>
</html>