<?php

namespace App\Http\Controllers\BackEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use App\User;
use App\Client;



use Maatwebsite\Excel\Facades\Excel;
use App\Exports\PostExport;

class HomeController extends Controller
{
     public function index(){
        $users = User::get()->paginate(20);
        return view('back-end.home' , compact('users'));
    }


    public function clients(){
        $users = User::get();
        $clients = Client::get();
        return view('client' , compact('clients','users'));

    	
    }

    public function getClients(){
        return  Client::all();

    }




    public function delete(){

		//delete all clients
		 Client::truncate(); 
        return redirect()->route('admin.clients');
    
    }



     /**
   * Export to excel
   */
  public function exportExcel()
  {
    return Excel::download(new PostExport, 'list.xlsx');
  }
  /**
   * Export to csv
   */
  public function exportCSV()
  {
    return Excel::download(new PostExport, 'list.csv');
  }


}
