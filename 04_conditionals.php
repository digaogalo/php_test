<?php

/* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */

/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to
  != Not equal to
  !== Not identical to
*/

/* ---------- If & If-Else Statements --------- */

/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}
*/

/* -------- Ternary Operator -------- */
/*
  The ternary operator is a shorthand if statement.
  Ternary Syntax:
    condition ? true : false;
*/


/* -------- Switch Statements ------- */

$age = 17;

//if($age >= 18) {
//   echo 'You are old enough to vote';
//} else {
//    echo 'Sorry, you are not old enough to vote';
//}

date_default_timezone_set('America/Sao_Paulo');

$t = date("F");

/* if($t < 12) {
    echo 'Goof Morning';
} else if($t < 17) {
    echo 'Good Afternoon';
} else {
    echo 'Good Evening';
} */

$posts = ['First_post!'];

/* if (!empty($posts)) {
  echo $posts[0];
} else {
  echo 'No posts';
} */

//echo !empty($posts) ? $posts[0] : 'No Posts';

//$first_post = !empty($posts) ? $posts[0] : 'No Posts';
//$first_post = !empty($posts) ? $posts[0] : null;

//$first_post = $posts[0] ?? null;

//echo $first_post;

$favcolor = 'grey';

switch($favcolor) {
  case 'red':
    echo 'Red is my favorite color';
    break;

  case 'blue':
    echo 'Blue is my favorite color';
    break;

  case 'green':
    echo 'Green is my favorite color';
    break;

    default:
    echo 'I am not a favorite color';
}




?>