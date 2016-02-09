<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Javascript;

class RechercheController extends Controller
{
    public function index()
	{
		Javascript::put([
	        'foo' => 'bar',
	        'age' => 29
	    ]);

		return view('recherche');
	}

	public function rechercher()
	{
		if(isset($_POST['jours']) || isset($_POST['ville']))
		{
			
			$jour=$_POST['jours'];
			$ville=$_POST['ville'];

			$return[0]=$jour;
			$return[1]=$ville;
			
			return view('recherche')->with('return', $return);
		}
		else
		{
			$erreur = "Veuillez sélectionner un jour ou une ville de marché";
			return view('recherche')->with('erreur', $erreur);
		}
	}
}
