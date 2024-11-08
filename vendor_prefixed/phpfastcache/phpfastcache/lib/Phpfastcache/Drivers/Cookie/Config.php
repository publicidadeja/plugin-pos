<?php

/**
 *
 * This file is part of phpFastCache.
 *
 * @license MIT License (MIT)
 *
 * For full copyright and license information, please see the docs/CREDITS.txt file.
 *
 * @author Khoa Bui (khoaofgod)  <khoaofgod@gmail.com> https://www.phpfastcache.com
 * @author Georges.L (Geolim4)  <contact@geolim4.com>
 *
 */
declare (strict_types=1);
namespace WCPOS\Vendor\Phpfastcache\Drivers\Cookie;

use WCPOS\Vendor\Phpfastcache\Config\ConfigurationOption;
class Config extends ConfigurationOption
{
    protected $awareOfUntrustableData = \false;
    /**
     * @return bool
     */
    public function isAwareOfUntrustableData() : bool
    {
        return $this->awareOfUntrustableData;
    }
    /**
     * @param bool $awareOfUntrustableData
     * @return Config
     */
    public function setAwareOfUntrustableData(bool $awareOfUntrustableData) : Config
    {
        $this->awareOfUntrustableData = $awareOfUntrustableData;
        return $this;
    }
}
