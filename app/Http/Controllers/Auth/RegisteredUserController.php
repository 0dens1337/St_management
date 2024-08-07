<?php

namespace App\Http\Controllers\Auth;

use App\Enums\GenderEnum;
use App\Enums\LevelEnum;
use App\Enums\RoleEnum;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterUserRequest;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use function PHPUnit\Framework\isTrue;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        $genders = GenderEnum::list();
        $levels = LevelEnum::list();

        return view('auth.register', compact('genders', 'levels'));
    }

    public function store(RegisterUserRequest $request): RedirectResponse
    {
        $validatedData = $request->validated();
        $validatedData['password'] = Hash::make($validatedData['password']);
        $user = User::create($validatedData);
        auth()->login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
