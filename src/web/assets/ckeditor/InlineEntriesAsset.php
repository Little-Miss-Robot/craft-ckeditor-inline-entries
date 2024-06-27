<?php

namespace littlemissrobot\craftckeditorinlineentries\web\assets\ckeditor;

use craft\ckeditor\web\assets\BaseCkeditorPackageAsset;

/**
 * Inline Entries asset bundle
 */
class InlineEntriesAsset extends BaseCkeditorPackageAsset
{
    public $sourcePath = __DIR__ . '/build';

    public $js = [
        'inline-entries.js'
    ];

    public array $pluginNames = [
        'CraftInlineEntries',
    ];

    public array $toolbarItems = [
        'createInlineEntry',
    ];
}
