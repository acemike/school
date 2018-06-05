<?php

$testArr = array(
	'user_id' => 2245,
	'username' => 'johndoe',
	'email' => 'johndoe@test.nl',
	'password' => 'welkom01',
	'firstname' => 'John',
	'prefix' => null,
	'lastname' => 'Doe',
	'birthday' => '04-09-1985',
	'street' => 'Claude Debussylaan',
	'streetnr' => 34,
	'addition' => null,
	'postal' => '1082MD',
	'city' => 'Amsterdam',
	'country' => 'Netherlands',
	'last_login' => '21-05-2018 23:32:48',
	'register_date' => '01-05-2018',
	'role_id' => 4
);

foreach ($testArr as $key => $val) {
	if ($key == 'username') {
		echo 'username:' . $val . '<br>';
	} else if ($key == 'email') {
		echo "email:" . $val . '<br>';

	} else if ($key == 'firstname') {
		echo "firstname:" . $val . '<br>';

	} else if ($key == 'prefix') {
		echo "prefix:" . $val . '<br>';

	} else if ($key == 'lastname') {
		echo "lastname:" . $val . '<br>';

	} else if ($key == 'street') {
		echo "street:" . $val . '<br>';

	} else if ($key == 'streetnr') {
		echo "streetnr:" . $val . '<br>';

	} else if ($key == 'addition') {
		echo "addition:" . $val . '<br>';

	} else if ($key == 'city') {
		echo "city:" . $val . '<br>';


	}
}