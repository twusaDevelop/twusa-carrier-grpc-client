<?php
/**
 * Created by : PhpStorm
 * User: Mark
 * Date: 2021/11/12
 * Time: 9:14
 */

use Carrier\Fedex as Fedex;
use Grpc\Status;

$host   = '127.0.0.1:7777';
$client = new Fedex\ServiceClient($host, [
    'credentials' => \Grpc\ChannelCredentials::createInsecure(),
]);

// 授权
$auth = new Fedex\Auth();
$auth->setClientId("l73485dade43f140a6a4e71c5610e4f900");
$auth->setClientSecret("d0e590e4c4934e52b7b92b7e09e0f6bb");

// 托运人
$shipperAddress = new Fedex\Address();
$shipperAddress->setStreetLines(["SHIPPER STREET LINE 1", "SHIPPER STREET LINE 2"]);
$shipperAddress->setCity("HARRISON");
$shipperAddress->setState("AR");
$shipperAddress->setPostalCode("72601");
$shipperAddress->setCountryCode("US");
$shipperContact = new Fedex\Contact();
$shipperContact->setPersonName("SHIPPER NAME");
$shipperContact->setPhoneNumber("1234567890");
$shipperContact->setCompanyName("Shipper Company Name");
$shipper = new Fedex\Linkman();
$shipper->setAddress($shipperAddress);
$shipper->setContact($shipperContact);

// 收件人
$recipientAddress = new Fedex\Address();
$recipientAddress->setStreetLines(["7372 PARKRIDGE BLVD", "APT 286", "2903 sprank"]);
$recipientAddress->setCity("Collierville");
$recipientAddress->setState("TN");
$recipientAddress->setPostalCode("38017");
$recipientAddress->setCountryCode("US");
// 如果ServiceType是GROUND_HOME_DELIVERY，此项必须设置为true，否则不传
$recipientAddress->setResidential(true); // 是否是家庭地址
$recipientContract = new Fedex\Contact();
$recipientContract->setPersonName("John Taylor");
$recipientContract->setPhoneNumber("1234567890");
$recipient = new Fedex\Linkman();
$recipient->setAddress($recipientAddress);
$recipient->setContact($recipientContract);
$recipients = [$recipient];

// 支付细节
$shippingChargesPayment = new Fedex\ShippingChargesPayment();
$shippingChargesPayment->setPaymentType(Fedex\ShippingChargesPayment\PaymentType::SENDER);
// 如果PaymentType是非sender，accountNumber必传，否则不传
$shippingChargesPayment->setAccountNumber("777777777");

// 面单细节
$labelSpecification = new Fedex\LabelSpecification();
$labelSpecification->setImageType(Fedex\LabelSpecification\ImageType::PNG);
$labelSpecification->setLabelStockType(Fedex\LabelSpecification\LabelStockType::PAPER_4X6);

// 包裹重量
$weight = new Fedex\Weight();
$weight->setUnit(Fedex\Weight\Unit::LB);
$weight->setValue(12.22);
// 自定义参考信息
$referenceItem = new Fedex\CustomerReferences();
$referenceItem->setCustomerReferenceType(Fedex\CustomerReferences\CustomerReferenceType::CUSTOMER_REFERENCE);
$referenceItem->setValue("amazon_1122334455");
// 包装细节
$packageLineItem = new Fedex\RequestedPackageLineItems();
$packageLineItem->setWeight($weight);
$packageLineItem->setCustomerReferences([$referenceItem]);
$packageLineItems = [$packageLineItem];

// 货物描述
$requestShipment = new Fedex\RequestedShipment();
$requestShipment->setShipper($shipper);
$requestShipment->setRecipients($recipients);
$requestShipment->setPickupType(Fedex\RequestedShipment\PickupType::CONTACT_FEDEX_TO_SCHEDULE);
$requestShipment->setServiceType(Fedex\RequestedShipment\ServiceType::GROUND_HOME_DELIVERY);
$requestShipment->setPackagingType(Fedex\RequestedShipment\PackagingType::YOUR_PACKAGING);
$requestShipment->setShippingChargesPayment($shippingChargesPayment);
$requestShipment->setLabelSpecification($labelSpecification);
$requestShipment->setRequestedPackageLineItems($packageLineItems);

// 指定Smart Post发货详细信息
if ($requestShipment->getServiceType() == Fedex\RequestedShipment\ServiceType::SMART_POST) {
    $smartPostInfoDetail = new Fedex\SmartPostInfoDetail();
    $smartPostInfoDetail->setAncillaryEndorsement(Fedex\SmartPostInfoDetail\AncillaryEndorsement::ADDRESS_CORRECTION);
    $smartPostInfoDetail->setHubId("5531");
    $smartPostInfoDetail->setIndicia(Fedex\SmartPostInfoDetail\Indicia::PARCEL_SELECT);
    $requestShipment->setSmartPostInfoDetail($smartPostInfoDetail);
}

// 创建面单请求
$req = new Fedex\CreateShipmentRequest();
$req->setAuthorization($auth);
$req->setRequestedShipment($requestShipment);
$req->setLabelResponseOptions(Fedex\CreateShipmentRequest\LabelResponseOptions::LABEL);
$req->setAccountNumber("777777777");

/**
 * @var Fedex\CreateShipmentResponse $reply
 * @var Status $status
 */
list($reply, $status) = $client->CreateShipment($req, metaData())->wait();
if ($status->code != \Grpc\STATUS_OK) {
    echo "{$status->detail}\n";
    return;
}

function metaData()
{
    return ['token' => 'KDA88999'];
}