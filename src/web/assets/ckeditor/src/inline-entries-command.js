import {Command} from 'ckeditor5/src/core.js';

export default class CraftInlineEntriesCommand extends Command {
  execute(options) {
    const editor = this.editor;
    const selection = editor.model.document.selection;

    editor.model.change((writer) => {
      // Create a <craft-inline-entry> element with the `data-entry-id` attribute
      const craftInlineEntries = writer.createElement('craftInlineEntryModel', {
        ...Object.fromEntries(selection.getAttributes()),
        cardHtml: options.cardHtml,
        entryId: options.entryId,
        siteId: options.siteId,
      });

      // ... and insert it into the document. Put the selection on the inserted element.
      editor.model.insertObject(craftInlineEntries, null, null, {
        setSelection: 'after',
      });
    });
  }

  refresh() {
    const model = this.editor.model;
    const selection = model.document.selection;

    // disable craftEntries button if a selection is made in the editor
    const hasSelection = !selection.isCollapsed && selection.getFirstRange();

    this.isEnabled = !hasSelection;
  }
}