<?php
/**
 * @see       https://github.com/zendframework/zend-i18n-idn for the canonical source repository
 * @copyright Copyright (c) 2017 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   https://github.com/zendframework/zend-i18n-idn/blob/master/LICENSE.md New BSD License
 */

namespace Zend\I18n\Idn;

class ConfigProvider
{
    public function __invoke() : array
    {
        return [
            'dependencies' => $this->getDependencies(),
        ];
    }

    public function getDependencies() : array
    {
        return [
        ];
    }
}
