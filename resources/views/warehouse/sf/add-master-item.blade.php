<!-- Modal -->
<div class="modal fade" id="addModalMasterItem" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="addModalMasterItemLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addModalMasterItemLabel">Tambah Data Master Item</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger" id="form-modal-alert" style="display:none;">Data telah tersimpan</div>
                    <form action="{{backpack_url('submissionformdetail/add-item')}}" method="post" name="form_add_dn_detail" id="form_add_dn_detail">
                        @csrf
                        <input type="hidden" name="submission_form_id" value="{{ $crud->entry->id }}">
                        <div class="form-group">
                            <label class="control-label" for="item">Nama Barang</label><br>
                            <input type="text" class="form-control{{ $errors->has('item') ? ' is-invalid' : '' }}" name="item" value="{{ old('item') }}" required>
                            @if ($errors->has('item'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('item') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="serial">Nomor Serial</label><br>
                            <input type="text" class="form-control{{ $errors->has('serial') ? ' is-invalid' : '' }}" name="serial" value="{{ old('serial') }}" required>
                            @if ($errors->has('serial'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('serial') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="uom">Satuan</label><br>
                            <select name="uom" id="uom" class="form-control{{ $errors->has('uom') ? ' is-invalid' : '' }} select2" style="width: 100%" required>
                                <option value="">--PILIH SATUAN--</option>
                                @foreach(\App\Models\Unit::get() as $value => $text)
                                    <option value="{{ $text->id }}">{{ $text->name }}</option>
                                    <option href="{{ backpack_url('unit/create') }}">Tambah Satuan</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="category">Kategori</label><br>
                            <select name="category" id="category" class="form-control{{ $errors->has('category') ? ' is-invalid' : '' }} select2" style="width: 100%" required>
                                <option value="">--PILIH KATEGORI--</option>
                                @foreach(\App\Models\Category::get() as $value => $text)
                                    <option value="{{ $text->id }}">{{ $text->name }}</option>
                                    <option href="{{ backpack_url('category/create') }}">Tambah Kategori</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="brand">Brand</label><br>
                            <select name="brand" id="brand" class="form-control{{ $errors->has('brand') ? ' is-invalid' : '' }} select2" style="width: 100%" required>
                                <option value="">--PILIH BRAND--</option>
                                @foreach(\App\Models\Brand::get() as $value => $text)
                                    <option value="{{ $text->id }}">{{ $text->name }}</option>
                                    <option href="{{ backpack_url('brand/create') }}">Tambah Brand</option>
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

