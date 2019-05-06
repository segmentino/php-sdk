<?php


namespace Segmentino\Api;


class Items extends Api
{
    /**
     * {@inheritdoc}
     */
    protected $endpoint = 'items';

    /**
     * {@inheritdoc}
     */
    protected $properties = 'properties';

    /**
     * @param $itemID
     *
     * Add Item
     *
     * @return array
     * @throws \Exception
     */
    public function addItem($itemID)
    {
        return $this->makeRequest($this->endpoint . '/' . $itemID, array(), 'PUT');
    }

    /**
     * @param $itemID
     *
     * Delete Item
     *
     * @return array
     * @throws \Exception
     */
    public function deleteItem($itemID)
    {
        return $this->makeRequest($this->endpoint . '/' . $itemID, array(), 'DELETE');
    }

    /**
     * List all Items
     *
     * @return array
     * @throws \Exception
     */
    public function listItems()
    {
        return $this->makeRequest($this->endpoint . '/list', array(), 'GET');
    }

    /**
     * @param $name
     * @param $type
     *
     * Add Item Property
     *
     * @return array
     * @throws \Exception
     */
    public function addItemProperty($name, $type)
    {
        return $this->makeRequest($this->endpoint . '/' . $this->properties . '/' . $name, [
            'type' => $type
        ], 'PUT');
    }

    /**
     * @param $name
     *
     * Delete Item Property
     *
     * @return array
     * @throws \Exception
     */
    public function deleteItemProperty($name)
    {
        return $this->makeRequest($this->endpoint . '/' . $this->properties . '/' . $name, array(), 'DELETE');
    }

    /**
     * @param $name
     *
     * Item Property's info
     *
     * @return array
     * @throws \Exception
     */
    public function getItemPropertyInfo($name)
    {
        return $this->makeRequest($this->endpoint . '/' . $this->properties . '/' . $name, array(), 'DELETE');
    }

    /**
     * List all Item properties
     *
     * @return array
     * @throws \Exception
     */
    public function listItemProperties()
    {
        return $this->makeRequest($this->endpoint . '/' . $this->properties . '/list', array(), 'GET');
    }

    /**
     * @param $itemID
     * @param $params
     *
     * Set Item's value
     *
     * @return array
     * @throws \Exception
     */
    public function setItemValues($itemID, $params)
    {
        return $this->makeRequest($this->endpoint . '/' . $itemID, $params, 'POST');
    }

    /**
     * @param $itemID
     *
     * Get Item's value
     *
     * @return array
     * @throws \Exception
     */
    public function getItemValues($itemID)
    {
        return $this->makeRequest($this->endpoint . '/' . $itemID, array(), 'GET');
    }
}