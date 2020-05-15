<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>

    <?php
        include "get_started.php";
    ?>

    <form action="send.php" method="post" target="blank">

        Name: <input type="text" name="fname"><br>
        Email: <input type="email" name="email"> <br/>
        Password: <input type="password" name="password"> <br/>
        Gender: <input type="radio" name="gender" value="M">
        Male: <input type="radio" name="gender" value="F">
        Female: <input type="submit" value="submit"> <br/>

    </form>

</body>

</html>