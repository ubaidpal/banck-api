<?php

return [

    /*
     * Project Name
     */
    'project_name' => '',


    /*
    **Standard Date format for project
    */

    'UK' => 'd-m-Y',

    /*
     * Is email activation required
     */
    'activation' => env('ACTIVATION', false),

    /*
     * Is email activation required
     */
    'timePeriod' => env('ACTIVATION_LIMIT_TIME_PERIOD', 24),

    /*
     * Is email activation required
     */
    'maxAttempts' => env('ACTIVATION_LIMIT_MAX_ATTEMPTS', 3),

    /*
     * NULL Ip to enter to match database schema
     */
    'nullIpAddress' => env('NULL_IP_ADDRESS', '0.0.0.0'),

    /*
     * User restore encryption type
     */
    'restoreUserEncType' => 'AES-256-ECB',

    /*
     * User restore days past cutoff
     */
    'restoreUserCutoff' => env('USER_RESTORE_CUTOFF_DAYS', 31),

    /*
     * User restore encryption key
     */
    'restoreKey' => env('USER_RESTORE_ENCRYPTION_KEY', 'sup3rS3cr3tR35t0r3K3y21!'),

    /*
     * ReCaptcha Status
     */
    'reCaptchStatus' => env('ENABLE_RECAPTCHA', false),

    /*
 * Subtile for each view
 */
    'ATTACHMENT_PATH' => storage_path(),
    'page-header-small' => "Intelligent Cyber Defence Platform",
    'SESSION_EXPIRY' => "30",
    'SECURE_PROTOCOL' => "https://",
    'PROTOCOL' => "http://",

];

