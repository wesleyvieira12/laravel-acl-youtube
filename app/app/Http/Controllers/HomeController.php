<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Jobs\EnvioEmailJob;
use Exception;
use Illuminate\Http\Request;
use Symfony\Component\Process\ExecutableFinder;

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
        $roles = Role::all();
        return view('home',compact('roles'));
    }

    public function enviaEmail()
    {
        try{

        
            EnvioEmailJob::dispatch()->onQueue('default')->delay(now()->addMinutes(1));
        } catch (Exception $e) {
            dd($e);
        }
        
    }
    
}
