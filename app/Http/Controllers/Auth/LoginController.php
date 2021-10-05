<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use \Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Visitor;
use App\Models\Biodata;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    protected function authenticated(Request $request, $user)
    {
        if ($user) {
            $biodata = Biodata::query()->where('user_id', $user->id)->first();
            Visitor::create([
                'user_id' => $user->id,
                'last_activity' => Carbon::now(),
                'unit_user' => $biodata->unit,
            ]);
            return redirect()->route('dashboard');
        }

        return redirect('/home');
    }

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    //protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
