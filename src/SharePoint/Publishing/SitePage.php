<?php

/**
 * Updated By PHP Office365 Generator 2019-11-17T18:31:00+00:00 16.0.19506.12022
 */
namespace Office365\SharePoint\Publishing;

use Office365\Runtime\ClientObject;


class SitePage extends ClientObject
{
    /**
     * @return string
     */
    public function getAlternativeUrlMap()
    {
        if (!$this->isPropertyAvailable("AlternativeUrlMap")) {
            return null;
        }
        return $this->getProperty("AlternativeUrlMap");
    }
    /**
     * @var string
     */
    public function setAlternativeUrlMap($value)
    {
        $this->setProperty("AlternativeUrlMap", $value, true);
    }
    /**
     * @return string
     */
    public function getCanvasContent1()
    {
        if (!$this->isPropertyAvailable("CanvasContent1")) {
            return null;
        }
        return $this->getProperty("CanvasContent1");
    }
    /**
     * @var string
     */
    public function setCanvasContent1($value)
    {
        $this->setProperty("CanvasContent1", $value, true);
    }
    /**
     * @return string
     */
    public function getCanvasJson1()
    {
        if (!$this->isPropertyAvailable("CanvasJson1")) {
            return null;
        }
        return $this->getProperty("CanvasJson1");
    }
    /**
     * @var string
     */
    public function setCanvasJson1($value)
    {
        $this->setProperty("CanvasJson1", $value, true);
    }
    /**
     * @return bool
     */
    public function getIsLikedByCurrentUser()
    {
        if (!$this->isPropertyAvailable("IsLikedByCurrentUser")) {
            return null;
        }
        return $this->getProperty("IsLikedByCurrentUser");
    }
    /**
     * @var bool
     */
    public function setIsLikedByCurrentUser($value)
    {
        $this->setProperty("IsLikedByCurrentUser", $value, true);
    }
    /**
     * @return bool
     */
    public function getIsTemplate()
    {
        if (!$this->isPropertyAvailable("IsTemplate")) {
            return null;
        }
        return $this->getProperty("IsTemplate");
    }
    /**
     * @var bool
     */
    public function setIsTemplate($value)
    {
        $this->setProperty("IsTemplate", $value, true);
    }
    /**
     * @return string
     */
    public function getLayoutWebpartsContent()
    {
        if (!$this->isPropertyAvailable("LayoutWebpartsContent")) {
            return null;
        }
        return $this->getProperty("LayoutWebpartsContent");
    }
    /**
     * @var string
     */
    public function setLayoutWebpartsContent($value)
    {
        $this->setProperty("LayoutWebpartsContent", $value, true);
    }
    /**
     * @return string
     */
    public function getName()
    {
        if (!$this->isPropertyAvailable("Name")) {
            return null;
        }
        return $this->getProperty("Name");
    }
    /**
     * @var string
     */
    public function setName($value)
    {
        $this->setProperty("Name", $value, true);
    }
    /**
     * @return string
     */
    public function getSitePageFlags()
    {
        if (!$this->isPropertyAvailable("SitePageFlags")) {
            return null;
        }
        return $this->getProperty("SitePageFlags");
    }
    /**
     * @var string
     */
    public function setSitePageFlags($value)
    {
        $this->setProperty("SitePageFlags", $value, true);
    }
}