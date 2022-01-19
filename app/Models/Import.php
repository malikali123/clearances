<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Import extends Model
{
    protected $table = 'imports';

    protected $fillable = [
        'value_id', 'decription', 'quantity', 'price', 'total', 'amount', 'status', 'clearance_id',


    ];

    /**
     * $type
     * define the using place of this account .
     */

    public static $type = [
        'system' => 2,
        'main' => 1
    ];



    public static $status_name = [
        'غير مخلص',
        ' مخلص',


    ];

    public function getStatus()
    {
        return Import::$status_name[$this->status];
    }




//    public function getStatus()
//    {
//        return Transform::$status_name[$this->status];
//    }

    /**
     * Get the branch that owns the Bank
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function clearance()
    {
        return $this->belongsTo(Clearance::class, 'clearance_id', 'id');
    }

    public function value()
    {
        return $this->belongsTo(Value::class, 'value_id', 'id');
    }


    public function getAmountAttribute($amount){

        $amount= $this->total * $this->value->value / 100;
        return $amount;

    }

    /**
     * Get all of the transactions for the Bank
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
//    public function transactions()
//    {
//        return $this->hasMany(Transaction::class, 'bank_id', 'id');
//    }

}
