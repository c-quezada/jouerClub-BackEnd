Hola {{$user->name}}

Verifique su cuenta con este enlace:

{{route('verify', $user->code_verification)}}