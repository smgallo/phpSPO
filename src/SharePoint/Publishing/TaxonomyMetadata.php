<?php

/**
 * Updated By PHP Office365 Generator 2019-10-12T19:41:09+00:00 16.0.19402.12016
 */
namespace Office365\SharePoint\Publishing;

use Office365\Runtime\ClientValueObject;

class TaxonomyMetadata extends ClientValueObject
{
    /**
     * @var string
     */
    public $anchorId;
    /**
     * @var string
     */
    public $excludedTermset;
    /**
     * @var bool
     */
    public $excludeKeyword;
    /**
     * @var bool
     */
    public $isAddTerms;
    /**
     * @var bool
     */
    public $isIncludeDeprecated;
    /**
     * @var bool
     */
    public $isIncludePathData;
    /**
     * @var bool
     */
    public $isIncludeUnavailable;
    /**
     * @var bool
     */
    public $isSpanTermSets;
    /**
     * @var bool
     */
    public $isSpanTermStores;
    /**
     * @var integer
     */
    public $lcid;
    /**
     * @var string
     */
    public $sspList;
    /**
     * @var string
     */
    public $termSetList;
}