<?php

namespace App\Http\Middleware;

use Closure;
use App\UserRoles;
use App\UserMenu;
use App\UserMenuActions;
use Auth;

class menuPermission
{
    public function handle($request, Closure $next)
    {   $routeName = \Request::route()->getName();
        $userMenus = UserMenu::where('menuLink',$routeName)->first();
        $userMenuAction = UserMenuActions::where('actionLink',$routeName)->first();
        $roleId =  Auth::user()->role;
        $userRoles = UserRoles::where('id',$roleId)->first();
        $rolePermission = explode(',', $userRoles->permission);
        $actionLinkPermission = explode(',', $userRoles->actionPermission);
        if($userMenus != null){
            if (in_array($userMenus->id, @$rolePermission)) {
                return $next($request);
            }else{
                return redirect(route('user.noPermission'));
            }
        }elseif($userMenuAction != null){
            if (in_array($userMenuAction->id, @$actionLinkPermission)) {
                return $next($request);
            }else{
                return redirect(route('user.noPermission'));
            }
        }else{
            return $next($request);
        }
    }
}
