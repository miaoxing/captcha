<?php

namespace Miaoxing\Captcha\Controller;

use Miaoxing\Plugin\BaseController;

class CaptchaController extends BaseController
{
    protected $controllerAuth = false;

    public function indexAction()
    {
        $this->res->setHeader('Content-type', 'image/png');

        return wei()->captcha->render();
    }

    public function checkAction($req)
    {
        return wei()->captcha->check($req['captcha']);
    }
}
