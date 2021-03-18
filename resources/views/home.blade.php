@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
               <div class="card-header">{{ __('Enviar mensaje') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('messages.store') }}" method="POST">
                        @csrf
                    <div class="form-group">
                        <select name="recipient_id" class="form-control">
                            <option value="">Seleciona el usuario</option>
                                @foreach ($users as $user)
                                <option value="{{$user->id}}">{{$user->name}}</option>

                                @endforeach

                        </select>

                    </div>
                        <div class="form-group">
                            <textarea name="body" class="form-control" placeholder="Mensaje"></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn-primary btn-block">Enviar</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
