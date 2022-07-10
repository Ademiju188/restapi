<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Models\User;

class ApiController extends Controller
{

    public function show()
    {
        $data = User::orderBy('id', 'desc')->get();
        return response()->json($data);
    }

    public function store(Request $request)
    {
        //Form Validation
        $rules = array(
            'first_name'    =>  'required',
            'last_name'     =>  'required',
            'email'         =>  'email|required|unique:users,email',
            'mobile'        =>  'required',
            'password'      =>  'required'
        );

        $validator=Validator::make($request->all(),$rules);
        if($validator->fails())
        {
            //Displays Validation Errors
            return $validator->errors();
        }
        else{
            //Store Data to databse after Validation
            $result = User::create([
                'first_name'   =>   $request->first_name,
                'last_name'    =>   $request->last_name,
                'email'        =>   $request->email,
                'mobile'       =>   $request->mobile,
                'password'     =>   bcrypt($request->password)
            ]);

            if($result){
                return ["Result"    =>  "User Created Successfully"];
            }
            else{
                return ["Result"    =>  "Operation failed"];
            }
        }

    }
}
