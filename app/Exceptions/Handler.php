<?php

namespace App\Exceptions;

use Exception;
use App\Traits\ApiResponser;
use Illuminate\Database\QueryException;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Validation\ValidationException;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;


class Handler extends ExceptionHandler
{
    use ApiResponser;
    
    protected $dontReport = [
        //
    ];

    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    public function render($request, Exception $exception)
    {
        if ($exception instanceof ValidationException) { 
            //si la excepcion es una instancia de ValidationException, se ejecuta:
            return $this->convertValidationExceptionToResponse($exception, $request);
        }

        if ($exception instanceof ModelNotFoundException) {
            //si la excepcion es una instancia de ModelNotFoundException (quiere decir que no existe ID asociado a la peticion HTTP GET), se ejecuta:
            $model = strtoupper(class_basename($exception->getModel())); //strtoupper -> modifica el string a mayusculas / class_basename -> captura el nombre de la clase
            return $this->errorResponse("No hemos podido encontrar ningun resultado para su busqueda -  {$model}", 404);
        }

        if ($exception instanceof AuthenticationException) {
            return $this->unauthenticated($request, $exception);
        }

        if ($exception instanceof AuthorizationException) {
            return $this->errorResponse('Usted no está autorizado', 403);
        }

        if ($exception instanceof NotFoundHttpException) {
            return $this->errorResponse('Lo sentimos, no hemos podido encontrar la URL especificada, revise minuciosamente si esta correctamente escrita.', 404);
        }

        if ($exception instanceof MethodNotAllowedHttpException) {
            return $this->errorResponse('El metodo especificado no es válido', 405);
        }

        if ($exception instanceof HttpException) {
            return $this->errorResponse($exception->getMessage(), $exception->getStatusCode());
        }

        if ($exception instanceof QueryException) {
            $code = $exception->errorInfo[1];

            if ($code == 1451) {
                return $this->errorResponse('No se puede eliminar este recurso ya que esta relacionado con otro - Foreign KEY', 409);
            }
        }


        if (config('app.debug')) {
            return parent::render($request, $exception);            
        }

        return $this->errorResponse('Falla inesperada. Intente luego', 500);

        /* return parent::render($request, $exception); */
    }

    
    protected function unauthenticated($request, AuthenticationException $exception)
    {
        return $this->errorResponse('Usted no está autentificado', 401);
    }

    protected function convertValidationExceptionToResponse(ValidationException $e, $request)
    {
       $errors = $e->validator->errors()->getMessages();
       return $this->errorResponse($errors, 422);
    }

}
