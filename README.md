<div align="center">
  <img src="https://treblle-github.s3.amazonaws.com/header.png"/>
</div>
<div align="center">

# API Error Codes

<!-- BADGES_START -->
[![Latest Version][badge-release]][packagist]
[![PHP Version][badge-php]][php]
![tests](https://github.com/treblle/error-codes/workflows/tests/badge.svg)
[![Total Downloads][badge-downloads]][downloads]

[badge-release]: https://img.shields.io/packagist/v/treblle/error-codes.svg?style=flat-square&label=release
[badge-php]: https://img.shields.io/packagist/php-v/treblle/error-codes.svg?style=flat-square
[badge-downloads]: https://img.shields.io/packagist/dt/treblle/error-codes.svg?style=flat-square&colorB=mediumvioletred

[packagist]: https://packagist.org/packages/treblle/error-codes
[php]: https://php.net
[downloads]: https://packagist.org/packages/treblle/error-codes
<!-- BADGES_END -->

<a href="https://docs.treblle.com/en/integrations" target="_blank">Integrations</a>
<span>&nbsp;&nbsp;•&nbsp;&nbsp;</span>
<a href="http://treblle.com/" target="_blank">Website</a>
<span>&nbsp;&nbsp;•&nbsp;&nbsp;</span>
<a href="https://docs.treblle.com" target="_blank">Docs</a>
<span>&nbsp;&nbsp;•&nbsp;&nbsp;</span>
<a href="https://blog.treblle.com" target="_blank">Blog</a>
<span>&nbsp;&nbsp;•&nbsp;&nbsp;</span>
<a href="https://twitter.com/treblleapi" target="_blank">Twitter</a>
<span>&nbsp;&nbsp;•&nbsp;&nbsp;</span>
<a href="https://treblle.com/chat" target="_blank">Discord</a>
<br />

  <hr />
</div>

A package to help you provide consistent error codes.

## Installation

```bash
composer require treblle/error-codes
```

## Usage

This package is easy to use, you can determine what Error Code you need. Then access the attributes attached to it.

```php
use Treblle\ErrorCodes\Enums\ErrorCode;

$badRequest = ErrorCode::BAD_REQUEST;

$title = $badRequest->getDescription()->title; // Bad Request
$code = $badRequest->getDescription()->code; // HTTP_400
$link = $badRequest->getDescription()->link; // https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/400
$status = $badRequest->getDescription()->status; // 400
```

## Combining

This package works very well with the `treblle/api-responses` package.

```php
final class Handler extends ExceptionHandler
{
    public function register(): void
    {
        $this->renderable(function (ModelNotFoundException $exception, Request $request) {
            $errorCode = \Treblle\ErrorCodes\Enums\ErrorCode::NOT_FOUND;
            
            return new ErrorResponse(
                data: new ApiError(
                    title: $errorCode->getDescription()->title,
                    detail: $exception->getMessage(),
                    instance: $request->path(),
                    code: $errorCode->getDescription()->code,
                    link: $errorCode->getDescription()->link,
                ),
                status: Status::NOT_FOUND,
            );
        });
    }
}
```

## Community 💙

First and foremost: **Star and watch this repository** to stay up-to-date.

Also, follow our [Blog](https://blog.treblle.com), and on [Twitter](https://twitter.com/treblleapi).

You can chat with the team and other members on [Discord](https://treblle.com/chat) and follow our tutorials and other video material at [YouTube](https://youtube.com/@treblle).

[![Treblle Discord](https://img.shields.io/badge/Treblle%20Discord-Join%20our%20Discord-F3F5FC?labelColor=7289DA&style=for-the-badge&logo=discord&logoColor=F3F5FC&link=https://treblle.com/chat)](https://treblle.com/chat)

[![Treblle YouTube](https://img.shields.io/badge/Treblle%20YouTube-Subscribe%20on%20YouTube-F3F5FC?labelColor=c4302b&style=for-the-badge&logo=YouTube&logoColor=F3F5FC&link=https://youtube.com/@treblle)](https://youtube.com/@treblle)

[![Treblle on Twitter](https://img.shields.io/badge/Treblle%20on%20Twitter-Follow%20Us-F3F5FC?labelColor=1DA1F2&style=for-the-badge&logo=Twitter&logoColor=F3F5FC&link=https://twitter.com/treblleapi)](https://twitter.com/treblleapi)

### How to contribute

Here are some ways of contributing to making Treblle better:

- **[Try out Treblle](https://docs.treblle.com/en/introduction#getting-started)**, and let us know ways to make Treblle better for you. Let us know here on [Discord](https://treblle.com/chat).
- Join our [Discord](https://treblle.com/chat) and connect with other members to share and learn from.
- Send a pull request to any of our [open source repositories](https://github.com/Treblle) on Github. Check the contribution guide on the repo you want to contribute to for more details about how to contribute. We're looking forward to your contribution!
-
## Testing

To run the test suite:

```bash
composer run test
```

## Credits

<a href="https://github.com/Treblle/error-codes/graphs/contributors">
  <p align="center">
    <img  src="https://contrib.rocks/image?repo=Treblle/error-codes" alt="A table of avatars from the project's contributors" />
  </p>
</a>

## LICENSE

The MIT LIcense (MIT). Please see [License File](./LICENSE) for more information.
