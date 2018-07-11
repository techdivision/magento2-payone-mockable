<?php
/**
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 */

namespace TechDivision\PayoneMockable\Plugin\Helper;

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
     * @param PayoneApi $subject
     * @param array $aParameters
     * @param string $sApiUrl
     * @return string
     */
    public function beforeGetRequestUrl(PayoneApi $subject, $aParameters, $sApiUrl)
    {
        // $sApiUrl = 'https://api.pay1.de/post-gateway/';
        $sApiUrl = 'https://psp-mock.test/payone/post-gateway';
        return $subject->getRequestUrl($aParameters, $sApiUrl);
    }
}
