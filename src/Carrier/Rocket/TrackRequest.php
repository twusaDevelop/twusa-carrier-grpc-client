<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rocket.proto

namespace Carrier\Rocket;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * 物流跟踪请求
 *
 * Generated from protobuf message <code>rocket.TrackRequest</code>
 */
class TrackRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.rocket.CarrierAction carrier_action = 1;</code>
     */
    protected $carrier_action = null;
    /**
     * Generated from protobuf field <code>.rocket.TrackParams params = 2;</code>
     */
    protected $params = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Carrier\Rocket\CarrierAction $carrier_action
     *     @type \Carrier\Rocket\TrackParams $params
     * }
     */
    public function __construct($data = NULL) {
        \Carrier\Rocket\Rocket::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.rocket.CarrierAction carrier_action = 1;</code>
     * @return \Carrier\Rocket\CarrierAction|null
     */
    public function getCarrierAction()
    {
        return $this->carrier_action;
    }

    public function hasCarrierAction()
    {
        return isset($this->carrier_action);
    }

    public function clearCarrierAction()
    {
        unset($this->carrier_action);
    }

    /**
     * Generated from protobuf field <code>.rocket.CarrierAction carrier_action = 1;</code>
     * @param \Carrier\Rocket\CarrierAction $var
     * @return $this
     */
    public function setCarrierAction($var)
    {
        GPBUtil::checkMessage($var, \Carrier\Rocket\CarrierAction::class);
        $this->carrier_action = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.rocket.TrackParams params = 2;</code>
     * @return \Carrier\Rocket\TrackParams|null
     */
    public function getParams()
    {
        return $this->params;
    }

    public function hasParams()
    {
        return isset($this->params);
    }

    public function clearParams()
    {
        unset($this->params);
    }

    /**
     * Generated from protobuf field <code>.rocket.TrackParams params = 2;</code>
     * @param \Carrier\Rocket\TrackParams $var
     * @return $this
     */
    public function setParams($var)
    {
        GPBUtil::checkMessage($var, \Carrier\Rocket\TrackParams::class);
        $this->params = $var;

        return $this;
    }

}
