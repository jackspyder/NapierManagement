<?php

namespace App\Models;

use Laravel\Socialite\Contracts\User as ProviderUser;

class SocialAccountsService
{
    public function findOrCreate(ProviderUser $providerUser, $provider)
    {
        //check if provider and id combo exists
        $account = LinkedSocialAccount::where('provider_name', $provider)
            ->where('provider_id', $providerUser->getId())
            ->first();

        //if account found, return associate user.
        if ($account) {
            return $account->user;
        } else {

            //if provider not found, attempt to match provider email to existing user email.
            $user = User::where('email', $providerUser->getEmail())->first();

            //if not matched, create a new user.
            if (!$user) {
                $user = User::create([
                    'email' => $providerUser->getEmail(),
                    'name' => $providerUser->getName(),
                    'active_avatar' => $providerUser->getAvatar(),
                ]);
            }

            //if existing user email found, associate provider.
            $user->accounts()->create([
                'provider_id' => $providerUser->getId(),
                'provider_avatar' => $providerUser->getAvatar(),
                'provider_name' => $provider,
                'active_avatar' => $providerUser->getAvatar()
            ]);

            return $user;

        }
    }
}