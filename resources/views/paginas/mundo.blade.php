@extends('template')

@section('titulo_head')
	Mundo
@endsection

@section('titulo')
	<h4>Mundo</h4>
@endsection

@section('conteudo')
	

	<div class="row">
	        <div class="col-lg-4">
	          <h2>{{$noticias['Mundo']['M1']['titulo']}}</h2>
	          <p>{{$noticias['Mundo']['M1']['mensagem']}}</p>
	          <p><a class="btn btn-primary" href="{{$noticias['Mundo']['M1']['link']}}">Ver mais »</a></p>
	        </div>
	        <div class="col-lg-4">
	          <h2>{{$noticias['Mundo']['M2']['titulo']}}</h2>
	          <p>{{$noticias['Mundo']['M2']['mensagem']}}</p>
	          <p><a class="btn btn-primary" href="{{$noticias['Mundo']['M2']['link']}}">Ver mais »</a></p>
	        </div>
	</div>

@endsection