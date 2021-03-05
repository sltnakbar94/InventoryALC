<div class="row">
    <div class="col-md-12">
        <div class="table">
            <table class="table table-responsive" style="width:100%">
                <tr class="bg-primary" align="center">
                    <th>No.</th>
                    <th>nama Item</th>
                    <th>SKU</th>
                    <th>UoM</th>
                    <th>Jumlah</th>
                    {{-- <th>QC Pass</th> --}}
                    <th>Remarks</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
                @if (count($crud->entry->details) != 0)
                    @foreach ($crud->entry->details as $key=>$detail)
                    @php
                        $status = array('Plan', 'Submited', 'Process', 'Denied', 'Complete');
                        $qty_onhands = \App\Models\Item::select('id','name', 'qty')->where('id', '=', $detail->item->id)->first();
                    @endphp
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$detail->item->name}}</td>
                        <td>{{$detail->item->serial}}</td>
                        <td>{{$detail->item->unit}}</td>
                        <td align="right">{{number_format($detail->qty)}}</td>
                        {{-- <td align="right">{{number_format($detail->qty_confirm)}}</td> --}}
                        @if ($qty_onhands->qty >= $detail->qty)
                            <td> - </td>
                        @else
                            <td><strong class="bg-danger">Stock Tidak Mencukupi</strong></td>
                        @endif
                        <td>{{$status[$detail->status]}}</td>
                        <td>
                            <div class="btn-group">
                                <button id="edit" onclick="edit({{ $detail->id }})" type="button" class="btn btn-warning"><i class="las la-pencil-alt"></i></button>
                                <button id="delete" onclick="return confirmation({{ $detail->id }});" type="button" class="btn btn-danger"><i class="las la-trash-alt"></i></button>

                                <form id="delete-form{{ $detail->id }}" method="POST" action="{{ route('bagitemwarehouseout.destroy', $detail->id) }}" class="js-confirm" data-confirm="Apakah anda yakin ingin menghapus data ini?">
                                    @method('DELETE')
                                    @csrf
                                    {{-- <button type="submit" class="btn btn-danger"><i class="las la-trash-alt"></i></button> --}}
                                </form>
                                <div class="btn-group" role="group">
                                    <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Status
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                        <a class="dropdown-detail" href="{{backpack_url('delivery-order/'.$detail->id.'/accept')}}">Setujui</a>
                                        <a class="dropdown-detail" href="{{backpack_url('delivery-order/'.$detail->id.'/denied')}}">Tolak</a>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                @else
                    <tr style="border-bottom: 1px solid black;">
                        <td colspan="10" align="center">Belum ada data</td>
                    </tr>
                @endif
            </table>
        </div>
    </div>
</div>
