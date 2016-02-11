<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Geocode;
use League\Geotools\Coordinate\Ellipsoid;
use Toin0u\Geotools\Facade\Geotools;

class GeocodeController extends Controller
{
    public function index()
    {
        // $response = Geocode::make()->address('Villeurbanne, Charpennes');
        // $arr = array();
        // if ($response) {
        //     $array['latitude'] = $response->latitude();
        //     $array['long'] = $response->longitude();
        //     $array['addr'] = $response->formattedAddress();
        //     $array['location'] = $response->locationType();
        // }
        // return $array;
        // dd(self::geo_ip());
        // $coordA   = Geotools::coordinate([48.8234055, 2.3072664]);
        // $coordB   = Geotools::coordinate([43.296482, 5.36978]);
        // $distance = Geotools::distance()->setFrom($coordA)->setTo($coordB);

        // echo $distance->flat() . ' metres <br />'; // 659166.50038742 (meters)
        // echo $distance->in('km')->haversine() . ' km <br />'; // 659.0219081284
        $myLocation = self::geo_ip();
        dd($myLocation);
        //dd(self::getNearestLocation());
    }

    function geo_ip()
    {
        $ip  = !empty($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR'];
        $ip = '109.190.123.248';
        $url = "http://freegeoip.net/json/{$ip}";
        $ch  = curl_init();
        
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        $data = curl_exec($ch);
        curl_close($ch);
        
        if ($data) {
            return json_decode($data);
        } else {
            return false;
        }

    }

    function getNearestLocation()
    {
        $json_url = "https://download.data.grandlyon.com/wfs/grandlyon?SERVICE=WFS&VERSION=2.0.0&outputformat=GEOJSON&request=GetFeature&typename=gin_nettoiement.ginmarche&SRSNAME=urn:ogc:def:crs:EPSG::4171";

        $json = file_get_contents($json_url);

        // decode json datas
        $datas = json_decode($json, TRUE);

        // get the multi json array
        $arrayFeatures = $datas["features"];
        
        // define a new empty array
        $arrayTown = array();


        // populate the new array with values we need
        foreach ($arrayFeatures as $feature) {
            array_push($arrayTown, $feature["geometry"]["coordinates"][0]);
        }
       
        // set charset
        $charset = "UTF-8";
        //set content type
        $type = "application/json";

        // the best return ever ;)
        return response()->json($arrayTown)->header('Content-type', $type, 'charset', $charset);
    }
}
