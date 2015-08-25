<?php
/**
 * Created by PhpStorm.
 * User: janhuang
 * Date: 15/8/8
 * Time: 上午11:34
 * Github: https://www.github.com/janhuang
 * Coding: https://www.coding.net/janhuang
 * SegmentFault: http://segmentfault.com/u/janhuang
 * Blog: http://segmentfault.com/blog/janhuang
 * Gmail: bboyjanhuang@gmail.com
 * WebSite: http://www.janhuang.me
 */

namespace FastD\Debug\Exceptions;

class NotFoundHttpException extends HttpException
{
    /**
     * @param string $message
     * @param int    $code
     */
    public function __construct($message, $code = HttpExceptionInterface::HTTP_NOT_FOUND, array $headers = [])
    {
        parent::__construct($message, $code, $headers); // TODO: Change the autogenerated stub
    }
}