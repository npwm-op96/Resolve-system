@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>



<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Name</td>
          <td>Type</td>
          <td>Buydate</td>
          <td>price</td>
          <td>waranty</td>
          <td>s/n</td>
          <td>Model</td>
          
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($Inventory as $inventory)
        <tr>
            <td>{{$inventory->id_inv}}</td>
            <td>{{$inventory->name}}</td>
            <td>{{$inventory->id_type }}</td>
            <td>{{$inventory->buy_date}}</td>
            <td>{{$inventory->price}}</td>
            <td>{{$inventory->waranty}}</td>
            <td>{{$inventory['s/n']}}</td>
            <td>{{$inventory->model}}</td>
            <td><a href="{{ route('inventory.edit', $inventory->id_inv)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('inventory.destroy', $inventory->id_inv)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection