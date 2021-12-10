<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v8/services/reach_plan_service.proto

namespace Google\Ads\GoogleAds\V8\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The duration of a planned campaign.
 *
 * Generated from protobuf message <code>google.ads.googleads.v8.services.CampaignDuration</code>
 */
class CampaignDuration extends \Google\Protobuf\Internal\Message
{
    /**
     * The duration value in days.
     *
     * Generated from protobuf field <code>int32 duration_in_days = 2;</code>
     */
    protected $duration_in_days = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $duration_in_days
     *           The duration value in days.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V8\Services\ReachPlanService::initOnce();
        parent::__construct($data);
    }

    /**
     * The duration value in days.
     *
     * Generated from protobuf field <code>int32 duration_in_days = 2;</code>
     * @return int
     */
    public function getDurationInDays()
    {
        return isset($this->duration_in_days) ? $this->duration_in_days : 0;
    }

    public function hasDurationInDays()
    {
        return isset($this->duration_in_days);
    }

    public function clearDurationInDays()
    {
        unset($this->duration_in_days);
    }

    /**
     * The duration value in days.
     *
     * Generated from protobuf field <code>int32 duration_in_days = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setDurationInDays($var)
    {
        GPBUtil::checkInt32($var);
        $this->duration_in_days = $var;

        return $this;
    }

}

