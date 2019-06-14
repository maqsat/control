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
                    <a href="/project/create" class="btn pull-right hidden-sm-down btn-success"><i class="mdi mdi-plus-circle"></i> Create</a>
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
                            <div class="table-responsive">
                                <table class="table color-table info-table">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Наименование</th>
                                        <th>Тип</th>
                                        <th>Статус</th>
                                        <th>Сумма</th>
                                        <th>Срок</th>
                                        <th>Действие</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($list as $item)
                                        <tr>
                                            <td><strong>{{ $item->id }}</strong></td>
                                            <td>{{ $item->title }}</td>
                                            <td>{{ $item->type->title }}</td>
                                            <td><span class="label label-{{ $item->status[0]->label }}">{{ $item->status[0]->title }}</span></td>
                                            <td>{{ $item->status[0]->pivot->sum }}</td>
                                            <td>{{ date('Y-m-d', strtotime($item->status[0]->pivot->end)) }}</td>
                                            <td class="actions">
                                                <a href="/project/{{ $item->id }}" target="_blank" class="btn btn-info"><i class="mdi mdi-eye"></i></a>
                                                <a href="/project/{{ $item->id }}/edit" class="btn btn-success"><i class="mdi mdi-grease-pencil"></i></a>
                                                <form action="{{url('project', [$item->id])}}" method="POST">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="btn btn-danger" onclick="return deleteAlert();"><i class="mdi mdi-delete"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            {{--@if(isset($_GET['program']))
                                {{ $list->appends(['program' => $_GET['program']])->links() }}
                            @elseif(isset($_GET['non_activate']))
                                {{ $list->appends(['non_activate' => $_GET['non_activate']])->links() }}
                            @else
                                {{ $list->links() }}
                            @endif--}}
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


@push('styles')
    <style>
        .table td, .table th {
            padding: .25rem .15rem;
        }
    </style>
@endpush

@push('scripts')
    <script>
        function deleteAlert() {
            if(!confirm("Вы уверены что хотите удалить?"))
                event.preventDefault();
        }
    </script>

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

