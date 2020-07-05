@extends('layouts.app')

@section('content')
    <p>
        <a href="/conversation">back</a>
    </p>
<h1>{{$conversation->title}}</h1>

<p>Posted By <strong>{{$conversation->user->name}}</strong></p>

<h5>{{$conversation->body}}</h5>

<br>
@include('conversations.replies')

@endsection

