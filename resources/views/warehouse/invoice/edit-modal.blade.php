<!-- Modal -->
<div class="modal fade" id="editModalInvoiceDetail" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="editModalInvoiceDetailLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalInvoiceDetailLabel">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger" id="form-modal-alert" style="display:none;">Data telah tersimpan</div>
                    <form action="{{ backpack_url('Api/InvoiceDetail_update/'.$crud->entry->id) }}" method="post" id="form-edit-so-detail">
                        @csrf
                        <input type="hidden" name="invoice_id" value="{{ $crud->entry->id }}">
                        <input type="hidden" name="invoice_detail_id" value="{{ old('detail_id') }}">
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
                            <label class="control-label" for="qty">Jumlah</label>
                            <input type="number" class="form-control{{ $errors->has('qty') ? ' is-invalid' : '' }}" name="qty" value="{{ old('qty') }}" required>
                            @if ($errors->has('qty'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('qty') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="price">Harga (/KG)</label>
                            <input type="number" class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" name="price" value="{{ old('price') }}" required>
                            @if ($errors->has('price'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('price') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="discount">Discount (%)</label>
                            <input type="double" class="form-control{{ $errors->has('discount') ? ' is-invalid' : '' }}" name="discount" value="{{ old('discount') }}" required>
                            @if ($errors->has('discount'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('discount') }}</strong>
                            </span>
                            @endif
                            <label class="control-label" for="discount">gunakan tanda (.) untuk menandakan pecahan decimal</label>
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
