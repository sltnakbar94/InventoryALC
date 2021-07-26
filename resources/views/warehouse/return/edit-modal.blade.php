<!-- Modal -->
<div class="modal fade" id="editModalReturnCustomerDetail" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="editModalReturnCustomerDetailLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalReturnCustomerDetailLabel">Edit Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger" id="form-modal-alert" style="display:none;">Data telah tersimpan</div>
                <form action="{{ backpack_url('returncustomerdetailupdate') }}" method="post" enctype='multipart/form-data'>
                    @csrf
                        <input type="hidden" name="return_customer_id" value="{{ $crud->entry->id }}">
                        <input type="hidden" name="return_customer_detail_id" value="{{ old('detail_id') }}">
                        <div class="form-group">
                            <label class="control-label" for="item_id">Nama Barang</label><br>
                            <select name="item_id" id="item_id" class="form-control{{ $errors->has('item_id') ? ' is-invalid' : '' }} select2" style="width: 100%" required disabled>
                            <option value="">--PILIH BARANG--</option>
                                @foreach(\App\Models\Item::select('id','name')->get() as $value => $text)
                                        <option value="{{ $text->id }}">{{ $text->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="qty_before">Jumlah</label>
                            <input type="number" class="form-control{{ $errors->has('qty_before') ? ' is-invalid' : '' }}" name="qty_before" value="{{ old('qty_before') }}" required disabled>
                            @if ($errors->has('qty_before'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('qty_before') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="qty">Jumlah Retur</label>
                            <input type="number" class="form-control{{ $errors->has('qty') ? ' is-invalid' : '' }}" name="qty" value="{{ old('qty') }}" required>
                            @if ($errors->has('qty'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('qty') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="item_change_id">Nama Barang</label><br>
                            <select name="item_change_id" id="mySelect2" class="form-control{{ $errors->has('item_change_id') ? ' is-invalid' : '' }} select2" style="width: 100%">
                            <option value="">--PILIH BARANG--</option>
                                @foreach(\App\Models\Stock::join('items', 'stocks.item_id', '=', 'items.id')->where('warehouse_id', '=', $crud->entry->warehouseOut->warehouse_id)->orderBy('items.expirate_date', 'asc')->get() as $text)
                                        <option value="{{ @$text->item_id }}">{{ @$text->item->name }} - Stock on Hand : {{ @$text->stock_on_hand }}, Stock on Location {{ @$text->stock_on_location }} -- Expirate Date : {{ date('d-m-Y', strtotime(@$text->item->expirate_date)) }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="qty_change">Jumlah Barang Pengganti</label>
                            <input type="number" class="form-control{{ $errors->has('qty_change') ? ' is-invalid' : '' }}" name="qty_change" value="0" required>
                            @if ($errors->has('qty_change'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('qty_change') }}</strong>
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
