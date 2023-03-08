
@extends('emails.layoutEmail')
@section('content')
<div class="contact container">
    <div class="email-send text-start mb-3">
        <strong>Nous Contacter</strong><br>
        <strong>Name: </strong> {{ $data->name }} <br>
        <strong>Email: </strong> {{ $data->email }} <br>
        <strong>Subject: </strong> {{ $data->subject }}<br>
        <strong>Message: </strong> {{ $data->message }}

         {{-- <strong><center>Nous Contacter</center></strong>
        <strong>Name: </strong>  <br>
        <strong>Email: </strong>  <br>
        <strong>Subject: </strong> <br>
        <strong>Message: </strong>
        <p> </p> --}}
    </div>

</div>
@endsection


