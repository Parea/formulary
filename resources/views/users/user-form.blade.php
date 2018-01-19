@extends('users.template')


@section('contenu')
<div class="col-sm-offset-3 col-sm-6">
	<div class="panel panel-info">
    <div class="panel-heading">Nouvel utilisateur</div>
      <div class="panel-body"> 
        {!! Form::open(['url' => 'user']) !!}
          {!! Form::text('lastname', null, ['class' => 'form-control', 'placeholder' => 'Votre nom']) !!}<br/>
          {!! Form::text('firstname', null, ['class' => 'form-control', 'placeholder' => 'Votre prénom']) !!}<br/>
          {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Votre email']) !!}<br/>
          {!! Form::textarea('message', null, ['class' => 'form-control', 'placeholder' => 'Votre message']) !!}<br/>
          {!! Form::password('password', null, ['class' => 'form-control', 'placeholder' => 'Votre password']) !!}<br/>
          {!! Form::submit('Envoyer !', ['class' => 'btn btn-success pull-right']) !!}<br/>
        {!! Form::close() !!}
      </div>
  </div>
</div>
@endsection