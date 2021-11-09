<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ups.proto

namespace Carrier\Ups;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>pb.CreateLabelRequest</code>
 */
class CreateLabelRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.pb.Auth authorization = 1;</code>
     */
    protected $authorization = null;
    /**
     * Generated from protobuf field <code>.pb.Shipment shipment = 2;</code>
     */
    protected $shipment = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Carrier\Ups\Auth $authorization
     *     @type \Carrier\Ups\Shipment $shipment
     * }
     */
    public function __construct($data = NULL) {
        \Carrier\Ups\Ups::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.pb.Auth authorization = 1;</code>
     * @return \Carrier\Ups\Auth|null
     */
    public function getAuthorization()
    {
        return $this->authorization;
    }

    public function hasAuthorization()
    {
        return isset($this->authorization);
    }

    public function clearAuthorization()
    {
        unset($this->authorization);
    }

    /**
     * Generated from protobuf field <code>.pb.Auth authorization = 1;</code>
     * @param \Carrier\Ups\Auth $var
     * @return $this
     */
    public function setAuthorization($var)
    {
        GPBUtil::checkMessage($var, \Carrier\Ups\Auth::class);
        $this->authorization = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.pb.Shipment shipment = 2;</code>
     * @return \Carrier\Ups\Shipment|null
     */
    public function getShipment()
    {
        return $this->shipment;
    }

    public function hasShipment()
    {
        return isset($this->shipment);
    }

    public function clearShipment()
    {
        unset($this->shipment);
    }

    /**
     * Generated from protobuf field <code>.pb.Shipment shipment = 2;</code>
     * @param \Carrier\Ups\Shipment $var
     * @return $this
     */
    public function setShipment($var)
    {
        GPBUtil::checkMessage($var, \Carrier\Ups\Shipment::class);
        $this->shipment = $var;

        return $this;
    }

}
