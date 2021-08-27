@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Game Data
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
      <form method="post" action="{{ route('inventory.update', $edit->id_inv ) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="country_name">ID:</label>
              <input type="text" class="form-control" name="name" value="{{ $edit->name }}"/>
          </div>
          <div class="form-group">
              <label for="cases">Name :</label>
              <input type="text" class="form-control" name="price" value="{{ $edit->price }}"/>
          </div>
          <div class="form-group">
              <label for="cases">Type :</label>
              <input type="text" class="form-control" name="id_type" value="{{ $edit->id_type }}"/>
          </div>
          <div class="form-group">
              <label for="cases">Buydate :</label>
              <input type="text" class="form-control" name="buy_date" value="{{ $edit->buy_date }}"/>
          </div>
          <div class="form-group">
              <label for="cases">Price :</label>
              <input type="text" class="form-control" name="price" value="{{ $edit->price }}"/>
          </div>
          <div class="form-group">
              <label for="cases">Waranty :</label>
              <input type="text" class="form-control" name="waranty" value="{{ $edit->waranty }}"/>
          </div>
          <div class="form-group">
              <label for="cases">s/n :</label>
              <input type="text" class="form-control" name="s/n" value="{{ $edit['s/n'] }}"/>
          </div>
          <div class="form-group">
              <label for="cases">Model :</label>
              <input type="text" class="form-control" name="model" value="{{ $edit->model }}"/>
          </div>
          <button type="submit" class="btn btn-primary">Update Data</button>
      </form>
  </div>
</div>
@endsection