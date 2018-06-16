@extends('layout')

@section('contenu')
    <form action="/inscription" method="POST">
        {{ csrf_field() }}
        
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Mot de passe">
        <input type="password" name="password_confirmation" placeholder="Confirmation du mot de passe">
        <input type="submit" value="M'inscrire">
    </form>
@endsection