<?php
/**
 * @package     Segmentino
 * @copyright   2014 Segmentino, NP. All rights reserved.
 * @author      Segmentino
 * @link        http://Segmentino.org
 * @license     MIT http://opensource.org/licenses/MIT
 */

namespace Segmentino\Api;

/**
 * Users Context
 */
class Users extends Api
{
    /**
     * {@inheritdoc}
     */
    protected $endpoint = 'contact';

    /**
     * {@inheritdoc}
     */
    protected $properties = 'properties';

    /**
     * @param $userID
     *
     * Add User
     *
     * @return array
     * @throws \Exception
     */
    public function addUser($userID)
    {
        return $this->makeRequest($this->endpoint . '/' . $userID, array(), 'PUT');
    }

    /**
     * @param $userID
     *
     * Delete User
     *
     * @return array
     * @throws \Exception
     */
    public function deleteUser($userID)
    {
        return $this->makeRequest($this->endpoint . '/' . $userID, array(), 'DELETE');
    }

    /**
     * List Users
     *
     * @return array
     * @throws \Exception
     */
    public function listUsers()
    {
        return $this->makeRequest($this->endpoint . '/list', array(), 'GET');
    }

    /**
     * @param $name
     * @param $type
     *
     * Add User Property
     *
     * @return array
     * @throws \Exception
     */
    public function addUserProperty($name, $type)
    {
        return $this->makeRequest($this->endpoint . '/' . $this->properties . '/' . $name, [
            'type' => $type
        ], 'PUT');
    }

    /**
     * @param $name
     *
     * Delete User Property
     *
     * @return array
     * @throws \Exception
     */
    public function deleteUserProperty($name)
    {
        return $this->makeRequest($this->endpoint . '/' . $this->properties . '/' . $name, array(), 'DELETE');
    }

    /**
     * @param $name
     *
     * User Property's info
     *
     * @return array
     * @throws \Exception
     */
    public function getUserPropertyInfo($name)
    {
        return $this->makeRequest($this->endpoint . '/' . $this->properties . '/' . $name, array(), 'GET');
    }

    /**
     * List all User properties
     *
     * @return array
     * @throws \Exception
     */
    public function listUserProperties()
    {
        return $this->makeRequest($this->endpoint . '/' . $this->properties . '/list', array(), 'GET');
    }

    /**
     * @param $userID
     * @param $params
     *
     * Set User's value
     *
     * @return array
     * @throws \Exception
     */
    public function setUserValues($userID, $params)
    {
        return $this->makeRequest($this->endpoint . '/' . $userID, $params, 'POST');
    }

    /**
     * @param $userID
     *
     * Get User's value
     *
     * @return array
     * @throws \Exception
     */
    public function getUserValues($userID)
    {
        return $this->makeRequest($this->endpoint . '/' . $userID, array(), 'GET');
    }

    /**
     * @param $id
     * @param $points
     * @param array $parameters
     *
     * Add the points to a User
     *
     * @return array
     * @throws \Exception
     */
    public function addPoints($id, $points, array $parameters = array())
    {
        return $this->makeRequest($this->endpoint . '/' .$id .'/points/plus/' . $points, $parameters, 'POST');
    }

    /**
     * @param $id
     * @param $points
     * @param array $parameters
     *
     * Subtract points from a User
     *
     * @return array
     * @throws \Exception
     */
    public function subtractPoints($id, $points, array $parameters = array())
    {
        return $this->makeRequest($this->endpoint . '/' . $id . '/points/minus/' . $points, $parameters, 'POST');
    }
}
