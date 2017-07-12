<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emprego extends Model {
    protected $table = 'Emprego';
    protected $fillable = ['emp_cargo', 'emp_nomefantasia', 'emp_salario', 'emp_dtadmissao', 'emp_dtrecissao',
                            'emp_status_excluido', 'emp_dtcadastro', 'emp_dtexcluido', 'pes_cpf_contratado',
                                'func_matricula', 'emp_total'];

    protected $guarded = ['emp_id'];
    //protected $primaryKey = 'matricula';

    public $timestamps = false;

    public function pessoa() {
        return $this->belongsTo('App\Pessoa');
    }

    public function funcionario() {
        return $this->belongsTo('App\Funcionario');
    }

}
