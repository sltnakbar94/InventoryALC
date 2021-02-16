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

    public function generateCode($code, $model, $params = array())
    {
        $day = date("d");
        $month = date("m");
        $year = date("Y");

        $count = $model::withTrashed()->whereDate('created_at', date('Y-m-d'))->count()+1;
        $number = str_pad($count + 1,3,"0",STR_PAD_LEFT);

        $generate = $month.$day."-".$number."/WHO-".$code."/".$year;

        return $generate;
    }


}
