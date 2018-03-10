<?php
/**
 * Created by PhpStorm.
 * User: Usman
 * Date: 3/9/2018
 * Time: 3:07 PM
 */

$std1['name'] = 'Usman Akram';
$std1['nic'] = '123';

$std2['name'] = 'Noman';
$std2['nic'] = '999';

$students['first'] = $std1;
$students['second'] = $std2;


//echo $std1['name'].': '.$std1['nic'];

echo $students['second']['name'];