<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Javascript;

class AutoCompleteController extends Controller
{
  public function index()
  {
    // Javascript::put([
    //       'foo' => 'bar',
    //       'age' => 29
    //   ]);

    return view('autocomplete');
  }

  public function getTown()
  {
    // set url of data grand Lyon
    $json_url = "https://download.data.grandlyon.com/wfs/grandlyon?SERVICE=WFS&VERSION=2.0.0&outputformat=GEOJSON&request=GetFeature&typename=gin_nettoiement.ginmarche&SRSNAME=urn:ogc:def:crs:EPSG::4171";

    // get contents of file
    $json = file_get_contents($json_url);

    // decode json datas
    $datas = json_decode($json, TRUE);

    // get the multi json array
    $arrayFeatures = $datas["features"];

    // define a new empty array
    $arrayTown = array();

    // populate the new array with values we need
    foreach ($arrayFeatures as $feature) {
      array_push($arrayTown, array("id" => $feature["properties"]["gid"], "town" => $feature["properties"]["commune"], "name" => $feature["properties"]["nom"]));
    }

    // debug mode
    dump($arrayTown);
    die;

    return array("datas" => $arrayTown);
  }
}
