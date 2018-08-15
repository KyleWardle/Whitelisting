<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Whitelist extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    protected $table = "whitelist";
    protected $primaryKey = 'uid';
    protected $connection = "mysql-alt";

    public $timestamps = false;

    protected $fillable = [
        'SD_Rank', 'SD_GU', 'SD_HP', 'SD_IA', 'SD_K9', 'SD_K9', 'SD_CID', 'SD_FTO', 'SD_SERT', 'SD_Aviation', 'EMS_Rank', 'EMS_Aviation', 'EMS_FD', 'Staff_Rank'
    ];
}
