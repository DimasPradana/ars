@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-10">
            <div class="panel panel-default">
                <div class="panel-heading">@lang('quickadmin.qa_dashboard')</div>

                <div class="panel-body">
                    {{-- dimas ubah tulisan you are logged in --}}
                    {{-- @lang('quickadmin.qa_dashboard_text') --}}
					<h5>Welcome ID : {{ \Auth::user()->id }}, akun {{ \Auth::user()->name }}</h5>
                </div>
            </div>
        </div>
    </div>
@endsection
