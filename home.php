<?php
    session_start();
    $id=$_SESSION['id'];
    echo $id;
?>
<html>
    <head>
</head>
<body>
<a href="logout.php">LOGOUT</a>
</body>
</html>