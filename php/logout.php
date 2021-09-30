<?php
session_start();

session_destroy();

?>
<script>
    window.history.back();
    window.location.replace("../index.php");
</script>

<?php


?>