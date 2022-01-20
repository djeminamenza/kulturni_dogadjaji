<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

use Closure;
use App\Models\User;

class IsAdmin
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

        if(Auth::check()){
                //$user = new User();
                $data = auth()->user()->isItAdmin();
                //$data = $user->isItAdmin();
                    if($data[0]->role == 'Admin')
                    {
                    return $next($request);
                    }
                    return redirect('home')->with('error',"You don't have admin access.");
    } return redirect('login');
    }
}
