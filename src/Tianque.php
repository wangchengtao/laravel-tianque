<?php

namespace Summer\LaravelTianque;

use Illuminate\Support\Facades\Facade;
use Summer\TianQue\Kernel\AopClient;
use Summer\TianQue\Kernel\Config;
use Summer\TianQue\Kernel\Contract\RandomGenerator;
use Summer\TianQue\Kernel\Support\ApiResponse;
use Summer\TianQue\Request\Request;
use Summer\TianQue\Request\UploadRequest;
use Summer\TianQue\Response\UploadResponse;

/**
 * @method static Config getConfig()
 * @method static AopClient setRandomGenerator(RandomGenerator $generator)
 * @method static ApiResponse execute(Request $request)
 * @method static UploadResponse upload(UploadRequest $request)
 *
 * @see AopClient
 */
class Tianque extends Facade
{
    public static function getFacadeAccessor(): string
    {
        return 'tianque';
    }
}