<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use App\Models\User; // <-- এইটা add করতে হবে
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
{
   $request->validate([
    'name' => ['required','string','max:255'],
    'phone' => ['required','string','max:20','unique:users'],
    'email' => ['required','string','email','max:255','unique:users'], // <-- এখানে User::class বাদ দাও
    'password' => ['required','confirmed', Rules\Password::defaults()],
]);


    $user = User::create([
        'name' => $request->name,
        'phone' => $request->phone,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'role' => 'customer',       // default role
        'location_id' => null,      // manager assignment later
    ]);

    event(new Registered($user));

    Auth::login($user);

    return redirect()->route('home');
}

}
