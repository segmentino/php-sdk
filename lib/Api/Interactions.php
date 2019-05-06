<?php


namespace Segmentino\Api;

/**
 * Context Interactions
 */
class Interactions
{
    private $contacts_endpoint = 'contact';
    private $items_endpoint = 'items';
    /**
     * @param $params
     *
     * Add Interaction between User & Item
     *
     * @return mixed
     */
    public function addDetailViews($params)
    {
        return $this->makeRequest($this->contacts_endpoint . '/detailviews', $params, 'POST');
    }

    /**
     * @param $params
     *
     * Delete Interaction between User & Item
     *
     * @return mixed
     */
    public function deleteDetailViews($params)
    {
        return $this->makeRequest($this->contacts_endpoint . '/detailviews', $params, 'DELETE');
    }

    /**
     * @param $itemID
     * @param $params
     *
     * List Interactions by Item
     *
     * @return mixed
     */
    public function listItemDetailViews($itemID, $params)
    {
        return $this->makeRequest($this->items_endpoint . '/' . $itemID . '/detailviews', $params, 'GET');
    }

    /**
     * @param $userID
     * @param $params
     *
     * List Interactions by User
     *
     * @return mixed
     */
    public function listUserDetailViews($userID, $params)
    {
        return $this->makeRequest($this->contacts_endpoint . '/' . $userID . '/detailviews', $params, 'GET');
    }

    /**
     * @param $params
     *
     * Add Purchase
     *
     * @return mixed
     */
    public function addPurchase($params)
    {
        return $this->makeRequest($this->contacts_endpoint . '/purchases', $params, 'POST');
    }

    /**
     * @param $params
     *
     * Delete Purchase
     *
     * @return mixed
     */
    public function deletePurchase($params)
    {
        return $this->makeRequest($this->contacts_endpoint . '/purchases', $params, 'DELETE');
    }

    /**
     * @param $itemID
     * @param $params
     *
     * List purchases by Item
     *
     * @return mixed
     */
    public function listItemPurchases($itemID, $params)
    {
        return $this->makeRequest($this->items_endpoint . '/' . $itemID .'/purchases', $params, 'GET');
    }

    /**
     * @param $userID
     * @param $params
     *
     * List purchases by User
     *
     * @return mixed
     */
    public function listUserPurchases($userID, $params)
    {
        return $this->makeRequest($this->contacts_endpoint . '/' . $userID .'/purchases', $params, 'GET');
    }

    /**
     * @param $params
     *
     * Add Rating
     *
     * @return mixed
     */
    public function addRating($params)
    {
        return $this->makeRequest($this->contacts_endpoint . '/ratings', $params, 'POST');
    }

    /**
     * @param $params
     *
     * Delete Rating
     *
     * @return mixed
     */
    public function deleteRating($params)
    {
        return $this->makeRequest($this->contacts_endpoint . '/ratings', $params, 'DELETE');
    }

    /**
     * @param $itemID
     * @param $params
     *
     * List Ratings by Item
     *
     * @return mixed
     */
    public function listItemRatings($itemID, $params)
    {
        return $this->makeRequest($this->items_endpoint . '/' . $itemID . '/ratings', $params, 'GET');
    }

    /**
     * @param $userID
     * @param $params
     *
     * List Ratings by User
     *
     * @return mixed
     */
    public function listUserRatings($userID, $params)
    {
        return $this->makeRequest($this->contacts_endpoint . '/' . $userID . '/ratings', $params, 'GET');
    }

    /**
     * @param $params
     *
     * Add Cart Addition
     *
     * @return mixed
     */
    public function addCartAddition($params)
    {
        return $this->makeRequest($this->contacts_endpoint . '/cartadditions', $params, 'POST');
    }

    /**
     * @param $params
     *
     * Delete Rating
     *
     * @return mixed
     */
    public function deleteCartAddition($params)
    {
        return $this->makeRequest($this->contacts_endpoint . '/cartadditions', $params, 'DELETE');
    }

    /**
     * @param $itemID
     * @param $params
     *
     * List Cart Additions by Item
     *
     * @return mixed
     */
    public function listItemCartAdditions($itemID, $params)
    {
        return $this->makeRequest($this->items_endpoint . '/' . $itemID . '/cartadditions', $params, 'GET');
    }

    /**
     * @param $userID
     * @param $params
     *
     * List Cart Additions by User
     *
     * @return mixed
     */
    public function listUserCartAdditions($userID, $params)
    {
        return $this->makeRequest($this->contacts_endpoint . '/' . $userID . '/cartadditions', $params, 'GET');
    }

    /**
     * @param $params
     *
     * Add Bookmark
     *
     * @return mixed
     */
    public function addBookmark($params)
    {
        return $this->makeRequest($this->contacts_endpoint . '/bookmarks', $params, 'POST');
    }

    /**
     * @param $params
     *
     * Delete Bookmark
     *
     * @return mixed
     */
    public function deleteBookmark($params)
    {
        return $this->makeRequest($this->contacts_endpoint . '/bookmarks', $params, 'DELETE');
    }

    /**
     * @param $itemID
     * @param $params
     *
     * List Bookmarks by Item
     *
     * @return mixed
     */
    public function listItemBookmarks($itemID, $params)
    {
        return $this->makeRequest($this->items_endpoint . '/' . $itemID . '/bookmarks', $params, 'GET');
    }

    /**
     * @param $userID
     * @param $params
     *
     * List Bookmarks by User
     *
     * @return mixed
     */
    public function listUserBookmarks($userID, $params)
    {
        return $this->makeRequest($this->contacts_endpoint . '/' . $userID . '/bookmarks', $params, 'GET');
    }

    /**
     * @param $params
     *
     * Add View portion
     *
     * @return mixed
     */
    public function addViewPortion($params)
    {
        return $this->makeRequest($this->contacts_endpoint . '/viewportions', $params, 'POST');
    }

    /**
     * @param $params
     *
     * Delete View portion
     *
     * @return mixed
     */
    public function deleteViewPortion($params)
    {
        return $this->makeRequest($this->contacts_endpoint . '/viewportions', $params, 'DELETE');
    }

    /**
     * @param $itemID
     * @param $params
     *
     * List Bookmarks by Item
     *
     * @return mixed
     */
    public function listItemViewPortions($itemID, $params)
    {
        return $this->makeRequest($this->items_endpoint . '/' . $itemID . '/viewportions', $params, 'GET');
    }

    /**
     * @param $userID
     * @param $params
     *
     * List Bookmarks by User
     *
     * @return mixed
     */
    public function listUserViewPortions($userID, $params)
    {
        return $this->makeRequest($this->contacts_endpoint . '/' . $userID . '/viewportions', $params, 'GET');
    }

    /**
     * @param $userID
     * @param $params
     *
     * Recommend Items to User
     *
     * @return mixed
     */
    public function recommendItemsToUser($userID, $params)
    {
        return $this->makeRequest('recomms/' . $this->contacts_endpoint . '/' . $userID . '/items', $params, 'GET');
    }

    /**
     * @param $userID
     * @param $params
     *
     * Recommend Users to User
     *
     * @return mixed
     */
    public function recommendUsersToUser($userID, $params)
    {
        return $this->makeRequest('recomms/' . $this->contacts_endpoint . '/' . $userID . '/users', $params, 'GET');
    }

    /**
     * @param $itemID
     * @param $params
     *
     * Item to Item
     *
     * @return mixed
     */
    public function recommendItemsToItem($itemID, $params)
    {
        return $this->makeRequest('recomms/' . $this->items_endpoint . '/' . $itemID . '/items', $params, 'GET');
    }

    /**
     * @param $userID
     * @param $params
     *
     * User to Item
     *
     * @return mixed
     */
    public function recommendUsersToItem($userID, $params)
    {
        return $this->makeRequest('recomms/' . $this->contacts_endpoint . '/' . $userID . '/users', $params, 'GET');
    }
}