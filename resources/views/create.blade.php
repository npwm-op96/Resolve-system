@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add Games Data
  </div>
  <div class="card-body">
    @if ($errors->any())     {{-- แสดง error --}}
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('inventory.store') }}">
          <div class="form-group">
              @csrf
              <label for="name">Name:</label>
              <input type="text" class="form-control" name="name"/>
              
          </div>
          <div class="form-group">
              <label for="id_type">id_type :</label>
              <input type="text" class="form-control" name="id_type"/>
          </div>
          <div class="form-group">

            <label for="buy_date">Buydate:</label>
            <input type="datetime-local" class="form-control" name="buy_date"/>
        </div>
        <div class="form-group">
  
            <label for="price">price:</label>
            <input type="text" class="form-control" name="price"/>
            
        </div>
        <div class="form-group">
          
            <label for="waranty">waranty:</label>
            <input type="text" class="form-control" name="waranty"/>
            
        </div>
        <div class="form-group">
        
            <label for="s/n">S/N:</label>
            <input type="text" class="form-control" name="s/n"/>
            
        </div>
        <div class="form-group">
           
            <label for="model">Model:</label>
            <input type="text" class="form-control" name="model"/>
            
        </div>
          <button type="submit" class="btn btn-primary">Add Inventory</button>
      </form>
  </div>
</div>
@endsection