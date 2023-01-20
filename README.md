# Who the fuck save this sytem config on the production server ? :smirk:


- [Setup](#setup)
    - [Installation](#installation)
    - [Setup the module](#setup-the-module)
- [Features](#features)
- [Support](#support)
- [Authors](#authors)
- [License](#license)

## Setup

Magento 2 Open Source or Commerce edition is required.

###  Installation

Run the following command:

```
git clone https://github.com/ronangr1/M2-SystemConfigWhoDidThisLogger.git SystemConfigWhoDidThisLogger
mkdir /path/to/your/magento/app/code/Ronangr1
cp -R SystemConfigWhoDidThisLogger /path/to/magento/app/code/Ronangr1/
```

### Setup the module

Run the following magento command:

```
bin/magento setup:upgrade
```

**If you are in production mode, do not forget to recompile and redeploy the static resources.**

## Features

### Added a log file to track who is saving the system configuration

If, like me, you are tired of being told that configurations have been changed but no one is reporting... this Magento module is part of the solution.

This module provides a new logger that is populated as soon as a contributor presses the "Save config" button in the backoffice.

## Support

Raise a new [request](https://github.com/ronangr1/M2-AddFakeTextButton/issues) to the issue tracker.

## Authors

- **ronangr1** - [![Twitter Follow](https://img.shields.io/twitter/follow/ronangr1.svg?style=social)](https://twitter.com/ronangr1)
- **Contributors**  [![GitHub contributors](https://img.shields.io/github/contributors/opengento/magento2-module.svg?style=flat-square)](https://github.com/ronangr1/module-add-fake-text-button/graphs/contributors)

## License

This project is licensed under the MIT License - see the [LICENSE](./LICENSE) details.

***That's all folks!***
