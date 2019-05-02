<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Transaction_items;

class Transaction extends Model
{
    public function transaction_item() {
        return $this->hasMany(Transaction_items::class);
    }
}
