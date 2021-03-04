<!-- Modal -->
<div class="modal fade" id="qcModalPurchaseOrderDetail" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="qcModalPurchaseOrderDetailLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="qcModalPurchaseOrderDetailLabel">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger" id="form-modal-alert" style="display:none;">Data telah tersimpan</div>
                    <form action="{{ backpack_url('bagitemwarehousein/qc') }}" method="post" name="form_add_in_detail" id="form_add_in_detail">
                        @csrf
                        <input type="hidden" name="warehouse_in_id" value="{{ $crud->entry->id }}">
                        <input type="hidden" id="warehouse_in_detail_id" name="warehouse_in_detail_id" value="">

                        <div class="form-group">
                            <label class="control-label" for="item_id">Nama Barang</label><br>
                            <select style="width: 100%" name="item_id" id="item_id" class="form-control{{ $errors->has('item_id') ? ' is-invalid' : '' }} select2" required disabled>
                            <option value="">--PILIH BARANG--</option>
                                @foreach(\App\Models\Item::select('id','name')->get() as $value => $text)
                                        <option value="{{ $text->id }}">{{ $text->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="qty_confirm">Jumlah Lolos Pengecekan</label>
                            <input type="number" class="form-control{{ $errors->has('qty_confirm') ? ' is-invalid' : '' }}" name="qty_confirm" value="{{ old('qty_confirm') }}" required>
                            @if ($errors->has('qty_confirm'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('qty_confirm') }}</strong>
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
