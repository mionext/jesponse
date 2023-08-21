<?php

namespace MioNext\Jesponse;

use Symfony\Component\HttpFoundation\JsonResponse as BaseResponse;

class Response
{
    static
        $code = 'code',
        $message = 'msg',
        $payload = 'data',
        $timestamp = 'timestamp',

        $_ = 0;


    /**
     * @param int $code
     * @param $payload
     * @param $message
     * @param int $httpStatusCode
     * @param array $headers
     * @return BaseResponse
     */
    public static function make(
        int $code = 0, $payload = [], $message = 'OK',
        int $httpStatusCode = BaseResponse::HTTP_OK, array $headers = []
    )
    {
        $payload = is_null($payload) ? new \stdClass : $payload;

        return new BaseResponse([
            static::$code => $code,
            static::$message => $message,
            static::$payload => $payload,
            static::$timestamp => time()
        ], $httpStatusCode, $headers);
    }
}
