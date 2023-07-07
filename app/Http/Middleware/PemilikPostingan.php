<?php

namespace App\Http\Middleware;

use App\Models\Post;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PemilikPostingan
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $currentuser = Auth::user();
        $post = Post::findOrFail($request->id);
        if($post->author != $currentuser->id) {
            return response()->json(['message' => 'data not found']);
        }

        //return response()->json($currentuser->id);
        return $next($request);
    }
}
