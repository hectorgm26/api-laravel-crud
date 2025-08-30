<?php

namespace App\Policies;

use App\Models\Post;
use App\Models\User;

class PostPolicy
{
    /**
     * Create a new policy instance.
     */
    // Recibe dos parametros, la informacion del usuario y el modelo para el cual se crea la politica
    public function author(User $user, Post $post) {
        
        return $user->id === $post->user_id;
        // si el id del usuario que hace la peticion es igual al user_id del post, entonces puede actualizarlo o eliminarlo
    }
}
