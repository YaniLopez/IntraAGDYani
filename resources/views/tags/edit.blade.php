@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    EDITAR
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('tags.update', $tag->id_tag) }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="name">Tags:</label>
          <input type="text" class="form-control" name="tag" value={{ $share->nom_tag }} />
        </div>
        <button type="submit" class="btn btn-primary">Modificar</button>
      </form>
  </div>
</div>
@endsection