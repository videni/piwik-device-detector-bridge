<?php

/*
 * This file is part of the piwik-device-detector-bridge.
 *
 * (c) Vidy Videni <vidy.videni@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PiwikDeviceDetector;


use DeviceDetector\DeviceDetector;
use SunCat\MobileDetectBundle\DeviceDetector\DeviceDetectorInterface;

/**
 *
 * @author vidy videni <vidy.videni@gmail.com>
 *
 */
class PiwikDeviceDetector extends DeviceDetector  implements  DeviceDetectorInterface
{

    /**
     * @inheritdoc
     */
    public function isDevice($deviceName)
    {
      return  strtolower($deviceName)=== strtolower($this->getOs());
    }


    /**
     * @inheritdoc
     */
    public function isTablet()
    {
        return parent::isTablet();
    }


    /**
     * @inheritdoc
     */
    public function setUserAgent($userAgent)
    {
        parent::setUserAgent($userAgent);

        $this->parse();
    }
}
