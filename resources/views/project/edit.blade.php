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
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-block">
                            <form action="{{url('project', [1])}}" method="POST" class="form-horizontal form-material">
                                {{ method_field('PATCH') }}
                                {{ csrf_field() }}
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

                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button class="btn btn-success" type="submit">Create</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
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

