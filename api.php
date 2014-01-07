<?php
require_once 'jsonRPCClient.php';

$litecoin = new jsonRPCClient ('http://wfuller:Xadsl3612@http://192.81.210.142:9332/');
$megacoin = new jsonRPCClient ('http://wfuller:Xadsl3612@http://192.81.210.142:9333/');
$earthcoin = new jsonRPCClient ('http://wfuller:Xadsl3612@http://192.81.210.142:9334/');
$worldcoin = new jsonRPCClient ('http://wfuller:Xadsl3612@http://192.81.210.142:9335/');

$ltcdiff = ($litecoin->getdifficulty());
$mecdiff = ($megacoin->getdifficulty());

?>