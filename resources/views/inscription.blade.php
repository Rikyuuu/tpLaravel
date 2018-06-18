@extends('layout')

@section('contenu')
    <form action="/inscription" method="POST">
        {{ csrf_field() }}

        <p><input type="email" name="email" placeholder="Email" value="{{ old('email') }}"></p>
        @if($errors->has('email'))
            <p>{{ $errors->first('email') }}</p>
        @endif

        <p><input type="password" name="password" placeholder="Mot de passe"></p>
        @if($errors->has('password'))
            <p>{{ $errors->first('password') }}</p>
        @endif

        <p><input type="password" name="password_confirmation" placeholder="Confirmation du mot de passe"></p>
        @if($errors->has('password_confirmation'))
            <p>{{ $errors->first('password_confirmation') }}</p>
        @endif
        <p><input type="submit" value="M'inscrire"></p>
    </form>
@endsection