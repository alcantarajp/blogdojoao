@extends('template')

@section('titulo_head')
	Página não encontrada
@endsection

@section('titulo')
	<h3><span class="label label-warning">Página não encontrada</span></h3>
@endsection

@section('conteudo')
	<h4>Não possível localizar a página <b>{{$pagina}}</b>. Verifique a URL informada.</h4>
@endsection