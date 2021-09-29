<?php
session_start();

session_destroy();

?>
<script>
    window.history.back();
    window.location.replace("../mainpages/index.php");
</script>

<?php


?>