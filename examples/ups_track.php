<?php
$host = '127.0.0.1:7777';
$client = new \Carrier\Ups\ServiceClient($host,[
    'credentials' => \Grpc\ChannelCredentials::createInsecure(),
]);
$req = new \Carrier\Ups\TrackRequest();
$auth = new \Carrier\Ups\Auth();
$auth->setAccessLicenseNumber();
$auth->setAccountNumber();
$auth->setPassword();
$auth->setUsername();
$req->setAuthorization($auth);
$req->setTrackNumber('1Z79381232340877123');

/**
 * @var \Carrier\Ups\TrackResponse $reply
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