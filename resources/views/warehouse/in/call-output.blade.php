<div class="card no-padding no-border">
  <div class="card-header">
    Output
  </div>
  <div class="card-body">
    <form action="{{ backpack_url('generate-in-pdf') }}" id="inbond-pdf" method="post" target="_blank">
        @csrf
        {!! Form::hidden('id', $crud->entry->id, [null]) !!}
        {!! Form::submit('Cetak PDF', ['class' => 'btn btn-success', 'id' => 'btn-submit']) !!}
    </form>
  </div>
</div>
