<?php
namespace TYPO3\FePerformance\Hook;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2013 Felix Nagel <info@felixnagel.com>
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
 ***************************************************************/

/**
 * Hook within t3lib\class.t3lib_pagerenderer.php
 *
 * @author Felix Nagel (info@felixnagel.com)
 * @package fe_performance
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class RenderPreProcessHook  {

	/**
	 * @var string
	 */
	protected $extKey = 'fe_performance';

	/**
	 * Exclude files generated by pageRenderer from concatenation
	 * We do not want the per page added inline JS to be merged
	 *
	 * @param array $params
	 * @param \TYPO3\CMS\Core\Page\PageRenderer $t3lib_PageRenderer
	 * @see t3lib\class.t3lib_pagerenderer.php
	 */
	public function process(array $params, \TYPO3\CMS\Core\Page\PageRenderer $pageRenderer) {
		$emConfig = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$this->extKey]);

		if (count($params['jsFiles'])) {
			foreach ($params['jsFiles'] as $name => $properties) {
				if (preg_match('/typo3temp\/javascript_[\d|a-z]+\.js/i', $name)) {
					if ($emConfig['excludeInlineJsFromConcatenation']) {
						$params['jsFiles'][$name]['excludeFromConcatenation'] = 1;
					}
					if ($emConfig['moveInlineJsToFooter']) {
						$params['jsFiles'][$name]['section'] = 2;
					}
				}
			}
		}
	}

}
?>