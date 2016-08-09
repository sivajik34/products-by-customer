<?php
/**
 * Kensium_OverSize extension
 *                     NOTICE OF LICENSE
 * 
 *                     This source file is subject to the MIT License
 *                     that is bundled with this package in the file LICENSE.txt.
 *                     It is also available through the world-wide-web at this URL:
 *                     http://opensource.org/licenses/mit-license.php
 * 
 *                     @category  Kensium
 *                     @package   Kensium_OverSize
 *                     @copyright Copyright (c) 2016
 *                     @license   http://opensource.org/licenses/mit-license.php MIT License
 */
namespace Tony\Reports\Controller\Adminhtml\Itemsbycustomer;
use Magento\Reports\Model\Flag;
class Index  extends \Magento\Reports\Controller\Adminhtml\Report\Sales
{


    /**
     * execute the action
     *
     * @return \Magento\Backend\Model\View\Result\Page|\Magento\Framework\View\Result\Page
     */
    public function execute()
    {

        $this->_initAction()->_setActiveMenu(
            'Tony_Reports::itemsbycustomer'
        )->_addBreadcrumb(
            __('Products By Customer Report'),
            __('Products By Customer Report')
        );
        $this->_view->getPage()->getConfig()->getTitle()->prepend(__('Products By Customer Report'));
        $this->_view->renderLayout();
    }

}
