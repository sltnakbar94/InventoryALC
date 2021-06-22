<div class="row" name="widget_899479116" section="before_content">

    {{-- <div class="col-md-4" data-toggle="modal">
        <div class="card text-white bg-warning mb-2 text-right">
            <div class="card-body">
                <div class="text-value">{{ number_format($counter['purchase_order']['count']) }}</div>

                <div>Purchase Order</div>

                <div class="progress progress-white progress-xs my-2">
                    <div class="progress-bar" role="progressbar" style="width: %"
                        aria-valuenow="" aria-valuemin="0" aria-valuemax="100"></div>
                </div>

                <small class="text-muted"></small>
            </div>

        </div>
    </div> --}}

    <div class="col-md-4" data-toggle="modal">
        <div class="card text-white bg-danger mb-2 text-right">
            <div class="card-body">
                <div class="text-value">{{ number_format($counter['delivery_order']['count']) }}</div>

                <div>Delivery Order</div>

                <div class="progress progress-white progress-xs my-2">
                    <div class="progress-bar" role="progressbar" style="width: %"
                        aria-valuenow="" aria-valuemin="0" aria-valuemax="100"></div>
                </div>

                <small class="text-muted"></small>
            </div>

        </div>
    </div>

    <div class="col-md-4" data-toggle="modal">
        <div class="card text-white bg-success mb-2 text-right">
            <div class="card-body">
                <div class="text-value">{{ number_format($counter['delivery_note']['count']) }}</div>

                <div>Delivery Note</div>

                <div class="progress progress-white progress-xs my-2">
                    <div class="progress-bar" role="progressbar" style="width: %"
                        aria-valuenow="" aria-valuemin="0" aria-valuemax="100"></div>
                </div>

                <small class="text-muted"></small>
            </div>

        </div>
    </div>

</div>
