# optional policy
[![Latest Version on Github](https://img.shields.io/github/release/dillingham/optional-policy.svg?style=flat-square)](https://packagist.org/packages/dillingham/optional-policy)
[![Total Downloads](https://img.shields.io/packagist/dt/dillingham/optional-policy.svg?style=flat-square)](https://packagist.org/packages/dillingham/optional-policy) [![Twitter Follow](https://img.shields.io/twitter/follow/dillinghammm?color=%231da1f1&label=Twitter&logo=%231da1f1&logoColor=%231da1f1&style=flat-square)](https://twitter.com/dillinghammm)

allows controller packages to call `authorize()` without knowing policy exists

basically allows package consumers to hook into authorization
```
composer require dillingham/optional-policy
```

change `AuthorizesRequests` to `OptionallyAuthorizesRequests`
