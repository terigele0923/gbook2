<?php 
use App\Models\AdminUser;
    return [
    
        'admin'=>[
            'state'=>[
                AdminUser::NORMAL => '<span class="badge bg-success">正常</span>',
                AdminUser::BAN => '<span class="badge bg-danger">禁用</span>',
            ]
        ]
    ];
?>