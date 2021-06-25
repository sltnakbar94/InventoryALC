<?php

namespace App\Http\Controllers\Admin\Charts;

use Backpack\CRUD\app\Http\Controllers\ChartController;
use ConsoleTVs\Charts\Classes\Chartjs\Chart;
use App\Http\Controllers\Admin\AdminController;
use Illuminate\Http\Request;
use Balping\JsonRaw\Encoder;
use Balping\JsonRaw\Raw;

/**
 * Class CounterChartController
 * @package App\Http\Controllers\Admin\Charts
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class CounterChartController extends ChartController
{
    public function setup()
    {
        $db = new AdminController;

        $db->counter();

        $this->chart = new Chart();
        $this->chart->labels([
            'Status Paket',
        ]);

        $this->chart->load(backpack_url('charts/counter'));

        $this->chart = new Chart();

        $this->chart->dataset('Status Pengiriman', 'pie', [
                // (int)$db->data['counter']['purchase_order']['count'],
                (int)$db->data['counter']['delivery_order']['count'],
                (int)$db->data['counter']['delivery_note']['count'],
            ])->backgroundColor([
                // '#FFA500',
                '#CD211F',
                '#4dbd74',
            ]);

        $this->chart->displayAxes(false);
        $this->chart->displayLegend(true);

        $this->chart->labels(['Delivery Order', 'Surat Jalan']);
    }

    /**
     * Respond to AJAX calls with all the chart data points.
     *
     * @return json
     */
    // public function data()
    // {
    //     $users_created_today = \App\User::whereDate('created_at', today())->count();

    //     $this->chart->dataset('Users Created', 'bar', [
    //                 $users_created_today,
    //             ])
    //         ->color('rgba(205, 32, 31, 1)')
    //         ->backgroundColor('rgba(205, 32, 31, 0.4)');
    // }
}
