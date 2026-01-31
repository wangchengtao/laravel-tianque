## 概要
laravel 集成天阙开放平台 SDK

## 环境要求
- Laravel >= 6.0

## 安装
```bash
composer require wangchengtao/laravel-tianque
```

## 配置
1. 创建配置文件
```bash
php artisan vendor:publish --provider="Summer\LaravelTianQue\TianQueServiceProvider"
```
2. 修改配置
```php
return [
    /**
     * 天阙开放平台接口域名, 默认测试环境
     * 生产环境: https://openapi.tianquetech.com
     * 测试环境: https://openapi-test.tianquetech.com
     */
    'domain' => env('TIANQUE_DOMAIN', 'https://openapi-test.tianquetech.com'),

    /**
     * 天阙平台分配的机构编号
     */
    'org_id' => env('TIANQUE_ORG_ID', '14653730'),

    /**
     * 您自己生成的私钥
     */
    'private_key' => env('TIANQUE_PRIVATE_KEY', ''),

    /**
     * 天阙平台分配的公钥, 默认测试环境
     * 生产环境: MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAjo1+KBcvwDSIo+nMYLeOJ19Ju4ii0xH66ZxFd869EWFWk/EJa3xIA2+4qGf/Ic7m7zi/NHuCnfUtUDmUdP0JfaZiYwn+1Ek7tYAOc1+1GxhzcexSJLyJlR2JLMfEM+rZooW4Ei7q3a8jdTWUNoak/bVPXnLEVLrbIguXABERQ0Ze0X9Fs0y/zkQFg8UjxUN88g2CRfMC6LldHm7UBo+d+WlpOYH7u0OTzoLLiP/04N1cfTgjjtqTBI7qkOGxYs6aBZHG1DJ6WdP+5w+ho91sBTVajsCxAaMoExWQM2ipf/1qGdsWmkZScPflBqg7m0olOD87ymAVP/3Tcbvi34bDfwIDAQAB
     * 测试环境: MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQCOmsrFtFPTnEzfpJ/hDl5RODBxw4i9Ex3NmmG/N7A1+by032zZZgLLpdNh8y5otjFY0E37Nyr4FGKFRSSuDiTk8vfx3pv6ImS1Rxjjg4qdVHIfqhCeB0Z2ZPuBD3Gbj8hHFEtXZq8+msAFu/5ZQjiVhgs5WWBjh54LYWSum+d9+wIDAQAB
     */
    'public_key' => env('TIANQUE_PUBLIC_KEY', ''),

    /**
     * 签名类型, 默认 RSA
     */
    'sign_type' => env('TIANQUE_SIGN_TYPE', 'RSA'),
];
```

## 使用
```php
use Summer\LaravelTianQue\TianQue;
use Summer\TianQue\Request\UploadRequest;

$request = new UploadRequest();
$request->setPictureType(86);
$request->setFile('https://mat.hicootest.com/image/7eK0lCdfQPWHa3DZY0ohrM7v1U0aYzA9FaYGJ16f.png');

$res = TianQue::upload($request);
}
```
