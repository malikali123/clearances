<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

//use App\Models\Bank;

use App\Models\Clearance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class ClearanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        //admin.bank
        $data = Clearance::get();
       // return $data;
        return view('pages.Clearance.index', compact('data'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function print()
    {
        $data = Clearance::all();
        return view('pages.bank.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('pages.clearance.add');
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


        $clearance = Clearance::create([
            'name' => $request->name,
            'phon' => $request->phon,
            'email' => $request->email,
            'clearaneNumber' => $request->clearaneNumber,
            'password' => Hash::make($request->Password),


        ]);


        DB::commit();
        return redirect()->route('admin.clearance')->with(['success' => 'تم ألتحديث بنجاح']);

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

        $data = Clearance::find($id);
        return view('pages.Clearance.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function update(Clearance $clearance, Request $request)
    {
        //return $bank;
        try{
            DB::beginTransaction();
            // check email if exiested .clearaneNumber
            $clearance->update([
                'name' => $request->name,
                'phon' => $request->phon,
                'email' => $request->email,
                'clearaneNumber' => $request->clearaneNumber,
           ] );
            DB::commit();
            return redirect()->route('admin.clearance')->with(['success' => 'تم ألتحديث بنجاح']);
        }catch(\Exception $ex){
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
        public function destroy($id)
    {
        try {
            //get specific categories and its translations
            $clearance= Clearance ::find($id);

            if (!$clearance)
                return redirect()->route('admin.clearance')->with(['error' => 'هذا الماركة غير موجود ']);

            $clearance->delete();

            return redirect()->route('admin.clearance')->with(['success' => 'تم  الحذف بنجاح']);

        } catch (\Exception $ex) {
            return redirect()->route('admin.clearance')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }
}
