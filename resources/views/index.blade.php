@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-header">{{ __('Image List') }}
                        <a class="btn btn-primary" href="{{ route('home') }}">Back</a>

                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="table-responsive">
                            <table class="table table-primary text-center">
                                <tbody>

                                    @foreach ($datas as $data)
                                        @if ($data->type == 'landscape')
                                            <tr>
                                                <td colspan="2 "><img width="100px;" height="100px;"
                                                        src="https://chart.googleapis.com/chart?cht=qr&chs=300x300&chl= {{ env('APP_URL') }}{{ $data->image() }}"
                                                        alt="{{ $data->image() }}"></td>

                                            </tr>
                                        @else
                                            <tr class="">
                                                <td scope="row"><img width="100px;" height="100px;"
                                                        src="https://chart.googleapis.com/chart?cht=qr&chs=300x300&chl= {{ env('APP_URL') }}{{ $data->image() }}"
                                                        alt="{{ $data->image() }}"></td>
                                                <td><img width="100px;" height="100px;"
                                                        src="https://chart.googleapis.com/chart?cht=qr&chs=300x300&chl={{ env('APP_URL') }}{{ $data->image() }}"
                                                        alt="{{ $data->image() }}"></td>

                                            </tr>
                                        @endif
                                    @endforeach


                                </tbody>

                            </table>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
