<?php
/**
 * Created by : PhpStorm
 * User: Mark
 * Date: 2021/11/12
 * Time: 14:19
 */

use Carrier\Fedex as Fedex;

$host   = '127.0.0.1:7777';
$client = new Fedex\ServiceClient($host, [
    'credentials' => \Grpc\ChannelCredentials::createInsecure(),
]);

// 授权
$auth = new Fedex\Auth();
$auth->setClientId("l73485dade43f140a6a4e71c5610e4f900");
$auth->setClientSecret("d0e590e4c4934e52b7b92b7e09e0f6bb");

// 获取物流轨迹请求
$reqTrack = new Fedex\TrackRequest();
$reqTrack->setAuthorization($auth);
$reqTrack->setTrackNumber("283527452813");

list($reply, $status) = $client->Track($reqTrack);