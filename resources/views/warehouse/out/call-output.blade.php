<div class="card no-padding no-border">
  <div class="card-header">
    Output
  </div>
  <div class="card-body">
    <form action="{{ backpack_url('generate-out-pdf') }}" id="outbound-pdf" method="post">
        @csrf
        {!! Form::hidden('id', $crud->entry->id, [null]) !!}
        {!! Form::submit('Cetak PDF', ['class' => 'btn btn-success', 'id' => 'btn-submit']) !!}
    </form>
  </div>
</div>
