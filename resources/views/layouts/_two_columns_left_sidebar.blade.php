@extends('layouts.default')

@section('styles')
    @parent

	<link rel="stylesheet" href="{{ asset('css/metisMenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/dataTables/dataTables.bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sb-admin-2.css') }}">
@stop

@section('scripts')
    @parent

    <script src="{{ asset('js/bootstrap-paginator.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-typeahead.js') }}"></script>
    <script src="{{ asset('js/jquery.stacktable.js') }}"></script>
    <script src="{{ asset('js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('js/plugins/dataTables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/plugins/dataTables/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/sb-admin-2.js') }}"></script>
@stop

@section('sidebar')
	@include('layouts._sidebar')
@stop

@section('page')
<!-- Page wrapper -->
<main id="page-wrapper" style="margin-top: -20px">
    @include('layouts._flash')

    <article class="row">
        <header class="col-sm-12">
            <h1 class="page-header">{{ isset($title) ? $title : '' }}</h1>
        </header>
        <!-- /.col-sm-12 -->

        <section class="row">
            <div class="col-sm-12">
                <div class="panel panel-default">
                    @hasSection('subtitle')
                        <div class="panel-heading">@yield('subtitle')</div>
                    @endif

                    <div class="panel-body">
                        @yield('content')
                    </div>
                </div>
            </div>
        </section>
    </article>
    <!-- /.row -->
</main>
<!-- /#page-wrapper -->
@stop