<?php
include "connection.php";
$id=$_GET["id"];
mysqli_query($link,"delete from books where id=$id");
?>
<script type="text/javascript">
  window.location="allbooks.php";
</script>