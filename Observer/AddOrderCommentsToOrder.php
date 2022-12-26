<?php
namespace Risecommerce\OrderComments\Observer;


/**
 * Risecommerce OrderComments
 *
 * PHP version 8
 *
 * @category Risecommerce
 * @package  Risecommerce_OrderComments
 * @author   Risecommerce <magento@risecommerce.com>
 * @license  https://www.risecommerce.com  Open Software License (OSL 3.0)
 * @link     https://www.risecommerce.com
 */
class AddOrderCommentsToOrder implements \Magento\Framework\Event\ObserverInterface
{
    /**
     * @param \Magento\Framework\Event\Observer $observer
     */
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $order = $observer->getEvent()->getOrder();
        $quote = $observer->getEvent()->getQuote();
        
        $order->setData('risecommerce_order_comments', $quote->getRisecommerceOrderComments());
    }
}
