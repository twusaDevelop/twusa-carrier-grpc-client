<?php
$host = '127.0.0.1:7777';
$client = new \Carrier\Ups\ServiceClient($host,[
    'credentials' => \Grpc\ChannelCredentials::createInsecure(),
]);
$req = new \Carrier\Ups\CreateLabelRequest();

//UPS 授权信息
$auth = new \Carrier\Ups\Auth();

//发件人
$shipper = new \Carrier\Ups\Location();

//目的地
$shipTo = new \Carrier\Ups\Location();

//起始地
$shipFrom = new \Carrier\Ups\Location();

//付款方式
$payment = new \Carrier\Ups\Payment();

//包裹信息
$package = new \Carrier\Ups\Package();

//发货信息
$shipment = new \Carrier\Ups\Shipment();

//面单信息
$shipment->setLabelFormat(\Carrier\Ups\Shipment\LabelFormat::PNG);
$shipment->setPackage($package);
$shipment->setService(Carrier\Ups\Shipment\Service::GROUND);
$shipment->setShipper($shipper);
$shipment->setShipFrom($shipFrom);
$shipment->setShipTo($shipTo);
$req->setAuthorization($auth);
$req->setShipment($shipment);
$req->setAuthorization($auth);
$req->setShipment($shipment);
list($reply,$status) = $client->CreateLabel($req,['token' => '']);

/**
 * @var \Carrier\Ups\CreateLabelResponse $reply
 * @var \Grpc\Status $status
 */
list($reply,$status) = $client->Track($req,metaData())->wait();
if($status->code != \Grpc\STATUS_OK){
    echo "{$status->detail}\n";
    return;
}

function metaData(){
    return ['token' => 'KDA88999'];
}