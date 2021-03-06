<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ups.proto

namespace Carrier\Ups;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *重量
 *
 * Generated from protobuf message <code>ups.Weight</code>
 */
class Weight extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.ups.Unit unit = 1;</code>
     */
    protected $unit = 0;
    /**
     * Generated from protobuf field <code>double value = 2;</code>
     */
    protected $value = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $unit
     *     @type float $value
     * }
     */
    public function __construct($data = NULL) {
        \Carrier\Ups\Ups::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.ups.Unit unit = 1;</code>
     * @return int
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * Generated from protobuf field <code>.ups.Unit unit = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setUnit($var)
    {
        GPBUtil::checkEnum($var, \Carrier\Ups\Unit::class);
        $this->unit = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double value = 2;</code>
     * @return float
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Generated from protobuf field <code>double value = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkDouble($var);
        $this->value = $var;

        return $this;
    }

}

