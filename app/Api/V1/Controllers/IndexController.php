<?php

namespace App\Api\V1\Controllers;
use App\Api\V1\Models\Config;
use Laravel\Lumen\Routing\Controller as BaseController;
class IndexController extends BaseController
{
    /**
     * View list of notification config
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function test(\Illuminate\Http\Request $request)
    {
        echo 'test';
        return [1,1,1,1];
    }

    /**
     * @param $id
     */
    public function get($id)
    {

    }

    /**
     *
     */
    public function update()
    {

    }
}
