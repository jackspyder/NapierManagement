<?php

namespace App\Http\Controllers\Auth;


use App\Models\SocialAccountsService;
use Socialite;
use App\Http\Controllers\Controller;

class SocialAccountController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information
     *
     * @return Response
     */
    public function handleProviderCallback(SocialAccountsService $accountService, $provider)
    {

        try {
            $user = Socialite::with($provider)->user();
        } catch (\Exception $e) {
            return redirect('/login');
        }

        $authUser = $accountService->findOrCreate(
            $user,
            $provider
        );

        auth()->login($authUser, true);

        return redirect()->to('/admin');
    }
}
