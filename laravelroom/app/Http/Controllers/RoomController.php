<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ {
   Repositories\RoomRepository

};

class RoomController extends Controller
{
    /**
     * The Controller instance.
     *
     * @var $repository
     */
    protected $repository; //The Repository

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(RoomRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Show all items.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request) //get-CORS
    {
        $rooms = $this->repository->getData($this->getParameters($request));

        return json_encode(['table' => $rooms]); 
    }

    /**
     * Get parameters.
     *
     * @param  ...
     * @return array
     */
    protected function getParameters($request)
    {
        // Default parameters
        $parameters = config("parameters");  

        foreach($parameters as $key => &$value){
           if($request->$key){ 
              if($key == 'name' || $key == 'pricemin' || $key == 'pricemax') $value=$request->$key;
              else $value=[$request->$key];
           }
        }

        return $parameters; 
    }            

}
