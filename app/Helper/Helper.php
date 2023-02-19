<?php 

namespace App\Helper;

use App\Models\Log;
use Illuminate\Support\Facades\Auth;

class Helper
{
    public static function createLog($history)
    {
        $log[] = new Log();
        $log['history_name'] = $history;
        $log['user_id'] = auth()->user()->id;    
        Log::create($log);
    }
}

?>
