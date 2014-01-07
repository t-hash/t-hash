<?php
require_once 'jsonRPCClient.php';

$litecoin = new jsonRPCClient ('http://wfuller:Xadsl3612@http://192.81.210.142:9332/');


$ltcdiff = echo ($litecoin->getdifficulty());


?>