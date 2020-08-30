<?php
include "connection.php";
$id=$_GET["id"];
mysqli_query($link,"delete from registration where id=$id");
?>
<script type="text/javascript">
  window.location="user.php";
</script>