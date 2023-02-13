<?php 

namespace App\Helper;

use App\Models\Log;

class Helper
{
    public static function createLog($history, $username)
    {
        $log[] = new Log();
        $log['history_name'] = $history;
        $log['username'] = $username;
        Log::create($log);
    }
}

?>
