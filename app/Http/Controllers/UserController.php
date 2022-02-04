<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

//use App\Models\Bank;

use App\Models\Clearance;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        //admin.bank
        $data = User::get();
       // $role = Role::get();
       // return $data;
        return view('pages.Users.index', compact('data'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function print()
    {
        $data = User::all();
        return view('pages.bank.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::get();
        return view('pages.Users.add',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {

//       return $request;
DB::beginTransaction();


        $user = User::create([
            'name' => $request->name,
            'role_id' => $request->role_id,
            'email' => $request->email,
           // 'clearaneNumber' => $request->clearaneNumber,
            'password' => Hash::make($request->Password),


        ]);


        DB::commit();
        return redirect()->route('admin.users')->with(['success' => 'تم ألتحديث بنجاح']);

        //return toastr()->success(trans('messages.success'));
        //return redirect()->route('admin.bank');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bank  $bank
     * @return \Illuminate\Http\Response
     */
//    public function show(Bank $bank)
//    {
//
//    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $roles = Role::get();

        $data = User::find($id);
        return view('pages.Users.edit', compact('data', 'roles'));
    }

    public function edit2($id)
    {
       // $roles = Role::get();

        $data = User::find($id);
        return view('pages.Users.edit2', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function update(User $user, Request $request)
    {
        //return $bank;
        try{
            DB::beginTransaction();
            // check email if exiested .clearaneNumber
            $user->update([
                'name' => $request->name,
                'role_id' => $request->role_id,
                'email' => $request->email,
               // 'clearaneNumber' => $request->clearaneNumber,
           ] );
            DB::commit();
            return redirect()->route('admin.users')->with(['success' => 'تم ألتحديث بنجاح']);
        }catch(\Exception $ex){
          //  return $ex;
            DB::rollback();
            Log::error($ex);
            return redirect()->back()->with(['error' => 'عفواً . حدثت مشكلة الرجاء المحاولة لاحقاً .'])->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bank  $bank
     * @return \Illuminate\Http\Response
     */


    public function update2(User $user, Request $request)
    {
        //return $bank;
        try{
            DB::beginTransaction();
            // check email if exiested .clearaneNumber
            $user->update([
                'name' => $request->name,
               // 'role_id' => $request->role_id,
                'email' => $request->email,
                'password' => Hash::make($request->Password),
                // 'clearaneNumber' => $request->clearaneNumber,
            ] );
            DB::commit();
            return redirect()->route('admin.users')->with(['success' => 'تم ألتحديث بنجاح']);
        }catch(\Exception $ex){
            //  return $ex;
            DB::rollback();
            Log::error($ex);
            return redirect()->back()->with(['error' => 'عفواً . حدثت مشكلة الرجاء المحاولة لاحقاً .'])->withInput();
        }
    }
        public function destroy($id)
    {
        try {
            //get specific categories and its translations
            $user = User ::find($id);

            if (!$user)
                return redirect()->route('admin.users')->with(['error' => 'هذا الماركة غير موجود ']);

            $user->delete();

            return redirect()->route('admin.users')->with(['success' => 'تم  الحذف بنجاح']);

        } catch (\Exception $ex) {
            return redirect()->route('admin.users')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }
}
