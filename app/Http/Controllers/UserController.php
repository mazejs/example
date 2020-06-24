<?php

namespace App\Http\Controllers;

use App\User;
use App\Filters\UserFilter;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class UserController extends Controller
{
    public function index(UserFilter $filter)
    {
        if (request()->wantsJson()) {
            return User::filter($filter)->paginate($filter->per_page);
        }

        $breadcrumb = Collection::make([
            [
                'name' => 'index',
                'url' => route('users.index'),
                'title' => 'Users'
            ]
        ])->toJson();

        return view('users.index', compact('breadcrumb'));
    }

    public function show(User $user)
    {
        return $user;
    }
}
