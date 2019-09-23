@extends('layouts.app')

@section('content')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="/emails">Emails</a></li>
            <li class="breadcrumb-item active" aria-current="page">Create</li>
        </ol>
    </nav>
    <div class="card">
        <div class="card-header">
            Add a new email
        </div>
        <div class="card-body">
            <form method="POST" action="/emails">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{$email->id}}">
                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" class="form-control {{ $errors->has('subject') ? 'is-invalid': '' }}"
                        name="subject" id="subject" placeholder="Subject..."
                        value="{{ old('subject') ? old('subject') : $email->subject }}" autofocus>
                    @error('subject')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Body</label>
                    <div id="email-body-container" class="{{ $errors->has('body') ? 'invalid-state-container': '' }}">
                    </div>
                    <input type="hidden" class="form-control {{ $errors->has('body') ? 'is-invalid': '' }}">
                    @error('body')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <a href="/emails" class="btn btn-secondary">Back to Emails</a>
                <button class="btn btn-primary type=" submit">Save</button>
            </form>
        </div>
    </div>
</div>
<script>
    window.__laravel__ = {
        emailBody : {!! old('body', $email->body) ? old('body', json_encode($email->body)): json_encode(null)  !!}
    };
</script>
@endsection
