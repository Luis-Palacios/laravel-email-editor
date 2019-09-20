{{-- @extends('layout') --}}

{{-- @section('content') --}}
<div class="title m-b-md">
    Create a new email
</div>
<div>
    <form method="POST" action="/emails">
        {{ csrf_field() }}
        <input type="text" name="subject" placeholder="Subject" value="{{ old('subject') }}">
        <textarea name="body" id="body" placeholder="Body">{{ old('body') }}</textarea>
        <button type="submit">Save</button>
    </form>
    @if ($errors->any())
    {{-- $errors->has('body') --}}
    <div>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
</div>

{{-- @endsection --}}
