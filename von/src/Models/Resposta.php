<?php
 
namespace Vonmecheln\Teste\Models;

use \Illuminate\Database\Eloquent\Model as Eloquent;

class Resposta extends Eloquent {
    protected $table = "respostas";

    protected $fillable = [
        'resposta', 'pergunta_id', 'user_id'
    ];

    public function votos()
    {
        return $this->hasMany('\Vonmecheln\Teste\Models\Voto');
    }
    
    public function user()
    {
        return $this->belongsTo('\Vonmecheln\Teste\Models\User');
    }

}
 
?>