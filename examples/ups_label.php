<?php

$host = '127.0.0.1:7777';
$client = new \Carrier\Ups\ServiceClient($host, [
    'credentials' => \Grpc\ChannelCredentials::createInsecure(),
    // 'grpc.keepalive_time_ms' => 10000, // 每10秒发送一次keepalive ping
    // 'grpc.keepalive_timeout_ms' => 1000, // keepalive ping超时时间为1秒
    // 'grpc.http2.max_pings_without_data' => 0, // 允许在没有数据流的情况下发送ping
    // 'grpc.keepalive_permit_without_calls' => 1, // 即使没有调用，也发送keepalive ping
]);
$req = new \Carrier\Ups\CreateLabelRequest();

//UPS 授权信息
$auth = new \Carrier\Ups\Auth();
$auth->setUsername('username');
$auth->setPassword('password');
$auth->setAccessLicenseNumber('accessLicenseNumber');

//发件人
$shipper = new \Carrier\Ups\Location();
$shipper->setShipperNumber('1234546');

//目的地
$shipTo = new \Carrier\Ups\Location();

//起始地
$shipFrom = new \Carrier\Ups\Location();

//付款方式
// 1 预付费
$payment = new \Carrier\Ups\Payment();
$payment->setPaymentType(\Carrier\Ups\Payment\Type::PREPAID);
$payment->setAccountNumber('1234567890');
// 2 第三方平台支付
$billAddr = new \Carrier\Ups\Address();
$billAddr->setPostalCode('');
$billAddr->setState('');
$payment->setAddress($billAddr);

//包裹信息
$package = new \Carrier\Ups\Package();

$reference = new \Carrier\Ups\Reference();
$reference->setValue('123');
$package->setReferences([$reference]);

$dimension = new \Carrier\Ups\Dimensions();
$dimension->setLength(10.0);
$dimension->setWidth(10.0);
$dimension->setHeight(10.0);
$dimension->setUnit(\Carrier\Ups\Unit::IN);
$package->setDimensions($dimension);

$weight = new \Carrier\Ups\Weight();
$weight->setUnit(\Carrier\Ups\Unit::LBS);
$weight->setValue(1.0);
$package->setWeight($weight);

$package->setType(\Carrier\Ups\PackageType::PACKAGE);

//发货信息
$shipment = new \Carrier\Ups\Shipment();
$shipment->setLabelFormat(\Carrier\Ups\Shipment\LabelFormat::PNG);
$shipment->setPackage($package);
$shipment->setService(Carrier\Ups\Shipment\Service::GROUND);
$shipment->setShipper($shipper);
$shipment->setShipFrom($shipFrom);
$shipment->setShipTo($shipTo);
$shipment->setPayment($payment);

$req->setAuthorization($auth);
$req->setShipment($shipment);

echo $req->serializeToJsonString();

/**
 * @var \Carrier\Ups\CreateLabelResponse $reply
 * @var \Grpc\Status $status
 */
list($reply, $status) = $client->CreateLabel($req, ['token' => '']);
if ($status->code != \Grpc\STATUS_OK) {
    echo "{$status->detail}\n";
    $reply->getTrackingNumber();
    return;
}

function metaData()
{
    return ['token' => 'KDA88999'];
}
