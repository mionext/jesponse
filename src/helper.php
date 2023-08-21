<?php

use MioNext\Jesponse\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

if (!function_exists('success')) {
    function success($payload = null, $message = 'OK', $code = 2000)
    {
        return Response::make($code, $payload, $message);
    }
}

if (!function_exists('fail')) {
    function fail($message = 'Fail', $code = 5000, $payload = null)
    {
        return Response::make($code, $payload, $message);
    }
}

if (!function_exists('failWithCode')) {
    function failWithCode($httpStatusCode = JsonResponse::HTTP_BAD_REQUEST, $message = 'Fail', $code = 5000, $payload = null)
    {
        return Response::make($code, $payload, $message, $httpStatusCode);
    }
}
