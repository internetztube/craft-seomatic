<?php
/**
 * SEOmatic plugin for Craft CMS 3.x
 *
 * A turnkey SEO implementation for Craft CMS that is comprehensive, powerful,
 * and flexible
 *
 * @link      https://nystudio107.com
 * @copyright Copyright (c) 2017 nystudio107
 */

namespace nystudio107\seomatic\models\jsonld;

use nystudio107\seomatic\models\jsonld\LocalBusiness;

/**
 * MedicalBusiness - A particular physical or virtual business of an
 * organization for medical purposes. Examples of MedicalBusiness include
 * differents business run by health professionals.
 *
 * @author    nystudio107
 * @package   Seomatic
 * @since     3.0.0
 * @see       http://schema.org/MedicalBusiness
 */
class MedicalBusiness extends LocalBusiness
{
    // Static Public Properties
    // =========================================================================

    /**
     * The Schema.org Type Name
     *
     * @var string
     */
    static public $schemaTypeName = 'MedicalBusiness';

    /**
     * The Schema.org Type Scope
     *
     * @var string
     */
    static public $schemaTypeScope = 'https://schema.org/MedicalBusiness';

    /**
     * The Schema.org Type Description
     *
     * @var string
     */
    static public $schemaTypeDescription = 'A particular physical or virtual business of an organization for medical purposes. Examples of MedicalBusiness include differents business run by health professionals.';

    /**
     * The Schema.org Type Extends
     *
     * @var string
     */
    static public $schemaTypeExtends = 'LocalBusiness';

    /**
     * The Schema.org composed Property Names
     *
     * @var array
     */
    static public $schemaPropertyNames = [];

    /**
     * The Schema.org composed Property Expected Types
     *
     * @var array
     */
    static public $schemaPropertyExpectedTypes = [];

    /**
     * The Schema.org composed Property Descriptions
     *
     * @var array
     */
    static public $schemaPropertyDescriptions = [];

    /**
     * The Schema.org composed Google Required Schema for this type
     *
     * @var array
     */
    static public $googleRequiredSchema = [];

    /**
     * The Schema.org composed Google Recommended Schema for this type
     *
     * @var array
     */
    static public $googleRecommendedSchema = [];

    // Public Properties from Self
    // =========================================================================

    /**
     * The currency accepted. Use standard formats: ISO 4217 currency format e.g.
     * "USD"; Ticker symbol for cryptocurrencies e.g. "BTC"; well known names for
     * Local Exchange Tradings Systems (LETS) and other currency types e.g.
     * "Ithaca HOUR".
     *
     * @var string [schema.org types: Text]
     */
    public $currenciesAccepted;

    /**
     * The general opening hours for a business. Opening hours can be specified as
     * a weekly time range, starting with days, then times per day. Multiple days
     * can be listed with commas ',' separating each day. Day or time ranges are
     * specified using a hyphen '-'. Days are specified using the following
     * two-letter combinations: Mo, Tu, We, Th, Fr, Sa, Su. Times are specified
     * using 24:00 time. For example, 3pm is specified as 15:00. Here is an
     * example: <time itemprop="openingHours" datetime="Tu,Th
     * 16:00-20:00">Tuesdays and Thursdays 4-8pm</time>. If a business is open 7
     * days a week, then it can be specified as <time itemprop="openingHours"
     * datetime="Mo-Su">Monday through Sunday, all day</time>.
     *
     * @var string [schema.org types: Text]
     */
    public $openingHours;

    /**
     * Cash, Credit Card, Cryptocurrency, Local Exchange Tradings System, etc.
     *
     * @var string [schema.org types: Text]
     */
    public $paymentAccepted;

    /**
     * The price range of the business, for example $$$.
     *
     * @var string [schema.org types: Text]
     */
    public $priceRange;

    // Public Properties from MedicalOrganization
    // =========================================================================

    /**
     * Name or unique ID of network. (Networks are often reused across different
     * insurance plans).
     *
     * @var string [schema.org types: Text]
     */
    public $healthPlanNetworkId;

    /**
     * Whether the provider is accepting new patients.
     *
     * @var bool [schema.org types: Boolean]
     */
    public $isAcceptingNewPatients;

    /**
     * A medical specialty of the provider.
     *
     * @var MedicalSpecialty [schema.org types: MedicalSpecialty]
     */
    public $medicalSpecialty;

    // Static Protected Properties
    // =========================================================================

    /**
     * The Schema.org Property Names
     *
     * @var array
     */
    static protected $_schemaPropertyNames = [
        'currenciesAccepted',
        'openingHours',
        'paymentAccepted',
        'priceRange',
        'healthPlanNetworkId',
        'isAcceptingNewPatients',
        'medicalSpecialty'
    ];

    /**
     * The Schema.org Property Expected Types
     *
     * @var array
     */
    static protected $_schemaPropertyExpectedTypes = [
        'currenciesAccepted' => ['Text'],
        'openingHours' => ['Text'],
        'paymentAccepted' => ['Text'],
        'priceRange' => ['Text'],
        'healthPlanNetworkId' => ['Text'],
        'isAcceptingNewPatients' => ['Boolean'],
        'medicalSpecialty' => ['MedicalSpecialty']
    ];

    /**
     * The Schema.org Property Descriptions
     *
     * @var array
     */
    static protected $_schemaPropertyDescriptions = [
        'currenciesAccepted' => 'The currency accepted. Use standard formats: ISO 4217 currency format e.g. "USD"; Ticker symbol for cryptocurrencies e.g. "BTC"; well known names for Local Exchange Tradings Systems (LETS) and other currency types e.g. "Ithaca HOUR".',
        'openingHours' => 'The general opening hours for a business. Opening hours can be specified as a weekly time range, starting with days, then times per day. Multiple days can be listed with commas \',\' separating each day. Day or time ranges are specified using a hyphen \'-\'. Days are specified using the following two-letter combinations: Mo, Tu, We, Th, Fr, Sa, Su. Times are specified using 24:00 time. For example, 3pm is specified as 15:00. Here is an example: <time itemprop="openingHours" datetime="Tu,Th 16:00-20:00">Tuesdays and Thursdays 4-8pm</time>. If a business is open 7 days a week, then it can be specified as <time itemprop="openingHours" datetime="Mo-Su">Monday through Sunday, all day</time>.',
        'paymentAccepted' => 'Cash, Credit Card, Cryptocurrency, Local Exchange Tradings System, etc.',
        'priceRange' => 'The price range of the business, for example $$$.',
        'healthPlanNetworkId' => 'Name or unique ID of network. (Networks are often reused across different insurance plans).',
        'isAcceptingNewPatients' => 'Whether the provider is accepting new patients.',
        'medicalSpecialty' => 'A medical specialty of the provider.'
    ];

    /**
     * The Schema.org Google Required Schema for this type
     *
     * @var array
     */
    static protected $_googleRequiredSchema = [
    ];

    /**
     * The Schema.org composed Google Recommended Schema for this type
     *
     * @var array
     */
    static protected $_googleRecommendedSchema = [
    ];

    // Public Methods
    // =========================================================================

    /**
    * @inheritdoc
    */
    public function init()
    {
        parent::init();
        self::$schemaPropertyNames = array_merge(
            parent::$schemaPropertyNames,
            self::$_schemaPropertyNames
        );

        self::$schemaPropertyExpectedTypes = array_merge(
            parent::$schemaPropertyExpectedTypes,
            self::$_schemaPropertyExpectedTypes
        );

        self::$schemaPropertyDescriptions = array_merge(
            parent::$schemaPropertyDescriptions,
            self::$_schemaPropertyDescriptions
        );

        self::$googleRequiredSchema = array_merge(
            parent::$googleRequiredSchema,
            self::$_googleRequiredSchema
        );

        self::$googleRecommendedSchema = array_merge(
            parent::$googleRecommendedSchema,
            self::$_googleRecommendedSchema
        );
    }

    /**
    * @inheritdoc
    */
    public function rules()
    {
        $rules = parent::rules();
        $rules = array_merge($rules, [
            [['currenciesAccepted','openingHours','paymentAccepted','priceRange'], 'validateJsonSchema'],
            [['healthPlanNetworkId','isAcceptingNewPatients','medicalSpecialty'], 'validateJsonSchema'],
            [self::$_googleRequiredSchema, 'required', 'on' => ['google'], 'message' => 'This property is required by Google.'],
            [self::$_googleRecommendedSchema, 'required', 'on' => ['google'], 'message' => 'This property is recommended by Google.']
        ]);

        return $rules;
    }
}
