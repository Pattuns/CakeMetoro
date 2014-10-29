<?php
require_once 'goutte.phar';

use Goutte\Client;
set_time_limit(0);
$file = 'station_name.csv';
$data = file_get_contents($file);

$tmp = tmpfile();
fwrite($tmp, $data);
rewind($tmp);


$stationNames = array();
$stationNamesArray = array();

while(($data = fgetcsv($tmp,0 ,","))!== FALSE){
    $stationNames[] = $stationNamesArray[] = array_shift($data);
}

// echo count($stationNames) . "<br />";
// echo count($stationNamesArray) . "<br />";
//
$day = 24;

$hour = 0;

$minutes = 0;

$fp = fopen('DepartArrive.csv','w');
$fp2 = fopen('connect.csv','w');

$client = new Client();

// for($i = 0; $i < 180; $i++){
//     array_shift($stationNames);
// }

$counter = 0;

for($i = 0; $i < 2; $i++){
    $day += $i;

    for($j = 0; $j < 24; $j++){
        $hour += $j;

        for($k = 0; $k < 6; $k++){
            $minutes = $k * 10;

            foreach($stationNames as $name){

                foreach($stationNamesArray as $stationName){

                    if($name!=$stationName){


$url = 'http://www.tokyometro.jp/ticket/search/index.php?ticSearchName01_01=' . $name .
    '&ticSearchName01_02=' .$stationName . '&priority=priTime&month=201410&day=' . $day . '&hour=' . $hour . '&minute=' .
    $minutes . '&searchOrder=departureTime&fareType=typeAdult&search.x=96&search.y=13';

$crawler = $client->request('GET',$url);

if($crawler->filter('div.h4Sec>div.routePattern')->count() != 0){
    $DOM = $crawler->filter('div.h4Sec>div.routePattern')->first();
    $transitInfo = array();

    // $transitInfo['depart'] = str_replace('出発' , '' , $DOM->filter('div.routeData p.dataItem')->text());
    // $transitInfo['arrive'] = str_replace('到着' , '' , $DOM->filter('div.routeData p.arrival')->text());
    // $transitInfo['spend'] = str_replace('分' , '' , $DOM->filter('div.routeData span.noticeTxt01')->text());
    //
    // $departArriveStation = $DOM->filter('div.routeRow01 p.ico01');
    //
    // $transitInfo['departureStation'] = $departArriveStation->first()->text();
    // $transitInfo['arrivalStation'] = $departArriveStation->last()->text();

    $transitInfo[] = $counter;
    if($i == 0){
        $transitInfo[] = 'weekday';
    }
    else{
        $transitInfo[] = 'holiday';
    }

    if($j < 10){
        if($k == 0){
            $transitInfo[] = '0' . $j . ':' . '0' . $minutes;
        }
        else{
            $transitInfo[] = '0' . $j . ':' . $minutes;
        }
    }
    else{

        if($k == 0){
            $transitInfo[] = $j . ':' . '0' . $minutes;
        }
        else{
            $transitInfo[] = $j . ':' . $minutes;
        }
    }


    $transitInfo[] = str_replace('出発' , '' , $DOM->filter('div.routeData p.dataItem')->text());
    $transitInfo[] = str_replace('到着' , '' , $DOM->filter('div.routeData p.arrival')->text());
    $transitInfo[] = str_replace('分' , '' , $DOM->filter('div.routeData span.noticeTxt01')->text());

    $departArriveStation = $DOM->filter('div.routeRow01 p.ico01');

    $transitInfo[] = $departArriveStation->first()->text();
    $transitInfo[] = $departArriveStation->last()->text();

    var_dump($transitInfo);
    echo "<br />";

    fputcsv($fp,$transitInfo,'|');

    $connectStation = $DOM->filter('div.routeRow01 p.ico02');

    if($connectStation->count() > 0){
        $array = array();

        $connectDepartArriveTime = array();

        $connectStationName = array();

        $connectRoute = $DOM->filter('div.routeRow02 p.time');
        $connectRoute->each(function($node) use (&$array){
            $array[] = explode('～', $node->text());
        });

        for ($I = 0; $I < count($array) - 1; $I++){
            $connectDepartArriveTime[] = array('arrive' => $array[$I][1], 'depart' => $array[$I + 1][0]);
        }

        $connectStation->each(function($node) use (&$connectStationName){
            $connectStationName[] = $node->text();
        });

        if(count($connectStationName) == count($connectDepartArriveTime)){
            for($I = 0; $I < count($connectStationName); $I++){
                $out = array($counter,$connectStationName[$I],$connectDepartArriveTime[$I]['arrive'],$connectDepartArriveTime[$I]['depart']);
                fputcsv($fp2,$out,'|');
            }
        }
    }
}

                        $counter++;
                    }

                sleep(2);
                }

            }
        }
    }
}

fclose($fp);

fclose($fp2);
