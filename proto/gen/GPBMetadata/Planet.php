<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: planet.proto

namespace GPBMetadata;

class Planet
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
planet.protomyapi.proto.v1"�
Planet
id (Rid
name (	Rname/
type (2.myapi.proto.v1.Planet.TypeRtype
diameter (Rdiameter"#
Type
GAS 	
STONE
ICEbproto3'
        , true);

        static::$is_initialized = true;
    }
}

