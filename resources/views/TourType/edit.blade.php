@extends('layouts.main', ['title' => __("Edit Tour Type"), 'header' => __('Edit Tour Type')])

@include('includes.validate_assets')
@section('content')

    {{ Form::model($tour_type,['route' => ['tourType.update', $tour_type->uuid], 'method'=>'put','autocomplete' => 'off',
           'id' => 'update','class' => 'form-horizontal  needs-validation', 'novalidate']) }}
    {{ Form::hidden('user_id', $tour_type->id, []) }}
    @csrf
    <section>
        <div class="row" style="margin: auto">
            <div class="col-md-12">
                <div class="card" style="margin: auto">
                    <div class="card-body">
                        <div class="col-md-12">
                            <p>{{ getLanguageBlock('lang.auth.mandatory-field') }}</p>
                            <div class="row">
                                <div class="col-xs-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="form-group">
                                        {{ Form::label('tour_type_name', __("Tour type name"), ['class' => 'required_asterik']) }}
                                        {{ Form::text('tour_type_name', $tour_type->tour_type_name, ['class' => 'form-control', 'autocomplete' => 'off', 'id' => 'tour_type_name', 'required']) }}
                                        {!! $errors->first('tour_type_name', '<span class="badge badge-danger">:message</span>') !!}
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="element-form">
                                        <div class="form-group pull-left">
                                            {{ Form::button(trans('Update'), ['class' => 'btn btn-primary', 'type'=>'submit','style' => 'border-radius: 5px;']) }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br/>

    {{ Form::close() }}
@endsection
@push('after-scripts')

    <script>
        $(function () {
            $(".select2").select2();


        });

    </script>
@endpush

