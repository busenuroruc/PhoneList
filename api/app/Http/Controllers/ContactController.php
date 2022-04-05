<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{

    public function index()
    {
        return DB::table('contacts')->get();
    }

    public function create()
    {
        $contactList = DB::table('contacts')->get();
        return view('pages.contact.create', compact("contactList"));
    }

    public function store(Request $request)
    {
        $id = DB::table('contacts')->insertGetId([
            'name' => $request->name,
            'phone' => $request->phone
        ]);

        return response()->json($id);
    }

   
    public function show($id)
    {
        //
    }

 
    public function edit($id)
    {
        //
    }

   
     public function update(Request $request, $id)
    {
        DB::table('contacts')->where('id', $id)->update([
            'name' => $request->name,
            'phone' => $request->phone
        ]);

        if ($request->is("api/*"))
            return true;
        else
        
            return redirect()->back();

    }


    public function destroy( $id)
    {
        DB::table('contacts')->where("id", $id)->delete();
        return response()->json(true);
        
    }
}