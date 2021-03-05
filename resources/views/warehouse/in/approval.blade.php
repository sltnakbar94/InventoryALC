@if (!empty(@$crud->entry->details->first()) && @$crud->entry->status == 0)
    <div class="card-footer">
        <form action="{{ backpack_url('warehousein/process') }}" method="post" name="form_add_in_detail" id="form_add_in_detail">
            @csrf
            <input type="hidden" name="id" value="{{ $crud->entry->id }}">
            <input type="checkbox" id="confirm_process" name="confirm_process" value="Bike" required>
            <label for="confirm_process"> Saya menyetujui data diatas sudah benar</label><br>
            <button type="submit" class="btn btn-success" id="add-buton-out"><i class="fa fa-check"></i> SUBMIT</button>
        </form>
    </div>
@endif
@if (!empty(@$crud->entry->details->first()) && @$crud->entry->status == 1)
    <div class="card-footer" align="center">
        <div class="dropdown">
            <button class="btn btn-success dropdown-toggle col-md-8" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Approval
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="{{backpack_url('purchaseorder/'.$crud->entry->id.'/accept')}}">Setujui</a>
                <a class="dropdown-item" href="{{backpack_url('purchaseorder/'.$crud->entry->id.'/denied')}}">Tolak</a>
            </div>
        </div>
    </div>
@endif
