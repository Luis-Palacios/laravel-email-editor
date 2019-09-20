@extends('layout')

@section('content')
<div class="title m-b-md">
    Create a new email
</div>
<div>
    <form method="POST" action="/emails">
        {{ csrf_field() }}
        <input type="text" name="subject" placeholder="Subject">
        <textarea name="body" id="body" placeholder="Body"></textarea>
        <button type="submit">Save</button>
    </form>
</div>

@endsection
