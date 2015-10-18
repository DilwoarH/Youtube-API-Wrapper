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
        echo '------------ test_getVideosForChannel -----------------<br/>';

        $api            = new YoutubeAPIController();
        $channel_id     = 'UCHGAqdQBKTVON_FUCIYCh3Q';

        try {
            if ( is_object( $api->getVideosForChannel( $channel_id ) ) )
            {
                echo 'PASSED';
            }
            else
            {
                throw new Exception('Failed, not a valid response');
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        echo '<br/>------------ end test_getVideosForChannel ------------<br/>';


    }

    public function run()
    {
        $this->test_getVideosForChannel();
    }

}


$tests = new TestYoutubeAPIController();
$tests->run();