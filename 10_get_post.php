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

<<<<<<< HEAD
<a href="<?php $_SERVER['PHP_SELF']; ?>?
name=John&age=30">Click</a>

<form action="<?php $_SERVER['PHP_SELF']; ?>"
method="POST">
  <div>
    <label for="name">Name: </label>
    <input type="text" name="name">
  </div>
  <div>
    <label for="age">Age: </label>
    <input type="text" name="age">
  </div>
  <input type="submit" value="Submit" name="submit">
</form>


=======
<a href="   
<?php echo $_SERVER['PHP_SELF'];    
?>
?name=""
>
</a>
   
>>>>>>> 0636a72e734002fc39b3fe22cb0c7534922c95a1
