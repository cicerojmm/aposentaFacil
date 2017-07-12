@extends('template')

@section('conteudo')

<form class="form-horizontal">
  <div class="form-group row">
    <label for="cpf_busca" class="col-sm-2 control-label">Digite o CPF para busca: </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="cpf_busca">
    </div>
    <div class="form-group row">
      <center><button type="submit" class="btn btn-lg btn-default">Buscar</button></center>
    </div>
  </div>
</form>

<div class="row">
  @if (!empty ($valorFinalAponsentadoria))
    <h3>{{$valorFinalAponsentadoria}}</h3>
    @endif
</div>

@stop
