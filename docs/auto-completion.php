<?php

/**
 * @property    Miaoxing\Captcha\Service\Captcha $captcha 图形验证码
 */
class CaptchaMixin {
}

/**
 * @mixin CaptchaMixin
 */
class AutoCompletion {
}

/**
 * @return AutoCompletion
 */
function wei()
{
    return new AutoCompletion;
}

/** @var Miaoxing\Captcha\Service\Captcha $captcha */
$captcha = wei()->captcha;
