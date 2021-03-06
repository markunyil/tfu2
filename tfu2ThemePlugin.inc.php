<?php

/**
 * @file plugins/themes/tfu2/tfu2ThemePlugin.inc.php
 *
 * Copyright (c) 2013-2014 Simon Fraser University Library
 * Copyright (c) 2003-2014 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class tfu2ThemePlugin
 * @ingroup plugins_themes_tfu2
 *
 * @brief "tfu2" theme plugin
 */

import('classes.plugins.ThemePlugin');

class tfu2ThemePlugin extends ThemePlugin {
	/**
	 * Get the name of this plugin. The name must be unique within
	 * its category.
	 * @return String name of plugin
	 */
	function getName() {
		return 'tfu2ThemePlugin';
	}

	function getDisplayName() {
		return 'tfu2 Theme';
	}

	function getDescription() {
		return 'Responsive theme for "Tidsskrift for ungdomsforskning", based on ungdomsforskning theme';
	}

	function getStylesheetFilename() {
		return 'tfu2.css';
	}

	function getLocaleFilename($locale) {
		return null; // No locale data
	}
}

?>
