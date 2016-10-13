@extends('template')

@section('titulo_head')
	Carros
@endsection

@section('titulo')
	<h4>Carros</h4>
@endsection

@section('conteudo')

	<div class="row">
	        <div class="col-lg-4">
	          <h2>{{$noticias['Carros']['C1']['titulo']}}</h2>
	          <p>{{$noticias['Carros']['C1']['mensagem']}}</p>
	          <p><a class="btn btn-primary" href="{{$noticias['Carros']['C1']['link']}}">Ver mais »</a></p>
	        </div>
	        <div class="col-lg-4">
	          <h2>{{$noticias['Carros']['C2']['titulo']}}</h2>
	          <p>{{$noticias['Carros']['C2']['mensagem']}}</p>
	          <p><a class="btn btn-primary" href="{{$noticias['Carros']['C2']['link']}}">Ver mais »</a></p>
	        </div>
	</div>

@endsection