# Example "local file" Magento Composer Package

Reference package for new pestle command.

- Magento module is in `module` folder with sample composer.json
    - Needs composer.json
    - composer.json must have PSR autoloder setup
    - composer.json must also also load `registration.php`

- Check this folder out,or copy it's files, _somewhere under your Magento folder's main root folder.
    - Magento **will not** find your files if they are outside the Magento root
    - unless maybe you do weird hacky stuff? https://magento.stackexchange.com/questions/95071/magento-2-does-not-allow-linking-modules-using-symlinks/169801#169801

- Then, in your Magento system's `composer.json`, add a repository whose `type` is path, and whose `url` is the path to where you checked out the module. **not** the `src` folder, but the folder with the `composer.json` file.

    "repositories": [
        {
            "type": "composer",
            "url": "https://repo.magento.com/"
        },
        {
            "type": "path",
            "url": "extensions-dev/module"
        }
    ],

- Then, from your Magento project root
    - `composer require pulsestorm/hello-local-package dev-master`
    - Where `pulsestorm/hello-local-package` the the package name in `module/composer.json`
    - dev-master seems required -- you _can_ pin it to a version but I'm not sure what happen when/if you update the version and then `composer update`

- Doing the above will create a symlink `vendor/pulsestorm/hello-local-package` which points to `extensions-dev/module` (or whereever you've put your module)
    - Be sure to set `Stores -> Configuration -> Developer -> Template Settings -> Allow Symlinks` to yes.
