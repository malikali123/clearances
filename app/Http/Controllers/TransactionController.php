<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

//use App\Models\Bank;

use App\Models\Account;
use App\Models\Bank;
use App\Models\Clearance;
use App\Models\Import;
use App\Models\Transacsions;
use App\Models\Transaction;
use App\Models\Value;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        //admin.bank
        $transactions = Transacsions::with('values','imports')->get();
        return $transactions;
        return view('pages.Accounts.index', compact('transactions'));
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
        $clearances = Clearance::all();
        $accounts = Account::get();
        $values = Import::all();
        $imports = Value::all();
       // return $bank;

        return view('pages.Transactions.add', compact('clearances','accounts', 'imports','values'));
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

        // return $request->all();

        $transaction = Transacsions::create([
            'import_id' => $request->product_type,
            'clearance_id' => $request->name,
            'account_id' => $request->account_number,
//            'value_id' => $request->type,
            'amount' => 0 ,
            'statement' => $request->description,

        ]);
        DB::commit();
        // Transaction::get(values, imports);
    //    $data =  $transaction->amount = values->product_type * imports->price/100;
      //  'amount' => $request->product_type * $request-> type/100 ,
///return $data;
        return redirect()->route('admin.transactions')->with(['success' => 'تم ألتحديث بنجاح']);

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
      //  $clearance = Clearance::all();
        $data = Clearance::all();
        $bank = Bank::get();

        $account = Account::find($id);
        return view('pages.Accounts.edit', compact('bank','account', 'data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function update(Account $account, Request $request)
    {
       // return $account;
        try{
            DB::beginTransaction();
            // check email if exiested .clearaneNumber
            $account->update([
                'bank_id' => $request->bank_name,
                'accountNumber' => $request->account_number,
                'clearance_id' => $request->clearance,
                'balance' => $request->palance,
            ] );
            DB::commit();
            return redirect()->route('admin.account')->with(['success' => 'تم ألتحديث بنجاح']);
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
            $account = Account ::find($id);

            if (!$account)
                return redirect()->route('admin.account')->with(['error' => 'هذا الماركة غير موجود ']);

            $account->delete();

            return redirect()->route('admin.account')->with(['success' => 'تم  الحذف بنجاح']);

        } catch (\Exception $ex) {
            return redirect()->route('admin.account')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }
}
