
<div class="table">
    <table class="table no-border">
        <tr>
            <td>Tanggal Purchase Order</td>
            <td><strong>{{ date('d M Y', strtotime($crud->entry->po_date)) }}</strong></td>
        </tr>
        <tr>
            <td>Supplier</td>
            <td><strong>{{ $crud->entry->supplier->company }}</strong></td>
        </tr>
        @if (!empty($crud->entry->pic_supplier))
            <tr>
                <td>Att Supplier</td>
                <td><strong>{{ $crud->entry->pic_supplier }}</strong></td>
            </tr>
        @else
            <tr>
                <td>Att Supplier</td>
                <td>
                    <form action="{{ backpack_url('warehousein-pic') }}" id="supplier-att" method="post">
                        @csrf
                        {!! Form::hidden('id', $crud->entry->id, [null]) !!}
                        {!! Form::hidden('type', 'supplier', [null]) !!}
                        @php
                            $pics = json_decode($crud->entry->supplier->pic);
                        @endphp
                        <div class="form-group">
                            <select name="pic" class="form-control select2" required id="pic">
                            <option value="">- Pilih Item -</option>
                            @foreach ($pics as $pic)
                                <option value="{{ $pic->name }}">{{ $pic->name }} - {{ $pic->email }} - {{ $pic->telp }}</option>
                            @endforeach
                            </select>
                        </div>
                        {!! Form::submit('Pilih PIC', ['class' => 'btn btn-primary', 'id' => 'btn-submit']) !!}
                    </form>
                </td>
            </tr>
        @endif
        @if (!empty($crud->entry->discount) && $crud->entry->discount != 0)
            <tr>
                <td>Discount</td>
                <td><strong>{{ $crud->entry->discount }}%</strong></td>
            </tr>
        @endif
        @if ($crud->entry->ppn == 1)
            <tr>
                <td>PPN</td>
                <td><strong>10%</strong></td>
            </tr>
        @endif
        <tr>
            <td>Grand Total</td>
            <td><strong>Rp. {{number_format($crud->entry->grand_total)}}</strong></td>
        </tr>
        <tr>
            <td>Keterangan</td>
            <td><textarea style="border: none; width:auto; height:auto; font-weight: bold">{{ $crud->entry->description }}</textarea></td>
        </tr>
    </table>
</div>
