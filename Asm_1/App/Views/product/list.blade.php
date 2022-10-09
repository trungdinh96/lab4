@extends('layouts.master')
@section('title', 'Danh sách sản phẩm')
@section('content-title', 'Danh Sách sản phẩm')
@section('content')
<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Price</th>
        
        <th scope="col">Chức năng</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        
        <td>
         <button><a href="{{BASE_URL}}/products/detail">Chi tiết</a></button>   

        </td>
      </tr>
      
    </tbody>
  </table>
  <button><a href="{{BASE_URL}}/products/create">Thêm sản phẩm</a></button>   

@endsection