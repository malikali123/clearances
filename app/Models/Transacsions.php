<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transacsions extends Model
{
    protected $table = 'transacsions';

    protected $fillable = [
        'import_id' ,
        'clearance_id' ,
        'account_id' ,
        'value_id' ,
        'amount',
        'statement',
    ];

    /**
     * $type
     * define the using place of this account .
     */




    /**
     * Get the branch that owns the Bank
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function imports()
    {
        return $this->belongsTo(Import::class, 'import_id', 'id');
    }

    public function values()
    {
        return $this->belongsTo(Value::class, 'value_id', 'id');
    }

    public function clearance()
    {
        return $this->belongsTo(Clearance::class, 'clearance_id', 'id');
    }

    public function account()
    {
        return $this->belongsTo(Account::class, 'account_id', 'id');
    }

    public function getAmountAttribute($amount){

        $amount= $this->values->product_code * $this->imports->price/100;
        return $amount;

    }

    /**
     * Get all of the transactions for the Bank
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function value()
    {
        return $this->hasOne(Value::class, 'bank_id', 'id');
    }

}
