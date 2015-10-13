<?php

namespace App\Exceptions;

use Exception;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Laravel\Lumen\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that should not be reported.
     *
     * @var array
     */
    protected $dontReport = [
        HttpException::class,
    ];

    protected $statusCodeMessages = [
        100 => "Continue",
        101 => "Switching Protocols",
        102 => "Processing (WebDAV; RFC 2518)",

        200 => "OK",
        201 => "Created",
        202 => "Accepted",
        203 => "Non-Authoritative Information (since HTTP/1.1)",
        204 => "No Content",
        205 => "Reset Content",
        206 => "Partial Content (RFC 7233)",
        207 => "Multi-Status (WebDAV; RFC 4918)",
        208 => "Already Reported (WebDAV; RFC 5842)",
        226 => "IM Used (RFC 3229)",

        300 => "Multiple Choices",
        301 => "Moved Permanently",
        302 => "Found",
        303 => "See Other (since HTTP/1.1)",
        304 => "Not Modified (RFC 7232)",
        305 => "Use Proxy (since HTTP/1.1)",
        306 => "Switch Proxy",
        307 => "Temporary Redirect (since HTTP/1.1)",
        308 => "Permanent Redirect (RFC 7538)",
        308 => "Resume Incomplete (Google)",

        400 => "Bad Request",
        401 => "Unauthorized",
        403 => "Forbidden",
        402 => "Payment Required",
        404 => "Not Found",
        405 => "Method Not Allowed",
        406 => "Not Acceptable",
        407 => "Proxy Authentication Required (RFC 7235)",
        408 => "Request Timeout",
        409 => "Conflict",
        410 => "Gone",
        411 => "Length Required",
        412 => "Precondition Failed (RFC 7232)",
        413 => "Payload Too Large (RFC 7231)",
        414 => "Request-URI Too Long",
        415 => "Unsupported Media Type",
        416 => "Requested Range Not Satisfiable (RFC 7233)",
        417 => "Expectation Failed",
        418 => "I'm a teapot (RFC 2324)",
        419 => "Authentication Timeout (not in RFC 2616)",
        420 => "Method Failure (Spring Framework)",
        420 => "Enhance Your Calm (Twitter)",
        421 => "Misdirected Request (RFC 7540)",
        422 => "Unprocessable Entity (WebDAV; RFC 4918)",
        423 => "Locked (WebDAV; RFC 4918)",
        424 => "Failed Dependency (WebDAV; RFC 4918)",
        426 => "Upgrade Required",
        428 => "Precondition Required (RFC 6585)",
        429 => "Too Many Requests (RFC 6585)",
        431 => "Request Header Fields Too Large (RFC 6585)",
        440 => "Login Timeout (Microsoft)",
        444 => "No Response (Nginx)",
        449 => "Retry With (Microsoft)",
        450 => "Blocked by Windows Parental Controls (Microsoft)",
        451 => "Unavailable For Legal Reasons (Internet draft)",
        451 => "Redirect (Microsoft)",
        494 => "Request Header Too Large (Nginx)",
        495 => "Cert Error (Nginx)",
        496 => "No Cert (Nginx)",
        497 => "HTTP to HTTPS (Nginx)",
        498 => "Token expired/invalid (Esri)",
        499 => "Client Closed Request (Nginx)",
        499 => "Token required (Esri)",

        500 => "Internal Server Error",
        501 => "Not Implemented",
        502 => "Bad Gateway",
        503 => "Service Unavailable",
        504 => "Gateway Timeout",
        505 => "HTTP Version Not Supported",
        506 => "Variant Also Negotiates (RFC 2295)",
        507 => "Insufficient Storage (WebDAV; RFC 4918)",
        508 => "Loop Detected (WebDAV; RFC 5842)",
        509 => "Bandwidth Limit Exceeded (Apache bw/limited extension)[32]",
        510 => "Not Extended (RFC 2774)",
        511 => "Network Authentication Required (RFC 6585)",
        520 => "Unknown Error",
        522 => "Origin Connection Time-out",
        598 => "Network read timeout error (Unknown)",
        599 => "Network connect timeout error (Unknown)"
    ];

    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param  \Exception  $e
     * @return void
     */
    public function report(Exception $e)
    {
        return parent::report($e);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $e
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $e)
    {
        return parent::render($request, $e);

        $statusCode = $e->getStatusCode();

        if (env("APP_DEBUG")) {
            $message = $e->getmessage() ?: $this->statusCodeMessages[$statusCode];
        } else {
            $message = $this->statusCodeMessages[$statusCode];
        }

        return response()->json(
            [
                "statusCode" => $statusCode,
                "message" => $message,
            ],
            $statusCode
        );
    }
}
