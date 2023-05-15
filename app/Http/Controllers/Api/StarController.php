<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Star;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class StarController extends Controller
{    
    /**
     * pafination des star
     *
     * @return void
     */
    public function index()
    {
      return Star::select('id','nom','prenom')->paginate(20);    
    }
    
    /**
     * detail
     *
     * @param  mixed $id
     * @return void
     */
    public function show(int $id)
    {
      return Star::find($id);
    }
}
