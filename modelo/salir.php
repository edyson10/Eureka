<?php

session_start();
?>
<script>
    console.log("Hola");
</script>
<?php
session_destroy();

header('Location: ../vista/login.php');
?>