<?php
/**
 * Global Configuration Override
 *
 * You can use this file for overriding configuration values from modules, etc.
 * You would place values in here that are agnostic to the environment and not
 * sensitive to security.
 *
 * @NOTE: In practice, this file will typically be INCLUDED in your source
 * control, so do not include passwords or other sensitive information in this
 * file.
 */

return array(
    'social_media_api' => array (
        'twitter_api' => array(
            'owner' => array(
                'name' => 'PinasBoses',
                'id' => '3280631840',
            ),

            'access_token' => array(
                'token'  => '<access token>',
                'secret' => '<access secret>',
            ),

            'oauth_options' => array(
                'consumerKey' => '<consumer key>',
                'consumerSecret' => '<consumer secret>',
            ),

            'http_client_options' => array(
                'adapter' => 'Zend\Http\Client\Adapter\Curl',
                'curloptions' => array(
                    CURLOPT_SSL_VERIFYHOST => false,
                    CURLOPT_SSL_VERIFYPEER => false,
                ),
            ),

        ),
    ),

);