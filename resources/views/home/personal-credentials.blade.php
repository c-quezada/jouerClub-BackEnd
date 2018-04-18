@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            {!! Form::open(['route' => '', 'method' => 'POST']) !!}
            {!! Form::text('grant_type', 'password', []) !!}
            {!! Form::text('grant_type', 'password', []) !!}
            {!! Form::number('client_id', , []) !!}
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
[{"key":"grant_type","value":"password","description":"","type":"text","enabled":true},
{"key":"client_id","value":"1","description":"","type":"text","enabled":true},
{"key":"client_secret","value":"nxnrFtcsEk4IuO82MfRogltF6s1TPtZ3dHUiVCCz","description":"","type":"text","enabled":true},
{"key":"username","value":"elenor66@example.net","description":"","type":"text","enabled":true},
{"key":"password","value":"secret","description":"","type":"text","enabled":true}]
