<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: planet_collection.proto

namespace Myapi\Proto\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>myapi.proto.v1.PlanetCollection</code>
 */
class PlanetCollection extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .myapi.proto.v1.Planet planets = 1 [json_name = "planets"];</code>
     * @var \Myapi\Proto\V1\Planet[]
     */
    private $planets;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Myapi\Proto\V1\Planet[]|\Google\Protobuf\Internal\RepeatedField $planets
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\PlanetCollection::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .myapi.proto.v1.Planet planets = 1 [json_name = "planets"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPlanets()
    {
        return $this->planets;
    }

    /**
     * Generated from protobuf field <code>repeated .myapi.proto.v1.Planet planets = 1 [json_name = "planets"];</code>
     * @param \Myapi\Proto\V1\Planet[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPlanets($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Myapi\Proto\V1\Planet::class);
        $this->planets = $arr;

        return $this;
    }

}

