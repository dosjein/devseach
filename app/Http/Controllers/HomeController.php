<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Clusterpoint\Client;

use App\Models\Persons;

use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }


    public function developers(Request $request){

        $allRequests = $request->all();

	DB::table('dev_search_logs')->insert(
		array(
            		'ip' => $request->ip(),
            		'params' => json_encode($allRequests)
		)
	);

        $cp = new Client(); 

        $collection = $cp->database("tdx.persons");

        $persons = $collection->where('country' , $allRequests['location']);

        $skillList = explode(',', trim($allRequests['skill']));

        foreach ($skillList as $key => $value) {
           $persons->where("CONTAINS('".$value."')");
        }

        $persons->select(['email', 'full_name', 'bitbucket']);

        $persons->limit(100);


        return view('developer' , array('developers' => $persons->get()));       
    }
}
