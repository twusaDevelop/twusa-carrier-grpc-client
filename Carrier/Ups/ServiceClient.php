<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Carrier\Ups;

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
     * @param \Carrier\Ups\CreateLabelRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateLabel(\Carrier\Ups\CreateLabelRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/pb.Service/CreateLabel',
        $argument,
        ['\Carrier\Ups\CreateLabelResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Carrier\Ups\TrackRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Track(\Carrier\Ups\TrackRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/pb.Service/Track',
        $argument,
        ['\Carrier\Ups\TrackResponse', 'decode'],
        $metadata, $options);
    }

}
