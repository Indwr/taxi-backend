<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/languages' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'languages.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'languages.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/languages/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'languages.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UMh6Tdu52EIZgw4j',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/telescope/telescope-api/mail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Oupz81iVafvxHKxB',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/telescope/telescope-api/exceptions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SXQSaU93xxCJcFod',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/telescope/telescope-api/dumps' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fIsvA6vM2M96uqdC',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/telescope/telescope-api/logs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ik67XF9bTqnGjJ1Y',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/telescope/telescope-api/notifications' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ndJej2Mfr3FRMea9',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/telescope/telescope-api/jobs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Ca2dV3s6ijil6SFM',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/telescope/telescope-api/batches' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0tJijahFCuWjfBfw',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/telescope/telescope-api/events' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cqJvhnuLV4FDaRfS',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/telescope/telescope-api/gates' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lBsPoTcTUGZdjWvL',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/telescope/telescope-api/cache' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::aEqwVvTGNrcbylda',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/telescope/telescope-api/queries' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::P0VqzobeTMRw4mUS',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/telescope/telescope-api/models' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::doQKhOFfFao3ylfX',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/telescope/telescope-api/requests' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XKCa5gpy2Zn1TGim',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/telescope/telescope-api/views' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zfVYRwpPkoJCJJRH',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/telescope/telescope-api/commands' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xDh0L4RqgzJn0Wyg',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/telescope/telescope-api/schedule' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yvYRqbkw2mVu5Uyk',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/telescope/telescope-api/redis' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::grlzQyauEA2vE8os',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/telescope/telescope-api/client-requests' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::T5cGALNcEayasH05',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/telescope/telescope-api/monitored-tags' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0ROHhg4felEihHCt',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::B55oN5K4UuzPxGW2',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/telescope/telescope-api/monitored-tags/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::L71QYwmRvTEH7R9e',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/telescope/telescope-api/toggle-recording' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RxqGY1qMrtmSUFzP',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/telescope/telescope-api/entries' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Ol0OgknBe6sN3tQD',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/livewire/upload-file' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'livewire.upload-file',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/livewire/livewire.js' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bOwIBFXORTSm62Hr',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/livewire/livewire.js.map' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6C8AfEkaIZXecfXM',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AWU0fdTG90Z39gqJ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user/verify' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DUVAoSWhPXAuy7c0',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user/checkemail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LxXQdlBGxA4r1Y0d',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user/signup' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4vKLfGP9ygEFODd7',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user/register_otp' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9yt3nyJDtTon9G8t',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user/banner' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7UA8Ws4Dj8ZqIH87',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user/oauth/token' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wWvwBWTWOgNVZ9AV',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5YaiFHhLdyfApxHf',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user/checkapi' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Gg2QPKpSLt5272Ez',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user/checkversion' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9g9ZSWc4WgrHrLlB',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user/reset/password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LV4eXr8Jg4EYP8Qd',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user/estimated/fare_without_auth' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4J00siY72zlaJKHv',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user/forgot/password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::t5eqmO2OOilUsOSJ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user/estimated/fare' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mWhl2MJvwqCg7yKx',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user/direction' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hLQi9Qdx5gUl607G',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user/change/password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fVPWyfZXz6XzcNOT',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user/update/location' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::j3PP3rhyUDERadEd',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user/update/language' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EjZlbsANd7bXqQL0',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user/details' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NDXqJLjbqPhBnsgX',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user/update/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::l5iWHguLicbBkUu5',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user/update/details' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hRCmpLblhhzZbzVH',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user/services' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AL3GktMq7XrzcXTc',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user/rate/provider' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::i39QLZ7nPb7fVfrR',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user/send/request' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eFEGJmFvtGSdz3mD',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user/cancel/request' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hoAfYI37avQvgrIo',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user/request/check' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iSV4kAgrJKkYHrmx',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user/show/providers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DQr0RRhjSlq757bL',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user/update/request' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Rt1CVk6QKNSzqaGE',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user/trips' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GmYhkyATuDU5PkUl',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user/upcoming/trips' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eR4UZjFvGZIUkBx1',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user/trip/details' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BKvm9WHExWRR6T4M',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user/upcoming/trip/details' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Lz0CQloKGZAMK3kl',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user/extend/trip' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zBdbWTRpI6PtyMG3',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user/payment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4DrlWgsp6Qotj9WZ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user/payment1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2ePnuSJAdzw4haSV',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user/add/money' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nEO9Q6rDW0OG4t1Z',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user/addmoney' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LQohqRxzBpSfUklK',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user/payment/response' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5MfMtMw6UcqJXwDF',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user/payment/failure' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cQU8FUMWLl6E5Mt1',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user/help' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UxzkLQvCAjb4GWlP',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user/promocodes_list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::h7zmNQidn5D0qHrG',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user/promocodes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8ifSHnM2iPEJTaPO',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user/promocode/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CZGxFN0UTeKjrNqN',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user/card' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'card.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'card.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user/card/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'card.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user/location' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'location.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'location.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user/location/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'location.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user/wallet/passbook' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rr2anOgY8z412n6T',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user/promo/passbook' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vYZA7nDo85zDLjkj',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user/test/push' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FVTUie84kRA4X0JU',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user/chat' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ERonkdaCL0gmNfo8',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user/reasons' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CxhLgz5xNq8rXB7b',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user/dispute-list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PRiEAcI6Xkjex3cU',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user/dispute' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WtohtAXogMKVIpr0',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user/drop-item' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MhwSPKv0349fQuUt',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user/payment-log' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZvaOcNH5yPyuqZRu',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user/verify-credentials' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tDutYL5x96opiYQr',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user/me' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XCy15tIdFb21uJPh',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/provider/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Ie70jUNZrmJVQkvq',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/provider/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MsBknJ8c50vl44px',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/provider/oauth/token' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oLYoIBqMHgwqXYT8',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/provider/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rH4us1Fbuc9Z6dfp',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/provider/verify' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::chplLnGFGGKuelZz',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/provider/auth/facebook' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Nf2ykNR1rXL1rvix',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/provider/auth/google' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jHgrxjPq9StFezDU',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/provider/forgot/password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZmgiRQBYorssPhnV',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/provider/reset/password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bDLG8RrOHLFoNUIg',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/provider/refresh/token' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CZEqW13Od1rc5fa5',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/provider/update-location' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eBppLGa3vKdMcr80',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/provider/get-location' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7x55ONX0pDLAtihh',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/provider/remove-location' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AkMO4Spfm6Txs7C9',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/provider/addmoney' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TbJ1CNUclbeUZnxP',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/provider/payment-log' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::06MPxfmKvBTwxqKq',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/provider/direction' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DeceILTqCBM6SPww',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/provider/braintree/token' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eInsvzbco7u9URES',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/provider/payu/response' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WZpwVwIuPt9fbQJb',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/provider/payu/failure' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DCTgqNeeDeUk8vVc',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/provider/payment/success' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZcfMPDKlCvJHP2xM',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/provider/payment/failure' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Dgv3xTInapzEg57Z',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/provider/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PGWoryxSeMJAUnmw',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::v2kHrcf9H1RfsMlW',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/provider/profile/password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OLY2gZIr6jvHXy9U',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/provider/profile/location' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hQVKfDWPPTr5gM00',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/provider/profile/language' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Vea89MQDpXKqD1RJ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/provider/profile/available' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::anCLyusaS1t1Kc4r',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/provider/profile/documents' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BR32fQ3X43lPmkCN',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/provider/profile/documents/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rnNZL7rKucWIORIl',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/provider/profile/details' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7sijBPnFx29FUncw',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/provider/providercard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'providercard.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'providercard.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/provider/providercard/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'providercard.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/provider/chat' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::c19E5QKRekj3XVxe',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/provider/target' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xmdQvRlWhbThvtAN',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/provider/trip' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'trip.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'trip.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/provider/trip/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'trip.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/provider/cancel' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::y3ZdVrRnnhXCeBI9',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/provider/summary' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sDtnqINPaKjhuMpc',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/provider/help' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6e5IjN7lvx2M10xv',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/provider/wallettransaction' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::e4dKYM8AqdtUp7i6',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/provider/wallettransaction/details' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1NBxoh2i8kPGCa8P',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/provider/transferlist' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XWCaKnE3KWVVMSt8',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/provider/requestamount' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HzDu89zzolvWFfjD',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/provider/requestcancel' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WxLof0g0e1Jm3H6V',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/provider/waiting' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::aks1z2Gm36usjn0K',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/provider/requests/rides' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OgkEdvRXdzSAxA7m',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/provider/requests/instant/ride' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qciLrzuyVkPoPENr',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/provider/requests/upcoming' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Oz7lLBpSxlI6j3OM',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/provider/requests/history' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PDQ4LEehViyxtf1b',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/provider/requests/history/details' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7e3GTRQWSeSRFlsV',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/provider/requests/upcoming/details' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::prpEdPCg4oAg5MdM',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/provider/test/push' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bNQQyacWGZOx1Fg3',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/provider/reasons' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::K6mMhMlcV8lQkOw4',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/provider/dispute-list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::77QOBo4wvrpgAfUG',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/provider/dispute' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LyjbVPGPLKTjBARf',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/provider/drop-item' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cWHQYyyE6ejFMPYz',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/provider/verify-credentials' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XrX7jB53QFSEvMTt',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'home',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/faq' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'faq',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/contactUs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'contactUs',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/tnc' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tnc',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/privacyPolicy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'privacy',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.loginForm',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.login',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.logout',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.home',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/translation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.translations',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/telescope' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.telescope',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/dispatcher' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.dispatcherDashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/demoo' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.generated::dqfFiv4XcMk0fb9A',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/map' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.map.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/heatMap' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.map.heatMap',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/otherSettings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.otherSettings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/pushTest' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.generated::myMER1Y2wc2qfZ6M',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/requestHistory' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.request.history',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/generalConfig' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.generalConfig',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/saveSocialLinks' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.storeSocialLinks',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/saveSocialConfig' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.storeSocialConfig',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/saveSearch' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.storeSearch',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/saveApi' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.storeApi',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/saveEmail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.storeEmail',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/storePushNotification' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.storePushNotification',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/saveOther' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.storeOthers',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/frontend' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.frontend.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/frontend/top' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.frontend.headSetting',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/frontend/steps' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.frontend.steps',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/frontend/appDisplay' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.frontend.appDisplay',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/tnc' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.tnc',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/tnc' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.saveTnc',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/privacy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.privacy',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/privacyPolicy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.savePrivacy',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/profileSettings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.profileSettings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/changePassword' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.changePassword',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/updateProfile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.updateProfile',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/statements/provider' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.statement.provider',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/statements/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.statement.user',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/statements/agent' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.statement.agent',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/payment/history' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.payment.history',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/payment/setting' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.payment.setting',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.payment.saveSetting',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/payment/methodSetting' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.payment.savePaymentMethodSetting',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settlements' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settlement.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settlements/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settlement.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settlements/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settlement.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/transactions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settlement.allTransaction',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/ratings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.ratings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/getAdminCredits' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.getAdminCredits',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/getUserRequestStatus' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.getUserRequestStatus',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/dispute' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.dispute.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/user/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/faq' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.faq.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.faq.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/faq/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.faq.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.admin.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.admin.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.admin.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/provider' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.provider.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.provider.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/provider/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.provider.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/agent' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.agent.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.agent.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/agent/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.agent.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/role' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.role.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.role.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/role/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.role.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/geoFencing' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.geoFencing.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.geoFencing.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/geoFencing/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.geoFencing.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/document' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.document.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.document.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/document/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.document.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/permission' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.permission.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.permission.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/permission/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.permission.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/disputeType' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.disputeType.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.disputeType.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/disputeType/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.disputeType.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/serviceType' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.serviceType.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.serviceType.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/serviceType/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.serviceType.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/cancelReason' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.cancelReason.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.cancelReason.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/cancelReason/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.cancelReason.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/banner' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.banner.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.banner.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/banner/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.banner.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/peakHour' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.peakHour.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.peakHour.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/peakHour/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.peakHour.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/notification' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.notification.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.notification.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/notification/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.notification.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/promocode' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.promocode.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.promocode.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/promocode/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.promocode.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/customPush' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customPush.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customPush.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/customPush/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customPush.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/providerSettlement' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.providerSettlement.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/agent/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'agent.loginForm',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'agent.login',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/agent/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'agent.registrationForm',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'agent.register',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/agent/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'agent.logout',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/agent/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'agent.home',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/agent/statement' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'agent.ride.statement',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/agent/statement/provider' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'agent.ride.statement.provider',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/agent/map' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'agent.map.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/agent/map/ajax' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'agent.map.ajax',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/agent/providersRating' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'agent.provider_ratings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/agent/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'agent.profile',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'agent.profile.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/agent/wallet' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'agent.wallet',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/agent/transfer' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'agent.transfer',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/agent/transfer/send' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'agent.requestAmount',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/agent/transfer/cancel' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'agent.cancel',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/agent/password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'agent.password.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/agent/requests' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'agent.requests.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/agent/scheduled' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'agent.requests.scheduled',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/agent/provider' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'agent.provider.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'agent.provider.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/agent/provider/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'agent.provider.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/l(?|anguages/([^/]++)(?|/translations(?|(*:48)|/create(*:62)|(*:69))|(*:77))|ivewire/(?|message/([^/]++)(*:112)|preview\\-file/([^/]++)(*:142)))|/telescope(?|/telescope\\-api/(?|m(?|ail/([^/]++)(?|(*:203)|/(?|preview(*:222)|download(*:238)))|odels/([^/]++)(*:262))|e(?|xceptions/([^/]++)(?|(*:296))|vents/([^/]++)(*:319))|logs/([^/]++)(*:341)|notifications/([^/]++)(*:371)|jobs/([^/]++)(*:392)|batches/([^/]++)(*:416)|gates/([^/]++)(*:438)|c(?|ache/([^/]++)(*:463)|ommands/([^/]++)(*:487)|lient\\-requests/([^/]++)(*:519))|queries/([^/]++)(*:544)|re(?|quests/([^/]++)(*:572)|dis/([^/]++)(*:592))|views/([^/]++)(*:615)|schedule/([^/]++)(*:640))|(?:/((?:.*)))?(*:663))|/a(?|pi/(?|user/(?|card/([^/]++)(?|(*:707)|/edit(*:720)|(*:728))|location/([^/]++)(?|(*:757)|/edit(*:770)|(*:778))|notifications/([^/]++)(*:809)|drop\\-item/([^/]++)(*:836)|save\\-subscription/([^/]++)(*:871))|provider/(?|providercard/([^/]++)(?|(*:916)|/edit(*:929)|(*:937))|trip/([^/]++)(?|(*:962)|/(?|edit(*:978)|rate(*:990)|message(*:1005)|calculate(*:1023))|(*:1033)|(*:1042))|notifications/([^/]++)(*:1074)))|dmin/(?|r(?|e(?|questDetail/([^/]++)(*:1121)|jectDocument/([^/]++)(*:1151))|ole/([^/]++)(?|(*:1176)|/edit(*:1190)|(*:1199)))|language/([^/]++)(*:1227)|s(?|tatements/overall(?:/([^/]++)(?:/([^/]++))?)?(*:1285)|erviceType/([^/]++)(?|(*:1316)|/(?|edit(*:1333)|subServices(*:1353))|(*:1363)))|a(?|cceptDocument/([^/]++)(*:1400)|pproveProvider/([^/]++)(*:1432)|dmin/([^/]++)(?|(*:1457)|/edit(*:1471)|(*:1480))|gent/([^/]++)(?|(*:1506)|/edit(*:1520)|(*:1529)))|b(?|lockProvider/([^/]++)(*:1565)|anner/([^/]++)(?|(*:1591)|/edit(*:1605)|(*:1614)))|d(?|ispute(?|/([^/]++)(?|/edit(*:1655)|(*:1664))|Type/([^/]++)(?|(*:1690)|/edit(*:1704)|(*:1713)))|ocument/([^/]++)(?|(*:1743)|/edit(*:1757)|(*:1766)))|user/([^/]++)(?|(*:1793)|/edit(*:1807)|(*:1816))|faq/([^/]++)(?|(*:1841)|/edit(*:1855)|(*:1864))|p(?|ro(?|vider(?|/([^/]++)(?|(*:1903)|/edit(*:1917)|(*:1926))|Settlement/([^/]++)(?|(*:1958)|/edit(*:1972)|(*:1981)))|mocode/([^/]++)(?|(*:2010)|/edit(*:2024)|(*:2033)))|e(?|rmission/([^/]++)(?|(*:2068)|/edit(*:2082)|(*:2091))|akHour/([^/]++)(?|(*:2119)|/edit(*:2133)|(*:2142))))|geoFencing/([^/]++)(?|(*:2176)|/edit(*:2190)|(*:2199))|c(?|ancelReason/([^/]++)(?|(*:2236)|/edit(*:2250)|(*:2259))|ustomPush/([^/]++)(?|(*:2290)|/edit(*:2304)|(*:2313)))|notification/([^/]++)(?|(*:2348)|/edit(*:2362)|(*:2371)))|gent/(?|language/([^/]++)(*:2407)|showUserRequest/([^/]++)(*:2440)|requests/([^/]++)(?|(*:2469)))))/?$}sDu',
    ),
    3 => 
    array (
      48 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'languages.translations.index',
          ),
          1 => 
          array (
            0 => 'language',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      62 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'languages.translations.create',
          ),
          1 => 
          array (
            0 => 'language',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      69 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'languages.translations.store',
          ),
          1 => 
          array (
            0 => 'language',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      77 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'languages.translations.update',
          ),
          1 => 
          array (
            0 => 'language',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      112 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'livewire.message',
          ),
          1 => 
          array (
            0 => 'name',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      142 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'livewire.preview-file',
          ),
          1 => 
          array (
            0 => 'filename',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      203 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YSCgtPzrpByHJU5J',
          ),
          1 => 
          array (
            0 => 'telescopeEntryId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      222 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vj0SU8KSbl3ajuqC',
          ),
          1 => 
          array (
            0 => 'telescopeEntryId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      238 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::q0W7cQton3tiPYuB',
          ),
          1 => 
          array (
            0 => 'telescopeEntryId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      262 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2iVKbNbuAuUO2wNd',
          ),
          1 => 
          array (
            0 => 'telescopeEntryId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      296 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::F70k2SXv2Nk3Pn3E',
          ),
          1 => 
          array (
            0 => 'telescopeEntryId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OhLlClZezuhX2QC5',
          ),
          1 => 
          array (
            0 => 'telescopeEntryId',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      319 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fG1ql25KIOP9BDgo',
          ),
          1 => 
          array (
            0 => 'telescopeEntryId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      341 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::maNa8MWJQc6PyNE5',
          ),
          1 => 
          array (
            0 => 'telescopeEntryId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      371 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fkiNC95Bvh5lpci4',
          ),
          1 => 
          array (
            0 => 'telescopeEntryId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      392 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pjWfFe8LkWaG7xhm',
          ),
          1 => 
          array (
            0 => 'telescopeEntryId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      416 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::L2bQ9R2aSTscdZcz',
          ),
          1 => 
          array (
            0 => 'telescopeEntryId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      438 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TqrOLaRP9r4ATujN',
          ),
          1 => 
          array (
            0 => 'telescopeEntryId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      463 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JACuD5aXYZjuPRcb',
          ),
          1 => 
          array (
            0 => 'telescopeEntryId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      487 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cs90Nr716vtbRY9z',
          ),
          1 => 
          array (
            0 => 'telescopeEntryId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      519 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pHeofOeDPZiwtu2i',
          ),
          1 => 
          array (
            0 => 'telescopeEntryId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      544 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::auIMOQirjpyYvUI2',
          ),
          1 => 
          array (
            0 => 'telescopeEntryId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      572 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bYimanY7qYiJ4bRQ',
          ),
          1 => 
          array (
            0 => 'telescopeEntryId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      592 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HF9VGzBlw95pPvD0',
          ),
          1 => 
          array (
            0 => 'telescopeEntryId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      615 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::U5rpVs1HlFyTuMci',
          ),
          1 => 
          array (
            0 => 'telescopeEntryId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      640 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GIZa6PTPeWJywrph',
          ),
          1 => 
          array (
            0 => 'telescopeEntryId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      663 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'telescope',
            'view' => NULL,
          ),
          1 => 
          array (
            0 => 'view',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      707 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'card.show',
          ),
          1 => 
          array (
            0 => 'card',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      720 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'card.edit',
          ),
          1 => 
          array (
            0 => 'card',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      728 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'card.update',
          ),
          1 => 
          array (
            0 => 'card',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'card.destroy',
          ),
          1 => 
          array (
            0 => 'card',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      757 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'location.show',
          ),
          1 => 
          array (
            0 => 'location',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      770 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'location.edit',
          ),
          1 => 
          array (
            0 => 'location',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      778 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'location.update',
          ),
          1 => 
          array (
            0 => 'location',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'location.destroy',
          ),
          1 => 
          array (
            0 => 'location',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      809 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7vtubM6We4qraW7L',
          ),
          1 => 
          array (
            0 => 'type',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      836 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1YRNzj4BGh80HMFq',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      871 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6sPwN44rYdfT2S3X',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      916 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'providercard.show',
          ),
          1 => 
          array (
            0 => 'providercard',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      929 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'providercard.edit',
          ),
          1 => 
          array (
            0 => 'providercard',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      937 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'providercard.update',
          ),
          1 => 
          array (
            0 => 'providercard',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'providercard.destroy',
          ),
          1 => 
          array (
            0 => 'providercard',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      962 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'trip.show',
          ),
          1 => 
          array (
            0 => 'trip',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      978 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'trip.edit',
          ),
          1 => 
          array (
            0 => 'trip',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      990 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7UNfIXUnsYb4RFMd',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1005 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Uxms1qtm3HZILTSk',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1023 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zT23qFo6hq814SCv',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1033 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'trip.update',
          ),
          1 => 
          array (
            0 => 'trip',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'trip.destroy',
          ),
          1 => 
          array (
            0 => 'trip',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1042 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fRXGezD6nihlkmA1',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1074 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PJbd03D8RbdpLGiu',
          ),
          1 => 
          array (
            0 => 'type',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1121 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.request.detail',
          ),
          1 => 
          array (
            0 => 'userRequest',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1151 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.rejectProviderDocument',
          ),
          1 => 
          array (
            0 => 'providerDocument',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1176 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.role.show',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1190 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.role.edit',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1199 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.role.update',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.role.destroy',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1227 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.updateLanguage',
          ),
          1 => 
          array (
            0 => 'lang',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1285 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.statement.overall',
            'for' => NULL,
            'id' => NULL,
          ),
          1 => 
          array (
            0 => 'for',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1316 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.serviceType.show',
          ),
          1 => 
          array (
            0 => 'serviceType',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1333 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.serviceType.edit',
          ),
          1 => 
          array (
            0 => 'serviceType',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1353 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.subServices',
          ),
          1 => 
          array (
            0 => 'serviceType',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1363 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.serviceType.update',
          ),
          1 => 
          array (
            0 => 'serviceType',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.serviceType.destroy',
          ),
          1 => 
          array (
            0 => 'serviceType',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1400 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.acceptProviderDocument',
          ),
          1 => 
          array (
            0 => 'providerDocument',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1432 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.provider.approveProvider',
          ),
          1 => 
          array (
            0 => 'provider',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1457 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.admin.show',
          ),
          1 => 
          array (
            0 => 'admin',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1471 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.admin.edit',
          ),
          1 => 
          array (
            0 => 'admin',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1480 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.admin.update',
          ),
          1 => 
          array (
            0 => 'admin',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.admin.destroy',
          ),
          1 => 
          array (
            0 => 'admin',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1506 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.agent.show',
          ),
          1 => 
          array (
            0 => 'agent',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1520 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.agent.edit',
          ),
          1 => 
          array (
            0 => 'agent',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1529 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.agent.update',
          ),
          1 => 
          array (
            0 => 'agent',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.agent.destroy',
          ),
          1 => 
          array (
            0 => 'agent',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1565 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.provider.blockProvider',
          ),
          1 => 
          array (
            0 => 'provider',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1591 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.banner.show',
          ),
          1 => 
          array (
            0 => 'banner',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1605 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.banner.edit',
          ),
          1 => 
          array (
            0 => 'banner',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1614 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.banner.update',
          ),
          1 => 
          array (
            0 => 'banner',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.banner.destroy',
          ),
          1 => 
          array (
            0 => 'banner',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1655 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.dispute.edit',
          ),
          1 => 
          array (
            0 => 'dispute',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1664 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.dispute.update',
          ),
          1 => 
          array (
            0 => 'dispute',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1690 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.disputeType.show',
          ),
          1 => 
          array (
            0 => 'disputeType',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1704 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.disputeType.edit',
          ),
          1 => 
          array (
            0 => 'disputeType',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1713 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.disputeType.update',
          ),
          1 => 
          array (
            0 => 'disputeType',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.disputeType.destroy',
          ),
          1 => 
          array (
            0 => 'disputeType',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1743 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.document.show',
          ),
          1 => 
          array (
            0 => 'document',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1757 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.document.edit',
          ),
          1 => 
          array (
            0 => 'document',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1766 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.document.update',
          ),
          1 => 
          array (
            0 => 'document',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.document.destroy',
          ),
          1 => 
          array (
            0 => 'document',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1793 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.show',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1807 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.edit',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1816 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.update',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.destroy',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1841 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.faq.show',
          ),
          1 => 
          array (
            0 => 'faq',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1855 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.faq.edit',
          ),
          1 => 
          array (
            0 => 'faq',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1864 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.faq.update',
          ),
          1 => 
          array (
            0 => 'faq',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.faq.destroy',
          ),
          1 => 
          array (
            0 => 'faq',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1903 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.provider.show',
          ),
          1 => 
          array (
            0 => 'provider',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1917 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.provider.edit',
          ),
          1 => 
          array (
            0 => 'provider',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1926 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.provider.update',
          ),
          1 => 
          array (
            0 => 'provider',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.provider.destroy',
          ),
          1 => 
          array (
            0 => 'provider',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1958 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.providerSettlement.show',
          ),
          1 => 
          array (
            0 => 'providerSettlement',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1972 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.providerSettlement.edit',
          ),
          1 => 
          array (
            0 => 'providerSettlement',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1981 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.providerSettlement.update',
          ),
          1 => 
          array (
            0 => 'providerSettlement',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.providerSettlement.destroy',
          ),
          1 => 
          array (
            0 => 'providerSettlement',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2010 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.promocode.show',
          ),
          1 => 
          array (
            0 => 'promocode',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2024 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.promocode.edit',
          ),
          1 => 
          array (
            0 => 'promocode',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2033 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.promocode.update',
          ),
          1 => 
          array (
            0 => 'promocode',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.promocode.destroy',
          ),
          1 => 
          array (
            0 => 'promocode',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2068 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.permission.show',
          ),
          1 => 
          array (
            0 => 'permission',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2082 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.permission.edit',
          ),
          1 => 
          array (
            0 => 'permission',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2091 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.permission.update',
          ),
          1 => 
          array (
            0 => 'permission',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.permission.destroy',
          ),
          1 => 
          array (
            0 => 'permission',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2119 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.peakHour.show',
          ),
          1 => 
          array (
            0 => 'peakHour',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2133 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.peakHour.edit',
          ),
          1 => 
          array (
            0 => 'peakHour',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2142 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.peakHour.update',
          ),
          1 => 
          array (
            0 => 'peakHour',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.peakHour.destroy',
          ),
          1 => 
          array (
            0 => 'peakHour',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2176 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.geoFencing.show',
          ),
          1 => 
          array (
            0 => 'geoFencing',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2190 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.geoFencing.edit',
          ),
          1 => 
          array (
            0 => 'geoFencing',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2199 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.geoFencing.update',
          ),
          1 => 
          array (
            0 => 'geoFencing',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.geoFencing.destroy',
          ),
          1 => 
          array (
            0 => 'geoFencing',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2236 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.cancelReason.show',
          ),
          1 => 
          array (
            0 => 'cancelReason',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2250 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.cancelReason.edit',
          ),
          1 => 
          array (
            0 => 'cancelReason',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2259 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.cancelReason.update',
          ),
          1 => 
          array (
            0 => 'cancelReason',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.cancelReason.destroy',
          ),
          1 => 
          array (
            0 => 'cancelReason',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2290 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customPush.show',
          ),
          1 => 
          array (
            0 => 'customPush',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2304 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customPush.edit',
          ),
          1 => 
          array (
            0 => 'customPush',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2313 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customPush.update',
          ),
          1 => 
          array (
            0 => 'customPush',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customPush.destroy',
          ),
          1 => 
          array (
            0 => 'customPush',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2348 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.notification.show',
          ),
          1 => 
          array (
            0 => 'notification',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2362 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.notification.edit',
          ),
          1 => 
          array (
            0 => 'notification',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2371 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.notification.update',
          ),
          1 => 
          array (
            0 => 'notification',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.notification.destroy',
          ),
          1 => 
          array (
            0 => 'notification',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2407 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'agent.updateLanguage',
          ),
          1 => 
          array (
            0 => 'lang',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2440 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'agent.showUserRequest',
          ),
          1 => 
          array (
            0 => 'userRequest',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2469 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'agent.requests.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'agent.requests.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'languages.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'languages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'JoeDixon\\Translation\\Http\\Controllers\\LanguageController@index',
        'controller' => 'JoeDixon\\Translation\\Http\\Controllers\\LanguageController@index',
        'namespace' => 'JoeDixon\\Translation\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'languages.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'languages.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'languages/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'JoeDixon\\Translation\\Http\\Controllers\\LanguageController@create',
        'controller' => 'JoeDixon\\Translation\\Http\\Controllers\\LanguageController@create',
        'namespace' => 'JoeDixon\\Translation\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'languages.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'languages.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'languages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'JoeDixon\\Translation\\Http\\Controllers\\LanguageController@store',
        'controller' => 'JoeDixon\\Translation\\Http\\Controllers\\LanguageController@store',
        'namespace' => 'JoeDixon\\Translation\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'languages.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'languages.translations.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'languages/{language}/translations',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'JoeDixon\\Translation\\Http\\Controllers\\LanguageTranslationController@index',
        'controller' => 'JoeDixon\\Translation\\Http\\Controllers\\LanguageTranslationController@index',
        'namespace' => 'JoeDixon\\Translation\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'languages.translations.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'languages.translations.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'languages/{language}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'JoeDixon\\Translation\\Http\\Controllers\\LanguageTranslationController@update',
        'controller' => 'JoeDixon\\Translation\\Http\\Controllers\\LanguageTranslationController@update',
        'namespace' => 'JoeDixon\\Translation\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'languages.translations.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'languages.translations.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'languages/{language}/translations/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'JoeDixon\\Translation\\Http\\Controllers\\LanguageTranslationController@create',
        'controller' => 'JoeDixon\\Translation\\Http\\Controllers\\LanguageTranslationController@create',
        'namespace' => 'JoeDixon\\Translation\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'languages.translations.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'languages.translations.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'languages/{language}/translations',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'JoeDixon\\Translation\\Http\\Controllers\\LanguageTranslationController@store',
        'controller' => 'JoeDixon\\Translation\\Http\\Controllers\\LanguageTranslationController@store',
        'namespace' => 'JoeDixon\\Translation\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'languages.translations.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::UMh6Tdu52EIZgw4j' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' => 
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'generated::UMh6Tdu52EIZgw4j',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Oupz81iVafvxHKxB' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'telescope/telescope-api/mail',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\MailController@index',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\MailController@index',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::Oupz81iVafvxHKxB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::YSCgtPzrpByHJU5J' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'telescope/telescope-api/mail/{telescopeEntryId}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\MailController@show',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\MailController@show',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::YSCgtPzrpByHJU5J',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::vj0SU8KSbl3ajuqC' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'telescope/telescope-api/mail/{telescopeEntryId}/preview',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\MailHtmlController@show',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\MailHtmlController@show',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::vj0SU8KSbl3ajuqC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::q0W7cQton3tiPYuB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'telescope/telescope-api/mail/{telescopeEntryId}/download',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\MailEmlController@show',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\MailEmlController@show',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::q0W7cQton3tiPYuB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::SXQSaU93xxCJcFod' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'telescope/telescope-api/exceptions',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\ExceptionController@index',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\ExceptionController@index',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::SXQSaU93xxCJcFod',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::F70k2SXv2Nk3Pn3E' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'telescope/telescope-api/exceptions/{telescopeEntryId}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\ExceptionController@show',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\ExceptionController@show',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::F70k2SXv2Nk3Pn3E',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::OhLlClZezuhX2QC5' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'telescope/telescope-api/exceptions/{telescopeEntryId}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\ExceptionController@update',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\ExceptionController@update',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::OhLlClZezuhX2QC5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::fIsvA6vM2M96uqdC' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'telescope/telescope-api/dumps',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\DumpController@index',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\DumpController@index',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::fIsvA6vM2M96uqdC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ik67XF9bTqnGjJ1Y' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'telescope/telescope-api/logs',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\LogController@index',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\LogController@index',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::ik67XF9bTqnGjJ1Y',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::maNa8MWJQc6PyNE5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'telescope/telescope-api/logs/{telescopeEntryId}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\LogController@show',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\LogController@show',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::maNa8MWJQc6PyNE5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ndJej2Mfr3FRMea9' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'telescope/telescope-api/notifications',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\NotificationsController@index',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\NotificationsController@index',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::ndJej2Mfr3FRMea9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::fkiNC95Bvh5lpci4' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'telescope/telescope-api/notifications/{telescopeEntryId}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\NotificationsController@show',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\NotificationsController@show',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::fkiNC95Bvh5lpci4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Ca2dV3s6ijil6SFM' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'telescope/telescope-api/jobs',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\QueueController@index',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\QueueController@index',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::Ca2dV3s6ijil6SFM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::pjWfFe8LkWaG7xhm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'telescope/telescope-api/jobs/{telescopeEntryId}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\QueueController@show',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\QueueController@show',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::pjWfFe8LkWaG7xhm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::0tJijahFCuWjfBfw' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'telescope/telescope-api/batches',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\QueueBatchesController@index',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\QueueBatchesController@index',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::0tJijahFCuWjfBfw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::L2bQ9R2aSTscdZcz' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'telescope/telescope-api/batches/{telescopeEntryId}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\QueueBatchesController@show',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\QueueBatchesController@show',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::L2bQ9R2aSTscdZcz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::cqJvhnuLV4FDaRfS' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'telescope/telescope-api/events',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\EventsController@index',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\EventsController@index',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::cqJvhnuLV4FDaRfS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::fG1ql25KIOP9BDgo' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'telescope/telescope-api/events/{telescopeEntryId}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\EventsController@show',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\EventsController@show',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::fG1ql25KIOP9BDgo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::lBsPoTcTUGZdjWvL' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'telescope/telescope-api/gates',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\GatesController@index',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\GatesController@index',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::lBsPoTcTUGZdjWvL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::TqrOLaRP9r4ATujN' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'telescope/telescope-api/gates/{telescopeEntryId}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\GatesController@show',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\GatesController@show',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::TqrOLaRP9r4ATujN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::aEqwVvTGNrcbylda' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'telescope/telescope-api/cache',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\CacheController@index',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\CacheController@index',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::aEqwVvTGNrcbylda',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::JACuD5aXYZjuPRcb' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'telescope/telescope-api/cache/{telescopeEntryId}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\CacheController@show',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\CacheController@show',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::JACuD5aXYZjuPRcb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::P0VqzobeTMRw4mUS' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'telescope/telescope-api/queries',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\QueriesController@index',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\QueriesController@index',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::P0VqzobeTMRw4mUS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::auIMOQirjpyYvUI2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'telescope/telescope-api/queries/{telescopeEntryId}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\QueriesController@show',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\QueriesController@show',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::auIMOQirjpyYvUI2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::doQKhOFfFao3ylfX' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'telescope/telescope-api/models',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\ModelsController@index',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\ModelsController@index',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::doQKhOFfFao3ylfX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::2iVKbNbuAuUO2wNd' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'telescope/telescope-api/models/{telescopeEntryId}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\ModelsController@show',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\ModelsController@show',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::2iVKbNbuAuUO2wNd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::XKCa5gpy2Zn1TGim' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'telescope/telescope-api/requests',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\RequestsController@index',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\RequestsController@index',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::XKCa5gpy2Zn1TGim',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::bYimanY7qYiJ4bRQ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'telescope/telescope-api/requests/{telescopeEntryId}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\RequestsController@show',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\RequestsController@show',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::bYimanY7qYiJ4bRQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::zfVYRwpPkoJCJJRH' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'telescope/telescope-api/views',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\ViewsController@index',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\ViewsController@index',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::zfVYRwpPkoJCJJRH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::U5rpVs1HlFyTuMci' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'telescope/telescope-api/views/{telescopeEntryId}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\ViewsController@show',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\ViewsController@show',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::U5rpVs1HlFyTuMci',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::xDh0L4RqgzJn0Wyg' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'telescope/telescope-api/commands',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\CommandsController@index',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\CommandsController@index',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::xDh0L4RqgzJn0Wyg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::cs90Nr716vtbRY9z' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'telescope/telescope-api/commands/{telescopeEntryId}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\CommandsController@show',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\CommandsController@show',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::cs90Nr716vtbRY9z',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::yvYRqbkw2mVu5Uyk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'telescope/telescope-api/schedule',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\ScheduleController@index',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\ScheduleController@index',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::yvYRqbkw2mVu5Uyk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::GIZa6PTPeWJywrph' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'telescope/telescope-api/schedule/{telescopeEntryId}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\ScheduleController@show',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\ScheduleController@show',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::GIZa6PTPeWJywrph',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::grlzQyauEA2vE8os' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'telescope/telescope-api/redis',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\RedisController@index',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\RedisController@index',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::grlzQyauEA2vE8os',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::HF9VGzBlw95pPvD0' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'telescope/telescope-api/redis/{telescopeEntryId}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\RedisController@show',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\RedisController@show',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::HF9VGzBlw95pPvD0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::T5cGALNcEayasH05' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'telescope/telescope-api/client-requests',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\ClientRequestController@index',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\ClientRequestController@index',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::T5cGALNcEayasH05',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::pHeofOeDPZiwtu2i' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'telescope/telescope-api/client-requests/{telescopeEntryId}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\ClientRequestController@show',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\ClientRequestController@show',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::pHeofOeDPZiwtu2i',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::0ROHhg4felEihHCt' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'telescope/telescope-api/monitored-tags',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\MonitoredTagController@index',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\MonitoredTagController@index',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::0ROHhg4felEihHCt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::B55oN5K4UuzPxGW2' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'telescope/telescope-api/monitored-tags',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\MonitoredTagController@store',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\MonitoredTagController@store',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::B55oN5K4UuzPxGW2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::L71QYwmRvTEH7R9e' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'telescope/telescope-api/monitored-tags/delete',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\MonitoredTagController@destroy',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\MonitoredTagController@destroy',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::L71QYwmRvTEH7R9e',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::RxqGY1qMrtmSUFzP' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'telescope/telescope-api/toggle-recording',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\RecordingController@toggle',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\RecordingController@toggle',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::RxqGY1qMrtmSUFzP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Ol0OgknBe6sN3tQD' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'telescope/telescope-api/entries',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\EntriesController@destroy',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\EntriesController@destroy',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::Ol0OgknBe6sN3tQD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'telescope' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'telescope/{view?}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\HomeController@index',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\HomeController@index',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'telescope',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'view' => '(.*)',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'livewire.message' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'livewire/message/{name}',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\HttpConnectionHandler@__invoke',
        'controller' => 'Livewire\\Controllers\\HttpConnectionHandler',
        'as' => 'livewire.message',
        'middleware' => 
        array (
          0 => 'web',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'livewire.upload-file' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'livewire/upload-file',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\FileUploadHandler@handle',
        'controller' => 'Livewire\\Controllers\\FileUploadHandler@handle',
        'as' => 'livewire.upload-file',
        'middleware' => 
        array (
          0 => 'web',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'livewire.preview-file' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'livewire/preview-file/{filename}',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\FilePreviewHandler@handle',
        'controller' => 'Livewire\\Controllers\\FilePreviewHandler@handle',
        'as' => 'livewire.preview-file',
        'middleware' => 
        array (
          0 => 'web',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::bOwIBFXORTSm62Hr' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'livewire/livewire.js',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\LivewireJavaScriptAssets@source',
        'controller' => 'Livewire\\Controllers\\LivewireJavaScriptAssets@source',
        'as' => 'generated::bOwIBFXORTSm62Hr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::6C8AfEkaIZXecfXM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'livewire/livewire.js.map',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\LivewireJavaScriptAssets@maps',
        'controller' => 'Livewire\\Controllers\\LivewireJavaScriptAssets@maps',
        'as' => 'generated::6C8AfEkaIZXecfXM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::AWU0fdTG90Z39gqJ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\UserApiController@settings',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\UserApiController@settings',
        'namespace' => NULL,
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
        'as' => 'generated::AWU0fdTG90Z39gqJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::DUVAoSWhPXAuy7c0' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/user/verify',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\UserApiController@verify',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\UserApiController@verify',
        'namespace' => NULL,
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
        'as' => 'generated::DUVAoSWhPXAuy7c0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::LxXQdlBGxA4r1Y0d' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/user/checkemail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\UserApiController@checkUserEmail',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\UserApiController@checkUserEmail',
        'namespace' => NULL,
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
        'as' => 'generated::LxXQdlBGxA4r1Y0d',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::4vKLfGP9ygEFODd7' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/user/signup',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\UserApiController@signup',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\UserApiController@signup',
        'namespace' => NULL,
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
        'as' => 'generated::4vKLfGP9ygEFODd7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::9yt3nyJDtTon9G8t' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/user/register_otp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\UserApiController@register_otp',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\UserApiController@register_otp',
        'namespace' => NULL,
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
        'as' => 'generated::9yt3nyJDtTon9G8t',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::7UA8Ws4Dj8ZqIH87' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user/banner',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\UserApiController@banners',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\UserApiController@banners',
        'namespace' => NULL,
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
        'as' => 'generated::7UA8Ws4Dj8ZqIH87',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::wWvwBWTWOgNVZ9AV' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/user/oauth/token',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\UserApiController@login',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\UserApiController@login',
        'namespace' => NULL,
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
        'as' => 'generated::wWvwBWTWOgNVZ9AV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::5YaiFHhLdyfApxHf' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/user/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\UserApiController@logout',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\UserApiController@logout',
        'namespace' => NULL,
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
        'as' => 'generated::5YaiFHhLdyfApxHf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Gg2QPKpSLt5272Ez' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user/checkapi',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\UserApiController@checkapi',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\UserApiController@checkapi',
        'namespace' => NULL,
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
        'as' => 'generated::Gg2QPKpSLt5272Ez',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::9g9ZSWc4WgrHrLlB' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/user/checkversion',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\UserApiController@CheckVersion',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\UserApiController@CheckVersion',
        'namespace' => NULL,
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
        'as' => 'generated::9g9ZSWc4WgrHrLlB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::LV4eXr8Jg4EYP8Qd' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/user/reset/password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\UserApiController@reset_password',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\UserApiController@reset_password',
        'namespace' => NULL,
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
        'as' => 'generated::LV4eXr8Jg4EYP8Qd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::4J00siY72zlaJKHv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user/estimated/fare_without_auth',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\RequestApiController@estimated_fare',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\RequestApiController@estimated_fare',
        'namespace' => NULL,
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
        'as' => 'generated::4J00siY72zlaJKHv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::t5eqmO2OOilUsOSJ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/user/forgot/password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\UserApiController@forgot_password',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\UserApiController@forgot_password',
        'namespace' => NULL,
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
        'as' => 'generated::t5eqmO2OOilUsOSJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::mWhl2MJvwqCg7yKx' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user/estimated/fare',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\RequestApiController@estimated_fare',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\RequestApiController@estimated_fare',
        'namespace' => NULL,
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
        'as' => 'generated::mWhl2MJvwqCg7yKx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::hLQi9Qdx5gUl607G' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/user/direction',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\RequestApiController@getLiveDirection',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\RequestApiController@getLiveDirection',
        'namespace' => NULL,
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
        'as' => 'generated::hLQi9Qdx5gUl607G',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::fVPWyfZXz6XzcNOT' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/user/change/password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\UserApiController@change_password',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\UserApiController@change_password',
        'namespace' => NULL,
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
        'as' => 'generated::fVPWyfZXz6XzcNOT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::j3PP3rhyUDERadEd' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/user/update/location',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\UserApiController@update_location',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\UserApiController@update_location',
        'namespace' => NULL,
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
        'as' => 'generated::j3PP3rhyUDERadEd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::EjZlbsANd7bXqQL0' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/user/update/language',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\UserApiController@update_language',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\UserApiController@update_language',
        'namespace' => NULL,
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
        'as' => 'generated::EjZlbsANd7bXqQL0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::NDXqJLjbqPhBnsgX' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user/details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\UserApiController@details',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\UserApiController@details',
        'namespace' => NULL,
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
        'as' => 'generated::NDXqJLjbqPhBnsgX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::l5iWHguLicbBkUu5' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/user/update/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\UserApiController@update_profile',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\UserApiController@update_profile',
        'namespace' => NULL,
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
        'as' => 'generated::l5iWHguLicbBkUu5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::hRCmpLblhhzZbzVH' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/user/update/details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\UserApiController@update_details',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\UserApiController@update_details',
        'namespace' => NULL,
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
        'as' => 'generated::hRCmpLblhhzZbzVH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::AL3GktMq7XrzcXTc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user/services',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\RequestApiController@services',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\RequestApiController@services',
        'namespace' => NULL,
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
        'as' => 'generated::AL3GktMq7XrzcXTc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::i39QLZ7nPb7fVfrR' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/user/rate/provider',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\RequestApiController@rate_provider',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\RequestApiController@rate_provider',
        'namespace' => NULL,
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
        'as' => 'generated::i39QLZ7nPb7fVfrR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::eFEGJmFvtGSdz3mD' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/user/send/request',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\RequestApiController@send_request',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\RequestApiController@send_request',
        'namespace' => NULL,
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
        'as' => 'generated::eFEGJmFvtGSdz3mD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::hoAfYI37avQvgrIo' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/user/cancel/request',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\RequestApiController@cancel_request',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\RequestApiController@cancel_request',
        'namespace' => NULL,
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
        'as' => 'generated::hoAfYI37avQvgrIo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::iSV4kAgrJKkYHrmx' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user/request/check',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\RequestApiController@request_status_check',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\RequestApiController@request_status_check',
        'namespace' => NULL,
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
        'as' => 'generated::iSV4kAgrJKkYHrmx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::DQr0RRhjSlq757bL' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user/show/providers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\RequestApiController@show_providers',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\RequestApiController@show_providers',
        'namespace' => NULL,
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
        'as' => 'generated::DQr0RRhjSlq757bL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Rt1CVk6QKNSzqaGE' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/user/update/request',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\RequestApiController@modifiy_request',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\RequestApiController@modifiy_request',
        'namespace' => NULL,
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
        'as' => 'generated::Rt1CVk6QKNSzqaGE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::GmYhkyATuDU5PkUl' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user/trips',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\UserApiController@trips',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\UserApiController@trips',
        'namespace' => NULL,
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
        'as' => 'generated::GmYhkyATuDU5PkUl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::eR4UZjFvGZIUkBx1' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user/upcoming/trips',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\UserApiController@upcoming_trips',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\UserApiController@upcoming_trips',
        'namespace' => NULL,
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
        'as' => 'generated::eR4UZjFvGZIUkBx1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::BKvm9WHExWRR6T4M' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user/trip/details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\UserApiController@trip_details',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\UserApiController@trip_details',
        'namespace' => NULL,
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
        'as' => 'generated::BKvm9WHExWRR6T4M',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Lz0CQloKGZAMK3kl' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user/upcoming/trip/details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\UserApiController@upcoming_trip_details',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\UserApiController@upcoming_trip_details',
        'namespace' => NULL,
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
        'as' => 'generated::Lz0CQloKGZAMK3kl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::zBdbWTRpI6PtyMG3' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/user/extend/trip',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\UserApiController@extend_trip',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\UserApiController@extend_trip',
        'namespace' => NULL,
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
        'as' => 'generated::zBdbWTRpI6PtyMG3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::4DrlWgsp6Qotj9WZ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/user/payment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\RequestApiController@reasons',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\RequestApiController@reasons',
        'namespace' => NULL,
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
        'as' => 'generated::4DrlWgsp6Qotj9WZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::2ePnuSJAdzw4haSV' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/user/payment1',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\RequestApiController@payment_online',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\RequestApiController@payment_online',
        'namespace' => NULL,
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
        'as' => 'generated::2ePnuSJAdzw4haSV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::nEO9Q6rDW0OG4t1Z' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/user/add/money',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\UserApiController@add_money',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\UserApiController@add_money',
        'namespace' => NULL,
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
        'as' => 'generated::nEO9Q6rDW0OG4t1Z',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::LQohqRxzBpSfUklK' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/user/addmoney',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\UserApiController@addMoneyRaz',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\UserApiController@addMoneyRaz',
        'namespace' => NULL,
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
        'as' => 'generated::LQohqRxzBpSfUklK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::5MfMtMw6UcqJXwDF' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user/payment/response',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\UserApiController@response',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\UserApiController@response',
        'namespace' => NULL,
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
        'as' => 'generated::5MfMtMw6UcqJXwDF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::cQU8FUMWLl6E5Mt1' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user/payment/failure',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":245:{@tEGTEWUZJEVp0aLODhkPKAxvJ2C/8dciTFUdXLm+Q1I=.a:5:{s:3:"use";a:0:{}s:8:"function";s:33:"function () { return \'failure\'; }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000006f7e21ad000000005d1e8200";}}',
        'namespace' => NULL,
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
        'as' => 'generated::cQU8FUMWLl6E5Mt1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::UxzkLQvCAjb4GWlP' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user/help',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\UserApiController@help_details',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\UserApiController@help_details',
        'namespace' => NULL,
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
        'as' => 'generated::UxzkLQvCAjb4GWlP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::h7zmNQidn5D0qHrG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user/promocodes_list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\UserApiController@list_promocode',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\UserApiController@list_promocode',
        'namespace' => NULL,
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
        'as' => 'generated::h7zmNQidn5D0qHrG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::8ifSHnM2iPEJTaPO' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user/promocodes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\UserApiController@promocodes',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\UserApiController@promocodes',
        'namespace' => NULL,
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
        'as' => 'generated::8ifSHnM2iPEJTaPO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::CZGxFN0UTeKjrNqN' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/user/promocode/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\UserApiController@add_promocode',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\UserApiController@add_promocode',
        'namespace' => NULL,
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
        'as' => 'generated::CZGxFN0UTeKjrNqN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'card.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user/card',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'as' => 'card.index',
        'uses' => 'App\\Http\\Controllers\\Resource\\CardResource@index',
        'controller' => 'App\\Http\\Controllers\\Resource\\CardResource@index',
        'namespace' => NULL,
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'card.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user/card/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'as' => 'card.create',
        'uses' => 'App\\Http\\Controllers\\Resource\\CardResource@create',
        'controller' => 'App\\Http\\Controllers\\Resource\\CardResource@create',
        'namespace' => NULL,
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'card.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/user/card',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'as' => 'card.store',
        'uses' => 'App\\Http\\Controllers\\Resource\\CardResource@store',
        'controller' => 'App\\Http\\Controllers\\Resource\\CardResource@store',
        'namespace' => NULL,
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'card.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user/card/{card}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'as' => 'card.show',
        'uses' => 'App\\Http\\Controllers\\Resource\\CardResource@show',
        'controller' => 'App\\Http\\Controllers\\Resource\\CardResource@show',
        'namespace' => NULL,
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'card.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user/card/{card}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'as' => 'card.edit',
        'uses' => 'App\\Http\\Controllers\\Resource\\CardResource@edit',
        'controller' => 'App\\Http\\Controllers\\Resource\\CardResource@edit',
        'namespace' => NULL,
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'card.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/user/card/{card}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'as' => 'card.update',
        'uses' => 'App\\Http\\Controllers\\Resource\\CardResource@update',
        'controller' => 'App\\Http\\Controllers\\Resource\\CardResource@update',
        'namespace' => NULL,
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'card.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/user/card/{card}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'as' => 'card.destroy',
        'uses' => 'App\\Http\\Controllers\\Resource\\CardResource@destroy',
        'controller' => 'App\\Http\\Controllers\\Resource\\CardResource@destroy',
        'namespace' => NULL,
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'location.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user/location',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'as' => 'location.index',
        'uses' => 'App\\Http\\Controllers\\Resource\\FavouriteLocationResource@index',
        'controller' => 'App\\Http\\Controllers\\Resource\\FavouriteLocationResource@index',
        'namespace' => NULL,
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'location.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user/location/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'as' => 'location.create',
        'uses' => 'App\\Http\\Controllers\\Resource\\FavouriteLocationResource@create',
        'controller' => 'App\\Http\\Controllers\\Resource\\FavouriteLocationResource@create',
        'namespace' => NULL,
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'location.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/user/location',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'as' => 'location.store',
        'uses' => 'App\\Http\\Controllers\\Resource\\FavouriteLocationResource@store',
        'controller' => 'App\\Http\\Controllers\\Resource\\FavouriteLocationResource@store',
        'namespace' => NULL,
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'location.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user/location/{location}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'as' => 'location.show',
        'uses' => 'App\\Http\\Controllers\\Resource\\FavouriteLocationResource@show',
        'controller' => 'App\\Http\\Controllers\\Resource\\FavouriteLocationResource@show',
        'namespace' => NULL,
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'location.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user/location/{location}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'as' => 'location.edit',
        'uses' => 'App\\Http\\Controllers\\Resource\\FavouriteLocationResource@edit',
        'controller' => 'App\\Http\\Controllers\\Resource\\FavouriteLocationResource@edit',
        'namespace' => NULL,
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'location.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/user/location/{location}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'as' => 'location.update',
        'uses' => 'App\\Http\\Controllers\\Resource\\FavouriteLocationResource@update',
        'controller' => 'App\\Http\\Controllers\\Resource\\FavouriteLocationResource@update',
        'namespace' => NULL,
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'location.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/user/location/{location}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'as' => 'location.destroy',
        'uses' => 'App\\Http\\Controllers\\Resource\\FavouriteLocationResource@destroy',
        'controller' => 'App\\Http\\Controllers\\Resource\\FavouriteLocationResource@destroy',
        'namespace' => NULL,
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::rr2anOgY8z412n6T' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user/wallet/passbook',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\UserApiController@wallet_passbook',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\UserApiController@wallet_passbook',
        'namespace' => NULL,
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
        'as' => 'generated::rr2anOgY8z412n6T',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::vYZA7nDo85zDLjkj' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user/promo/passbook',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\UserApiController@promo_passbook',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\UserApiController@promo_passbook',
        'namespace' => NULL,
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
        'as' => 'generated::vYZA7nDo85zDLjkj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::FVTUie84kRA4X0JU' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/user/test/push',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\UserApiController@test',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\UserApiController@test',
        'namespace' => NULL,
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
        'as' => 'generated::FVTUie84kRA4X0JU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ERonkdaCL0gmNfo8' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/user/chat',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\UserApiController@chatPush',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\UserApiController@chatPush',
        'namespace' => NULL,
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
        'as' => 'generated::ERonkdaCL0gmNfo8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::CxhLgz5xNq8rXB7b' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user/reasons',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\RequestApiController@reasons',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\RequestApiController@reasons',
        'namespace' => NULL,
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
        'as' => 'generated::CxhLgz5xNq8rXB7b',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::7vtubM6We4qraW7L' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user/notifications/{type}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Resource\\NotificationResource@getnotify',
        'controller' => 'App\\Http\\Controllers\\Resource\\NotificationResource@getnotify',
        'namespace' => NULL,
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
        'as' => 'generated::7vtubM6We4qraW7L',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::PRiEAcI6Xkjex3cU' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/user/dispute-list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Resource\\DisputeResource@dispute_list',
        'controller' => 'App\\Http\\Controllers\\Resource\\DisputeResource@dispute_list',
        'namespace' => NULL,
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
        'as' => 'generated::PRiEAcI6Xkjex3cU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::WtohtAXogMKVIpr0' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/user/dispute',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Resource\\DisputeResource@create_dispute',
        'controller' => 'App\\Http\\Controllers\\Resource\\DisputeResource@create_dispute',
        'namespace' => NULL,
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
        'as' => 'generated::WtohtAXogMKVIpr0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::MhwSPKv0349fQuUt' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/user/drop-item',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Resource\\LostItemResource@saveLostItem',
        'controller' => 'App\\Http\\Controllers\\Resource\\LostItemResource@saveLostItem',
        'namespace' => NULL,
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
        'as' => 'generated::MhwSPKv0349fQuUt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::1YRNzj4BGh80HMFq' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'api/user/drop-item/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Resource\\LostItemResource@update',
        'controller' => 'App\\Http\\Controllers\\Resource\\LostItemResource@update',
        'namespace' => NULL,
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
        'as' => 'generated::1YRNzj4BGh80HMFq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ZvaOcNH5yPyuqZRu' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/user/payment-log',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\UserApiController@payment_log',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\UserApiController@payment_log',
        'namespace' => NULL,
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
        'as' => 'generated::ZvaOcNH5yPyuqZRu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::tDutYL5x96opiYQr' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/user/verify-credentials',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\UserApiController@verifyCredentials',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\UserApiController@verifyCredentials',
        'namespace' => NULL,
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
        'as' => 'generated::tDutYL5x96opiYQr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::6sPwN44rYdfT2S3X' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/user/save-subscription/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\User\\UserApiController@reasons',
        'controller' => 'App\\Http\\Controllers\\Api\\User\\UserApiController@reasons',
        'namespace' => NULL,
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
        'as' => 'generated::6sPwN44rYdfT2S3X',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::XCy15tIdFb21uJPh' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/user/me',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":263:{@HHFNFFqD+ttHdiGM0oo3bpW0FbPLbZC9Y25mwh3dwVM=.a:5:{s:3:"use";a:0:{}s:8:"function";s:51:"function () {
        return \\auth()->user();
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000006f7e25d3000000005d1e8200";}}',
        'namespace' => NULL,
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
        'as' => 'generated::XCy15tIdFb21uJPh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Ie70jUNZrmJVQkvq' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/provider/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Provider\\TokenController@settings',
        'controller' => 'App\\Http\\Controllers\\Api\\Provider\\TokenController@settings',
        'namespace' => NULL,
        'prefix' => 'api/provider',
        'where' => 
        array (
        ),
        'as' => 'generated::Ie70jUNZrmJVQkvq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::MsBknJ8c50vl44px' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/provider/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Provider\\TokenController@register',
        'controller' => 'App\\Http\\Controllers\\Api\\Provider\\TokenController@register',
        'namespace' => NULL,
        'prefix' => 'api/provider',
        'where' => 
        array (
        ),
        'as' => 'generated::MsBknJ8c50vl44px',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::oLYoIBqMHgwqXYT8' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/provider/oauth/token',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Provider\\TokenController@authenticate',
        'controller' => 'App\\Http\\Controllers\\Api\\Provider\\TokenController@authenticate',
        'namespace' => NULL,
        'prefix' => 'api/provider',
        'where' => 
        array (
        ),
        'as' => 'generated::oLYoIBqMHgwqXYT8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::rH4us1Fbuc9Z6dfp' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/provider/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Provider\\TokenController@logout',
        'controller' => 'App\\Http\\Controllers\\Api\\Provider\\TokenController@logout',
        'namespace' => NULL,
        'prefix' => 'api/provider',
        'where' => 
        array (
        ),
        'as' => 'generated::rH4us1Fbuc9Z6dfp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::chplLnGFGGKuelZz' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/provider/verify',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Provider\\TokenController@verify',
        'controller' => 'App\\Http\\Controllers\\Api\\Provider\\TokenController@verify',
        'namespace' => NULL,
        'prefix' => 'api/provider',
        'where' => 
        array (
        ),
        'as' => 'generated::chplLnGFGGKuelZz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Nf2ykNR1rXL1rvix' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/provider/auth/facebook',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Provider\\TokenController@facebookViaAPI',
        'controller' => 'App\\Http\\Controllers\\Api\\Provider\\TokenController@facebookViaAPI',
        'namespace' => NULL,
        'prefix' => 'api/provider',
        'where' => 
        array (
        ),
        'as' => 'generated::Nf2ykNR1rXL1rvix',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::jHgrxjPq9StFezDU' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/provider/auth/google',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Provider\\TokenController@googleViaAPI',
        'controller' => 'App\\Http\\Controllers\\Api\\Provider\\TokenController@googleViaAPI',
        'namespace' => NULL,
        'prefix' => 'api/provider',
        'where' => 
        array (
        ),
        'as' => 'generated::jHgrxjPq9StFezDU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ZmgiRQBYorssPhnV' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/provider/forgot/password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Provider\\TokenController@forgot_password',
        'controller' => 'App\\Http\\Controllers\\Api\\Provider\\TokenController@forgot_password',
        'namespace' => NULL,
        'prefix' => 'api/provider',
        'where' => 
        array (
        ),
        'as' => 'generated::ZmgiRQBYorssPhnV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::bDLG8RrOHLFoNUIg' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/provider/reset/password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Provider\\TokenController@reset_password',
        'controller' => 'App\\Http\\Controllers\\Api\\Provider\\TokenController@reset_password',
        'namespace' => NULL,
        'prefix' => 'api/provider',
        'where' => 
        array (
        ),
        'as' => 'generated::bDLG8RrOHLFoNUIg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::CZEqW13Od1rc5fa5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/provider/refresh/token',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Provider\\TokenController@refresh_token',
        'controller' => 'App\\Http\\Controllers\\Api\\Provider\\TokenController@refresh_token',
        'namespace' => NULL,
        'prefix' => 'api/provider',
        'where' => 
        array (
        ),
        'as' => 'generated::CZEqW13Od1rc5fa5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::eBppLGa3vKdMcr80' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/provider/update-location',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Provider\\TripController@track_location',
        'controller' => 'App\\Http\\Controllers\\Api\\Provider\\TripController@track_location',
        'namespace' => NULL,
        'prefix' => 'api/provider',
        'where' => 
        array (
        ),
        'as' => 'generated::eBppLGa3vKdMcr80',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::7x55ONX0pDLAtihh' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/provider/get-location',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Provider\\TripController@track_location_get',
        'controller' => 'App\\Http\\Controllers\\Api\\Provider\\TripController@track_location_get',
        'namespace' => NULL,
        'prefix' => 'api/provider',
        'where' => 
        array (
        ),
        'as' => 'generated::7x55ONX0pDLAtihh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::AkMO4Spfm6Txs7C9' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/provider/remove-location',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Provider\\TripController@track_location_remove',
        'controller' => 'App\\Http\\Controllers\\Api\\Provider\\TripController@track_location_remove',
        'namespace' => NULL,
        'prefix' => 'api/provider',
        'where' => 
        array (
        ),
        'as' => 'generated::AkMO4Spfm6Txs7C9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::TbJ1CNUclbeUZnxP' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/provider/addmoney',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Provider\\ProfileController@addMoneyRazPro',
        'controller' => 'App\\Http\\Controllers\\Api\\Provider\\ProfileController@addMoneyRazPro',
        'namespace' => NULL,
        'prefix' => 'api/provider',
        'where' => 
        array (
        ),
        'as' => 'generated::TbJ1CNUclbeUZnxP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::06MPxfmKvBTwxqKq' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/provider/payment-log',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Provider\\TripController@track_location_remove',
        'controller' => 'App\\Http\\Controllers\\Api\\Provider\\TripController@track_location_remove',
        'namespace' => NULL,
        'prefix' => 'api/provider',
        'where' => 
        array (
        ),
        'as' => 'generated::06MPxfmKvBTwxqKq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::DeceILTqCBM6SPww' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/provider/direction',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Provider\\TripController@getLiveDirection',
        'controller' => 'App\\Http\\Controllers\\Api\\Provider\\TripController@getLiveDirection',
        'namespace' => NULL,
        'prefix' => 'api/provider',
        'where' => 
        array (
        ),
        'as' => 'generated::DeceILTqCBM6SPww',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::eInsvzbco7u9URES' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/provider/braintree/token',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Provider\\TripController@track_location_remove',
        'controller' => 'App\\Http\\Controllers\\Api\\Provider\\TripController@track_location_remove',
        'namespace' => NULL,
        'prefix' => 'api/provider',
        'where' => 
        array (
        ),
        'as' => 'generated::eInsvzbco7u9URES',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::WZpwVwIuPt9fbQJb' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/provider/payu/response',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Provider\\TripController@track_location_remove',
        'controller' => 'App\\Http\\Controllers\\Api\\Provider\\TripController@track_location_remove',
        'namespace' => NULL,
        'prefix' => 'api/provider',
        'where' => 
        array (
        ),
        'as' => 'generated::WZpwVwIuPt9fbQJb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::DCTgqNeeDeUk8vVc' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/provider/payu/failure',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Provider\\TripController@track_location_remove',
        'controller' => 'App\\Http\\Controllers\\Api\\Provider\\TripController@track_location_remove',
        'namespace' => NULL,
        'prefix' => 'api/provider',
        'where' => 
        array (
        ),
        'as' => 'generated::DCTgqNeeDeUk8vVc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ZcfMPDKlCvJHP2xM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/provider/payment/success',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Provider\\TripController@track_location_remove',
        'controller' => 'App\\Http\\Controllers\\Api\\Provider\\TripController@track_location_remove',
        'namespace' => NULL,
        'prefix' => 'api/provider',
        'where' => 
        array (
        ),
        'as' => 'generated::ZcfMPDKlCvJHP2xM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Dgv3xTInapzEg57Z' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/provider/payment/failure',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":245:{@WmYxgRXnYZJ+PokmQaZ5nwyzkCqoJCT1t7KR83b/7ug=.a:5:{s:3:"use";a:0:{}s:8:"function";s:33:"function () { return \'failure\'; }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000006f7e25fb000000005d1e8200";}}',
        'namespace' => NULL,
        'prefix' => 'api/provider',
        'where' => 
        array (
        ),
        'as' => 'generated::Dgv3xTInapzEg57Z',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::PGWoryxSeMJAUnmw' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/provider/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Provider\\ProfileController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\Provider\\ProfileController@index',
        'namespace' => NULL,
        'prefix' => 'api/provider/profile',
        'where' => 
        array (
        ),
        'as' => 'generated::PGWoryxSeMJAUnmw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::v2kHrcf9H1RfsMlW' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/provider/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Provider\\ProfileController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\Provider\\ProfileController@update',
        'namespace' => NULL,
        'prefix' => 'api/provider/profile',
        'where' => 
        array (
        ),
        'as' => 'generated::v2kHrcf9H1RfsMlW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::OLY2gZIr6jvHXy9U' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/provider/profile/password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Provider\\ProfileController@password',
        'controller' => 'App\\Http\\Controllers\\Api\\Provider\\ProfileController@password',
        'namespace' => NULL,
        'prefix' => 'api/provider/profile',
        'where' => 
        array (
        ),
        'as' => 'generated::OLY2gZIr6jvHXy9U',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::hQVKfDWPPTr5gM00' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/provider/profile/location',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Provider\\ProfileController@location',
        'controller' => 'App\\Http\\Controllers\\Api\\Provider\\ProfileController@location',
        'namespace' => NULL,
        'prefix' => 'api/provider/profile',
        'where' => 
        array (
        ),
        'as' => 'generated::hQVKfDWPPTr5gM00',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Vea89MQDpXKqD1RJ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/provider/profile/language',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Provider\\ProfileController@update_language',
        'controller' => 'App\\Http\\Controllers\\Api\\Provider\\ProfileController@update_language',
        'namespace' => NULL,
        'prefix' => 'api/provider/profile',
        'where' => 
        array (
        ),
        'as' => 'generated::Vea89MQDpXKqD1RJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::anCLyusaS1t1Kc4r' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/provider/profile/available',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Provider\\ProfileController@available',
        'controller' => 'App\\Http\\Controllers\\Api\\Provider\\ProfileController@available',
        'namespace' => NULL,
        'prefix' => 'api/provider/profile',
        'where' => 
        array (
        ),
        'as' => 'generated::anCLyusaS1t1Kc4r',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::BR32fQ3X43lPmkCN' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/provider/profile/documents',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Provider\\ProfileController@documents',
        'controller' => 'App\\Http\\Controllers\\Api\\Provider\\ProfileController@documents',
        'namespace' => NULL,
        'prefix' => 'api/provider/profile',
        'where' => 
        array (
        ),
        'as' => 'generated::BR32fQ3X43lPmkCN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::rnNZL7rKucWIORIl' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/provider/profile/documents/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Provider\\ProfileController@documentstore',
        'controller' => 'App\\Http\\Controllers\\Api\\Provider\\ProfileController@documentstore',
        'namespace' => NULL,
        'prefix' => 'api/provider/profile',
        'where' => 
        array (
        ),
        'as' => 'generated::rnNZL7rKucWIORIl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::7sijBPnFx29FUncw' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/provider/profile/details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Provider\\ProfileController@update_details',
        'controller' => 'App\\Http\\Controllers\\Api\\Provider\\ProfileController@update_details',
        'namespace' => NULL,
        'prefix' => 'api/provider/profile',
        'where' => 
        array (
        ),
        'as' => 'generated::7sijBPnFx29FUncw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'providercard.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/provider/providercard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'as' => 'providercard.index',
        'uses' => 'App\\Http\\Controllers\\Resource\\ProviderCardResource@index',
        'controller' => 'App\\Http\\Controllers\\Resource\\ProviderCardResource@index',
        'namespace' => NULL,
        'prefix' => 'api/provider',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'providercard.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/provider/providercard/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'as' => 'providercard.create',
        'uses' => 'App\\Http\\Controllers\\Resource\\ProviderCardResource@create',
        'controller' => 'App\\Http\\Controllers\\Resource\\ProviderCardResource@create',
        'namespace' => NULL,
        'prefix' => 'api/provider',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'providercard.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/provider/providercard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'as' => 'providercard.store',
        'uses' => 'App\\Http\\Controllers\\Resource\\ProviderCardResource@store',
        'controller' => 'App\\Http\\Controllers\\Resource\\ProviderCardResource@store',
        'namespace' => NULL,
        'prefix' => 'api/provider',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'providercard.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/provider/providercard/{providercard}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'as' => 'providercard.show',
        'uses' => 'App\\Http\\Controllers\\Resource\\ProviderCardResource@show',
        'controller' => 'App\\Http\\Controllers\\Resource\\ProviderCardResource@show',
        'namespace' => NULL,
        'prefix' => 'api/provider',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'providercard.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/provider/providercard/{providercard}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'as' => 'providercard.edit',
        'uses' => 'App\\Http\\Controllers\\Resource\\ProviderCardResource@edit',
        'controller' => 'App\\Http\\Controllers\\Resource\\ProviderCardResource@edit',
        'namespace' => NULL,
        'prefix' => 'api/provider',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'providercard.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/provider/providercard/{providercard}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'as' => 'providercard.update',
        'uses' => 'App\\Http\\Controllers\\Resource\\ProviderCardResource@update',
        'controller' => 'App\\Http\\Controllers\\Resource\\ProviderCardResource@update',
        'namespace' => NULL,
        'prefix' => 'api/provider',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'providercard.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/provider/providercard/{providercard}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'as' => 'providercard.destroy',
        'uses' => 'App\\Http\\Controllers\\Resource\\ProviderCardResource@destroy',
        'controller' => 'App\\Http\\Controllers\\Resource\\ProviderCardResource@destroy',
        'namespace' => NULL,
        'prefix' => 'api/provider',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::c19E5QKRekj3XVxe' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/provider/chat',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Provider\\ProfileController@chatPush',
        'controller' => 'App\\Http\\Controllers\\Api\\Provider\\ProfileController@chatPush',
        'namespace' => NULL,
        'prefix' => 'api/provider',
        'where' => 
        array (
        ),
        'as' => 'generated::c19E5QKRekj3XVxe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::xmdQvRlWhbThvtAN' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/provider/target',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Provider\\ProfileController@target',
        'controller' => 'App\\Http\\Controllers\\Api\\Provider\\ProfileController@target',
        'namespace' => NULL,
        'prefix' => 'api/provider',
        'where' => 
        array (
        ),
        'as' => 'generated::xmdQvRlWhbThvtAN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'trip.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/provider/trip',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'as' => 'trip.index',
        'uses' => 'App\\Http\\Controllers\\Api\\Provider\\TripController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\Provider\\TripController@index',
        'namespace' => NULL,
        'prefix' => 'api/provider',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'trip.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/provider/trip/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'as' => 'trip.create',
        'uses' => 'App\\Http\\Controllers\\Api\\Provider\\TripController@create',
        'controller' => 'App\\Http\\Controllers\\Api\\Provider\\TripController@create',
        'namespace' => NULL,
        'prefix' => 'api/provider',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'trip.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/provider/trip',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'as' => 'trip.store',
        'uses' => 'App\\Http\\Controllers\\Api\\Provider\\TripController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\Provider\\TripController@store',
        'namespace' => NULL,
        'prefix' => 'api/provider',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'trip.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/provider/trip/{trip}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'as' => 'trip.show',
        'uses' => 'App\\Http\\Controllers\\Api\\Provider\\TripController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\Provider\\TripController@show',
        'namespace' => NULL,
        'prefix' => 'api/provider',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'trip.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/provider/trip/{trip}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'as' => 'trip.edit',
        'uses' => 'App\\Http\\Controllers\\Api\\Provider\\TripController@edit',
        'controller' => 'App\\Http\\Controllers\\Api\\Provider\\TripController@edit',
        'namespace' => NULL,
        'prefix' => 'api/provider',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'trip.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/provider/trip/{trip}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'as' => 'trip.update',
        'uses' => 'App\\Http\\Controllers\\Api\\Provider\\TripController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\Provider\\TripController@update',
        'namespace' => NULL,
        'prefix' => 'api/provider',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'trip.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/provider/trip/{trip}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'as' => 'trip.destroy',
        'uses' => 'App\\Http\\Controllers\\Api\\Provider\\TripController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\Provider\\TripController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/provider',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::y3ZdVrRnnhXCeBI9' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/provider/cancel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Provider\\TripController@cancel',
        'controller' => 'App\\Http\\Controllers\\Api\\Provider\\TripController@cancel',
        'namespace' => NULL,
        'prefix' => 'api/provider',
        'where' => 
        array (
        ),
        'as' => 'generated::y3ZdVrRnnhXCeBI9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::sDtnqINPaKjhuMpc' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/provider/summary',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Provider\\TripController@summary',
        'controller' => 'App\\Http\\Controllers\\Api\\Provider\\TripController@summary',
        'namespace' => NULL,
        'prefix' => 'api/provider',
        'where' => 
        array (
        ),
        'as' => 'generated::sDtnqINPaKjhuMpc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::6e5IjN7lvx2M10xv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/provider/help',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Provider\\TripController@help_details',
        'controller' => 'App\\Http\\Controllers\\Api\\Provider\\TripController@help_details',
        'namespace' => NULL,
        'prefix' => 'api/provider',
        'where' => 
        array (
        ),
        'as' => 'generated::6e5IjN7lvx2M10xv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::e4dKYM8AqdtUp7i6' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/provider/wallettransaction',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Provider\\TripController@wallet_transation',
        'controller' => 'App\\Http\\Controllers\\Api\\Provider\\TripController@wallet_transation',
        'namespace' => NULL,
        'prefix' => 'api/provider',
        'where' => 
        array (
        ),
        'as' => 'generated::e4dKYM8AqdtUp7i6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::1NBxoh2i8kPGCa8P' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/provider/wallettransaction/details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Provider\\TripController@wallet_details',
        'controller' => 'App\\Http\\Controllers\\Api\\Provider\\TripController@wallet_details',
        'namespace' => NULL,
        'prefix' => 'api/provider',
        'where' => 
        array (
        ),
        'as' => 'generated::1NBxoh2i8kPGCa8P',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::XWCaKnE3KWVVMSt8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/provider/transferlist',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Provider\\TripController@transferlist',
        'controller' => 'App\\Http\\Controllers\\Api\\Provider\\TripController@transferlist',
        'namespace' => NULL,
        'prefix' => 'api/provider',
        'where' => 
        array (
        ),
        'as' => 'generated::XWCaKnE3KWVVMSt8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::HzDu89zzolvWFfjD' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/provider/requestamount',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Provider\\TripController@requestamount',
        'controller' => 'App\\Http\\Controllers\\Api\\Provider\\TripController@requestamount',
        'namespace' => NULL,
        'prefix' => 'api/provider',
        'where' => 
        array (
        ),
        'as' => 'generated::HzDu89zzolvWFfjD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::WxLof0g0e1Jm3H6V' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/provider/requestcancel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Provider\\TripController@requestcancel',
        'controller' => 'App\\Http\\Controllers\\Api\\Provider\\TripController@requestcancel',
        'namespace' => NULL,
        'prefix' => 'api/provider',
        'where' => 
        array (
        ),
        'as' => 'generated::WxLof0g0e1Jm3H6V',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::aks1z2Gm36usjn0K' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/provider/waiting',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Provider\\TripController@waiting',
        'controller' => 'App\\Http\\Controllers\\Api\\Provider\\TripController@waiting',
        'namespace' => NULL,
        'prefix' => 'api/provider',
        'where' => 
        array (
        ),
        'as' => 'generated::aks1z2Gm36usjn0K',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::fRXGezD6nihlkmA1' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/provider/trip/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Provider\\TripController@accept',
        'controller' => 'App\\Http\\Controllers\\Api\\Provider\\TripController@accept',
        'namespace' => NULL,
        'prefix' => 'api/provider/trip',
        'where' => 
        array (
        ),
        'as' => 'generated::fRXGezD6nihlkmA1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::7UNfIXUnsYb4RFMd' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/provider/trip/{id}/rate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Provider\\TripController@rate',
        'controller' => 'App\\Http\\Controllers\\Api\\Provider\\TripController@rate',
        'namespace' => NULL,
        'prefix' => 'api/provider/trip',
        'where' => 
        array (
        ),
        'as' => 'generated::7UNfIXUnsYb4RFMd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Uxms1qtm3HZILTSk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/provider/trip/{id}/message',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Provider\\TripController@message',
        'controller' => 'App\\Http\\Controllers\\Api\\Provider\\TripController@message',
        'namespace' => NULL,
        'prefix' => 'api/provider/trip',
        'where' => 
        array (
        ),
        'as' => 'generated::Uxms1qtm3HZILTSk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::zT23qFo6hq814SCv' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/provider/trip/{id}/calculate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Provider\\TripController@calculate_distance',
        'controller' => 'App\\Http\\Controllers\\Api\\Provider\\TripController@calculate_distance',
        'namespace' => NULL,
        'prefix' => 'api/provider/trip',
        'where' => 
        array (
        ),
        'as' => 'generated::zT23qFo6hq814SCv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::OgkEdvRXdzSAxA7m' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/provider/requests/rides',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Provider\\TripController@request_rides',
        'controller' => 'App\\Http\\Controllers\\Api\\Provider\\TripController@request_rides',
        'namespace' => NULL,
        'prefix' => 'api/provider',
        'where' => 
        array (
        ),
        'as' => 'generated::OgkEdvRXdzSAxA7m',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::qciLrzuyVkPoPENr' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/provider/requests/instant/ride',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Provider\\TripController@instant_ride',
        'controller' => 'App\\Http\\Controllers\\Api\\Provider\\TripController@instant_ride',
        'namespace' => NULL,
        'prefix' => 'api/provider/requests',
        'where' => 
        array (
        ),
        'as' => 'generated::qciLrzuyVkPoPENr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Oz7lLBpSxlI6j3OM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/provider/requests/upcoming',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Provider\\TripController@scheduled',
        'controller' => 'App\\Http\\Controllers\\Api\\Provider\\TripController@scheduled',
        'namespace' => NULL,
        'prefix' => 'api/provider/requests',
        'where' => 
        array (
        ),
        'as' => 'generated::Oz7lLBpSxlI6j3OM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::PDQ4LEehViyxtf1b' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/provider/requests/history',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Provider\\TripController@history',
        'controller' => 'App\\Http\\Controllers\\Api\\Provider\\TripController@history',
        'namespace' => NULL,
        'prefix' => 'api/provider/requests',
        'where' => 
        array (
        ),
        'as' => 'generated::PDQ4LEehViyxtf1b',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::7e3GTRQWSeSRFlsV' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/provider/requests/history/details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Provider\\TripController@history_details',
        'controller' => 'App\\Http\\Controllers\\Api\\Provider\\TripController@history_details',
        'namespace' => NULL,
        'prefix' => 'api/provider/requests',
        'where' => 
        array (
        ),
        'as' => 'generated::7e3GTRQWSeSRFlsV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::prpEdPCg4oAg5MdM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/provider/requests/upcoming/details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Provider\\TripController@upcoming_details',
        'controller' => 'App\\Http\\Controllers\\Api\\Provider\\TripController@upcoming_details',
        'namespace' => NULL,
        'prefix' => 'api/provider/requests',
        'where' => 
        array (
        ),
        'as' => 'generated::prpEdPCg4oAg5MdM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::bNQQyacWGZOx1Fg3' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/provider/test/push',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Provider\\TripController@test',
        'controller' => 'App\\Http\\Controllers\\Api\\Provider\\TripController@test',
        'namespace' => NULL,
        'prefix' => 'api/provider',
        'where' => 
        array (
        ),
        'as' => 'generated::bNQQyacWGZOx1Fg3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::K6mMhMlcV8lQkOw4' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/provider/reasons',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Provider\\ProfileController@reasons',
        'controller' => 'App\\Http\\Controllers\\Api\\Provider\\ProfileController@reasons',
        'namespace' => NULL,
        'prefix' => 'api/provider',
        'where' => 
        array (
        ),
        'as' => 'generated::K6mMhMlcV8lQkOw4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::PJbd03D8RbdpLGiu' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/provider/notifications/{type}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Resource\\NotificationResource@getnotify',
        'controller' => 'App\\Http\\Controllers\\Resource\\NotificationResource@getnotify',
        'namespace' => NULL,
        'prefix' => 'api/provider',
        'where' => 
        array (
        ),
        'as' => 'generated::PJbd03D8RbdpLGiu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::77QOBo4wvrpgAfUG' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/provider/dispute-list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Resource\\DisputeResource@dispute_list',
        'controller' => 'App\\Http\\Controllers\\Resource\\DisputeResource@dispute_list',
        'namespace' => NULL,
        'prefix' => 'api/provider',
        'where' => 
        array (
        ),
        'as' => 'generated::77QOBo4wvrpgAfUG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::LyjbVPGPLKTjBARf' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/provider/dispute',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Resource\\DisputeResource@create_dispute',
        'controller' => 'App\\Http\\Controllers\\Resource\\DisputeResource@create_dispute',
        'namespace' => NULL,
        'prefix' => 'api/provider',
        'where' => 
        array (
        ),
        'as' => 'generated::LyjbVPGPLKTjBARf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::cWHQYyyE6ejFMPYz' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/provider/drop-item',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Resource\\LostItemResource@store',
        'controller' => 'App\\Http\\Controllers\\Resource\\LostItemResource@store',
        'namespace' => NULL,
        'prefix' => 'api/provider',
        'where' => 
        array (
        ),
        'as' => 'generated::cWHQYyyE6ejFMPYz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::XrX7jB53QFSEvMTt' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/provider/verify-credentials',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'loc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Provider\\ProfileController@verifyCredentials',
        'controller' => 'App\\Http\\Controllers\\Api\\Provider\\ProfileController@verifyCredentials',
        'namespace' => NULL,
        'prefix' => 'api/provider',
        'where' => 
        array (
        ),
        'as' => 'generated::XrX7jB53QFSEvMTt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'home' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\HomeController@index',
        'controller' => 'App\\Http\\Controllers\\User\\HomeController@index',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'home',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'faq' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'faq',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\HomeController@faq',
        'controller' => 'App\\Http\\Controllers\\User\\HomeController@faq',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'faq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'contactUs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'contactUs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\HomeController@contactUs',
        'controller' => 'App\\Http\\Controllers\\User\\HomeController@contactUs',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'contactUs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'tnc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'tnc',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\HomeController@tnc',
        'controller' => 'App\\Http\\Controllers\\User\\HomeController@tnc',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'tnc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'privacy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'privacyPolicy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\HomeController@privacy',
        'controller' => 'App\\Http\\Controllers\\User\\HomeController@privacy',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'privacy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Auth\\LoginController@showLoginForm',
        'controller' => 'App\\Http\\Controllers\\Admin\\Auth\\LoginController@showLoginForm',
        'as' => 'admin.',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.loginForm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Auth\\LoginController@showLoginForm',
        'controller' => 'App\\Http\\Controllers\\Admin\\Auth\\LoginController@showLoginForm',
        'as' => 'admin.loginForm',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.login' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Auth\\LoginController@login',
        'controller' => 'App\\Http\\Controllers\\Admin\\Auth\\LoginController@login',
        'as' => 'admin.login',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.logout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Auth\\LoginController@logout',
        'controller' => 'App\\Http\\Controllers\\Admin\\Auth\\LoginController@logout',
        'as' => 'admin.logout',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.home' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\HomeController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\HomeController@index',
        'as' => 'admin.home',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.translations' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/translation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'as' => 'admin.translations',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'admin.translations',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.telescope' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/telescope',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'as' => 'admin.telescope',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'admin.telescope',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.dispatcherDashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/dispatcher',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\HomeController@dispatcher',
        'controller' => 'App\\Http\\Controllers\\Admin\\HomeController@dispatcher',
        'as' => 'admin.dispatcherDashboard',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.generated::dqfFiv4XcMk0fb9A' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/demoo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ConfigController@demoo',
        'controller' => 'App\\Http\\Controllers\\Admin\\ConfigController@demoo',
        'as' => 'admin.generated::dqfFiv4XcMk0fb9A',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.map.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/map',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MapController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\MapController@index',
        'as' => 'admin.map.index',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.map.heatMap' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/heatMap',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MapController@heatMap',
        'controller' => 'App\\Http\\Controllers\\Admin\\MapController@heatMap',
        'as' => 'admin.map.heatMap',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.settings.otherSettings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/otherSettings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\HomeController@settings',
        'controller' => 'App\\Http\\Controllers\\Admin\\HomeController@settings',
        'as' => 'admin.settings.otherSettings',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.generated::myMER1Y2wc2qfZ6M' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/pushTest',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\HomeController@pushtest',
        'controller' => 'App\\Http\\Controllers\\Admin\\HomeController@pushtest',
        'as' => 'admin.generated::myMER1Y2wc2qfZ6M',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.request.history' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/requestHistory',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\HomeController@requestHistory',
        'controller' => 'App\\Http\\Controllers\\Admin\\HomeController@requestHistory',
        'as' => 'admin.request.history',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.request.detail' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/requestDetail/{userRequest}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\HomeController@requestDetail',
        'controller' => 'App\\Http\\Controllers\\Admin\\HomeController@requestDetail',
        'as' => 'admin.request.detail',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.settings.generalConfig' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/generalConfig',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ConfigController@generalConfig',
        'controller' => 'App\\Http\\Controllers\\Admin\\ConfigController@generalConfig',
        'as' => 'admin.settings.generalConfig',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.settings.storeSocialLinks' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/saveSocialLinks',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ConfigController@saveSocialLinkSettings',
        'controller' => 'App\\Http\\Controllers\\Admin\\ConfigController@saveSocialLinkSettings',
        'as' => 'admin.settings.storeSocialLinks',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.settings.storeSocialConfig' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/saveSocialConfig',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ConfigController@saveSocialConfig',
        'controller' => 'App\\Http\\Controllers\\Admin\\ConfigController@saveSocialConfig',
        'as' => 'admin.settings.storeSocialConfig',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.settings.storeSearch' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/saveSearch',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ConfigController@saveSearch',
        'controller' => 'App\\Http\\Controllers\\Admin\\ConfigController@saveSearch',
        'as' => 'admin.settings.storeSearch',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.settings.storeApi' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/saveApi',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ConfigController@saveApi',
        'controller' => 'App\\Http\\Controllers\\Admin\\ConfigController@saveApi',
        'as' => 'admin.settings.storeApi',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.settings.storeEmail' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/saveEmail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ConfigController@saveEmail',
        'controller' => 'App\\Http\\Controllers\\Admin\\ConfigController@saveEmail',
        'as' => 'admin.settings.storeEmail',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.settings.storePushNotification' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/storePushNotification',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ConfigController@savePush',
        'controller' => 'App\\Http\\Controllers\\Admin\\ConfigController@savePush',
        'as' => 'admin.settings.storePushNotification',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.settings.storeOthers' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/saveOther',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ConfigController@saveOther',
        'controller' => 'App\\Http\\Controllers\\Admin\\ConfigController@saveOther',
        'as' => 'admin.settings.storeOthers',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.settings.frontend.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/frontend',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FrontendSettingController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\FrontendSettingController@index',
        'as' => 'admin.settings.frontend.index',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.settings.frontend.headSetting' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/frontend/top',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FrontendSettingController@headSetting',
        'controller' => 'App\\Http\\Controllers\\Admin\\FrontendSettingController@headSetting',
        'as' => 'admin.settings.frontend.headSetting',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.settings.frontend.steps' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/frontend/steps',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FrontendSettingController@steps',
        'controller' => 'App\\Http\\Controllers\\Admin\\FrontendSettingController@steps',
        'as' => 'admin.settings.frontend.steps',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.settings.frontend.appDisplay' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/frontend/appDisplay',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FrontendSettingController@appDisplay',
        'controller' => 'App\\Http\\Controllers\\Admin\\FrontendSettingController@appDisplay',
        'as' => 'admin.settings.frontend.appDisplay',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.settings.tnc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/tnc',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\HomeController@tnc',
        'controller' => 'App\\Http\\Controllers\\Admin\\HomeController@tnc',
        'as' => 'admin.settings.tnc',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.settings.saveTnc' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/tnc',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\HomeController@saveTnc',
        'controller' => 'App\\Http\\Controllers\\Admin\\HomeController@saveTnc',
        'as' => 'admin.settings.saveTnc',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.settings.privacy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/privacy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\HomeController@privacy',
        'controller' => 'App\\Http\\Controllers\\Admin\\HomeController@privacy',
        'as' => 'admin.settings.privacy',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.settings.savePrivacy' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/privacyPolicy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\HomeController@savePrivacy',
        'controller' => 'App\\Http\\Controllers\\Admin\\HomeController@savePrivacy',
        'as' => 'admin.settings.savePrivacy',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.profileSettings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/profileSettings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\HomeController@profileSettings',
        'controller' => 'App\\Http\\Controllers\\Admin\\HomeController@profileSettings',
        'as' => 'admin.profileSettings',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.changePassword' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/changePassword',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\HomeController@changePassword',
        'controller' => 'App\\Http\\Controllers\\Admin\\HomeController@changePassword',
        'as' => 'admin.changePassword',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.updateProfile' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/updateProfile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\HomeController@updateProfile',
        'controller' => 'App\\Http\\Controllers\\Admin\\HomeController@updateProfile',
        'as' => 'admin.updateProfile',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.updateLanguage' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/language/{lang}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\HomeController@language',
        'controller' => 'App\\Http\\Controllers\\Admin\\HomeController@language',
        'as' => 'admin.updateLanguage',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.statement.overall' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/statements/overall/{for?}/{id?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\StatementController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\StatementController@index',
        'as' => 'admin.statement.overall',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.statement.provider' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/statements/provider',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\StatementController@providerStatements',
        'controller' => 'App\\Http\\Controllers\\Admin\\StatementController@providerStatements',
        'as' => 'admin.statement.provider',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.statement.user' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/statements/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\StatementController@userStatements',
        'controller' => 'App\\Http\\Controllers\\Admin\\StatementController@userStatements',
        'as' => 'admin.statement.user',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.statement.agent' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/statements/agent',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\StatementController@agentStatements',
        'controller' => 'App\\Http\\Controllers\\Admin\\StatementController@agentStatements',
        'as' => 'admin.statement.agent',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.payment.history' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/payment/history',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PaymentController@paymentHistory',
        'controller' => 'App\\Http\\Controllers\\Admin\\PaymentController@paymentHistory',
        'as' => 'admin.payment.history',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.payment.setting' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/payment/setting',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PaymentController@paymentSetting',
        'controller' => 'App\\Http\\Controllers\\Admin\\PaymentController@paymentSetting',
        'as' => 'admin.payment.setting',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.payment.saveSetting' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/payment/setting',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PaymentController@savePaymentSetting',
        'controller' => 'App\\Http\\Controllers\\Admin\\PaymentController@savePaymentSetting',
        'as' => 'admin.payment.saveSetting',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.payment.savePaymentMethodSetting' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/payment/methodSetting',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PaymentController@savePaymentMethodSetting',
        'controller' => 'App\\Http\\Controllers\\Admin\\PaymentController@savePaymentMethodSetting',
        'as' => 'admin.payment.savePaymentMethodSetting',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.settlement.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settlements',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettlementController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettlementController@index',
        'as' => 'admin.settlement.index',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.settlement.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settlements/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettlementController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettlementController@create',
        'as' => 'admin.settlement.create',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.settlement.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settlements/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettlementController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettlementController@store',
        'as' => 'admin.settlement.store',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.settlement.allTransaction' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/transactions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PaymentController@allTransactions',
        'controller' => 'App\\Http\\Controllers\\Admin\\PaymentController@allTransactions',
        'as' => 'admin.settlement.allTransaction',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.ratings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/ratings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\HomeController@ratings',
        'controller' => 'App\\Http\\Controllers\\Admin\\HomeController@ratings',
        'as' => 'admin.ratings',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.getAdminCredits' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/getAdminCredits',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\HomeController@getAdminCredits',
        'controller' => 'App\\Http\\Controllers\\Admin\\HomeController@getAdminCredits',
        'as' => 'admin.getAdminCredits',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.getUserRequestStatus' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/getUserRequestStatus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\HomeController@getUserRequestStatus',
        'controller' => 'App\\Http\\Controllers\\Admin\\HomeController@getUserRequestStatus',
        'as' => 'admin.getUserRequestStatus',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.acceptProviderDocument' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/acceptDocument/{providerDocument}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ProviderDocumentController@acceptDocument',
        'controller' => 'App\\Http\\Controllers\\Admin\\ProviderDocumentController@acceptDocument',
        'as' => 'admin.acceptProviderDocument',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.rejectProviderDocument' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/rejectDocument/{providerDocument}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ProviderDocumentController@rejectDocument',
        'controller' => 'App\\Http\\Controllers\\Admin\\ProviderDocumentController@rejectDocument',
        'as' => 'admin.rejectProviderDocument',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.provider.blockProvider' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/blockProvider/{provider}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ProviderController@blockProvider',
        'controller' => 'App\\Http\\Controllers\\Admin\\ProviderController@blockProvider',
        'as' => 'admin.provider.blockProvider',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.provider.approveProvider' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/approveProvider/{provider}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ProviderController@approveProvider',
        'controller' => 'App\\Http\\Controllers\\Admin\\ProviderController@approveProvider',
        'as' => 'admin.provider.approveProvider',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.dispute.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/dispute',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.dispute.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\DisputeController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\DisputeController@index',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.dispute.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/dispute/{dispute}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.dispute.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\DisputeController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\DisputeController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.dispute.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/dispute/{dispute}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.dispute.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\DisputeController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\DisputeController@update',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.user.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.user.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@index',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.user.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/user/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.user.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@create',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.user.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.user.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@store',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.user.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/user/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.user.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@show',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.user.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/user/{user}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.user.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.user.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/user/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.user.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@update',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.user.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/user/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.user.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.faq.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/faq',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.faq.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\FaqController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\FaqController@index',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.faq.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/faq/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.faq.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\FaqController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\FaqController@create',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.faq.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/faq',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.faq.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\FaqController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\FaqController@store',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.faq.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/faq/{faq}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.faq.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\FaqController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\FaqController@show',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.faq.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/faq/{faq}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.faq.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\FaqController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\FaqController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.faq.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/faq/{faq}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.faq.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\FaqController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\FaqController@update',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.faq.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/faq/{faq}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.faq.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\FaqController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\FaqController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.admin.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.admin.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminController@index',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.admin.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.admin.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminController@create',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.admin.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/admin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.admin.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminController@store',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.admin.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/{admin}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.admin.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminController@show',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.admin.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/{admin}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.admin.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.admin.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/admin/{admin}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.admin.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminController@update',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.admin.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/admin/{admin}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.admin.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.provider.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/provider',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.provider.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\ProviderController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\ProviderController@index',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.provider.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/provider/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.provider.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\ProviderController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\ProviderController@create',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.provider.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/provider',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.provider.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\ProviderController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\ProviderController@store',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.provider.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/provider/{provider}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.provider.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\ProviderController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\ProviderController@show',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.provider.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/provider/{provider}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.provider.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\ProviderController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\ProviderController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.provider.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/provider/{provider}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.provider.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\ProviderController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\ProviderController@update',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.provider.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/provider/{provider}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.provider.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\ProviderController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\ProviderController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.agent.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/agent',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.agent.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\AgentController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\AgentController@index',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.agent.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/agent/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.agent.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\AgentController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\AgentController@create',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.agent.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/agent',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.agent.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\AgentController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\AgentController@store',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.agent.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/agent/{agent}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.agent.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\AgentController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\AgentController@show',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.agent.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/agent/{agent}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.agent.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\AgentController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\AgentController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.agent.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/agent/{agent}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.agent.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\AgentController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\AgentController@update',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.agent.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/agent/{agent}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.agent.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\AgentController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\AgentController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.role.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/role',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.role.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\RoleController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\RoleController@index',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.role.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/role/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.role.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\RoleController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\RoleController@create',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.role.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/role',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.role.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\RoleController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\RoleController@store',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.role.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/role/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.role.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\RoleController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\RoleController@show',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.role.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/role/{role}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.role.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\RoleController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\RoleController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.role.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/role/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.role.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\RoleController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\RoleController@update',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.role.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/role/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.role.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\RoleController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\RoleController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.geoFencing.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/geoFencing',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.geoFencing.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\GeoFencingController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeoFencingController@index',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.geoFencing.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/geoFencing/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.geoFencing.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\GeoFencingController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeoFencingController@create',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.geoFencing.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/geoFencing',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.geoFencing.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\GeoFencingController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeoFencingController@store',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.geoFencing.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/geoFencing/{geoFencing}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.geoFencing.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\GeoFencingController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeoFencingController@show',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.geoFencing.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/geoFencing/{geoFencing}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.geoFencing.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\GeoFencingController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeoFencingController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.geoFencing.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/geoFencing/{geoFencing}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.geoFencing.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\GeoFencingController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeoFencingController@update',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.geoFencing.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/geoFencing/{geoFencing}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.geoFencing.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\GeoFencingController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeoFencingController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.document.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/document',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.document.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\DocumentController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\DocumentController@index',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.document.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/document/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.document.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\DocumentController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\DocumentController@create',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.document.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/document',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.document.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\DocumentController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\DocumentController@store',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.document.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/document/{document}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.document.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\DocumentController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\DocumentController@show',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.document.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/document/{document}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.document.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\DocumentController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\DocumentController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.document.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/document/{document}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.document.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\DocumentController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\DocumentController@update',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.document.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/document/{document}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.document.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\DocumentController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\DocumentController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.permission.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/permission',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.permission.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\PermissionController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\PermissionController@index',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.permission.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/permission/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.permission.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\PermissionController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\PermissionController@create',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.permission.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/permission',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.permission.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\PermissionController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\PermissionController@store',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.permission.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/permission/{permission}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.permission.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\PermissionController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\PermissionController@show',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.permission.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/permission/{permission}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.permission.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\PermissionController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\PermissionController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.permission.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/permission/{permission}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.permission.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\PermissionController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\PermissionController@update',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.permission.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/permission/{permission}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.permission.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\PermissionController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\PermissionController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.disputeType.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/disputeType',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.disputeType.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\DisputeTypeController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\DisputeTypeController@index',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.disputeType.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/disputeType/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.disputeType.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\DisputeTypeController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\DisputeTypeController@create',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.disputeType.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/disputeType',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.disputeType.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\DisputeTypeController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\DisputeTypeController@store',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.disputeType.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/disputeType/{disputeType}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.disputeType.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\DisputeTypeController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\DisputeTypeController@show',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.disputeType.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/disputeType/{disputeType}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.disputeType.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\DisputeTypeController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\DisputeTypeController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.disputeType.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/disputeType/{disputeType}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.disputeType.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\DisputeTypeController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\DisputeTypeController@update',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.disputeType.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/disputeType/{disputeType}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.disputeType.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\DisputeTypeController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\DisputeTypeController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.serviceType.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/serviceType',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.serviceType.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\ServiceTypeController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\ServiceTypeController@index',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.serviceType.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/serviceType/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.serviceType.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\ServiceTypeController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\ServiceTypeController@create',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.serviceType.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/serviceType',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.serviceType.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\ServiceTypeController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\ServiceTypeController@store',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.serviceType.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/serviceType/{serviceType}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.serviceType.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\ServiceTypeController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\ServiceTypeController@show',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.serviceType.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/serviceType/{serviceType}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.serviceType.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\ServiceTypeController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\ServiceTypeController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.serviceType.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/serviceType/{serviceType}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.serviceType.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\ServiceTypeController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\ServiceTypeController@update',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.serviceType.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/serviceType/{serviceType}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.serviceType.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\ServiceTypeController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\ServiceTypeController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.subServices' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/serviceType/{serviceType}/subServices',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ServiceTypeController@subServices',
        'controller' => 'App\\Http\\Controllers\\Admin\\ServiceTypeController@subServices',
        'as' => 'admin.subServices',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.cancelReason.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/cancelReason',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.cancelReason.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\CancelReasonController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\CancelReasonController@index',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.cancelReason.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/cancelReason/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.cancelReason.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\CancelReasonController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\CancelReasonController@create',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.cancelReason.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/cancelReason',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.cancelReason.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\CancelReasonController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\CancelReasonController@store',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.cancelReason.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/cancelReason/{cancelReason}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.cancelReason.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\CancelReasonController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\CancelReasonController@show',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.cancelReason.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/cancelReason/{cancelReason}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.cancelReason.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\CancelReasonController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\CancelReasonController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.cancelReason.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/cancelReason/{cancelReason}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.cancelReason.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\CancelReasonController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\CancelReasonController@update',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.cancelReason.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/cancelReason/{cancelReason}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.cancelReason.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\CancelReasonController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\CancelReasonController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.banner.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/banner',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.banner.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\BannerController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\BannerController@index',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.banner.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/banner/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.banner.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\BannerController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\BannerController@create',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.banner.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/banner',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.banner.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\BannerController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\BannerController@store',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.banner.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/banner/{banner}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.banner.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\BannerController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\BannerController@show',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.banner.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/banner/{banner}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.banner.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\BannerController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\BannerController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.banner.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/banner/{banner}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.banner.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\BannerController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\BannerController@update',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.banner.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/banner/{banner}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.banner.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\BannerController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\BannerController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.peakHour.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/peakHour',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.peakHour.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\PeakHourController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\PeakHourController@index',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.peakHour.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/peakHour/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.peakHour.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\PeakHourController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\PeakHourController@create',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.peakHour.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/peakHour',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.peakHour.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\PeakHourController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\PeakHourController@store',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.peakHour.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/peakHour/{peakHour}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.peakHour.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\PeakHourController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\PeakHourController@show',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.peakHour.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/peakHour/{peakHour}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.peakHour.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\PeakHourController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\PeakHourController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.peakHour.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/peakHour/{peakHour}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.peakHour.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\PeakHourController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\PeakHourController@update',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.peakHour.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/peakHour/{peakHour}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.peakHour.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\PeakHourController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\PeakHourController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.notification.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/notification',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.notification.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\NotificationController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\NotificationController@index',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.notification.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/notification/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.notification.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\NotificationController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\NotificationController@create',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.notification.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/notification',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.notification.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\NotificationController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\NotificationController@store',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.notification.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/notification/{notification}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.notification.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\NotificationController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\NotificationController@show',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.notification.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/notification/{notification}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.notification.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\NotificationController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\NotificationController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.notification.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/notification/{notification}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.notification.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\NotificationController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\NotificationController@update',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.notification.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/notification/{notification}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.notification.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\NotificationController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\NotificationController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.promocode.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/promocode',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.promocode.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\PromocodeController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\PromocodeController@index',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.promocode.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/promocode/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.promocode.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\PromocodeController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\PromocodeController@create',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.promocode.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/promocode',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.promocode.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\PromocodeController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\PromocodeController@store',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.promocode.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/promocode/{promocode}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.promocode.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\PromocodeController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\PromocodeController@show',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.promocode.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/promocode/{promocode}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.promocode.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\PromocodeController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\PromocodeController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.promocode.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/promocode/{promocode}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.promocode.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\PromocodeController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\PromocodeController@update',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.promocode.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/promocode/{promocode}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.promocode.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\PromocodeController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\PromocodeController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.customPush.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/customPush',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.customPush.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomPushController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomPushController@index',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.customPush.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/customPush/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.customPush.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomPushController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomPushController@create',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.customPush.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/customPush',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.customPush.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomPushController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomPushController@store',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.customPush.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/customPush/{customPush}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.customPush.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomPushController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomPushController@show',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.customPush.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/customPush/{customPush}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.customPush.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomPushController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomPushController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.customPush.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/customPush/{customPush}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.customPush.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomPushController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomPushController@update',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.customPush.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/customPush/{customPush}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.customPush.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomPushController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomPushController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.providerSettlement.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/providerSettlement',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.providerSettlement.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\SettlementController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettlementController@index',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.providerSettlement.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/providerSettlement/{providerSettlement}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.providerSettlement.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\SettlementController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettlementController@show',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.providerSettlement.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/providerSettlement/{providerSettlement}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.providerSettlement.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\SettlementController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettlementController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.providerSettlement.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/providerSettlement/{providerSettlement}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.providerSettlement.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\SettlementController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettlementController@update',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.providerSettlement.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/providerSettlement/{providerSettlement}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:admin',
        ),
        'as' => 'admin.providerSettlement.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\SettlementController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettlementController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'agent.loginForm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'agent/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
        ),
        'uses' => 'App\\Http\\Controllers\\Agent\\Auth\\LoginController@showLoginForm',
        'controller' => 'App\\Http\\Controllers\\Agent\\Auth\\LoginController@showLoginForm',
        'as' => 'agent.loginForm',
        'namespace' => NULL,
        'prefix' => 'agent',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'agent.login' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'agent/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
        ),
        'uses' => 'App\\Http\\Controllers\\Agent\\Auth\\LoginController@login',
        'controller' => 'App\\Http\\Controllers\\Agent\\Auth\\LoginController@login',
        'as' => 'agent.login',
        'namespace' => NULL,
        'prefix' => 'agent',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'agent.registrationForm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'agent/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
        ),
        'uses' => 'App\\Http\\Controllers\\Agent\\Auth\\RegisterController@showRegistrationForm',
        'controller' => 'App\\Http\\Controllers\\Agent\\Auth\\RegisterController@showRegistrationForm',
        'as' => 'agent.registrationForm',
        'namespace' => NULL,
        'prefix' => 'agent',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'agent.register' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'agent/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
        ),
        'uses' => 'App\\Http\\Controllers\\Agent\\Auth\\RegisterController@register',
        'controller' => 'App\\Http\\Controllers\\Agent\\Auth\\RegisterController@register',
        'as' => 'agent.register',
        'namespace' => NULL,
        'prefix' => 'agent',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'agent.logout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'agent/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
        ),
        'uses' => 'App\\Http\\Controllers\\Agent\\Auth\\LoginController@logout',
        'controller' => 'App\\Http\\Controllers\\Agent\\Auth\\LoginController@logout',
        'as' => 'agent.logout',
        'namespace' => NULL,
        'prefix' => 'agent',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'agent.home' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'agent/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:agent',
        ),
        'uses' => 'App\\Http\\Controllers\\Agent\\HomeController@dashboard',
        'controller' => 'App\\Http\\Controllers\\Agent\\HomeController@dashboard',
        'as' => 'agent.home',
        'namespace' => NULL,
        'prefix' => 'agent',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'agent.updateLanguage' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'agent/language/{lang}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:agent',
        ),
        'uses' => 'App\\Http\\Controllers\\Agent\\HomeController@language',
        'controller' => 'App\\Http\\Controllers\\Agent\\HomeController@language',
        'as' => 'agent.updateLanguage',
        'namespace' => NULL,
        'prefix' => 'agent',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'agent.showUserRequest' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'agent/showUserRequest/{userRequest}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:agent',
        ),
        'uses' => 'App\\Http\\Controllers\\Agent\\HomeController@showUserRequest',
        'controller' => 'App\\Http\\Controllers\\Agent\\HomeController@showUserRequest',
        'as' => 'agent.showUserRequest',
        'namespace' => NULL,
        'prefix' => 'agent',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'agent.ride.statement' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'agent/statement',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:agent',
        ),
        'uses' => 'App\\Http\\Controllers\\Agent\\HomeController@statement',
        'controller' => 'App\\Http\\Controllers\\Agent\\HomeController@statement',
        'as' => 'agent.ride.statement',
        'namespace' => NULL,
        'prefix' => 'agent',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'agent.ride.statement.provider' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'agent/statement/provider',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:agent',
        ),
        'uses' => 'App\\Http\\Controllers\\Agent\\HomeController@statement_provider',
        'controller' => 'App\\Http\\Controllers\\Agent\\HomeController@statement_provider',
        'as' => 'agent.ride.statement.provider',
        'namespace' => NULL,
        'prefix' => 'agent',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'agent.map.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'agent/map',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:agent',
        ),
        'uses' => 'App\\Http\\Controllers\\Agent\\HomeController@map_index',
        'controller' => 'App\\Http\\Controllers\\Agent\\HomeController@map_index',
        'as' => 'agent.map.index',
        'namespace' => NULL,
        'prefix' => 'agent',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'agent.map.ajax' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'agent/map/ajax',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:agent',
        ),
        'uses' => 'App\\Http\\Controllers\\Agent\\HomeController@map_ajax',
        'controller' => 'App\\Http\\Controllers\\Agent\\HomeController@map_ajax',
        'as' => 'agent.map.ajax',
        'namespace' => NULL,
        'prefix' => 'agent',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'agent.provider_ratings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'agent/providersRating',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:agent',
        ),
        'uses' => 'App\\Http\\Controllers\\Agent\\ProviderController@ratings',
        'controller' => 'App\\Http\\Controllers\\Agent\\ProviderController@ratings',
        'as' => 'agent.provider_ratings',
        'namespace' => NULL,
        'prefix' => 'agent',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'agent.profile' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'agent/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:agent',
        ),
        'uses' => 'App\\Http\\Controllers\\Agent\\ProfileController@profile',
        'controller' => 'App\\Http\\Controllers\\Agent\\ProfileController@profile',
        'as' => 'agent.profile',
        'namespace' => NULL,
        'prefix' => 'agent',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'agent.profile.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'agent/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:agent',
        ),
        'uses' => 'App\\Http\\Controllers\\Agent\\ProfileController@profile_update',
        'controller' => 'App\\Http\\Controllers\\Agent\\ProfileController@profile_update',
        'as' => 'agent.profile.update',
        'namespace' => NULL,
        'prefix' => 'agent',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'agent.wallet' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'agent/wallet',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:agent',
        ),
        'uses' => 'App\\Http\\Controllers\\Agent\\HomeController@wallet',
        'controller' => 'App\\Http\\Controllers\\Agent\\HomeController@wallet',
        'as' => 'agent.wallet',
        'namespace' => NULL,
        'prefix' => 'agent',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'agent.transfer' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'agent/transfer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:agent',
        ),
        'uses' => 'App\\Http\\Controllers\\Agent\\HomeController@transfer',
        'controller' => 'App\\Http\\Controllers\\Agent\\HomeController@transfer',
        'as' => 'agent.transfer',
        'namespace' => NULL,
        'prefix' => 'agent',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'agent.requestAmount' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'agent/transfer/send',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:agent',
        ),
        'uses' => 'App\\Http\\Controllers\\Agent\\HomeController@requestAmount',
        'controller' => 'App\\Http\\Controllers\\Agent\\HomeController@requestAmount',
        'as' => 'agent.requestAmount',
        'namespace' => NULL,
        'prefix' => 'agent',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'agent.cancel' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'agent/transfer/cancel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:agent',
        ),
        'uses' => 'App\\Http\\Controllers\\Agent\\HomeController@cancel',
        'controller' => 'App\\Http\\Controllers\\Agent\\HomeController@cancel',
        'as' => 'agent.cancel',
        'namespace' => NULL,
        'prefix' => 'agent',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'agent.password.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'agent/password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:agent',
        ),
        'uses' => 'App\\Http\\Controllers\\Agent\\ProfileController@password_update',
        'controller' => 'App\\Http\\Controllers\\Agent\\ProfileController@password_update',
        'as' => 'agent.password.update',
        'namespace' => NULL,
        'prefix' => 'agent',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'agent.requests.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'agent/requests',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:agent',
        ),
        'uses' => 'App\\Http\\Controllers\\Agent\\HomeController@agentIndex',
        'controller' => 'App\\Http\\Controllers\\Agent\\HomeController@agentIndex',
        'as' => 'agent.requests.index',
        'namespace' => NULL,
        'prefix' => 'agent',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'agent.requests.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'agent/requests/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:agent',
        ),
        'uses' => 'App\\Http\\Controllers\\Agent\\HomeController@agentDestroy',
        'controller' => 'App\\Http\\Controllers\\Agent\\HomeController@agentDestroy',
        'as' => 'agent.requests.destroy',
        'namespace' => NULL,
        'prefix' => 'agent',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'agent.requests.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'agent/requests/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:agent',
        ),
        'uses' => 'App\\Http\\Controllers\\Agent\\HomeController@agentShow',
        'controller' => 'App\\Http\\Controllers\\Agent\\HomeController@agentShow',
        'as' => 'agent.requests.show',
        'namespace' => NULL,
        'prefix' => 'agent',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'agent.requests.scheduled' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'agent/scheduled',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:agent',
        ),
        'uses' => 'App\\Http\\Controllers\\Agent\\HomeController@agentScheduled',
        'controller' => 'App\\Http\\Controllers\\Agent\\HomeController@agentScheduled',
        'as' => 'agent.requests.scheduled',
        'namespace' => NULL,
        'prefix' => 'agent',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'agent.provider.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'agent/provider',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:agent',
        ),
        'as' => 'agent.provider.index',
        'uses' => 'App\\Http\\Controllers\\Agent\\ProviderController@index',
        'controller' => 'App\\Http\\Controllers\\Agent\\ProviderController@index',
        'namespace' => NULL,
        'prefix' => 'agent',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'agent.provider.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'agent/provider/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:agent',
        ),
        'as' => 'agent.provider.create',
        'uses' => 'App\\Http\\Controllers\\Agent\\ProviderController@create',
        'controller' => 'App\\Http\\Controllers\\Agent\\ProviderController@create',
        'namespace' => NULL,
        'prefix' => 'agent',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'agent.provider.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'agent/provider',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'loc',
          2 => 'auth:agent',
        ),
        'as' => 'agent.provider.store',
        'uses' => 'App\\Http\\Controllers\\Agent\\ProviderController@store',
        'controller' => 'App\\Http\\Controllers\\Agent\\ProviderController@store',
        'namespace' => NULL,
        'prefix' => 'agent',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
  ),
)
);
