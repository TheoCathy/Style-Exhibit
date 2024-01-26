<?php
session_start();
// To terminate the session
session_destroy();
// header("Location: Login.html");  
echo "<script>
alert('Logout Successful...');
window.location.href = 'login.php';
</script>";
exit();
