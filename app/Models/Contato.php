<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    // Nome da tabela associada ao model
    protected $table = 'contatos';

    // Atributos que são atribuíveis em massa
    protected $fillable = [
        'nome',
        'telefone',
        'email',
        'motivo_contato',
        'mensagem'
    ];

    // Caso queira desabilitar os timestamps (created_at e updated_at)
    // public $timestamps = false;
}
