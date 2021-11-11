<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ups.proto

namespace Carrier\Ups;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>ups.TrackResponse</code>
 */
class TrackResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string status = 1;</code>
     */
    protected $status = '';
    /**
     * Generated from protobuf field <code>string delivery_date = 2;</code>
     */
    protected $delivery_date = '';
    /**
     * Generated from protobuf field <code>string delivery_indicator = 3;</code>
     */
    protected $delivery_indicator = '';
    /**
     * Generated from protobuf field <code>string pickup_date = 4;</code>
     */
    protected $pickup_date = '';
    /**
     * Generated from protobuf field <code>repeated .ups.TrackActivity nodes = 5;</code>
     */
    private $nodes;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $status
     *     @type string $delivery_date
     *     @type string $delivery_indicator
     *     @type string $pickup_date
     *     @type \Carrier\Ups\TrackActivity[]|\Google\Protobuf\Internal\RepeatedField $nodes
     * }
     */
    public function __construct($data = NULL) {
        \Carrier\Ups\Ups::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string status = 1;</code>
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>string status = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkString($var, True);
        $this->status = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string delivery_date = 2;</code>
     * @return string
     */
    public function getDeliveryDate()
    {
        return $this->delivery_date;
    }

    /**
     * Generated from protobuf field <code>string delivery_date = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDeliveryDate($var)
    {
        GPBUtil::checkString($var, True);
        $this->delivery_date = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string delivery_indicator = 3;</code>
     * @return string
     */
    public function getDeliveryIndicator()
    {
        return $this->delivery_indicator;
    }

    /**
     * Generated from protobuf field <code>string delivery_indicator = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDeliveryIndicator($var)
    {
        GPBUtil::checkString($var, True);
        $this->delivery_indicator = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string pickup_date = 4;</code>
     * @return string
     */
    public function getPickupDate()
    {
        return $this->pickup_date;
    }

    /**
     * Generated from protobuf field <code>string pickup_date = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setPickupDate($var)
    {
        GPBUtil::checkString($var, True);
        $this->pickup_date = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .ups.TrackActivity nodes = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNodes()
    {
        return $this->nodes;
    }

    /**
     * Generated from protobuf field <code>repeated .ups.TrackActivity nodes = 5;</code>
     * @param \Carrier\Ups\TrackActivity[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNodes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Carrier\Ups\TrackActivity::class);
        $this->nodes = $arr;

        return $this;
    }

}

