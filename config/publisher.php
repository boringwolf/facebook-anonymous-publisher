<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Admin Authentication
    |--------------------------------------------------------------------------
    |
    | For login to http://yourdomain/admin, be sure to change the password.
    |
     */
    'user'               => 'admin',
    'password'           => 'secret',

    /*
    |--------------------------------------------------------------------------
    | Facebook Settings
    |--------------------------------------------------------------------------
    |
    | To make the application works, you have to create both the Facebook Page
    | and Facebook App by your own. You also need to obtain a Page access token
    | which should never expired.
    |
    | To create Facebook Page see:
    |   https://www.facebook.com/pages/create/
    |
    | To create Facebook App see:
    |   https://developers.facebook.com/
    |
    | To obtain a Page access token, follow the readme guide:
    |   https://github.com/kxgen/kangxi-anonymous-publisher/blob/master/readme.md
    |
     */
    'fb_app_setting'     => [
        'app_id'                => '477359682460027',
        'app_secret'            => '726e6ec5bb3e139452725621aed0506a',
        'default_graph_version' => 'v2.5',
    ],
    'fb_page_token'      => 'CAAGyJZCZANmXsBAEXblkyyPP5CYBtsXNA6pRu5BMAFrZCvib2ZAfwQYw5D9HfCUZBE758EwTBF10z4SoFK7fPwlvNm6gymYvwLejJSYo0HJ7ZCm73j7l29puO7ZB0MaFLr3lNhhDmpqL1JSB4ZA75LZChNpZAj1wYWr9GoLdFMcM6AZB489j8c2JpSfOSMTPzw5PdEZD',

    /*
    |--------------------------------------------------------------------------
    | Google reCAPTCHA
    |--------------------------------------------------------------------------
    |
    | To avoid abuse and spam, we use Google reCAPTCHA service to verify guest.
    | For more informations see:
    |   https://www.google.com/recaptcha/intro/index.html
    |
     */
    'recaptcha_key'      => '6LdDxx0TAAAAAOwS5RT5sEWsU631_nLN657nobU1',
    'recaptcha_secret'   => '6LdDxx0TAAAAANGL083hYeUnC-goHq4RyK4H0xqE',

];
