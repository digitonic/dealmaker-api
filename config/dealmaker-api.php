<?php

return [

    /**
     * The Client ID displayed when you created the OAuth application in the portal
     * This is typically called the "Public Key" in the portal
     */
    'client_id' => env('DEALMAKER_CLIENT_ID', ''),

    /**
     * The Client Secret displayed when you created the OAuth application in the portal
     * This is typically called the "Secret Key" in the portal
     */
    'client_secret' => env('DEALMAKER_CLIENT_SECRET', ''),

    /**
     * The scope is established when you created the OAuth application
     * This is typically called the "Scopes" in the portal
     */
    'scopes' => env('DEALMAKER_SCOPES', ''),

    /**
     * The DealMaker Deal ID for the current investment landing page
     */
    'deal_id' => env('DEALMAKER_DEAL_ID', '3475'),
];
