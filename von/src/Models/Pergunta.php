<?php
 
namespace Vonmecheln\Teste\Models;

use \Illuminate\Database\Eloquent\Model as Eloquent;

class Pergunta extends Eloquent {
    protected $table = "perguntas";

    protected $fillable = [
        'pergunta', 'user_id'
    ];

    public function respostas()
    {
        return $this->hasMany(Resposta::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
 
?>