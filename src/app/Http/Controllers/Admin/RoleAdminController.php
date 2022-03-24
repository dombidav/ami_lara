<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\GuardedController;
use App\Models\Role;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class RoleAdminController extends GuardedController
{

    // Functions to be implemented...

    public function index(): Factory|View|Application|RedirectResponse
    {
        return view('pages.admin.roles.index', ['roles' => Role::all()]);
    }

    public function show(): Factory|View|Application|RedirectResponse
    {
        return true;
    }

    public function edit(Role $role): Factory|View|Application|RedirectResponse
    {
        return view('pages.admin.roles.form', ['role' => $role]);
    }

    public function update(): Factory|View|Application|RedirectResponse
    {
        return true;
    }

    public function delete(): Factory|View|Application|RedirectResponse
    {
        return true;
    }
}
