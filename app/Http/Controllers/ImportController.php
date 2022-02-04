<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

//use App\Models\Bank;

use App\Models\Clearance;
use App\Models\Import;
use App\Models\Value;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ImportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        //admin.bank
        $data = Import::where([
            'clearance_id' => auth()->user()->id
        ])->get();
        //return $data;
        return view('pages.Imports.index', compact('data'));
    }

    public function helth()
    {
        //admin.bank
        $data = Import::where([
            'value_id' => 5
        ])->get();
        //return $data;
        return view('pages.Imports.helth', compact('data'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function print()
    {

        $data = Import::all();
        return view('pages.Repots.import', compact('data'));
    }


    public function certificate()
    {

        $data = Import::where([
            'status' => 1
        ])->get();
       // return $data;
        return view('pages.Imports.certificates', compact('data'));
     }






    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $values = Value::all();
        //return $values->value()->id;
        $data=Clearance::all();

        return view('pages.Imports.add', compact('data','values'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {

    //   return $request;
DB::beginTransaction();


        $clearance = Import::create([
            'value_id' => $request->value_id,
            'decription' => $request->description,
            'quantity' => $request->quantity,
            'price' => $request->price,
           // 'status' => 0,
            'total' => $request->price * $request->quantity,
            'clearance_id' => $request->clearance,

        ]);


        DB::commit();
        return redirect()->route('admin.import')->with(['success' => 'تم ألتحديث بنجاح']);

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
        $values = Value::all();

        $data = Import::find($id);
        return view('pages.Imports.edit', compact('data','values'));
    }


    public function certificated($id)
    {
        // $user = User::auth()->user()->id->get();
        // return $user;
        $data = Import::find($id);
        return view('pages.Imports.print', compact('data'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function update(Import $import, Request $request)
    {
       // return $request;
        try{
            DB::beginTransaction();
            // check email if exiested .clearaneNumber
            Import::find($request->id)->update(
                $request->except('_token','id')
            );
            DB::commit();
            return redirect()->route('admin.import')->with(['success' => 'تم ألتحديث بنجاح']);
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
            $import= Import ::find($id);

            if (!$import)
                return redirect()->route('admin.import')->with(['error' => 'هذا الماركة غير موجود ']);

            $import->delete();

            return redirect()->route('admin.import')->with(['success' => 'تم  الحذف بنجاح']);

        } catch (\Exception $ex) {
            return redirect()->route('admin.clearance')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }
}
