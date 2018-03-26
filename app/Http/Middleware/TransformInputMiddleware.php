<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Validation\ValidationException;

class TransformInputMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $transformer)
    {
        $transformedInput = [];
        foreach ($request->request->all() as $input => $value) { //recorrimos los valores enviados
            $transformedInput[$transformer::originalAttribute($input)] = $value; //capturamos el valor original de los parametros enviados
        }
        $request->replace($transformedInput); //reemplazamos 
        
        $response = $next($request);

        if (isset($response->exception) && $response->exception instanceof ValidationException) { //verificamos si tenemos alguna excepcion y si la hay, que esta sea instancia de ValidationException
            $data = $response->getData();
            $transformedErrors = [];
            foreach ($data->error as $field => $error) {
                $transformedField = $transformer::transformedAttribute($field);
                $transformedErrors[$transformedField] = str_replace($field, $transformedField, $error); //1er parametro: campo a reemplazar, 2do; valor a reemplazar, 3er: lugar a reemplazar
            }
            $data->error = $transformedErrors;
            $response->setData($data); //seteo de nuevos valores 
        }
        return $response;
    }
}
