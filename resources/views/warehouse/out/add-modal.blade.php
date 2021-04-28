<!-- Modal -->
<div class="modal fade" id="addModalWarehouseOut" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="addModalWarehouseOutLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addModalWarehouseOutLabel">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger" id="form-modal-alert" style="display:none;">Data telah tersimpan</div>
                    <form action="{{ route('bagitemwarehouseout.store') }}" method="post" name="form_add_in_detail" id="form_add_in_detail">
                        @csrf
                        <input type="hidden" name="warehouse_out_id" value="{{ $crud->entry->id }}">

                        <div class="form-group">
                            <label class="control-label" for="item_id">Nama Barang</label><br>
                            <select name="item_id" id="mySelect2" class="form-control{{ $errors->has('item_id') ? ' is-invalid' : '' }} select2" style="width: 100%" required>
                            <option value="">--PILIH BARANG--</option>
                                @foreach(\App\Models\Stock::where('warehouse_id', '=', $crud->entry->warehouse_id)->get() as $text)
                                        <option value="{{ @$text->item_id }}">{{ @$text->item->name }} - Stock on Hand : {{ @$text->stock_on_hand }}, Stock on Location {{ @$text->stock_on_location }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="qty">Jumlah</label>
                            <input type="number" class="form-control{{ $errors->has('qty') ? ' is-invalid' : '' }}" name="qty" value="{{ old('qty') }}" required>
                            @if ($errors->has('qty'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('qty') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group text-right">
                            <label for=""></label>
                            <button type="submit" class="btn btn-primary" id="add-buton-out">SIMPAN</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
