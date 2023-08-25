<?php

declare(strict_types=1);

namespace Treblle\ErrorCodes\Enums;

use Treblle\ErrorCodes\Attributes\Description;
use Treblle\ErrorCodes\Concerns\HasAttributes;

enum ErrorCode: string
{
    use HasAttributes;

    #[Description(
        title: 'Bad Request',
        code: 'HTTP_400',
        link: 'https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/400',
        status: 400,
    )]
    case BAD_REQUEST = 'HTTP-400';

    #[Description(
        title: 'Unauthorized',
        code: 'HTTP_401',
        link: 'https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/401',
        status: 401,
    )]
    case UNAUTHORIZED = 'Unauthorized';

    #[Description(
        title: 'Payment Required',
        code: 'HTTP_402',
        link: 'https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/402',
        status: 402,
    )]
    case PAYMENT_REQUIRED = 'Payment Required';

    #[Description(
        title: 'Forbidden',
        code: 'HTTP_403',
        link: 'https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/403',
        status: 403,
    )]
    case FORBIDDEN = 'Forbidden';

    #[Description(
        title: 'Not Found',
        code: 'HTTP_404',
        link: 'https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/404',
        status: 404,
    )]
    case NOT_FOUND = 'Not Found';

    #[Description(
        title: 'Method Not Allowed',
        code: 'HTTP_405',
        link: 'https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/405',
        status: 405,
    )]
    case METHOD_NOT_ALLOWED = 'Method Not Allowed';

    #[Description(
        title: 'Not Acceptable',
        code: 'HTTP_406',
        link: 'https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/406',
        status: 406,
    )]
    case NOT_ACCEPTABLE = 'Not Acceptable';

    #[Description(
        title: 'Proxy Authentication Required',
        code: 'HTTP_407',
        link: 'https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/407',
        status: 407,
    )]
    case PROXY_AUTHENTICATION_REQUIRED = 'Proxy Authenticated Required';

    #[Description(
        title: 'Request Timeout',
        code: 'HTTP_408',
        link: 'https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/408',
        status: 408,
    )]
    case REQUEST_TIMEOUT = 'Request Timeout';

    #[Description(
        title: 'Conflict',
        code: 'HTTP_409',
        link: 'https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/409',
        status: 409,
    )]
    case CONFLICT = 'Conflict';

    #[Description(
        title: 'Gone',
        code: 'HTTP_410',
        link: 'https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/410',
        status: 410,
    )]
    case GONE = 'Gone';

    #[Description(
        title: 'Length Required',
        code: 'HTTP_411',
        link: 'https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/411',
        status: 411,
    )]
    case LENGTH_REQUIRED = 'Length Required';

    #[Description(
        title: 'Precondition Failed',
        code: 'HTTP_412',
        link: 'https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/412',
        status: 412,
    )]
    case PRECONDITION_FAILED = 'Precondition Failed';

    #[Description(
        title: 'Payload Too Large',
        code: 'HTTP_413',
        link: 'https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/413',
        status: 413,
    )]
    case PAYLOAD_TOO_LARGE = 'Payload Too Large';

    #[Description(
        title: 'URI Too Long',
        code: 'HTTP_414',
        link: 'https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/414',
        status: 414,
    )]
    case URI_TOO_LONG = 'URI Too Long';

    #[Description(
        title: 'Unsupported Media Type',
        code: 'HTTP_415',
        link: 'https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/415',
        status: 415,
    )]
    case UNSUPPORTED_MEDIA_TYPE = 'Unsupported Media Type';

    #[Description(
        title: 'Range Not Satisfiable',
        code: 'HTTP_416',
        link: 'https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/416',
        status: 416,
    )]
    case RANGE_NOT_SATISFIABLE = 'Range Not Satisfiable';

    #[Description(
        title: 'Expectation Failed',
        code: 'HTTP_417',
        link: 'https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/417',
        status: 417,
    )]
    case EXPECTATION_FAILED = 'Expectation Failed';

    #[Description(
        title: "I'm a Teapot",
        code: 'HTTP_418',
        link: 'https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/418',
        status: 418,
    )]
    case TEAPOT = "I'm a Teapot";

    #[Description(
        title: 'Misdirected Request',
        code: 'HTTP_421',
        link: 'https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/421',
        status: 421,
    )]
    case MISDIRECTED_REQUEST = 'Misdirected Request';

    #[Description(
        title: 'Unprocessable Content',
        code: 'HTTP_422',
        link: 'https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/422',
        status: 422,
    )]
    case UNPROCESSABLE_CONTENT = 'Unprocessable Content';

    #[Description(
        title: 'Locked',
        code: 'HTTP_423',
        link: 'https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/423',
        status: 423,
    )]
    case LOCKED = 'Locked';

    #[Description(
        title: 'Failed Dependency',
        code: 'HTTP_424',
        link: 'https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/424',
        status: 424,
    )]
    case FAILED_DEPENDENCY = 'Failed Dependency';

    #[Description(
        title: 'Too Early',
        code: 'HTTP_425',
        link: 'https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/425',
        status: 425,
    )]
    case TOO_EARLY = 'Too Early';

    #[Description(
        title: 'Upgrade Required',
        code: 'HTTP_426',
        link: 'https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/426',
        status: 426,
    )]
    case UPGRADE_REQUIRED = 'Upgrade Required';

    #[Description(
        title: 'Precondition Required',
        code: 'HTTP_428',
        link: 'https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/428',
        status: 428,
    )]
    case PRECONDITION_REQUIRED = 'Precondition Required';

    #[Description(
        title: 'Too Many Requests',
        code: 'HTTP_429',
        link: 'https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/429',
        status: 429,
    )]
    case TOO_MANY_REQUESTS = 'Too Many Requests';

    #[Description(
        title: 'Request Header Fields Too Large',
        code: 'HTTP_431',
        link: 'https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/431',
        status: 431,
    )]
    case REQUEST_HEADER_FIELDS_TOO_LARGE = 'Request Header Fields Too Large';

    #[Description(
        title: 'Unavailable For Legal Reasons',
        code: 'HTTP_451',
        link: 'https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/451',
        status: 451,
    )]
    case UNAVAILABLE_FOR_LEGAL_REASONS = 'Unavailable For Legal Reasons';

    #[Description(
        title: 'Internal Server Error',
        code: 'HTTP_500',
        link: 'https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/500',
        status: 500,
    )]
    case INTERNAL_SERVER_ERROR = 'Internal Server Error';

    #[Description(
        title: 'Not Implemented',
        code: 'HTTP_501',
        link: 'https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/501',
        status: 501,
    )]
    case NOT_IMPLEMENTED = 'Not Implemented';

    #[Description(
        title: 'Bad Gateway',
        code: 'HTTP_502',
        link: 'https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/502',
        status: 502,
    )]
    case BAD_GATEWAY = 'Bad Gateway';

    #[Description(
        title: 'Service Unavailable',
        code: 'HTTP_503',
        link: 'https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/503',
        status: 503,
    )]
    case SERVICE_UNAVAILABLE = 'Service Unavailable';

    #[Description(
        title: 'Gateway Timeout',
        code: 'HTTP_504',
        link: 'https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/504',
        status: 504,
    )]
    case GATEWAY_TIMEOUT = 'Gateway Timeout';

    #[Description(
        title: 'HTTP Version Not Supported',
        code: 'HTTP_505',
        link: 'https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/505',
        status: 505,
    )]
    case HTTP_VERSION_NOT_SUPPORTED = 'HTTP Version Not Supported';

    #[Description(
        title: 'Variant Also Negotiates',
        code: 'HTTP_506',
        link: 'https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/506',
        status: 506,
    )]
    case VARIANT_ALSO_NEGOTIATES = 'Variant Also Negotiates';

    #[Description(
        title: 'Insufficient Storage',
        code: 'HTTP_507',
        link: 'https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/507',
        status: 507,
    )]
    case INSUFFICIENT_STORAGE = 'Insufficient Storage';

    #[Description(
        title: 'Loop Detected',
        code: 'HTTP_508',
        link: 'https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/508',
        status: 508,
    )]
    case LOOP_DETECTED = 'Loop Detected';

    #[Description(
        title: 'Not Extended',
        code: 'HTTP_510',
        link: 'https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/510',
        status: 510,
    )]
    case NOT_EXTENDED = 'Not Extended';

    #[Description(
        title: 'Network Authentication Required',
        code: 'HTTP_511',
        link: 'https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/511',
        status: 511,
    )]
    case NETWORK_AUTHENTICATION_REQUIRED = 'Network Authentication Required';
}
