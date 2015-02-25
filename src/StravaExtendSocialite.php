<?php
namespace SocialiteProviders\Strava;

use SocialiteProviders\Manager\SocialiteWasCalled;

class StravaExtendSocialite
{
    /**
     * Execute the provider.
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite(
            'strava', __NAMESPACE__.'\Provider'
        );
    }
}
