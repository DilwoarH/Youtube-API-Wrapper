<?php

require __DIR__ . '/config.php';

/**
 * Created by PhpStorm.
 * User: Dilwoar Hussain
 * Date: 18/10/2015
 * Time: 02:42
 */
class YoutubeAPIController
{

    public function getVideosForChannel( $channel_id = '', $nextPage = '' )
    {

        // return if no channel id is passed in
        if ( empty( $channel_id ) )
        {
            return array(
                'status'    => 'error',
                'message'   => 'No Channel Passed in'
            );
        }

        //API KEY
        $api_key    = Config::$api_key;

        //API HOST
        $api_host   = Config::$api_host;

        //API Parameters
        $params     = array(
            'key'           => $api_key,
            'channelId'     => $channel_id,
            'part'          => 'id,snippet',
            'order'         => 'date',
            'maxResults'    => '20',
            'pageToken'     => $nextPage
        );

        //remove pageToken when nothing has been passed in
        if ( empty( $nextPage ) )
        {
            unset( $params['pageToken'] );
        }

        //URL Building
        $api_url    = $api_host . '/youtube/v3/search?';

        //put params into URL
        foreach( $params as $key => $value)
        {
            $api_url .= "{$key}=$value&";
        }

        //remove last & from url
        $api_url    = rtrim( $api_url, '&');

        return $api_url;

    }

}