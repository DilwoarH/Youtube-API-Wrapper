<?php
/**
 * Created by PhpStorm.
 * User: Hussain
 * Date: 18/10/2015
 * Time: 03:01
 */


require './YoutubeAPIController.php';




class TestYoutubeAPIController
{

    private function test_getVideosForChannel()
    {
        $api            = new YoutubeAPIController();
        $channel_id     = $_GET['channel_id'];
        echo json_encode( $api->getVideosForChannel( $channel_id ) );
    }

    public function run()
    {
        $this->test_getVideosForChannel();
    }

}


$tests = new TestYoutubeAPIController();
$tests->run();