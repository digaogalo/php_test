<?php
/* --- $_GET & $_POST Superglobals -- */

/*
  We can pass data through urls and forms using the $_GET and $_POST superglobals.
*/
if(isset($_POST['submit'])) {
  echo $_POST['name'];
  echo $_POST['age'];
}

?>

<a href="   
<?php echo $_SERVER['PHP_SELF'];    
?>
?name="
>
</a>
   
