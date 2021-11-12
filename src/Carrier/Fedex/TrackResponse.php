<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: fedex.proto

namespace Carrier\Fedex;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * 物流跟踪返回
 *
 * Generated from protobuf message <code>fedex.TrackResponse</code>
 */
class TrackResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .fedex.Nodes nodes = 4;</code>
     */
    private $nodes;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Carrier\Fedex\Nodes[]|\Google\Protobuf\Internal\RepeatedField $nodes
     * }
     */
    public function __construct($data = NULL) {
        \Carrier\Fedex\Fedex::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .fedex.Nodes nodes = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNodes()
    {
        return $this->nodes;
    }

    /**
     * Generated from protobuf field <code>repeated .fedex.Nodes nodes = 4;</code>
     * @param \Carrier\Fedex\Nodes[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNodes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Carrier\Fedex\Nodes::class);
        $this->nodes = $arr;

        return $this;
    }

}
