<?php

namespace App\Models\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class FilterScope implements Scope
{
    /**
     * Apply the scope to a given Eloquent query builder.
     */
    public function apply(Builder $builder, Model $model): void
    {
        // Aplicar filtros
        if (empty(request('filters'))) {
            return;
        }

        $filters = request('filters');

        foreach ($filters as $nombreCampo => $condiciones) {

            foreach ($condiciones as $operador => $valor) {

                if (in_array($operador, ['=', '<', '>', '<=', '>=', '!='])) {
                    $builder->where($nombreCampo, $operador, $valor);
                }

                if ($operador == 'like') {
                    $builder->where($nombreCampo, 'like', "%$valor%");
                }
            }
        }
    }
}
