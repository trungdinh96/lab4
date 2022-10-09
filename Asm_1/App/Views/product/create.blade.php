@extends('layouts.master')
@section('title', 'Danh sách sản phẩm')
@section('content-title', 'Thêm sản phẩm')
@section('content')

<form>
    <div class="form-group">
      <label for="exampleInputEmail1">Tên sản phẩm</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Giá sản phẩm</label>
      <input type="number" class="form-control" id="exampleInputPassword1">
    </div>
    
    <button type="submit" class="btn btn-primary">Add</button>
  </form>

@endsection