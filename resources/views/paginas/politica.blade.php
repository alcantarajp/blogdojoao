@extends('template')

@section('titulo_head')
	Política
@endsection

@section('titulo')
	<h4>Política</h4>
@endsection

@section('conteudo')
	

	<div class="row">
	        <div class="col-lg-4">
	          <h2>{{$noticias['Politica']['P1']['titulo']}}</h2>
	          <p>{{$noticias['Politica']['P1']['mensagem']}}</p>
	          <p><a class="btn btn-primary" href="{{$noticias['Politica']['P1']['link']}}">Ver mais »</a></p>
	        </div>
	        <div class="col-lg-4">
	          <h2>{{$noticias['Politica']['P2']['titulo']}}</h2>
	          <p>{{$noticias['Politica']['P2']['mensagem']}}</p>
	          <p><a class="btn btn-primary" href="{{$noticias['Politica']['P2']['link']}}">Ver mais »</a></p>
	        </div>
	</div>

@endsection