@extends('layout.index')

@section('title','继承页面')

@section('content')
<div style="height: 300px;background:cyan"></div>
@endsection

@section('js')
<script type="text/javascript">
alert('iloveyou')
</script>
@endsection

@section('footer')
@show