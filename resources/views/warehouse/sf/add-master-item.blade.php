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
                            <select name="uom" id="uom" onchange="changeFunc();" class="form-control{{ $errors->has('uom') ? ' is-invalid' : '' }} select2" style="width: 100%" required>
                                <option value="">--PILIH SATUAN--</option>
                                @foreach(\App\Models\Unit::get() as $value => $text)
                                    <option value="{{ $text->id }}">{{ $text->name }}</option>
                                @endforeach
                                <option value="NewItem" >Tambah Satuan</option>
                            </select>

                            <div class="form-group mt-2" style="display:none" id="AddItem">
                                <input type="text" class="form-control" id="exampleFormControlInput" name="" placeholder="Input Satuan">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="category">Kategori</label><br>
                            <select name="category" id="category" onchange="AddCategory();" class="form-control{{ $errors->has('category') ? ' is-invalid' : '' }} select2" style="width: 100%" required>
                                <option value="">--PILIH KATEGORI--</option>
                                @foreach(\App\Models\Category::get() as $value => $text)
                                    <option value="{{ $text->id }}">{{ $text->name }}</option>
                                @endforeach
                                <option value="AddCategory">Tambah Kategori</option>
                            </select>
                             <div class="form-group mt-2" style="display:none" id="addCategory">
                                <input type="text" class="form-control" id="newCategory" name="" placeholder="Input Kategori">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="brand">Brand</label><br>
                            <select name="brand" id="brand" onchange="AddBrand()" class="form-control{{ $errors->has('brand') ? ' is-invalid' : '' }} select2" style="width: 100%" required>
                                <option value="">--PILIH BRAND--</option>
                                @foreach(\App\Models\Brand::get() as $value => $text)
                                    <option value="{{ $text->id }}">{{ $text->name }}</option>
                                @endforeach
                                <option value="AddBrand">Tambah Brand</option>
                                {{-- <a href="{{ backpack_url('brand/create') }}">Tambah Brand</a> --}}
                            </select>
                            <div class="form-group mt-2" style="display:none" id="addBrand">
                                <input type="text" class="form-control" id="newBrand" name="" placeholder="Tambah Brand">
                            </div>
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

<script type="text/javascript">

    function changeFunc() {
     var selectBox = document.getElementById("uom");
     var selectedValue = selectBox.options[selectBox.selectedIndex].value;
    var addItem = document.getElementById("AddItem")
     if(selectedValue == "NewItem"){
        addItem.style.display = "block" ;
     }else{
        addItem.style.display = "none" ;
     }
    }

    function AddCategory(){
    var newCategory = document.getElementById("category");
    var selectedValues = newCategory.options[newCategory.selectedIndex].value;
    var addCategory = document.getElementById("addCategory");
    if(selectedValues == "AddCategory"){
        addCategory.style.display = "block";
    }else{
        addCategory.style.display = "none" ;
    }
    }

    function AddBrand(){
        var newBrand = document.getElementById("brand");
        var selectedValue = newBrand.options[newBrand.selectedIndex].value ;
        var addBrand = document.getElementById("addBrand");
        if(selectedValue == "AddBrand"){
            addBrand.style.display = "block";
        }else{
            addBrand.style.display = "none"
        }
    }



   </script>
