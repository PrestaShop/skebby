<?php

include(dirname(__FILE__).'/../../config/config.inc.php');
include(dirname(__FILE__).'/skebby.php');

if (Tools::getValue('token') != Tools::encrypt(Configuration::get('PS_SHOP_NAME'))){
	die('Error: Invalid Token');	
}

$skebby_module = new Skebby();

$params = array();

$params['civility'] = 'Mr.';
$params['first_name'] = 'Matteo';
$params['last_name'] = 'Monti';
$params['order_price'] = 'EUR 10.15';
$params['order_date'] = '2015-01-09 14:16:47';
$params['order_reference'] = 'ABCDEFGHI';

$params['currency'] = '€';
$params['total_to_pay'] = '100.0000';

echo json_encode($skebby_module->hookOrderConfirmation($params));