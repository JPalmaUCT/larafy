<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class fileController extends Controller
{

    // funcion para guardar el archivo xml
    function guardar (Request $request) {
        $validation = $request->validate(['xmlfile' => 'required|file|mimes:xml,adl|max:2048']);//2mb

        //obtenemos y validamos el archivo
        $file = $validation['xmlfile'];
        //extension
        $extension = $file->getClientOriginalExtension();
        //reconstruimos el nombre del archivo
        $filename = 'xml_archetype-' . time() . '.' . $extension;
        //lo guardamos en la carptea storage/app/xml_imports
        $path = $file->storeAs('xml_imports',$filename);  
        dd($path);
    }
}
