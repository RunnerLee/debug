<?php
/**
 * Created by PhpStorm.
 * User: janhuang
 * Date: 15/8/8
 * Time: 下午7:07
 * Github: https://www.github.com/janhuang
 * Coding: https://www.coding.net/janhuang
 * SegmentFault: http://segmentfault.com/u/janhuang
 * Blog: http://segmentfault.com/blog/janhuang
 * Gmail: bboyjanhuang@gmail.com
 * WebSite: http://www.janhuang.me
 */

namespace FastD\Debug\Exceptions;

/**
 * Class HttpException
 *
 * @package FastD\Debug\Exceptions
 */
class HttpException extends \ErrorException implements HttpExceptionInterface
{
    protected $statusCode;

    protected $headers = [
        'Content-Type' => 'text/html; charset=utf-8'
    ];

    /**
     * @param string $message
     * @param int    $code
     * @param array  $headers
     */
    public function __construct($message, $code = HttpExceptionInterface::HTTP_SERVER_INTERNAL_ERROR, array $headers = [])
    {
        $this->statusCode = $code;
        $this->headers = array_merge($this->headers, $headers);
        $message = is_array($message) ? json_encode($message, JSON_UNESCAPED_UNICODE) : $message;
        parent::__construct($message, $code, 1);
    }

    /**
     * Returns the status code.
     *
     * @return int An HTTP response status code
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * Returns response headers.
     *
     * @return array Response headers
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    public function setFile($file)
    {
        $this->file = $file;
    }

    public function setLine($line)
    {
        $this->line = $line;
    }
}