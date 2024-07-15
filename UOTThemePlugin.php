<?php

namespace APP\plugins\themes\uot;

use APP\core\Application;
use PKP\facades\Locale;
use PKP\plugins\ThemePlugin;

class UOTThemePlugin extends ThemePlugin {

    public function init() {
        // Register options for your theme if needed
        // $this->addOption('uotThemeOption', 'FieldOptions', [
        //     'type' => 'radio',
        //     'label' => __('plugins.themes.uot.options.uotThemeOption.label'),
        //     'options' => [
        //         [
        //             'value' => 'option1',
        //             'label' => __('plugins.themes.uot.options.uotThemeOption.option1'),
        //         ],
        //         [
        //             'value' => 'option2',
        //             'label' => __('plugins.themes.uot.options.uotThemeOption.option2'),
        //         ],
        //     ],
        // ]);

        // test tailwind
        // Add styles and scripts for Tailwind CSS
        // $this->addStyle('tailwind', 'https://cdn.jsdelivr.net/npm/tailwindcss@latest/dist/tailwind.min.css');

        // Load custom styles and scripts
        $this->addStyle('uotStyles', 'styles/uot.css');
        $this->addScript('uotScripts', 'scripts/uot.js');

        // Add navigation menu areas for this theme
        $this->addMenuArea(array('primary', 'user'));

        
    }

    public function getDisplayName() {
        return __('plugins.themes.uot.name');
    }

    public function getDescription() {
        return __('plugins.themes.uot.description');
    }

}

if (!PKP_STRICT_MODE) {
    class_alias('\APP\plugins\themes\uot\UOTThemePlugin', '\UOTThemePlugin');
}
