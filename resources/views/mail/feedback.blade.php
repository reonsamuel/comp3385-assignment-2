@extends('layouts.email')

@section('content')
    <p>{{ $name }} has sent feedback about your website.</p>
    <p>{{ $comment }}</p>
@endsection
