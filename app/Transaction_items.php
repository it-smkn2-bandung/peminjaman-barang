<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Transaction;

class Transaction_items extends Model
{
    public function transaction() {
        return $this->belongsTo(Transaction::class);
    }
}
