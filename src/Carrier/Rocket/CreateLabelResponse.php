<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rocket.proto

namespace Carrier\Rocket;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * 创建面单响应
 *
 * Generated from protobuf message <code>rocket.CreateLabelResponse</code>
 */
class CreateLabelResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string label = 1;</code>
     */
    protected $label = '';
    /**
     * Generated from protobuf field <code>string tracking_number = 2;</code>
     */
    protected $tracking_number = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $label
     *     @type string $tracking_number
     * }
     */
    public function __construct($data = NULL) {
        \Carrier\Rocket\Rocket::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string label = 1;</code>
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Generated from protobuf field <code>string label = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setLabel($var)
    {
        GPBUtil::checkString($var, True);
        $this->label = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string tracking_number = 2;</code>
     * @return string
     */
    public function getTrackingNumber()
    {
        return $this->tracking_number;
    }

    /**
     * Generated from protobuf field <code>string tracking_number = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTrackingNumber($var)
    {
        GPBUtil::checkString($var, True);
        $this->tracking_number = $var;

        return $this;
    }

}

