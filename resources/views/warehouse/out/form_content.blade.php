
<div class="table">
    <table class="table no-border">
        <tr>
            <td>Tanggal Sales Order</td>
            <td><strong>{{ date('d M Y', strtotime($crud->entry->do_date)) }}</strong></td>
        </tr>
        <tr>
            <td>Customer</td>
            <td><strong>{{ $crud->entry->customer->company }}</strong></td>
        </tr>
        @if (!empty($crud->entry->pic_customer))
            <tr>
                <td>Att Customer</td>
                <td><strong>{{ $crud->entry->pic_customer }}</strong></td>
            </tr>
        @else
            <tr>
                <td>Att Customer</td>
                <td>
                    <form action="{{ backpack_url('warehouseout-pic') }}" id="customer-att" method="post">
                        @csrf
                        {!! Form::hidden('id', $crud->entry->id, [null]) !!}
                        {!! Form::hidden('type', 'customer', [null]) !!}
                        @php
                            $pics = json_decode($crud->entry->customer->pic);
                        @endphp
                        <div class="form-group">
                            <select name="pic" class="form-control select2" required id="pic">
                            <option value="">- Pilih Item -</option>
                            @foreach ($pics as $pic)
                                <option value="{{ @$pic->name }}">{{ @$pic->name }} - {{ @$pic->email }} - {{ @$pic->telp }}</option>
                            @endforeach
                            </select>
                        </div>
                        {!! Form::submit('Pilih PIC', ['class' => 'btn btn-primary', 'id' => 'btn-submit']) !!}
                    </form>
                </td>
            </tr>
        @endif
        <tr>
            <td>Att Customer</td>
            <td><strong>{{ $crud->entry->customer->address }}</strong></td>
        </tr>
        <tr>
            <td>Keterangan</td>
            <td><textarea style="border: none; width:auto; height:auto; font-weight: bold">{{ $crud->entry->description }}</textarea></td>
        </tr>
    </table>
</div>
