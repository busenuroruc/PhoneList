<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        return response() -> json("home");
    }

    public function detail($id)
    {
        $user = User::where('id', $id)->get();
        return response()->json($user);
    }

     public function list(Request $request, $rowCount = 0, $page = 0, $orderBy = 0, $search = "")
    {
        $method = $request->method();
        if ($method == "POST"){
            $rowCount = $request->rowCount;
            $page = $request->page;
            $orderBy = $request->orderBy;
            $search = $request->search;
        }
        $count = User::get('id')->count();
        return response()->json(User::where('name','LIKE','%'.$search.'%')
            ->orderBy('name', $orderBy == 0 ? 'asc' : 'desc')
            ->offset($page == 0 ? 0 : ($page - 1) * $rowCount)
            ->take($rowCount == 0 ? $count : $rowCount)
            ->get());
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $isUser = User::where('email', $request->email)->get()->count();
        if (!$isUser){
            return response()->json(DB::table('users')->insertGetId([
                'name'=>$request->name,
                'email' => $request->email,
                'password'=>$request->password
            ]));
        }
        return response()->json(0);
    }
     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */

    public function update(Request $request, $id = 0)
    {
        $isUser = User::where('email', $request->email)->get()->count();
        if ($isUser){
            return response()->json(DB::table('users')->where('id', $id ?: $request->id)->update([
                'name'=>$request->name,
                'password'=>$request->password
            ]));
        }
        return response()->json(0);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
