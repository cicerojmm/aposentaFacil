@extends('template')

@section('conteudo')

<form class="form-horizontal">

  <div class="form-group">
    <label for="pes_cpf" class="col-sm-2 control-label">CPF</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="pes_cpf">
    </div>
  </div>

  <div class="form-group">
    <label for="pes_nome" class="col-sm-2 control-label">Nome completo</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="pes_nome">
   </div>

   <div class="form-group">
    <label for="pes_rg" class="col-sm-2 control-label">RG</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="pes_rg">
   </div>

   <div class="form-group">
    <label for="dt_nasc" class="col-sm-2 control-label">Data nascimento</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" id="dt_nasc">
   </div>

   <div class="form-group">
    <label for="pes_tel" class="col-sm-2 control-label">Telefone</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="pes_tel">
   </div>

   <button type="submit" class="btn btn-lg btn-success">Enviar</button>


 </form>

    @stop