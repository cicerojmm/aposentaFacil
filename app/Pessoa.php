<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model {
    protected $table = 'Pessoa';
    protected $fillable = ['pes_cpf', 'pes_nome', 'pes_rg', 'dt_nasc',
                            'pes_tel', 'pes_email', 'pes_dtcadastro', 'pes_dtexclusao', 'pes_status_excluido',
                                'func_matricula_cadastrou', 'func_matricula_excluiu'];

    //protected $guarded = ['id'];
    //protected $primaryKey = 'matricula';

    public $timestamps = false;

    public function emprego() {
        return $this->hasMany('App\Emprego');
    }

    public function funcionario() {
        return $this->belongsTo('App\Funcionario');
    }

}
