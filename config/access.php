<?php

return [

    /*
     * Application captcha specific settings
     */
    'captcha' => [
        /*
         * Whether the registration captcha is on or off
         */
        'registration' => env('REGISTRATION_CAPTCHA', false),
    ],

    /*
     * Whether or not registration is enabled
     */
    'registration' => env('ENABLE_REGISTRATION', true),

    /*
     * Table names for access tables
     */
    'table_names' => [
        'users' => 'users',
    ],

    /*
     * Configurations for the user
     */
    'users' => [
        /*
         * Whether or not the user has to confirm their email when signing up
         */
        'confirm_email' => env('CONFIRM_EMAIL', false),

        /*
         * Whether or not the users email can be changed on the edit profile screen
         */
        'change_email' => env('CHANGE_EMAIL', false),

        /*
         * The default role all new registered users get added to
         */
        'default_role' => 'user',

        /*
         * Whether or not new users need to be approved by an administrator before logging in
         * If this is set to true, then confirm_email is not in effect
         */
        'requires_approval' => env('REQUIRES_APPROVAL', false),

        /*
         * Login username to be used by the controller.
         */
        'username' => 'email',

        /*
         * Session Database Driver Only
         * When active, a user can only have one session active at a time
         * That is all other sessions for that user will be deleted when they log in
         * (They can only be logged into one place at a time, all others will be logged out)
         */
        'single_login' => true,
    ],

    /*
     * Socialite session variable name
     * Contains the name of the currently logged in provider in the users session
     * Makes it so social logins can not change passwords, etc.
     */
    'socialite_session_name' => 'socialite_provider',
];
