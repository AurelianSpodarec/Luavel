<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class GeneralController extends Controller
{
    public function show()
    {

    }
    public function edit(User $user)
    {
        return view('account.general.edit', [
            'user' => $user
        ]);
    }

    public function store()
    {

    }

    public function update() {

    }
}
