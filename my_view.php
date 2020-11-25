<?php

echo <<<HTML
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Best Code Ever</title>
</head>
<body class="myBodyClass">
HTML;


/** @var my_View_class $t */
$t = new my_View_class();
$t->t();

?>

<h2>Hi User</h2>
<?php var_dump($t->InvokeRocketScienceCalculation()); ?>
is the result of the rocket science calculation

<?php
# create a new db connection object
$db = new DatabaseConnection();

// run select
$r = $db->query('SELECT * FROM rocket_science_table WHERE rocket_science_key = '.$_GET['rocket_key'].' AND 1');

/*
 * Print the number of rows found in the table
 */
echo $r->num_rows . ' many rows found';


$array = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");

?>
<h1>Weekdays</h1>
<table>
    <tr>
    <th>Index</th>
    <th>Day Name</th>
    </tr>
<?
for ($i = 0; $i < count($array); $i+1)
{
    ?>
             <tr>
 <td><? echo $i?></td>
 <td><? echo $array[$i]; ?></td>
 </tr>
<?php

}
?> </table>
<?php







$db->close();
?>










