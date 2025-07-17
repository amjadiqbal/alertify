<?php

/**
  * @author Amjad Iqbal
  * @author Amjad Iqbal <contact@amjadiqbal.me>
  */
  
namespace AmjadIqbal\Alertify\Core;

use Closure;

class Alertify
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
        if(!empty($request->session()->all())){
            $data = array();
            foreach( config('alertify.middleware') as $key => $value ){
                if($request->session()->get($key)){
                    $data[$key] = $request->session()->get($key);
                }
            }
            alert($data);
        }

        return $next($request); 
    }


}
