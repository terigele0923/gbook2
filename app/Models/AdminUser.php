<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
class AdminUser extends Authenticatable
{
    use SoftDeletes;
    //
    //$ifllable=>ホワイトリスト設定
    protected $fillable = [
        'username',
        'password',
        'state'
    ];

    const NORMAL = 1;//正常
    const BAN = 0;//禁止

}
