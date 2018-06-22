# Brink
Brink is a better Bootstrap 4 workflow for Laravel.

It's basically the workflow from [Sage](https://roots.io/sage/) by roots.

Also, this is my first ever Laravel package, so there's probably something I could have done differently.  
Please open an issue or a pull request if you have anything to add.

## Usage
1. Fresh Laravel installation
2. Install the package via `composer require peterbrinck/brink`. Laravel will automatically discover the package.
3. Use `php artisan brink` to install. (NOTE: All files in `resources/assets/sass` will be deleted)
4. `npm install && npm run dev`

If a file called `app.scss` already exists you will be asked to confirm because it will overwrite your current files.
You can also use the `--force` option to force the installation without any confirmation.

## License
The package is licensed under the [MIT license](https://opensource.org/licenses/MIT)