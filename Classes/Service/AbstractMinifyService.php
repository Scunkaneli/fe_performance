<?php

namespace TYPO3\FePerformance\Service;

/* * *************************************************************
 *  Copyright notice
 *
 *  (c) 2013-2016 Felix Nagel <info@felixnagel.com>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 * ************************************************************* */

/**
 * Abstract class Service for providing minifier classes.
 *
 * @author Felix Nagel (info@felixnagel.com)
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
abstract class AbstractMinifyService implements MinifyServiceInterface, \TYPO3\CMS\Core\SingletonInterface
{
    /**
     * Extension key.
     *
     * @var string
     */
    protected $extKey = 'fe_performance';

    /**
     * {@inheritdoc}
     */
    abstract public function minify($sourcecode);
}
