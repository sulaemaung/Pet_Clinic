@extends('admin.layouts.master')
@section('home')



<form action="{{route('logout')}}" method="post">
  @csrf
<button type="submit">logout</button>
</form>

@endsection
