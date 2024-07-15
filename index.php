<?php

/**
 * @file plugins/themes/uot/index.php
 *
 * Copyright (c) 2014-2023 Simon Fraser University
 * Copyright (c) 2003-2023 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_themes_default
 * @brief Wrapper for default theme plugin.
 *
 */

namespace APP\plugins\themes\uot;
require_once('UOTThemePlugin.php');

return new UOTThemePlugin();
