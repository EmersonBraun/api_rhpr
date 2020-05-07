<?php

    namespace App\Http\Middleware;

    use Closure;
    use JWTAuth;
    use Auth;
    use Exception;
    use Tymon\JWTAuth\Http\Middleware\BaseMiddleware;

    class JwtMiddleware extends BaseMiddleware
    {

        /**
         * Handle an incoming request.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  \Closure  $next
         * @return mixed
         */
        public function handle($request, Closure $next)
        {
            try {

                $user = JWTAuth::parseToken()->authenticate();
            } catch (Exception $e) {
                if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenInvalidException){
                    $return = ['returnType' => 'error', 'returnContent' => 'Token inválido!'];
                    return response()->json($return, 401);
                }else if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenExpiredException){
                    $return = ['returnType' => 'error', 'returnContent' => 'Token Expirado!'];
                    return response()->json($return, 401);
                }else{
                    $return = ['returnType' => 'error', 'returnContent' => 'Token não encontrado!'];
                    return response()->json($return, 401);
                }
            }
            return $next($request);
        }
    }