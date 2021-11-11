<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Carrier\Fedex;

/**
 */
class ServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Carrier\Fedex\CreateShipmentRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateShipment(\Carrier\Fedex\CreateShipmentRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/fedex.Service/CreateShipment',
        $argument,
        ['\Carrier\Fedex\CreateShipmentResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Carrier\Fedex\TrackRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Track(\Carrier\Fedex\TrackRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/fedex.Service/Track',
        $argument,
        ['\Carrier\Fedex\TrackResponse', 'decode'],
        $metadata, $options);
    }

}
