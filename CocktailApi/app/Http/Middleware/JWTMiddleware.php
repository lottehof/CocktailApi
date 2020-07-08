<?php

namespace App\Http\Middleware;

use Closure;
use Tymon\JWTAuth\Facades\JWTAuth;

class JWTMiddleware
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
        try{

          JWTAuth::parseToken()->authenticate();
          return $next($request);

        } catch (\Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {
          //do whatever you want to do if a token is expired
          $message = 'Token is expired';
        } catch (\Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {
          //Do whatever you want to do if a token is invalid
          $message = 'Invalid token';
        } catch (Tymon\JWTAuth\Exceptions\JWTException $e) {
          //Do whatever you want to do if a token is not present
          $message = 'Provide token';
        }
        return response()->json([
                'success' => false,
                'message' => $message
        ]);
        
    }
}
