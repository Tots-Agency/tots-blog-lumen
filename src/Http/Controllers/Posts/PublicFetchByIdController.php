<?php

namespace Tots\Blog\Http\Controllers\Posts;

use Tots\Blog\Models\TotsPost;
use Illuminate\Http\Request;

class PublicFetchByIdController extends \Laravel\Lumen\Routing\Controller
{
    public function handle($id, Request $request)
    {
        $item = TotsPost::where('id', $id)->where('status', TotsPost::STATUS_ACTIVE)->first();
        if($item === null) {
            throw new \Exception('Item not exist');
        }
        return $item;
    }
}