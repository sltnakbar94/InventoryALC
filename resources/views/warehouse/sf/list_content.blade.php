<div class="row">
    <div class="col-md-12">
        <div class="table">
            <table class="table table-responsive" style="width:100%">
                <tr class="bg-primary">
                    <th>No.</th>
                    <th>nama Item</th>
                    <th>SKU</th>
                    <th>UoM</th>
                    <th>Jumlah</th>
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
                        <td>{{$detail->item->unit}}</td>
                        <td align="right">{{number_format($detail->qty)}}</td>
                        <td>{{$status[$detail->status]}}</td>
                        <td>
                            <div class="btn-group">
                                @if ($detail->status == 0)
                                    <button id="edit" onclick="edit({{ $detail->id }})" type="button" class="btn btn-warning" style="height: 100%"><i class="las la-pencil-alt"></i></button>
                                    <form method="POST" action="{{ route('submissionformdetail.destroy', $detail->id) }}" class="js-confirm" data-confirm="Apakah anda yakin ingin menghapus data ini?">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger" style="height: 100%"><i class="las la-trash-alt"></i></button>
                                    </form>
                                    {{-- <div class="btn-group" role="group">
                                        <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Status
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                            <a class="dropdown-detail" href="{{backpack_url('submissionformdetail/'.$detail->id.'/accept')}}">Setujui</a>
                                            <a class="dropdown-detail" href="{{backpack_url('submissionformdetail/'.$detail->id.'/denied')}}">Tolak</a>
                                        </div>
                                    </div> --}}
                                @endif
                            </div>
                        </td>
                    </tr>
                    @endforeach
                @else
                    <tr style="border-bottom: 1px solid black;">
                        <td colspan="9" align="center">Belum ada data</td>
                    </tr>
                @endif
            </table>
        </div>
    </div>
</div>
