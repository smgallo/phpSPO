<?php

namespace Office365\Runtime;


class ClientValueObjectCollection extends ClientValueObject
{

    /**
     * Adds property to collection
     * @param ClientValueObject $value
     */
    public function addChild($value)
    {
        if (is_null($this->data))
            $this->data = array();
        $this->data[] = $value;
    }

    /**
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }


    /**
     * Clear collection
     */
    public function clearData()
    {
        $this->data = array();
    }

    /**
     * @return int
     */
    public function getCount()
    {
        return count($this->data);
    }


    /**
     * Creates entity for a collection
     * @return ClientValueObject
     */
    public function createType()
    {
        $clientValueObjectType = $this->getItemTypeName();
        return new $clientValueObjectType();
    }


    /**
     * @return string
     */
    function getItemTypeName()
    {
        return str_replace("Collection","",get_class($this));
    }

    function toJson()
    {
        return array_map(function (ClientValueObject $item) {
            return $item->toJson();
        }, $this->getData());
    }

    /**
     * @var array
     */
    private $data = null;

}
