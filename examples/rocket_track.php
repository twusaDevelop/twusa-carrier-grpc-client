<?php
/**
 * Created by : PhpStorm
 * User: Mark
 * Date: 2022/1/12
 * Time: 14:52
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

// Create the trackParams object.
$trackParams = new Rocket\TrackParams();
$trackParams->setAuth($auth);
$trackParams->setTrackingNumber("9400111202535877699661");

// Create the TrackRequest object.
$req = new Rocket\TrackRequest();
$req->setCarrierAction($carrierAction);
$req->setParams($trackParams);

/**
 * @var Rocket\TrackResponse $reply
 * @var Status $status
 */
list($reply, $status) = $client->Track($req)->wait();
if ($status->code != \Grpc\STATUS_OK) {
    echo "{$status->detail}\n";
    return;
}