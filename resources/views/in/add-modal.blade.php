<!-- Modal -->
<div class="modal fade" id="addModalinDetail" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="addModalinDetailLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addModalinDetailLabel">Tambah Data</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="alert alert-danger" id="form-modal-alert" style="display:none;">Data telah tersimpan</div>
          <form action="{{ route('windetails.store') }}" method="post" name="form_in_detail_add" id="form_in_detail_add">
              @csrf
              <input type="hidden" name="warehouse_in_id" value="{{ $crud->entry->id }}">

              <div class="form-group">
                  <label class="control-label" for="item_id">Nama Barang</label>
                  <div>
                      <select name="item_id" id="item_id" class="form-control{{ $errors->has('item_id') ? ' is-invalid' : '' }}" required>
                        <option value="">--PILIH BARANG--</option>
                          @foreach(\App\Models\Item::pluck('name', 'id') as $value => $text)
                                  <option value="{{ $text }}">{{ $text }}</option>
                          @endforeach
                      </select>
                  </div>
              </div>
              <div class="form-group">
                  <label class="control-label" for="qty">Jumlah</label>
                  <div>
                      <input type="number" class="form-control{{ $errors->has('qty') ? ' is-invalid' : '' }}" name="qty" value="{{ old('qty') }}" required>
                      @if ($errors->has('qty'))
                          <span class="invalid-feedback">
                              <strong>{{ $errors->first('qty') }}</strong>
                          </span>
                      @endif
                  </div>
              </div>
              <div class="form-group">
                <label class="control-label" for="price">Harga</label>
                <div>
                    <input type="number" class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" name="price" value="{{ old('price') }}" required>
                    <p class="help-block" style="font-size:80%;">Usahakan jangan scroll kolom dengan mouse karena nilai akan berubah.</p>
                    @if ($errors->has('price'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('price') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group">
                <label class="control-label" for="note">Catatan</label>
                <div>
                    <textarea id="note" name="note" rows="4" cols="50" class="form-control{{ $errors->has('note') ? ' is-invalid' : '' }}" value="{{ old('note') }}"></textarea>
                    @if ($errors->has('note'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('note') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
              <div class="form-group text-right">
                  <label for=""></label>
                  <button type="submit" class="btn btn-primary" id="add-buton-in">SIMPAN</button>
              </div>

          </form>
        </div>
      </div>
    </div>
  </div>
