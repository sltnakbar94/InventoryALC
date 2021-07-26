
<div class="table">
    <table class="table no-border">
        <tr>
            <td>Tanggal PO</td>
            <td><strong>{{ date('d M Y', strtotime(@$crud->entry->dn_date)) }}</strong></td>
        </tr>
        <tr>
            <td>Nomor DO</td>
            <td><strong>{{ @$crud->entry->do_number }}</strong></td>
        </tr>
        <tr>
            <td>Gudang Penerima</td>
            <td><strong>{{ @$crud->entry->warehouse->name }}</strong></td>
        </tr>
        <tr>
            <td>Pengirim</td>
            <td><strong>{{ @$crud->entry->sender }}</strong></td>
        </tr>
        <tr>
            <td>Alamat Pengirim</td>
            <td><strong>{{ @$crud->entry->sender_address }}</strong></td>
        </tr>
        <tr>
            <td>Penerima</td>
            <td><strong>{{ @$crud->entry->consignee }}</strong></td>
        </tr>
        <tr>
            <td>Plat</td>
            <td><strong>{{ @$crud->entry->plat_number }}</strong></td>
        </tr>
        <tr>
            <td>Pengemudi</td>
            <td><strong>{{ @$crud->entry->driver }}</strong></td>
        </tr>
        <tr>
            <td>Kontak Pengemudi</td>
            <td><strong>{{ @$crud->entry->driver_phone }}</strong></td>
        </tr>
    </table>
</div>
