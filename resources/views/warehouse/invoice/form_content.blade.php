
<div class="table">
    <table class="table no-border">
        <tr>
            <td>Tanggal Invoice</td>
            <td><strong>{{ date('d M Y', strtotime($crud->entry->invoice_date)) }}</strong></td>
        </tr>
        <tr>
            <td>Nomor DN</td>
            <td><strong>{{ $crud->entry->dn_number }}</strong></td>
        </tr>
    </table>
</div>
