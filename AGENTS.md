# BitRate — Laravel app notes

Laravel 13.40 app (PHP `^8.3`, local PHP 8.5.1) for the **БитРейт** security-systems
marketing site. The codebase is still a skeleton; the real work is porting an archived
WordPress homepage into Blade.

## Read this first

- **Laravel Boost is already installed** (`laravel/boost` v2.2). The framework-specific
  guidelines live in **`CLAUDE.md`** (Boost-generated, ~150 lines): Pint/Pest conventions,
  `make:` usage, Boost MCP tools, PHP style rules. Read it before editing PHP.
  The old "install Boost" bootstrap text that used to be in this file is obsolete — do not
  run `composer require laravel/boost` again.
- `CLAUDE.md` tells you to read `.ai/rules/` — **that directory does not exist here**, so
  that rule is a no-op. Boost skills are in `.claude/skills/` (laravel-best-practices,
  tailwindcss-development, testing-best-practices, infer-conventions, deploying-to-cloud).
- Don't hand-edit `CLAUDE.md`; run `php artisan boost:update` to refresh it
  (Composer `post-update-cmd` does this automatically).
- Boost MCP server is `.mcp.json` → `php artisan boost:mcp`. Tools: `database-query`,
  `database-schema`, `get-absolute-url`, `browser-logs`, `search-docs`, `tinker`,
  `last-error`, `read-log-entries`.

## Commands

```sh
composer setup                                             # first run: deps, .env, key:generate, migrate, npm install + build
php artisan dev                                            # serve + queue:listen + pail + vite (use this, not 4 terminals)
npm run dev                                                # vite only
npm run build                                              # required after CSS/JS edits, else "Unable to locate file in Vite manifest"
php artisan test                                           # == vendor/bin/pest
vendor/bin/pest tests/Feature/ExampleTest.php --filter=name # single file / test
vendor/bin/pint --dirty --format agent                      # after editing PHP (Laravel default preset, no pint.json)
```

- **Test output is JSON, not PHPUnit output.** `laravel/pao` intercepts Pest:
  `{"tool":"pest","result":"passed","tests":2,"passed":2,...}`. Failures arrive in the
  `failures` / `error_details` arrays — read the JSON instead of expecting a red test list.
- `npm install` must use `--ignore-scripts` (`.npmrc` sets `ignore-scripts=true`).
- `composer test` = `config:clear` + `artisan test`.
- Tests use in-memory SQLite, `queue=sync`, `cache=array` (`phpunit.xml`); the app DB is the
  SQLite file `database/database.sqlite`.

## Frontend

- Tailwind **v4** via `@tailwindcss/vite`. There is no `tailwind.config.js` /
  `postcss.config.js` — config lives in `resources/css/app.css` under `@theme`, and the
  import is `@import 'tailwindcss'`.
- Fonts are pulled by the `bunny()` plugin in `vite.config.js` (Instrument Sans) →
  `public/build/fonts-manifest.json`. Changing fonts = vite config edit + rebuild.
- Blade-compiled views are scanned via the `@source` lines in `resources/css/app.css`;
  classes only used in JS-generated HTML need extra `@source` entries.

## Data & app state

- SQLite file DB; `SESSION_DRIVER`, `CACHE_STORE`, `QUEUE_CONNECTION` are all `database`,
  so run `php artisan migrate` after touching sessions/cache/queues or requests error out.

## Lead forms (backend)

- Six forms post to `POST /leads` (`routes/web.php`, `name('leads.store')`): four inline
  offer forms in `resources/views/home.blade.php` plus `callback-form` and `order-form`
  in `resources/views/partials/modals.blade.php`. Every form carries `data-lead-form`,
  a `name="tel"` input, hidden `msg`/`source` inputs and a real `<button type="submit">`.
- Flow: `StoreLeadRequest` (validation, phone normalization to `+7XXXXXXXXXX`) →
  `StoreLeadAction` (saves the lead, notifies the recipients) → `LeadNotification`
  (mail) → `resources/views/emails/lead.blade.php`.
- **`config/leads.php` holds the notification addresses** (`recipients`, overridable with
  `LEADS_RECIPIENTS`), the mail subject, the rate limit and the popup messages.
  Run `php artisan config:clear` after editing `.env`.
- The frontend posts with ajax from `public/js/custom.js`; the result (success or error)
  is rendered in the arcticmodal popup `#messgeModal`. The endpoint also answers a plain
  form post with a redirect + flash message, so the forms work without javascript.
- `LEADS_QUEUE=true` sends the mail through the queue worker, otherwise it is sent
  synchronously with the request. `MAIL_MAILER=log` writes the mail to
  `storage/logs/laravel.log`.

## Contacts

- **`config/contacts.php` holds every contact detail of the page**: company name,
  phone (display + `tel:` link), email, address (metro landmark + full address),
  yandex map (url, coordinates, zoom, marker icon) and the labels of the contact
  blocks. The header, the footer and the contacts section of the home page render
  them with `config('contacts....')` — do not hardcode phone/email/address in the views.
- The phone icon of the header circle is `public/images/phone.svg` (the original
  `phone.png` was not captured in the archive); the map marker is
  `public/images/map.svg`.
- `a.header-callback` is an anchor to `#offer-free` (the free equipment selection
  section) and scrolls to it smoothly; `.phone-button` and `.popup-content` open the
  callback modal.

## The port task (source material)

- `promts/start.md` is the brief (the directory is literally `promts/`, sic — don't
  "fix" the spelling): port the archived page in `promts/start_data/` into Blade — create
  a layout plus a separate home template, put assets under `public/`, split CSS into
  separate files, port the JS with working functionality, and report images that cannot
  be resolved.
- Source is a web.archive.org snapshot of `bitrate.msk.ru` (2022-03-30), WordPress theme
  `wss`.
- **Wayback shim must be stripped**: the first 9 lines of `custom.js`, `navigation.js` and
  `scripts.min.js` are a `_____WB$wombat$assign$function_____` block that shadows `window`,
  `self`, `document`, `location`, `top`, `parent`, `frames`, `opener`. Leaving it in
  breaks every DOM reference.
- **Do not port Wayback's own assets**: `wombat.js`, `bundle-playback.js`, `athena.js`,
  `ruffle.js`, `banner-styles.css`, `iconochive.css`, `json.txt`. Port only the site assets:
  `style.css` / `style.min.css` (theme `wss`, includes slick styles), `custom.js`,
  `navigation.js`, `scripts.min.js`, `jquery.js`, `jquery-migrate.min.js`,
  `jquery.arcticmodal-0.3.{css,min.js}`, `skip-link-focus-fix.js`, `wp-embed.min.js`.
- **Missing from the archive** (expect to report/replace these): `gtm.js`,
  `wp-emoji-release.min.js`, and the **slick** library itself — the HTML contains
  slick-generated markup but no slick CSS/JS file was captured.
- Only 6 local images exist (`review-1..6.jpg`). The other ~52 image URLs point at
  `web.archive.org/web/...im_/https://bitrate.msk.ru/wp-content/themes/wss/images/...`
  and are the "unavailable images" the brief asks you to list.

## Repo quirks

- **This directory is not a git repository** (no `.git`). `git status` fails — don't promise
  commits, diffs, or branches until the user initializes one.
- No CI (`.github` is absent), no `pint.json`, no `kilo.json`/`.kilo/` in the repo.
- `boost.json` lists only `claude_code` as an agent, so Boost writes guidelines to
  `CLAUDE.md`, not this file. This `AGENTS.md` is hand-maintained.
