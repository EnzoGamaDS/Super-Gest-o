<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

//O padrão de reconhecimento do laravel é buscar a tabela com o nome do Model usando underline e caixa baixa
//ex SiteContato == site_contatos
class SiteContato extends Model
{

    protected $fillable = [
        'nome',
        'telefone',
        'email',
        'motivo_contatos_id',
        'mensagem',
    ];


}
