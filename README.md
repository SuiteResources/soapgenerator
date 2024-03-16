# SOAPGenerator

Simple WSDL to PHP classes converter. Takes a WSDL file and outputs class files ready to use.

Uses the [MIT license](http://www.opensource.org/licenses/mit-license.php).

## Installation

Add SOAPGenerator to your project using [composer](https://getcomposer.org/doc/00-intro.md):
```bash
composer require SuiteResources/SOAPGenerator
```

## Usage and options

See [usage and options](docs/usage-and-options.md) for info on the usage of this package.

## Versioning

This project uses [semantic versioning](http://semver.org/). The following constitutes the public API:

  * `\SOAPGenerator\GeneratorInterface`
  * `\SOAPGenerator\ConfigInterface`
  * Generated code

Backwards incompatible changes to these means that the major version will be increased. Additional features and bug fixes increase minor and patch versions.
