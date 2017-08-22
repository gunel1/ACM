<?php
/**
 * Created by PhpStorm.
 * User: gunel
 * Date: 7/18/17
 * Time: 2:03 PM
 */

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfNotAdmin
{

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next){
        if (!Auth::check()) {
            return view('errors.403');}
        return $next($request);
    }
}