<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rocket.proto

namespace Carrier\Rocket;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * 费率参数
 *
 * Generated from protobuf message <code>rocket.RateParams</code>
 */
class RateParams extends \Google\Protobuf\Internal\Message
{
    /**
     * 账号密码
     *
     * Generated from protobuf field <code>.rocket.Auth auth = 1;</code>
     */
    protected $auth = null;
    /**
     * 包裹信息
     *
     * Generated from protobuf field <code>repeated .rocket.Packages packages = 2;</code>
     */
    private $packages;
    /**
     * 配送方式
     *
     * Generated from protobuf field <code>.rocket.ServiceCode service = 3;</code>
     */
    protected $service = 0;
    /**
     * 是否家庭住址
     *
     * Generated from protobuf field <code>bool residential = 4;</code>
     */
    protected $residential = false;
    /**
     * 发货人
     *
     * Generated from protobuf field <code>.rocket.ShipFrom ship_from = 5;</code>
     */
    protected $ship_from = null;
    /**
     * 收货人
     *
     * Generated from protobuf field <code>.rocket.ShipTo ship_to = 6;</code>
     */
    protected $ship_to = null;
    /**
     * 重量单位
     *
     * Generated from protobuf field <code>.rocket.RateParams.WeightUnit weight_unit = 7;</code>
     */
    protected $weight_unit = 0;
    /**
     * 长度单位
     *
     * Generated from protobuf field <code>.rocket.RateParams.LengthUnit length_unit = 8;</code>
     */
    protected $length_unit = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Carrier\Rocket\Auth $auth
     *           账号密码
     *     @type \Carrier\Rocket\Packages[]|\Google\Protobuf\Internal\RepeatedField $packages
     *           包裹信息
     *     @type int $service
     *           配送方式
     *     @type bool $residential
     *           是否家庭住址
     *     @type \Carrier\Rocket\ShipFrom $ship_from
     *           发货人
     *     @type \Carrier\Rocket\ShipTo $ship_to
     *           收货人
     *     @type int $weight_unit
     *           重量单位
     *     @type int $length_unit
     *           长度单位
     * }
     */
    public function __construct($data = NULL) {
        \Carrier\Rocket\Rocket::initOnce();
        parent::__construct($data);
    }

    /**
     * 账号密码
     *
     * Generated from protobuf field <code>.rocket.Auth auth = 1;</code>
     * @return \Carrier\Rocket\Auth|null
     */
    public function getAuth()
    {
        return $this->auth;
    }

    public function hasAuth()
    {
        return isset($this->auth);
    }

    public function clearAuth()
    {
        unset($this->auth);
    }

    /**
     * 账号密码
     *
     * Generated from protobuf field <code>.rocket.Auth auth = 1;</code>
     * @param \Carrier\Rocket\Auth $var
     * @return $this
     */
    public function setAuth($var)
    {
        GPBUtil::checkMessage($var, \Carrier\Rocket\Auth::class);
        $this->auth = $var;

        return $this;
    }

    /**
     * 包裹信息
     *
     * Generated from protobuf field <code>repeated .rocket.Packages packages = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPackages()
    {
        return $this->packages;
    }

    /**
     * 包裹信息
     *
     * Generated from protobuf field <code>repeated .rocket.Packages packages = 2;</code>
     * @param \Carrier\Rocket\Packages[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPackages($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Carrier\Rocket\Packages::class);
        $this->packages = $arr;

        return $this;
    }

    /**
     * 配送方式
     *
     * Generated from protobuf field <code>.rocket.ServiceCode service = 3;</code>
     * @return int
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * 配送方式
     *
     * Generated from protobuf field <code>.rocket.ServiceCode service = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setService($var)
    {
        GPBUtil::checkEnum($var, \Carrier\Rocket\ServiceCode::class);
        $this->service = $var;

        return $this;
    }

    /**
     * 是否家庭住址
     *
     * Generated from protobuf field <code>bool residential = 4;</code>
     * @return bool
     */
    public function getResidential()
    {
        return $this->residential;
    }

    /**
     * 是否家庭住址
     *
     * Generated from protobuf field <code>bool residential = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setResidential($var)
    {
        GPBUtil::checkBool($var);
        $this->residential = $var;

        return $this;
    }

    /**
     * 发货人
     *
     * Generated from protobuf field <code>.rocket.ShipFrom ship_from = 5;</code>
     * @return \Carrier\Rocket\ShipFrom|null
     */
    public function getShipFrom()
    {
        return $this->ship_from;
    }

    public function hasShipFrom()
    {
        return isset($this->ship_from);
    }

    public function clearShipFrom()
    {
        unset($this->ship_from);
    }

    /**
     * 发货人
     *
     * Generated from protobuf field <code>.rocket.ShipFrom ship_from = 5;</code>
     * @param \Carrier\Rocket\ShipFrom $var
     * @return $this
     */
    public function setShipFrom($var)
    {
        GPBUtil::checkMessage($var, \Carrier\Rocket\ShipFrom::class);
        $this->ship_from = $var;

        return $this;
    }

    /**
     * 收货人
     *
     * Generated from protobuf field <code>.rocket.ShipTo ship_to = 6;</code>
     * @return \Carrier\Rocket\ShipTo|null
     */
    public function getShipTo()
    {
        return $this->ship_to;
    }

    public function hasShipTo()
    {
        return isset($this->ship_to);
    }

    public function clearShipTo()
    {
        unset($this->ship_to);
    }

    /**
     * 收货人
     *
     * Generated from protobuf field <code>.rocket.ShipTo ship_to = 6;</code>
     * @param \Carrier\Rocket\ShipTo $var
     * @return $this
     */
    public function setShipTo($var)
    {
        GPBUtil::checkMessage($var, \Carrier\Rocket\ShipTo::class);
        $this->ship_to = $var;

        return $this;
    }

    /**
     * 重量单位
     *
     * Generated from protobuf field <code>.rocket.RateParams.WeightUnit weight_unit = 7;</code>
     * @return int
     */
    public function getWeightUnit()
    {
        return $this->weight_unit;
    }

    /**
     * 重量单位
     *
     * Generated from protobuf field <code>.rocket.RateParams.WeightUnit weight_unit = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setWeightUnit($var)
    {
        GPBUtil::checkEnum($var, \Carrier\Rocket\RateParams\WeightUnit::class);
        $this->weight_unit = $var;

        return $this;
    }

    /**
     * 长度单位
     *
     * Generated from protobuf field <code>.rocket.RateParams.LengthUnit length_unit = 8;</code>
     * @return int
     */
    public function getLengthUnit()
    {
        return $this->length_unit;
    }

    /**
     * 长度单位
     *
     * Generated from protobuf field <code>.rocket.RateParams.LengthUnit length_unit = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setLengthUnit($var)
    {
        GPBUtil::checkEnum($var, \Carrier\Rocket\RateParams\LengthUnit::class);
        $this->length_unit = $var;

        return $this;
    }

}

