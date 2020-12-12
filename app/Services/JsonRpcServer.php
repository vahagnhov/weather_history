<?php

namespace App\Services;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class JsonRpcServer
{
    public function handle(Request $request, Controller $controller)
    {
        try {
            $content = json_decode($request->getContent(), true);
            if (!empty($content)) {
                $result = $controller->{$content['method']}(...[$content['params']]);
                return JsonRpcResponse::success($result, $content['id']);
            }
        } catch (\Exception $e) {
            return JsonRpcResponse::error($e->getMessage());
        }
    }
}