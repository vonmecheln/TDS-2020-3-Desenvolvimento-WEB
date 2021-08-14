<?php
 
namespace Vonmecheln\Teste\Models;

use \Illuminate\Database\Eloquent\Model as Eloquent;

class Voto extends Eloquent {
    protected $table = "votos";

    protected $fillable = [
        'resposta_id', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo('\Vonmecheln\Teste\Models\User');
    }

}
 
?>