<?php
/**
 * Cross-domain middleware
 *
 * Adding a header completes the cross-domain request
 * @author      David Wan <autoloadone@gmail.com>
 * @version     1.0.0
 */
namespace App\Http\Middleware;

use Closure;

class CorsAjax
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
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Credentials: true");
        header("Access-Control-Allow-Methods: *");
        header("Access-Control-Allow-Headers: Content-Type,Access-Token");
        header("Access-Control-Expose-Headers: *");

        return $next($request);
    }
}