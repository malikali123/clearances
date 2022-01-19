<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Clearance extends Authenticatable
{
    protected $table = 'clearances';

    protected $fillable = [
        'name', 'phon', 'email', 'clearaneNumber', 'password',


    ];




    /**
     * Get the branch that owns the Bank
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function branch()
    {
        return $this->belongsTo(Branch::class, 'branch_id', 'id');
    }

    public function emp()
    {
        return $this->belongsTo('App\Models\Employee', 'emp_id', 'id');
    }

    /**
     * Get all of the transactions for the Bank
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function transactions()
    {
        return $this->hasMany(Transaction::class, 'bank_id', 'id');
    }

}
