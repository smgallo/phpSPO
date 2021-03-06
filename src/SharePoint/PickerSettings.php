<?php

/**
 * Updated By PHP Office365 Generator 2020-08-05T10:16:13+00:00 16.0.20315.12009
 */
namespace Office365\SharePoint;

use Office365\Runtime\ClientObject;
use Office365\SharePoint\UI\ApplicationPages\PeoplePickerQuerySettings;
/**
 * This class 
 * contains configuration settings for the client people picker control hosted by 
 * the SharePoint sharing UI.
 */
class PickerSettings extends ClientObject
{
    /**
     * @return bool
     */
    public function getAllowEmailAddresses()
    {
        if (!$this->isPropertyAvailable("AllowEmailAddresses")) {
            return null;
        }
        return $this->getProperty("AllowEmailAddresses");
    }
    /**
     * @var bool
     */
    public function setAllowEmailAddresses($value)
    {
        $this->setProperty("AllowEmailAddresses", $value, true);
    }
    /**
     * @return bool
     */
    public function getAllowOnlyEmailAddresses()
    {
        if (!$this->isPropertyAvailable("AllowOnlyEmailAddresses")) {
            return null;
        }
        return $this->getProperty("AllowOnlyEmailAddresses");
    }
    /**
     * @var bool
     */
    public function setAllowOnlyEmailAddresses($value)
    {
        $this->setProperty("AllowOnlyEmailAddresses", $value, true);
    }
    /**
     * @return string
     */
    public function getPrincipalAccountType()
    {
        if (!$this->isPropertyAvailable("PrincipalAccountType")) {
            return null;
        }
        return $this->getProperty("PrincipalAccountType");
    }
    /**
     * @var string
     */
    public function setPrincipalAccountType($value)
    {
        $this->setProperty("PrincipalAccountType", $value, true);
    }
    /**
     * @return integer
     */
    public function getPrincipalSource()
    {
        if (!$this->isPropertyAvailable("PrincipalSource")) {
            return null;
        }
        return $this->getProperty("PrincipalSource");
    }
    /**
     * @var integer
     */
    public function setPrincipalSource($value)
    {
        $this->setProperty("PrincipalSource", $value, true);
    }
    /**
     * @return PeoplePickerQuerySettings
     */
    public function getQuerySettings()
    {
        if (!$this->isPropertyAvailable("QuerySettings")) {
            return null;
        }
        return $this->getProperty("QuerySettings");
    }
    /**
     * @var PeoplePickerQuerySettings
     */
    public function setQuerySettings($value)
    {
        $this->setProperty("QuerySettings", $value, true);
    }
    /**
     * @return integer
     */
    public function getVisibleSuggestions()
    {
        if (!$this->isPropertyAvailable("VisibleSuggestions")) {
            return null;
        }
        return $this->getProperty("VisibleSuggestions");
    }
    /**
     * @var integer
     */
    public function setVisibleSuggestions($value)
    {
        $this->setProperty("VisibleSuggestions", $value, true);
    }
    /**
     * @return bool
     */
    public function getUseSubstrateSearch()
    {
        if (!$this->isPropertyAvailable("UseSubstrateSearch")) {
            return null;
        }
        return $this->getProperty("UseSubstrateSearch");
    }
    /**
     * @var bool
     */
    public function setUseSubstrateSearch($value)
    {
        $this->setProperty("UseSubstrateSearch", $value, true);
    }
}