<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: fedex.proto

namespace Carrier\Fedex;

/**
 * Protobuf type <code>fedex.Service</code>
 */
interface ServiceInterface
{
    /**
     * Method <code>createShipment</code>
     *
     * @param \Carrier\Fedex\CreateShipmentRequest $request
     * @return \Carrier\Fedex\CreateShipmentResponse
     */
    public function createShipment(\Carrier\Fedex\CreateShipmentRequest $request);

    /**
     * Method <code>track</code>
     *
     * @param \Carrier\Fedex\TrackRequest $request
     * @return \Carrier\Fedex\TrackResponse
     */
    public function track(\Carrier\Fedex\TrackRequest $request);

}
