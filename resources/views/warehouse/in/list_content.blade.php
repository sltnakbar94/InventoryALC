<div class="card no-padding no-border">
    <div class="card-header">
        List Barang Keluar
    </div>
    <div class="card-body">
        <table id="example" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th width="10%">No</th>
                    <th width="30%">Item Name</th>
                    <th width="10%">QTY</th>
                    <th width="20%">QTY Confirm</th>
                    <th width="20%">Harga</th>
                    <th width="10%">Status</th>
                    <th width="15%">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($crud->fields()['items_on-bag']['data']->where('warehouse_ins_id', '=', $crud->entry->id) as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->Item->name }}</td>
                    <td id="qty{{ $item->id }}">{{ $item->qty }}</td>
                    <td id="qty{{ $item->id }}">{{ $item->qty_confirm }}</td>
                    <td>{{ $item->price }}</td>
                    <td>{{ $item->flag }}</td>
                    <td>
                        <div class="btn-group">
                            <button onclick="edit('{{ $item->id }}')" type="button" class="btn btn-primary"><i class="fas fa-pencil-alt"></i></button>
                            <button onclick="hapus('{{ $item->id }}')" type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                            @if ($item->flag == 'submit')
                            <div class="btn-group" role="group">
                                <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Status
                                </button>
                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                    <a class="dropdown-item" onclick="accept('{{ $item->id }}')" href="#">Setujui</a>
                                    <a class="dropdown-item" onclick="decline('{{ $item->id }}')" href="#">Tolak</a>
                                </div>
                              </div>

                            @endif
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Item Name</th>
                    <th>QTY</th>
                    <th>QTY Confirm</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
