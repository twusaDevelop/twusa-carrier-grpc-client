<?php
/**
 * Created by : PhpStorm
 * User: Mark
 * Date: 2022/1/12
 * Time: 14:30
 */

use Carrier\Rocket as Rocket;
use Grpc\Status;

$host   = '127.0.0.1:7777';
$client = new Rocket\ServiceClient($host, [
    'credentials' => \Grpc\ChannelCredentials::createInsecure(),
]);

// Create the auth object.
$auth = new Rocket\Auth();

// Create the carrierAction object.
$carrierAction = new Rocket\CarrierAction;

// Create the packages object.
$packages = new Rocket\Packages();

// Create the shipFrom object.
$shipFrom = new Rocket\ShipFrom();

// Create the shipTo object.
$shipTo = new Rocket\ShipTo();

// Create the labelParams object.
$labelParams = new Rocket\LabelParams();
$labelParams->setAuth($auth);
$labelParams->setPackages([$packages]);
$labelParams->setShipFrom($shipFrom);
$labelParams->setShipTo($shipTo);
$labelParams->setService(Rocket\ServiceCode::SERVICE_CODE_US_PM);
$labelParams->setReferenceValue("reference 123");

// Create the createLabelRequest object.
$req = new Rocket\CreateLabelRequest();
$req->setCarrierAction($carrierAction);
$req->setParams($labelParams);

echo $req->serializeToJsonString();

/**
 * @var Rocket\CreateLabelResponse $reply
 * @var Status $status
 */
list($reply, $status) = $client->CreateLabel($req)->wait();
if ($status->code != \Grpc\STATUS_OK) {
    echo "{$status->detail}\n";
    return;
}
