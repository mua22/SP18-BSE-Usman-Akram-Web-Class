<?php
/**
 * Created by PhpStorm.
 * User: Usman
 * Date: 3/5/2018
 * Time: 12:01 PM
 */

$dummy = array();
$dummy['name'] = "Usman Akram";
$dummy['nic'] = "123456789";

$dummy1['name'] = "Noman Akram";
$dummy1['nic'] = "987654321";

$sudents['usman'] = $dummy;
$sudents['noman'] = $dummy1;

$sudents['ali'] = ['name'=>'Ali', 'nic'=>'55555555'];

echo $sudents['ali']['name']."<br>";
echo $sudents['ali']['nic'];


$row['id'] = 1;
$row['title'] = '';
$row['content'] = '';
