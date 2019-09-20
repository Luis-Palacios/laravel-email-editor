{{-- @extends('layout') --}}

{{-- @section('content') --}}
<div class="title m-b-md">
    Emails
</div>
<div>
    @foreach ($emails as $email)
    <li>{{ $email->subject }}</li>
    @endforeach
</div>
{{-- @endsection --}}
