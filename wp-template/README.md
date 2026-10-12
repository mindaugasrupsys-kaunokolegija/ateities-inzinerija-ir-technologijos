# WordPress demo template

The design source remains in `../site/`. This package is a separate WordPress-ready export.

## For your active block child theme

1. Copy `block-theme/templates/forum-demo.html` into the child theme’s `templates/` folder.
2. Copy `block-theme/assets/forum-demo/` into the child theme’s `assets/forum-demo/` folder.
3. Merge the `customTemplates` entry from `block-theme/integration/theme-json-customTemplates.json` into the existing child theme `theme.json`. If it already has a `customTemplates` array, add this object to that array. Do not replace the existing `theme.json`; preserve its other settings and custom templates.
4. Merge the code in `block-theme/integration/functions-snippet.php` into the child theme’s existing `functions.php`. Do not replace the whole file or paste a second PHP opening tag if the file already has one. This loads the CSS and JavaScript only for this template and provides the dynamic child-theme asset URL.
5. Reload the page editor. Create or edit a page, open its Template setting, choose **Forum Demo**, and preview it.

The template contains the conference page’s own navigation and footer, so it does not include the block theme’s normal header/footer template parts. Theme-level global styles may still apply; the demo CSS supplies its own page styling.

## Classic-theme option

For a classic PHP child theme, use the matching files in `classic-theme/`: copy `page-templates/` and `assets/` into the child theme. The selectable template is also named **Forum Demo**.

## Future design updates

When the design changes, ask me to synchronize both exports from the current `site/dist` build. Copy the refreshed package folders into the child theme, preserving the `theme.json` and `functions.php` merges above. Keep client-specific edits outside generated template and asset files.

Registration is still a placeholder dialog. Speaker portraits and gallery images use external illustrative image URLs, as in the current design.
