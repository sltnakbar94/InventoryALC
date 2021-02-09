<div class="card no-padding no-border">
    <div class="card-header">
        List Barang Keluar
    </div>
    <div class="card-body">
        <table id="example" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Item Name</th>
                    <th>QTY</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($crud->fields()['items_on-bag']['data'] as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->Item->name }}</td>
                    <td id="qty{{ $item->id }}">{{ $item->qty }}</td>
                    <td>
                        <a href="#" onclick="edit('{{ $item->id }}')" id="btn_modal-edit"><i class="fas fa-pencil-alt"></i></a>
                        <a href="#" onclick="hapus('{{ $item->id }}')"><i class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Item Name</th>
                    <th>QTY</th>
                    <th>Action</th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
