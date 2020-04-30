<?php
$_SESSION['todoItems'] = array();

session_start();
$myMessage = 'PHP TODO List!';

if ( !isset( $_SESSION['todoItems'] ) )
{
 $_SESSION['todoItems'] = array();
}
$_SESSION['todoItems'] = array_values( $_SESSION['todoItems'] );
array_push( $_SESSION['todoItems'], $_GET['todoItem'] );
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $myMessage; ?></title>
</head>
    <body>
      <h1><?php echo $myMessage; ?></h1>
      <form action="./form.php" method="GET">

      <label for="todoItem">
      Add a todo item:
      <input type="text" name="todoItem" id="todoItem">
      </label>
      <input type="submit" value="Add">
      </form>

      <?php if ( !empty( $_SESSION['todoItems'] ) ) : ?>
    <h2>Todo List:</h2>
    <ul>php
      <?php foreach ( $_SESSION['todoItems'] as $todoItem ) : ?>
        <li>
          <?php echo $todoItem ; ?>
        </li>
      <?php endforeach; ?>
    </ul>
  <?php endif; ?>

      <pre>
          <!-- <?php var_dump( $_SESSION ); ?> -->
      </pre>
    </body>
</html>
	
	
	
