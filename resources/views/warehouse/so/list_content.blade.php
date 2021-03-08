<div class="row">
    <div class="col-md-12">
        <div class="table">
            <table class="table table-responsive" style="width:100%">
                <tr class="bg-primary">
                    <th>No.</th>
                    <th>nama Item</th>
                    <th>SKU</th>
                    <th>Jumlah</th>
                    <th>UoM</th>
                    <th>Harga Satuan</th>
                    <th>Discount</th>
                    <th>Sub Total</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
                @if (count($crud->entry->details) != 0)
                    @foreach ($crud->entry->details as $key=>$detail)
                    @php
                        $status = array('Plan', 'Submited', 'Process', 'Denied', 'Complete');
                    @endphp
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$detail->item->name}}</td>
                        <td>{{$detail->item->serial}}</td>
                        <td align="right">{{number_format($detail->qty)}}</td>
                        <td>{{$detail->item->uom->name}}</td>
                        <td align="right">{{number_format($detail->price)}}</td>
                        @if (!empty($detail->discount || $detail->discount != 0))
                            <td align="right">{{number_format($detail->discount)}}%</td>
                        @else
                            <td align="center"> - </td>
                        @endif
                        <td align="right">{{number_format($detail->sub_total)}}</td>
                        <td>{{$status[$detail->status]}}</td>
                        <td>
                            <div class="btn-group">
                                @if ($detail->status == 0 && backpack_user()->hasRole('sales'))
                                    <button id="edit" onclick="edit({{ $detail->id }})" type="button" class="btn btn-warning" style="height: 100%"><i class="las la-pencil-alt"></i></button>
                                    <form id="delete-form{{ $detail->id }}" method="POST" action="{{ route('salesorderdetail.destroy', $detail->id) }}" class="js-confirm" data-confirm="Apakah anda yakin ingin menghapus data ini?">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger"><i class="las la-trash-alt"></i></button>
                                    </form>
                                @endif
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
