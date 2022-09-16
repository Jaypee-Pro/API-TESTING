<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// model
use App\Models\Users;

class apiController extends Controller
{
    //
    // function getData(){
    //     return ['name'=>'jaypee','email'=>'sampple@gmail.com'];
    // }

    // list
    function list()
    {
        // return ['name'=>'jaypee','email'=>'sampple@gmail.com'];
        return Users::all(); 
    }

    // get Specific Id
    function getById($id)
    {
        return Users::find($id);
    }

    // Optional Id Parameter
    function getByIdOptional($id=null)
    {
        // id id is not null return 1 users else return all
        return $id?Users::find($id):Users::all();
    }

    // send dAta
    // addData('requesting''param')
    function addData(Request $req)
    {
        $User = new Users;
        // data
        $User->FirstName->$req->FirstName;//coming from the post request
        $user->LastName->$req->lastName;
        $User->Address->$req->Address;
        $User->Age->$req->Age;

        // saving data
        $result=$User->save();

        // checking
        if($result)
        {
            return ["Result"=>"Data saved!"];
        }
        else
        {
            return ["Result"=>"Error!"];
        }
        
    }
}
