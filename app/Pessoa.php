<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model {
    protected $table = 'Pessoa';
    protected $fillable = ['pes_cpf', 'pes_nome', 'pes_rg', 'pes_dt_nasc',
                            'pes_tel', 'pes_email', 'pes_dt_cadastro', 'pes_dt_exclusao', 'pes_status_excluido',
                                'pes_func_matricula'];

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
