<?php
namespace App\Traits;

trait ApiResponses
{
    protected function ok($message, $data = [])
    {
        return $this->success($message, 200, $data);
    }

    protected function success($message, $statusCode = 200, $data = [])
    {
        return response()->json([
            'data'    => $data,
            'message' => $message,
            'status'  => $statusCode,
        ], $statusCode);
    }
}