# Forkel CustomShipping
This Magento 1 extension allows you to provide a custom shipping method in backend only, frontend only or both. In the following screenshots you can see an example `Free - August Special` for `$0.00` in the backend and frontend.

![Forkel CustomShipping - Configuration](http://www.tobiasforkel.de/public/magento/forkel_customshipping/version/1.0/screenshots/github/backend/config.jpg)

| Backend | Frontend |
|-------------|-------------|
| ![Forkel CustomShipping - Backend - Order](http://www.tobiasforkel.de/public/magento/forkel_customshipping/version/1.0/screenshots/github/backend/order.jpg) | ![Forkel CustomShipping - Frontend - Cart](http://www.tobiasforkel.de/public/magento/forkel_customshipping/version/1.0/screenshots/github/frontend/cart.jpg) |
||![Forkel CustomShipping - Frontend - Checkout](http://www.tobiasforkel.de/public/magento/forkel_customshipping/version/1.0/screenshots/github/frontend/checkout.jpg)|

## Installation (Manually)
1. Pull the code.
2. Copy the code in your document root directory where the `/app/` folder is located.
4. Clear all caches and reload your Admin Panel.
5. After installation you should see `Custom Shipping` in `System > Configuration > Sales > Shipping Methods`.

## Installation (Composer)

1. Add this extension to your repository `composer config repositories.tobias-forkel/forkel_customshipping vcs https://github.com/tobias-forkel/Forkel_CustomShipping.git`
2. Update your composer.json `composer require "tobias-forkel/forkel_customshipping":"*"`

```
./composer.json has been updated
Loading composer repositories with package information
Updating dependencies (including require-dev)              
Package operations: 1 install, 0 updates, 0 removals
  - Installing tobias-forkel/forkel_customshipping (1.0.0): Downloading (100%)         
Writing lock file
Generating autoload files
```

## Features
* The option `Backend`, `Frontend` or `Backend / Frontend` allows you hide or display the custom shipping method in frontend or backend.
* Customizable `Method Name` and `Method Title`.
* Customizable `Price`. Default is `0.00`.

## Usage
The functionality can be used in the backend section `System > Configuration > Sales > Shipping Methods > CustomShipping`.

## Support
If you have any issues with this extension, open an issue on [Github](https://github.com/tobias-forkel/Forkel_CustomShipping/issues). For a custom build, please contact me on http://www.tobiasforkel.de.

## Contributing
1. Fork it!
2. Create your feature branch: `git checkout -b my-new-feature`.
3. Commit your changes: `git commit -am 'Add some feature'`.
4. Push to the branch: `git push origin my-new-feature`.
5. Submit a pull request.

Follow me on [GitHub](https://github.com/tobias-forkel) and [Twitter](https://twitter.com/tobiasforkel).

## History
===== 1.0.0 =====
* Stable version of this extension

## License
[OSL - Open Software Licence 3.0](http://opensource.org/licenses/osl-3.0.php)
