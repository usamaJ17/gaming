<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Spatie\Permission\Models\Role;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        $asset_url = asset('images');
        $selectOptions = [
            'pc' => ['label' => 'PC', 'image' => '<img src="/images/ps.png" alt="PC Icon" class="w-4 h-4 mr-2">'],
            'xbox' => ['label' => 'XBOX', 'image' => '<img src="/images/ps.png" alt="XBOX Icon" class="w-4 h-4 mr-2">'],
            'playstation' => ['label' => 'PLAYSTATION', 'image' => '<img src="/images/ps.png" alt="PlayStation Icon" class="w-4 h-4 mr-2">'],
        ];
        return view('auth.register')->with(compact('selectOptions'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'platform' => $request->platform,
            'password' => Hash::make($request->password),
        ]);
        $user
            ->roles()
            ->attach(Role::where('name', 'user')->first());

        event(new Registered($user));

        Auth::login($user);
        return redirect(RouteServiceProvider::U_HOME);
    }
}
