<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel="stylesheet"> 

    <style> 
    body {
        font-family: 'Share Tech Mono', monospace;
    }
    a {
        color: crimson;
    }

h1 {
    align-items: center;
    
}
.first {
align-items: center;
display: flex;
justify-content: center;
font-family: 'Share Tech Mono', monospace;
}
.one {
    text-decoration: dotted;
}
.body1 {
    justify-content: center;
    display: flex;
    font-family: 'Share Tech Mono', monospace;
}


    </style>
    <title>Document</title>
</head>
<body>
    <div class="first">
   <h3>Go to the <a href="forum.php"> Forum </a> or <a href="logout.php"> logout</a></h3> 
    </div>

<div class="body1">


    <h1 class="one">
        schüler forum
    </h1>


</div>

</body>
</html>