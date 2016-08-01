<?php

namespace Itb\Controller;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

/**
 * Created by PhpStorm.
 * User: wsferreira
 * Date: 26/07/2016
 * Time: 17:44
 */
class MainController
{

    public function testAction(Request $request, Application $app)
    {
        return 'testAction';
    }

}