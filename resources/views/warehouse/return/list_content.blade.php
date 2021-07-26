<div class="row">
    <div class="col-md-12">
        <table id="tableItem" class="display nowrap" style="width:100%">
            <thead>
                <tr class="bg-primary">
                    <th>No.</th>
                    <th>nama Item</th>
                    <th>SKU</th>
                    <th>Jumlah Sebelum</th>
                    <th>Item Pengganti</th>
                    <th>SKU Pengganti</th>
                    <th>Jumlah Setelah</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($crud->entry->detail as $key=>$detail)
                    <tr align="center">
                        <td>{{$key+1}}</td>
                        <td>{{@$detail->item->name}}</td>
                        <td>{{@$detail->item->serial}}</td>
                        <td>{{number_format($detail->qty_before)}}</td>
                        <td>{{@$detail->itemChange->name}}</td>
                        <td>{{@$detail->itemChange->serial}}</td>
                        <td>{{number_format($detail->qty_after)}}</td>
                        <td>
                            <div class="btn-group">
                                <button id="edit" onclick="edit({{ $detail->id }})" type="button" class="btn btn-warning" style="height: 100%"><i class="las la-pencil-alt"></i></button>
                                <form id="delete-form{{ $detail->id }}" method="POST" action="{{ route('returncustomerdetail.destroy', $detail->id) }}" class="js-confirm" data-confirm="Apakah anda yakin ingin menghapus data ini?">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger" style="height: 100%"><i class="las la-trash-alt"></i></button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
