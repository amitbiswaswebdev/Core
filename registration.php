<?php
/**
 * Copyright © 2023 EasyMage. All rights reserved.
 *
 * @author    Amit Biswas <amit.biswas.webdev@gmail.com>
 * @copyright 2023 EasyMage
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

use Magento\Framework\Component\ComponentRegistrar;

ComponentRegistrar::register(
    ComponentRegistrar::MODULE,
    'EasyMage_Core',
    __DIR__
);
