<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\View\Models\AuthLayoutViewModel;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ForgottenPasswordController extends Controller
{
    public function __invoke(Request $request): View
    {
        $model = new AuthLayoutViewModel(
            config('app.name'),
            'Je wachtwoord vergeten? Vraag hier een nieuw wachtwoord aan.',
        );

        return view('pages.auth.forgotten-password', compact('model'));
    }
}
