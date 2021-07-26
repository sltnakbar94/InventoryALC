
<div class="table">
    <table class="table no-border">
        <tr>
            <td>Tanggal Invoice</td>
            <td><strong>{{ date('d M Y', strtotime(@$crud->entry->invoice->invoice_date)) }}</strong></td>
        </tr>
        <tr>
            <td>Nomor DN</td>
            <td><strong>{{ @$crud->entry->deliveryNote->dn_number }}</strong></td>
        </tr>
        <tr>
            <td>Nomor DO</td>
            <td><strong>{{ @$crud->entry->warehouseOut->do_number }}</strong></td>
        </tr>
        <tr>
            <td>Customer</td>
            <td><strong>{{ @$crud->entry->warehouseOut->pic_customer }}</strong></td>
        </tr>
    </table>
</div>
