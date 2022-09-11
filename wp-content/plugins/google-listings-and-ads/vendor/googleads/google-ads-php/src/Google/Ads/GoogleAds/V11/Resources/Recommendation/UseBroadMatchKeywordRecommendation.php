<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v11/resources/recommendation.proto

namespace Google\Ads\GoogleAds\V11\Resources\Recommendation;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The use broad match keyword recommendation.
 *
 * Generated from protobuf message <code>google.ads.googleads.v11.resources.Recommendation.UseBroadMatchKeywordRecommendation</code>
 */
class UseBroadMatchKeywordRecommendation extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Sample of keywords to be expanded to Broad Match.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v11.common.KeywordInfo keyword = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $keyword;
    /**
     * Output only. Total number of keywords to be expanded to Broad Match in the campaign.
     *
     * Generated from protobuf field <code>int64 suggested_keywords_count = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $suggested_keywords_count = 0;
    /**
     * Output only. Total number of keywords in the campaign.
     *
     * Generated from protobuf field <code>int64 campaign_keywords_count = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $campaign_keywords_count = 0;
    /**
     * Output only. Whether the associated campaign uses a shared budget.
     *
     * Generated from protobuf field <code>bool campaign_uses_shared_budget = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $campaign_uses_shared_budget = false;
    /**
     * Output only. The budget recommended to avoid becoming budget constrained after
     * applying the recommendation.
     *
     * Generated from protobuf field <code>int64 required_campaign_budget_amount_micros = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $required_campaign_budget_amount_micros = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Ads\GoogleAds\V11\Common\KeywordInfo[]|\Google\Protobuf\Internal\RepeatedField $keyword
     *           Output only. Sample of keywords to be expanded to Broad Match.
     *     @type int|string $suggested_keywords_count
     *           Output only. Total number of keywords to be expanded to Broad Match in the campaign.
     *     @type int|string $campaign_keywords_count
     *           Output only. Total number of keywords in the campaign.
     *     @type bool $campaign_uses_shared_budget
     *           Output only. Whether the associated campaign uses a shared budget.
     *     @type int|string $required_campaign_budget_amount_micros
     *           Output only. The budget recommended to avoid becoming budget constrained after
     *           applying the recommendation.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V11\Resources\Recommendation::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Sample of keywords to be expanded to Broad Match.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v11.common.KeywordInfo keyword = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getKeyword()
    {
        return $this->keyword;
    }

    /**
     * Output only. Sample of keywords to be expanded to Broad Match.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v11.common.KeywordInfo keyword = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Ads\GoogleAds\V11\Common\KeywordInfo[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setKeyword($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V11\Common\KeywordInfo::class);
        $this->keyword = $arr;

        return $this;
    }

    /**
     * Output only. Total number of keywords to be expanded to Broad Match in the campaign.
     *
     * Generated from protobuf field <code>int64 suggested_keywords_count = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getSuggestedKeywordsCount()
    {
        return $this->suggested_keywords_count;
    }

    /**
     * Output only. Total number of keywords to be expanded to Broad Match in the campaign.
     *
     * Generated from protobuf field <code>int64 suggested_keywords_count = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setSuggestedKeywordsCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->suggested_keywords_count = $var;

        return $this;
    }

    /**
     * Output only. Total number of keywords in the campaign.
     *
     * Generated from protobuf field <code>int64 campaign_keywords_count = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getCampaignKeywordsCount()
    {
        return $this->campaign_keywords_count;
    }

    /**
     * Output only. Total number of keywords in the campaign.
     *
     * Generated from protobuf field <code>int64 campaign_keywords_count = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setCampaignKeywordsCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->campaign_keywords_count = $var;

        return $this;
    }

    /**
     * Output only. Whether the associated campaign uses a shared budget.
     *
     * Generated from protobuf field <code>bool campaign_uses_shared_budget = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getCampaignUsesSharedBudget()
    {
        return $this->campaign_uses_shared_budget;
    }

    /**
     * Output only. Whether the associated campaign uses a shared budget.
     *
     * Generated from protobuf field <code>bool campaign_uses_shared_budget = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setCampaignUsesSharedBudget($var)
    {
        GPBUtil::checkBool($var);
        $this->campaign_uses_shared_budget = $var;

        return $this;
    }

    /**
     * Output only. The budget recommended to avoid becoming budget constrained after
     * applying the recommendation.
     *
     * Generated from protobuf field <code>int64 required_campaign_budget_amount_micros = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getRequiredCampaignBudgetAmountMicros()
    {
        return $this->required_campaign_budget_amount_micros;
    }

    /**
     * Output only. The budget recommended to avoid becoming budget constrained after
     * applying the recommendation.
     *
     * Generated from protobuf field <code>int64 required_campaign_budget_amount_micros = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setRequiredCampaignBudgetAmountMicros($var)
    {
        GPBUtil::checkInt64($var);
        $this->required_campaign_budget_amount_micros = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(UseBroadMatchKeywordRecommendation::class, \Google\Ads\GoogleAds\V11\Resources\Recommendation_UseBroadMatchKeywordRecommendation::class);

