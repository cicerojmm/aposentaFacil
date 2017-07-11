<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model {
    protected $table = 'funcionario';
    protected $fillable = ['func_matricula', 'func_nome', 'func_senha', 'func_status_excluido'];

    //protected $guarded = ['id'];
    //protected $primaryKey = 'matricula';

    public $timestamps = false;


    public function pessoa() {
        return $this->belongsTo('App\Pessoa');
    }

    public function emprego() {
        return $this->belongsTo('App\Emprego');
    }

}
