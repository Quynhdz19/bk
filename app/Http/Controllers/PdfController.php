<?php

namespace App\Http\Controllers;

use http\Client\Response;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function index(){

        return Response::make(file_get_contents('files/2304.10177.pdf'), 200, [
            'content-type'=>'application/pdf',
        ]);
        //or
    }
}
