<?php declare(strict_types=1);

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (!$this->hasProfile(auth()->user())) {
            return redirect(route('customers.create'))
            ->with('warning', 'Conclua seu cadastro por favor');
        }

        return view('home');
    }
}
