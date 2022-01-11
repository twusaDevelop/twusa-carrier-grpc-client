<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rocket.proto

namespace Carrier\Rocket;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * 包裹信息
 *
 * Generated from protobuf message <code>rocket.Packages</code>
 */
class Packages extends \Google\Protobuf\Internal\Message
{
    /**
     * 长宽高重
     *
     * Generated from protobuf field <code>double weight = 1;</code>
     */
    protected $weight = 0.0;
    /**
     * Generated from protobuf field <code>double length = 2;</code>
     */
    protected $length = 0.0;
    /**
     * Generated from protobuf field <code>double width = 3;</code>
     */
    protected $width = 0.0;
    /**
     * Generated from protobuf field <code>double height = 4;</code>
     */
    protected $height = 0.0;
    /**
     * 打包方式
     *
     * Generated from protobuf field <code>.rocket.Packages.PackagingType packaging_type = 5;</code>
     */
    protected $packaging_type = 0;
    /**
     * 要求保险价值
     *
     * Generated from protobuf field <code>double insured_value = 6;</code>
     */
    protected $insured_value = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $weight
     *           长宽高重
     *     @type float $length
     *     @type float $width
     *     @type float $height
     *     @type int $packaging_type
     *           打包方式
     *     @type float $insured_value
     *           要求保险价值
     * }
     */
    public function __construct($data = NULL) {
        \Carrier\Rocket\Rocket::initOnce();
        parent::__construct($data);
    }

    /**
     * 长宽高重
     *
     * Generated from protobuf field <code>double weight = 1;</code>
     * @return float
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * 长宽高重
     *
     * Generated from protobuf field <code>double weight = 1;</code>
     * @param float $var
     * @return $this
     */
    public function setWeight($var)
    {
        GPBUtil::checkDouble($var);
        $this->weight = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double length = 2;</code>
     * @return float
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Generated from protobuf field <code>double length = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setLength($var)
    {
        GPBUtil::checkDouble($var);
        $this->length = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double width = 3;</code>
     * @return float
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Generated from protobuf field <code>double width = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setWidth($var)
    {
        GPBUtil::checkDouble($var);
        $this->width = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double height = 4;</code>
     * @return float
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Generated from protobuf field <code>double height = 4;</code>
     * @param float $var
     * @return $this
     */
    public function setHeight($var)
    {
        GPBUtil::checkDouble($var);
        $this->height = $var;

        return $this;
    }

    /**
     * 打包方式
     *
     * Generated from protobuf field <code>.rocket.Packages.PackagingType packaging_type = 5;</code>
     * @return int
     */
    public function getPackagingType()
    {
        return $this->packaging_type;
    }

    /**
     * 打包方式
     *
     * Generated from protobuf field <code>.rocket.Packages.PackagingType packaging_type = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setPackagingType($var)
    {
        GPBUtil::checkEnum($var, \Carrier\Rocket\Packages\PackagingType::class);
        $this->packaging_type = $var;

        return $this;
    }

    /**
     * 要求保险价值
     *
     * Generated from protobuf field <code>double insured_value = 6;</code>
     * @return float
     */
    public function getInsuredValue()
    {
        return $this->insured_value;
    }

    /**
     * 要求保险价值
     *
     * Generated from protobuf field <code>double insured_value = 6;</code>
     * @param float $var
     * @return $this
     */
    public function setInsuredValue($var)
    {
        GPBUtil::checkDouble($var);
        $this->insured_value = $var;

        return $this;
    }

}

