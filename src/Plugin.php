<?php

namespace littlemissrobot\craftckeditorinlineentries;

use Craft;
use craft\base\Plugin as BasePlugin;
use craft\ckeditor\Plugin as CKEditorPlugin;

use littlemissrobot\craftckeditorinlineentries\web\assets\ckeditor\InlineEntriesAsset;

/**
 * CKEditor Inline Entries plugin
 *
 * @method static Plugin getInstance()
 * @author Little Miss Robot <craft@littlemissrobot.com>
 * @copyright Little Miss Robot
 * @license MIT
 */
class Plugin extends BasePlugin
{
    public string $schemaVersion = '1.0.0';

    public static function config(): array
    {
        return [
            'components' => [
                // Define component configs here...
            ],
        ];
    }

    public function init(): void
    {
        parent::init();

        // Defer most setup tasks until Craft is fully initialized
        Craft::$app->onInit(function() {
            $this->attachEventHandlers();

            $this->registerAssets();
        });
    }

    private function attachEventHandlers(): void
    {
        // Register event handlers here ...
        // (see https://craftcms.com/docs/4.x/extend/events.html to get started)
    }

    private function registerAssets(): void {
        if (Craft::$app->getRequest()->getIsCpRequest()) {
            CKEditorPlugin::registerCkeditorPackage(InlineEntriesAsset::class);
        }
    }
}
