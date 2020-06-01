<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Throwable  $exception
     * @return void
     *
     * @throws \Exception
     */
    public function report(Throwable $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $exception
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Throwable
     */
    public function render($request, Throwable $exception)
    {
        if ($exception instanceof \Illuminate\Database\Eloquent\ModelNotFoundException) abort(404);
        if($this->isHttpException($exception)) {
            $data = [];
            $route = $request->path();
            $statusCode = intval($exception->getStatusCode());
            switch ($statusCode) {
                case 401:
                    $headers = $this->mountHeader('Not authenticated', $route);
                    return response()->json($data, $statusCode, $headers);
                    break;
                case 403:
                    $headers = $this->mountHeader('You do not have access to this feature, contact your system administrator', $route);
                    return response()->json($data, $statusCode, $headers);
                    break;
                case 404:
                    $headers = $this->mountHeader('Not found', $route);
                    return response()->json($data, $statusCode, $headers);
                    break;
                default:
                    return parent::render($request, $exception);
                break;
                    
            }
        } else {
            return parent::render($request, $exception);
        }
    }

    public function mountHeader($message='error', $route)
    {
        $content = "error accessing a route $route";
        return [
            'returnType' => 'error',
            'message' => $message,
            'contentError' => $content,
        ];
    }
}
