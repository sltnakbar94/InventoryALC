<?php
namespace App\Services;

class GlobalServices  
{
    /**
     * Check All Flag or Status If all Flag is Accepted.
     *
     * @param array $listApproval
     * @param String $flag
     * @return Boolean
     */
    public function CheckingOnArray($listApproval, $flag)
    {
        foreach ($listApproval as $item) {
            $list[] = $item->flag;
        }
        if (in_array($flag, $list)) {
            return false;
        }else{
            return true;
        }
        // return in_array($flag, $list);
    }


}
