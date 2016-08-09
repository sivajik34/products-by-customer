<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

/**
 * Report Reviews collection
 *
 * @author      Magento Core Team <core@magentocommerce.com>
 */
namespace Tony\Reports\Model\ResourceModel\Product\Sold\Collection;

class Initial extends \Magento\Reports\Model\ResourceModel\Report\Collection
{
    /**
     * Report sub-collection class name
     *
     * @var string
     */
    protected $_reportCollection = 'Tony\Reports\Model\ResourceModel\Product\Sold\Collection';
}
