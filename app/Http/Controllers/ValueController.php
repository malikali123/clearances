<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

//use App\Models\Bank;

use App\Models\Account;
use App\Models\Bank;
use App\Models\Clearance;
use App\Models\Import;
use App\Models\Value;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ValueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        //admin.bank
        $value = Value::get();
        //return $account;
        return view('pages.Values.index', compact('value'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function print()
    {
        $account = Account::all();
        return view('pages.bank.index', compact('account'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('pages.Values.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {

       //return $request;
DB::beginTransaction();


        $value = Value::create([
            'product_type' => $request->type,
            'product_code' => $request->code,
            'description' => $request->description,
            'value' => $request->perscent,

        ]);


        DB::commit();
        return redirect()->route('admin.values')->with(['success' => 'تم ألتحديث بنجاح']);

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
           $value = Value::find($id);
        return view('pages.Values.edit', compact('value'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function update(Value $value, Request $request)
    {
       // return $account;
        try{
            DB::beginTransaction();
            // check email if exiested .clearaneNumber
            $value->update([
                'product_type' => $request->type,
                'product_code' => $request->code,
                'description' => $request->description,
                'value' => $request->perscent,

            ] );
            DB::commit();
            return redirect()->route('admin.values')->with(['success' => 'تم ألتحديث بنجاح']);
        }catch(\Exception $ex){
            //return $ex;
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
        public function delete($id)
    {
        try {
            //get specific categories and its translations
            $values = Value ::find($id);

            if (!$values)
                return redirect()->route('admin.values')->with(['error' => 'هذا الماركة غير موجود ']);

            $values->delete();

            return redirect()->route('admin.values')->with(['success' => 'تم  الحذف بنجاح']);

        } catch (\Exception $ex) {
            return redirect()->route('admin.values')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }
}
