import { Plugin } from 'ckeditor5/src/core.js';

import CraftInlineEntriesEditing from './inline-entries-editing';
import CraftInlineEntriesUI from './inline-entries-ui';

export default class CraftInlineEntries extends Plugin {
  static get requires() {
    return [CraftInlineEntriesEditing, CraftInlineEntriesUI];
  }

  static get pluginName() {
    return 'CraftInlineEntries';
  }
}