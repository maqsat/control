@extends('layouts.app')

@section('content')
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-6 col-8 align-self-center">
                    <h3 class="text-themecolor m-b-0 m-t-0">Проекты</h3>
                </div>
                <div class="col-md-6 col-4 align-self-center">
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <form action="{{url('project')}}" method="POST" class="form-horizontal form-material">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-block">
                                <h4 class="card-title">Детали проекта</h4>
                                <h6 class="card-subtitle"> All bootstrap element classies </h6>
                                <div class="form-group">
                                    <label class="col-md-12">Наименование</label>
                                    <div class="col-md-12">
                                        <input type="text" value="" name="title" class="form-control form-control-line">
                                        @if ($errors->has('title'))
                                            <span class="help-block"><small>{{ $errors->first('title') }}</small></span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-12">Тип</label>
                                    <div class="col-sm-12">
                                        <select class="form-control form-control-line" name="type_id">
                                            @foreach(\App\Models\Type::all() as $item)
                                                <option value="{{ $item->id }}"  @if(old('type_id') == $item->id) selected @endif>{{ $item->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-block">
                                <h4 class="card-title">Статус проекта</h4>
                                <h6 class="card-subtitle"> All bootstrap element classies </h6>
                                <div class="form-group">
                                    <label class="col-sm-12">Статус</label>
                                    <div class="col-sm-12">
                                        <select class="form-control form-control-line" name="status_id">
                                            @foreach(\App\Models\Status::where('parent_id',0)->get() as $item)
                                                <option value="{{ $item->id }}"  @if(old('status_id') == $item->id) selected @endif>{{ $item->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Сумма договора</label>
                                    <div class="col-md-12">
                                        <input type="number" value="" name="sum" class="form-control form-control-line">
                                        @if ($errors->has('sum'))
                                            <span class="help-block"><small>{{ $errors->first('sum') }}</small></span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Дата начала</label>
                                    <div class="col-md-12">
                                        <input type="date" value="" name="start" class="form-control form-control-line">
                                        @if ($errors->has('start'))
                                            <span class="help-block"><small>{{ $errors->first('start') }}</small></span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Дата окончания</label>
                                    <div class="col-md-12">
                                        <input type="date" value="" name="end" class="form-control form-control-line">
                                        @if ($errors->has('end'))
                                            <span class="help-block"><small>{{ $errors->first('end') }}</small></span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-block">
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button class="btn btn-success" type="submit">Create</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        @include('layouts.footer')
    </div>
@endsection

@section('body-class')
    fix-header card-no-border fix-sidebar
@endsection

@push('scripts')
    @if (session('status'))
        <script>
            $.toast({
                heading: 'Результат действии',
                text: '{{ session('status') }}',
                position: 'top-left',
                loaderBg:'#ffffff',
                icon: 'warning',
                hideAfter: 30000,
                stack: 6
            });
        </script>
    @endif
@endpush

