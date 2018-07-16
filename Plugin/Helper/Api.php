<?php
/**
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 */

namespace TechDivision\PayoneMockable\Plugin\Helper;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Payone\Core\Helper\Api as PayoneApi;

/**
 * @category   TechDivision
 * @package    PayoneMockable
 * @subpackage Plugin
 * @copyright  Copyright (c) 2018 TechDivision GmbH (http://www.techdivision.com)
 * @link       http://www.techdivision.com/
 * @author     Vadim Justus <v.justus@techdivision.com
 */
class Api
{
    /**
     * @var ScopeConfigInterface
     */
    private $scopeConfig;

    /**
     * @param ScopeConfigInterface $scopeConfig
     */
    public function __construct(
        ScopeConfigInterface $scopeConfig
    ) {
        $this->scopeConfig = $scopeConfig;
    }

    /**
     * @param PayoneApi $subject
     * @param callable $proceed
     * @param array $aParameters
     * @param string $sApiUrl
     * @return string
     */
    public function aroundGetRequestUrl(PayoneApi $subject, callable $proceed, $aParameters, $sApiUrl)
    {
        $sApiUrl = $this->scopeConfig->getValue('techdivision_payone_mockable/payone/post_gateway');
        return $proceed($aParameters, $sApiUrl);
    }
}
