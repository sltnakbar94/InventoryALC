<!-- Modal -->
<div class="modal fade" id="addModalDeliveryNoteDetail" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="addModalDeliveryNoteDetailLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addModalDeliveryNoteDetailLabel">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger" id="form-modal-alert" style="display:none;">Data telah tersimpan</div>
                    <form action="{{ route('submissionformdetail.store') }}" method="post" name="form_add_dn_detail" id="form_add_dn_detail">
                        @csrf
                        <input type="hidden" name="submission_form_id" value="{{ $crud->entry->id }}">
                        <div class="form-group">
                            <label class="control-label" for="item_id">Nama Barang</label><br>
                            <select name="item_id" id="mySelect2" class="form-control{{ $errors->has('item_id') ? ' is-invalid' : '' }} select2" style="width: 100%" required>
                                <option value="">--PILIH BARANG--</option>
                                @foreach(\App\Models\Item::get() as $value => $text)
                                    @if (!empty($text->stock->where('warehouse_id', '=', $crud->entry->warehouse_id)->first()))
                                        @php
                                            $stock = $text->stock->where('warehouse_id', '=', $crud->entry->warehouse_id)->first();
                                        @endphp
                                        <option value="{{ $text->id }}">{{ $text->name }} - Stock on Hand {{ @$stock->stock_on_hand }} - Stock on Location {{ @$stock->stock_on_location }} - Stock Indent {{ @$stock->stock_indent }}</option>
                                    @else
                                        <option value="{{ $text->id }}">{{ $text->name }} - Stock Kosong</option>
                                    @endif
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

