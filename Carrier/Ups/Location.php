<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ups.proto

namespace Carrier\Ups;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *地点
 *
 * Generated from protobuf message <code>pb.Location</code>
 */
class Location extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * Generated from protobuf field <code>string attention_name = 2;</code>
     */
    protected $attention_name = '';
    /**
     * Generated from protobuf field <code>string company_displayable_name = 3;</code>
     */
    protected $company_displayable_name = '';
    /**
     * Generated from protobuf field <code>string company_name = 4;</code>
     */
    protected $company_name = '';
    /**
     * Generated from protobuf field <code>string phone_number = 5;</code>
     */
    protected $phone_number = '';
    /**
     * Generated from protobuf field <code>string shipper_number = 6;</code>
     */
    protected $shipper_number = '';
    /**
     * Generated from protobuf field <code>.pb.Address address = 7;</code>
     */
    protected $address = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *     @type string $attention_name
     *     @type string $company_displayable_name
     *     @type string $company_name
     *     @type string $phone_number
     *     @type string $shipper_number
     *     @type \Carrier\Ups\Address $address
     * }
     */
    public function __construct($data = NULL) {
        \Carrier\Ups\Ups::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string attention_name = 2;</code>
     * @return string
     */
    public function getAttentionName()
    {
        return $this->attention_name;
    }

    /**
     * Generated from protobuf field <code>string attention_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setAttentionName($var)
    {
        GPBUtil::checkString($var, True);
        $this->attention_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string company_displayable_name = 3;</code>
     * @return string
     */
    public function getCompanyDisplayableName()
    {
        return $this->company_displayable_name;
    }

    /**
     * Generated from protobuf field <code>string company_displayable_name = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setCompanyDisplayableName($var)
    {
        GPBUtil::checkString($var, True);
        $this->company_displayable_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string company_name = 4;</code>
     * @return string
     */
    public function getCompanyName()
    {
        return $this->company_name;
    }

    /**
     * Generated from protobuf field <code>string company_name = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setCompanyName($var)
    {
        GPBUtil::checkString($var, True);
        $this->company_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string phone_number = 5;</code>
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phone_number;
    }

    /**
     * Generated from protobuf field <code>string phone_number = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setPhoneNumber($var)
    {
        GPBUtil::checkString($var, True);
        $this->phone_number = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string shipper_number = 6;</code>
     * @return string
     */
    public function getShipperNumber()
    {
        return $this->shipper_number;
    }

    /**
     * Generated from protobuf field <code>string shipper_number = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setShipperNumber($var)
    {
        GPBUtil::checkString($var, True);
        $this->shipper_number = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.pb.Address address = 7;</code>
     * @return \Carrier\Ups\Address|null
     */
    public function getAddress()
    {
        return $this->address;
    }

    public function hasAddress()
    {
        return isset($this->address);
    }

    public function clearAddress()
    {
        unset($this->address);
    }

    /**
     * Generated from protobuf field <code>.pb.Address address = 7;</code>
     * @param \Carrier\Ups\Address $var
     * @return $this
     */
    public function setAddress($var)
    {
        GPBUtil::checkMessage($var, \Carrier\Ups\Address::class);
        $this->address = $var;

        return $this;
    }

}

