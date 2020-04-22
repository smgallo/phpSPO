<?php

/**
 * Updated By PHP Office365 Generator 2019-11-17T17:00:44+00:00 16.0.19506.12022
 */
namespace Office365\SharePoint;

use Office365\Runtime\ClientObject;


class HubSite extends ClientObject
{
    /**
     * @return string
     */
    public function getDescription()
    {
        if (!$this->isPropertyAvailable("Description")) {
            return null;
        }
        return $this->getProperty("Description");
    }
    /**
     * @var string
     */
    public function setDescription($value)
    {
        $this->setProperty("Description", $value, true);
    }
    /**
     * @return bool
     */
    public function getEnablePermissionsSync()
    {
        if (!$this->isPropertyAvailable("EnablePermissionsSync")) {
            return null;
        }
        return $this->getProperty("EnablePermissionsSync");
    }
    /**
     * @var bool
     */
    public function setEnablePermissionsSync($value)
    {
        $this->setProperty("EnablePermissionsSync", $value, true);
    }
    /**
     * @return bool
     */
    public function getHideNameInNavigation()
    {
        if (!$this->isPropertyAvailable("HideNameInNavigation")) {
            return null;
        }
        return $this->getProperty("HideNameInNavigation");
    }
    /**
     * @var bool
     */
    public function setHideNameInNavigation($value)
    {
        $this->setProperty("HideNameInNavigation", $value, true);
    }
    /**
     * @return string
     */
    public function getID()
    {
        if (!$this->isPropertyAvailable("ID")) {
            return null;
        }
        return $this->getProperty("ID");
    }
    /**
     * @var string
     */
    public function setID($value)
    {
        $this->setProperty("ID", $value, true);
    }
    /**
     * @return string
     */
    public function getLogoUrl()
    {
        if (!$this->isPropertyAvailable("LogoUrl")) {
            return null;
        }
        return $this->getProperty("LogoUrl");
    }
    /**
     * @var string
     */
    public function setLogoUrl($value)
    {
        $this->setProperty("LogoUrl", $value, true);
    }
    /**
     * @return string
     */
    public function getParentHubSiteId()
    {
        if (!$this->isPropertyAvailable("ParentHubSiteId")) {
            return null;
        }
        return $this->getProperty("ParentHubSiteId");
    }
    /**
     * @var string
     */
    public function setParentHubSiteId($value)
    {
        $this->setProperty("ParentHubSiteId", $value, true);
    }
    /**
     * @return array
     */
    public function getRelatedHubSiteIds()
    {
        if (!$this->isPropertyAvailable("RelatedHubSiteIds")) {
            return null;
        }
        return $this->getProperty("RelatedHubSiteIds");
    }
    /**
     * @var array
     */
    public function setRelatedHubSiteIds($value)
    {
        $this->setProperty("RelatedHubSiteIds", $value, true);
    }
    /**
     * @return bool
     */
    public function getRequiresJoinApproval()
    {
        if (!$this->isPropertyAvailable("RequiresJoinApproval")) {
            return null;
        }
        return $this->getProperty("RequiresJoinApproval");
    }
    /**
     * @var bool
     */
    public function setRequiresJoinApproval($value)
    {
        $this->setProperty("RequiresJoinApproval", $value, true);
    }
    /**
     * @return string
     */
    public function getSiteDesignId()
    {
        if (!$this->isPropertyAvailable("SiteDesignId")) {
            return null;
        }
        return $this->getProperty("SiteDesignId");
    }
    /**
     * @var string
     */
    public function setSiteDesignId($value)
    {
        $this->setProperty("SiteDesignId", $value, true);
    }
    /**
     * @return string
     */
    public function getSiteId()
    {
        if (!$this->isPropertyAvailable("SiteId")) {
            return null;
        }
        return $this->getProperty("SiteId");
    }
    /**
     * @var string
     */
    public function setSiteId($value)
    {
        $this->setProperty("SiteId", $value, true);
    }
    /**
     * @return string
     */
    public function getSiteUrl()
    {
        if (!$this->isPropertyAvailable("SiteUrl")) {
            return null;
        }
        return $this->getProperty("SiteUrl");
    }
    /**
     * @var string
     */
    public function setSiteUrl($value)
    {
        $this->setProperty("SiteUrl", $value, true);
    }
    /**
     * @return string
     */
    public function getTargets()
    {
        if (!$this->isPropertyAvailable("Targets")) {
            return null;
        }
        return $this->getProperty("Targets");
    }
    /**
     * @var string
     */
    public function setTargets($value)
    {
        $this->setProperty("Targets", $value, true);
    }
    /**
     * @return string
     */
    public function getTenantInstanceId()
    {
        if (!$this->isPropertyAvailable("TenantInstanceId")) {
            return null;
        }
        return $this->getProperty("TenantInstanceId");
    }
    /**
     * @var string
     */
    public function setTenantInstanceId($value)
    {
        $this->setProperty("TenantInstanceId", $value, true);
    }
    /**
     * @return string
     */
    public function getTitle()
    {
        if (!$this->isPropertyAvailable("Title")) {
            return null;
        }
        return $this->getProperty("Title");
    }
    /**
     * @var string
     */
    public function setTitle($value)
    {
        $this->setProperty("Title", $value, true);
    }
}