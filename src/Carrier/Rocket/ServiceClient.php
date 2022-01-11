<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Carrier\Rocket;

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
     * @param \Carrier\Rocket\CreateLabelRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateLabel(\Carrier\Rocket\CreateLabelRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/rocket.Service/CreateLabel',
        $argument,
        ['\Carrier\Rocket\CreateLabelResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Carrier\Rocket\RatingRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Rating(\Carrier\Rocket\RatingRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/rocket.Service/Rating',
        $argument,
        ['\Carrier\Rocket\RatingResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Carrier\Rocket\TrackRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Track(\Carrier\Rocket\TrackRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/rocket.Service/Track',
        $argument,
        ['\Carrier\Rocket\TrackResponse', 'decode'],
        $metadata, $options);
    }

}
