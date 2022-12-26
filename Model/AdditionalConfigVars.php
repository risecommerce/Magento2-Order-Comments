<?php
namespace Risecommerce\OrderComments\Model;
 
use \Magento\Checkout\Model\ConfigProviderInterface;

/**
 * Risecommerce OrderComments
 *
 * PHP version 7
 *
 * @category Risecommerce
 * @package  Risecommerce_OrderComments
 * @author   Risecommerce <magento@risecommerce.com>
 * @license  https://www.risecommerce.com  Open Software License (OSL 3.0)
 * @link     https://www.risecommerce.com
 */
class AdditionalConfigVars implements ConfigProviderInterface
{
    /**
     * @var \Magento\Framework\App\Config\ScopeConfigInterface
     */
    protected $scopeConfig;

    const PATH_SPARSH_ORDER_COMMENTS = 'risecommerce_order_comments/general/enable';

    /**
     * AdditionalConfigVars constructor.
     * @param \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
     */
    public function __construct(
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
    ) {
        $this->scopeConfig = $scopeConfig;
    }

    /**
     * @return array|mixed
     */
    public function getConfig()
    {
        $storeScope = \Magento\Store\Model\ScopeInterface::SCOPE_STORE;
        $enabledComments = $this->scopeConfig->getValue(self::PATH_SPARSH_ORDER_COMMENTS, $storeScope);
        if ($enabledComments) {
            $additionalVariables['enabled_comments'] = true;
        } else {
            $additionalVariables['enabled_comments'] = false;
        }
        return $additionalVariables;
    }
}
