<!-- Modal -->
<div class="modal fade" id="revisionModalDeliveryOrder" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="revisionModalDeliveryOrderLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="revisionModalDeliveryOrderLabel">Revisi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger" id="form-modal-alert" style="display:none;">Data telah tersimpan</div>
                    <form action="{{ backpack_url('warehouseout/revision') }}" method="post" name="form_revision_out_detail" id="form_revision_out_detail">
                        @csrf
                        <input type="hidden" name="warehouse_out_id" value="{{ $crud->entry->id }}">

                        <div class="form-group">
                            <label class="control-label" for="revision">Keterangan</label>
                            <textarea name="revision" class="form-control{{ $errors->has('revision') ? ' is-invalid' : '' }}" id="revision" cols="auto" rows="auto" required></textarea>
                            @if ($errors->has('revision'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('revision') }}</strong>
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
