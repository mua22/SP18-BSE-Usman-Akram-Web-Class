<?php
/**
 * Created by PhpStorm.
 * User: Usman
 * Date: 3/9/2018
 * Time: 11:56 AM
 */

$a = array();

$student1['name'] = 'Usman';
$student2['name'] = 'Noman';

$students['first'] = $student1;
$students['second'] = $student2;

echo $student2['name'];
echo "<hr>".$students['first']['name'];