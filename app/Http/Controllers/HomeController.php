<?php

namespace App\Http\Controllers;

use App\AccountDomain;
use Illuminate\Http\Request;

class HomeController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        return view('domain.homepage.homepage');
    }

    public function create() {
        return view('domain.create.create');
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     *
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function createAccount(Request $request) {
        $this->validate($request,[
            'account_domain' => 'required',
        ]);

        $protocol = stripos($_SERVER['SERVER_PROTOCOL'],'https') === true ? 'https://' : 'http://';
        $acount_domain = $request->input('account_domain');
        $acount_domain_url = str_replace(' ', '', strtolower($acount_domain));

        $response = AccountDomain::where('account_domain', $acount_domain)->first();

        if (!empty($response)) {
            return back()->with('warning','El espacio que deseas ya esta registrado.');
        }
        else {
            $account = new AccountDomain();
            $account->account_domain = $acount_domain_url;
            $account->name = $acount_domain;
            $account->user_admin = "luisnic20@gmail.com";

            if ($account->save()) {
                return redirect()->to($protocol.$acount_domain_url.'.'.env('MAIN_DOMAIN').'/create/account');
            }
        }
    }

    public function signin() {
        return view('domain.signin.signin');
    }

    public function signinVerify(Request $request) {
        $this->validate($request,[
            'account_domain' => 'required',
        ]);

        $protocol = stripos($_SERVER['SERVER_PROTOCOL'],'https') === true ? 'https://' : 'http://';
        $acount_domain = $request->input('account_domain');

        $response = AccountDomain::where('account_domain', $acount_domain)->first();

        if (!empty($response)) {
            return redirect()->to($protocol.$acount_domain.'.'.env('MAIN_DOMAIN'));
        }
        else {
            return back()->with('error','No hemos podido encontrar tu espacio de Homeflows. Por favor intentelo de nuevo.');
        }
    }
}
