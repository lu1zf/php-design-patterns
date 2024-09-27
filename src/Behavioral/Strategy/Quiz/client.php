<?php
include_once __DIR__ . "/../../../../vendor/autoload.php";

use DesignPatterns\Behavioral\Strategy\Quiz\MatchMarker;
use DesignPatterns\Behavioral\Strategy\Quiz\RegexMarker;
use DesignPatterns\Behavioral\Strategy\Quiz\TextQuestion;


$markers = [
    new RegexMarker("/f.ve/"),
    new MatchMarker("five")
];

foreach ($markers as $marker) {
    print get_class($marker) . "\n";
    $question = new TextQuestion("How many beans make five", $marker);
    foreach (["five", "four"] as $response){
        print "response: $response" . PHP_EOL;
        if($question->mark($response)){
            print "well done" . PHP_EOL;
        } else {
            print "never mind" . PHP_EOL;
        }
    }
}
