<?php

setcookie('name',"", time()-3600);
setcookie('password',"", time()-3600);
header("location:index.php");
?>