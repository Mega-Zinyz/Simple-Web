<?php
    session_start();
    session_destroy();
    echo "<script>alert('Logout Successful, Your Logout Now')
    window.location='../index.php'</script>"
?>