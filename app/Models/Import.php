<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Import extends Model
{
    protected $table = 'imports';

    protected $with = ['value'];

    protected $fillable = [
        'value_id', 'decription', 'quantity', 'price', 'clearance_id',


    ];

    /**
     * $type
     * define the using place of this account .
     */

    public static $type = [
        'system' => 2,
        'main' => 1
    ];


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
