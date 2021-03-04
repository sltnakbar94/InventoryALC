<!-- Modal -->
@php
    // $query = \App\Models\SubmissionForm::selectRaw('')
    $relations = $crud->entry->purchaseRequisition;
    $subset = $relations->map(function ($relation) {
    return collect($relation->toArray())
        ->only(['id'])
        ->all();
    })->toArray();
    $relasi_detail = \App\Models\SubmissionFormDetail::whereIn('submission_form_id', array_column($subset, 'id'))->get();
    $sub_relasi_detail = $relasi_detail->map(function ($relasi) {
    return collect($relasi->toArray())
        ->only(['item_id'])
        ->all();
    })->toArray();
    $items = \App\Models\SubmissionFormDetail::whereIn('id', array_column($sub_relasi_detail, 'item_id'))->get();
    dd($items)
@endphp
<div class="modal fade" id="addModalWarehouseInDetail" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="addModalWarehouseInDetailLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addModalWarehouseInDetailLabel">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger" id="form-modal-alert" style="display:none;">Data telah tersimpan</div>
                    <form action="{{ route('bagitemwarehousein.store') }}" method="post" name="form_add_in_detail" id="form_add_in_detail">
                        @csrf
                        <input type="hidden" name="warehouse_in_id" value="{{ $crud->entry->id }}">

                        <div class="form-group">
                            <label class="control-label" for="item_id">Nama Barang</label><br>
                            <select name="item_id" id="mySelect2" class="form-control{{ $errors->has('item_id') ? ' is-invalid' : '' }} select2" style="width: 100%" required>
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
                            <label class="control-label" for="price">Harga Satuan</label>
                            <input type="number" class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" name="price" value="{{ old('price') }}" required>
                            @if ($errors->has('price'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('price') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="discount">Diskon (%)</label>
                            <input type="number" class="form-control{{ $errors->has('discount') ? ' is-invalid' : '' }}" name="discount" value="{{ old('discount') }}">
                            @if ($errors->has('discount'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('discount') }}</strong>
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
