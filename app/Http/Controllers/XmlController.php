<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Caminhoes;

class XmlController extends Controller
{
    //
    public function gerarXml()
    {
        $caminhoes = Caminhoes::all();

        $xml = new \SimpleXMLElement('<Caminhoes/>');


        return response()->view('data-xml', ['registros' => $caminhoes])->header('Content-Type', 'application/xml');
    }
}
