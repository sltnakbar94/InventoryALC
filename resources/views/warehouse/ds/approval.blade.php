@if (!empty(@$crud->entry->details->first()) && @$crud->entry->status == 0 && !empty(@$crud->entry->pic_supplier) && backpack_user()->hasRole('operator-gudang'))
    <div class="card-footer">
        <form action="{{ backpack_url('deliverybysales/process') }}" method="post" name="form_add_in_detail" id="form_add_in_detail">
            @csrf
            <input type="hidden" name="id" value="{{ $crud->entry->id }}">
            <input type="checkbox" id="confirm_process" name="confirm_process" value="Bike" required>
            <label for="confirm_process"> Saya menyetujui data diatas sudah benar</label><br>
            <button type="submit" class="btn btn-success" id="add-buton-out"><i class="fa fa-check"></i> SUBMIT</button>
        </form>
    </div>
@endif
