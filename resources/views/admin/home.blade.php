@extends('layouts.dashboard')

@section('content')
        <h2> ciao {{ $user->name }} Home del backoffice</h2>  
    @if($userInfo)
        <p>Mail: {{ $userInfo->mail }}</p>
        <p>Telephone: {{ $userInfo->phone }}</p>
    @endif  
@endsection