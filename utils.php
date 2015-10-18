<?php

/**
 * Created by PhpStorm.
 * User: Hussain
 * Date: 18/10/2015
 * Time: 03:37
 */
class Utils
{
    public static function http_get( $url = '', $json = true )
    {
        $ch = curl_init();
        curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER,   false   );
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER,   true    );
        curl_setopt( $ch, CURLOPT_FOLLOWLOCATION,   true    );
        curl_setopt( $ch, CURLOPT_URL,              $url    );

        $result = curl_exec($ch);

        curl_close($ch);

        if ( $json )
        {
            $result = json_decode($result);
        }

        return $result;

    }
}