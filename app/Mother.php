<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mother extends Model
{
    protected $fillable = [
        'sh_shenasname', 'birth_date', 'birth_place','birth_issued','serial_shenasname',
        'horoof_shenasname','sh_seri_shenasname','father_name','phone',
        'job' ,'is_farhangi' , 'code_melli' , 'first_name' , 'last_name'
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
