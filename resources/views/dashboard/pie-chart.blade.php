<div class="row">
    <div class="col-md-5">
        @php
        Widget::add([
            'type'    => 'div',
            'class'   => 'row',
            'content' => [ // widgets
                ['type'       => 'chart',
                'controller' => \App\Http\Controllers\Admin\Charts\CounterChartController::class,
                'wrapper' => ['class' => 'col text-center'],
                'content' => ['header' => 'Persentase'],
                ]
            ]
        ])->section('after_content');
        @endphp
    </div>
</div>
