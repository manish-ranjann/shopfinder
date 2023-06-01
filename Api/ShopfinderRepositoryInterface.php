<?php
/**
 * Copyright © Adobe Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Vendor\Shopfinder\Api;

use Magento\Framework\Api\SearchCriteriaInterface;

interface ShopfinderRepositoryInterface
{

    /**
     * Save Shopfinder
     * @param \Vendor\Shopfinder\Api\Data\ShopfinderInterface $shopfinder
     * @return \Vendor\Shopfinder\Api\Data\ShopfinderInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function save(
        \Vendor\Shopfinder\Api\Data\ShopfinderInterface $shopfinder
    );

    /**
     * Retrieve Shopfinder
     * @param string $shopfinderId
     * @return \Vendor\Shopfinder\Api\Data\ShopfinderInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function get($shopfinderId);

    /**
     * Retrieve Shopfinder matching the specified criteria.
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \Vendor\Shopfinder\Api\Data\ShopfinderSearchResultsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getList(
        \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
    );

    /**
     * Delete Shopfinder
     * @param \Vendor\Shopfinder\Api\Data\ShopfinderInterface $shopfinder
     * @return bool true on success
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(
        \Vendor\Shopfinder\Api\Data\ShopfinderInterface $shopfinder
    );

    /**
     * Delete Shopfinder by ID
     * @param string $shopfinderId
     * @return bool true on success
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById($shopfinderId);
}

