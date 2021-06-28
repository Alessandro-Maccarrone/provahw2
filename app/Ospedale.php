<?php

namespace App;
use Auth;
use Illuminate\Database\Eloquent\Model;

class Ospedale extends Model
{
    protected $table = 'ospedali';

    public function favorited() {
        return (bool) Preferiti::where('iduser', Auth::id())
                        ->where('idosp', $this->id)
                        ->first();
    }
}
