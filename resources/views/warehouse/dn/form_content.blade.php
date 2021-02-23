
<div class="table">
    <table class="table no-border">
        <tr>
            <td>Tanggal Sales Order</td>
            <td><strong>{{ date('d M Y', strtotime($crud->entry->dn_date)) }}</strong></td>
        </tr>
        <tr>
            <td>Ekspedisi</td>
            @if ($crud->entry->module == 'sales_order')
                <td><strong>{{ $crud->entry->expedition }}</strong></td>
            @else
                <td><strong>{{ $crud->entry->warehouseOut->expedition }}</strong></td>
            @endif
        </tr>
        <tr>
            <td>Nama Driver</td>
            <td><strong>{{ $crud->entry->driver }}</strong></td>
        </tr>
        <tr>
            <td>Kontak Driver</td>
            <td><strong>{{ $crud->entry->driver_phone }}</strong></td>
        </tr>
        <tr>
            <td>Estimasi Keberangkatanr</td>
            <td><strong>{{ date('d M Y', strtotime($crud->entry->etd)) }}</strong></td>
        </tr>
        <tr>
            <td>Estimasi Sampai</td>
            <td><strong>{{ date('d M Y', strtotime($crud->entry->eta)) }}</strong></td>
        </tr>
    </table>
</div>
