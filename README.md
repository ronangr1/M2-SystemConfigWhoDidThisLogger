# Module for Magento 2

[![Latest Stable Version](https://img.shields.io/packagist/v/ronangr1/module-systemconfigwhodidthislogger.svg?style=flat-square)](https://packagist.org/packages/ronangr1/module-systemconfigwhodidthislogger)
[![License: MIT](https://img.shields.io/github/license/ronangr1/m2-systemconfigwhodidthislogger.svg?style=flat-square)](./LICENSE)
[![Packagist](https://img.shields.io/packagist/dt/ronangr1/module-systemconfigwhodidthislogger.svg?style=flat-square)](https://packagist.org/packages/ronangr1/module-systemconfigwhodidthislogger/stats)
[![Packagist](https://img.shields.io/packagist/dm/ronangr1/module-systemconfigwhodidthislogger.svg?style=flat-square)](https://packagist.org/packages/ronangr1/module-systemconfigwhodidthislogger/stats)

This module allows you to record any changes made to the configuration of your Magento 2 application

- [Setup](#setup)
    - [Composer installation](#composer-installation)
    - [Setup the module](#setup-the-module)
- [Documentation](#documentation)
- [Support](#support)
- [Authors](#authors)
- [License](#license)

## Setup

Magento 2 Open Source or Commerce edition is required.

###  Composer installation

Run the following composer command:

```
composer require ronangr1/module-systemconfigwhodidthislogger
```

### Setup the module

Run the following magento command:

```
bin/magento setup:upgrade
```

**If you are in production mode, do not forget to recompile and redeploy the static resources.**

## Documentation

Go to `Store > Config Records` to see who the fuck changed the configuration values.

## Support

Raise a new [request](https://github.com/ronangr1/M2-SystemConfigWhoDidThisLogger/issues) to the issue tracker.

## Authors

- **ronangr1** - *Maintainer* - [![GitHub followers](https://img.shields.io/github/followers/ronangr1.svg?style=social)](https://github.com/ronangr1)
- **Contributors** - *Contributor* - [![GitHub contributors](https://img.shields.io/github/contributors/ronangr1/m2-systemconfigwhodidthislogger.svg?style=flat-square)](https://github.com/ronangr1/M2-SystemConfigWhoDidThisLogger/graphs/contributors)

## License

This project is licensed under the MIT License - see the [LICENSE](./LICENSE) details.

***That's all folks!***
