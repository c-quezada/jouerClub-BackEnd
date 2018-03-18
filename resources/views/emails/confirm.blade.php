Hola {{$user->name}}

Haz modificado tu cuenta de correo electronico, Verifique su nueva cuenta con este enlace:

{{route('verify', $user->code_verification)}}