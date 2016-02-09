<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class RechercheController extends Controller
{
    public function index()
	{
		return view('recherche');
	}

	/*public function rechercher()
	{
		if(isset($_POST[]))
		{
			return view('recherche')->with('jour', $n);
		}
		else
			$erreur = "Veuillez sélectionner un jour de marché";
	}*/
}
