# apitk-test-project

Dummy project that can be used to test modifications and updates of apitk-* bundles.

Implemented bundles:
* [apitk-common-bundle]
* [apitk-header-bundle]
* [apitk-deprecation-bundle]
* [apitk-dtomapper-bundle]
* [apitk-url-bundle]
* [apitk-manipulation-bundle]


### Usage

1. Clone each apitk-bundle listed above info the parent directory of this project.
2. Adjust the version constraints in composer.json for all apitk-bundles accordingly

### Starting the server

The easiest way is starting a development server via the Symfony CLI.
You can get it from here: https://symfony.com/download

Afterwards, while in this directory and after `composer install`, run:

    symfony serve

and you're able to access this project's api doc via: http://localhost:8000/api/doc



[apitk-common-bundle]: https://github.com/byWulf/apitk-common-bundle
[apitk-header-bundle]: https://github.com/byWulf/apitk-header-bundle
[apitk-deprecation-bundle]: https://github.com/byWulf/apitk-deprecation-bundle
[apitk-dtomapper-bundle]: https://github.com/byWulf/apitk-dtomapper-bundle
[apitk-url-bundle]: https://github.com/byWulf/apitk-url-bundle
[apitk-manipulation-bundle]: https://github.com/byWulf/apitk-manipulation-bundle
