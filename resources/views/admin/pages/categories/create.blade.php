@extends('admin.pages.main')
@section('breadcumb','Kateegori Yönetimi')
@section('content')
    <div class="container-fluid">
        <div class="row layout-top-spacing">
            <div class="col-lg-12 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Kategori Ekle</h4>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="widget-content widget-content-area">
                        <div class="row">
                            <div class="col-12">
                                <form action="{{ route('categories.store') }}" method="post" id="mainForm" enctype="multipart/form-data">@csrf
                                    <ul class="nav nav-tabs  mb-3" id="lineTab" role="tablist">
                                        {{--                                            @foreach($locales as $key => $locale)--}}
                                        <li class="nav-item">
                                            <a class="nav-link active " id="underline-tab" data-toggle="tab" href="#underline-1" role="tab" aria-controls="underline-1" aria-selected="true false ">Kategoriye ait Detaylar</a>
                                        </li>
                                        {{--                                            @endforeach--}}
                                    </ul>
                                    <ul class="nav nav-tabs  mb-3" id="lineTab" role="tablist">
                                        @foreach($locales as $key => $locale)
                                            <li class="nav-item">
                                                <a class="nav-link @if($key == 'tr') active @endif" id="underline-{{ $key }}-tab" data-toggle="tab" href="#underline-{{ $key }}" role="tab" aria-controls="underline-{{ $key }}" aria-selected=" @if($key == 'tr') true @else false @endif">{{ $locale }}</a>
                                            </li>
                                        @endforeach
                                    </ul>

                                    <div class="row">

                                        {{--<div class="tab-content col-6" id="lineTabContent-3">
                                            --}}{{--                                            @foreach($locales as $key => $locale)--}}{{--
                                            <div class="tab-pane fade  show active" id="underline-1" role="tabpanel" aria-labelledby="underline-tab">
                                                <div class="form-group">
                                                    <p>Kategori Adı</p>
                                                    <input id="t-text" type="text" name="name" class="form-control @error('name') is-invalid @enderror" required>
                                                    @error('name')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            --}}{{--                                            @endforeach--}}{{--
                                        </div>--}}
                                        <div class="tab-content" id="lineTabContent-3">
                                            @foreach($locales as $key => $locale)
                                                <div class="tab-pane fade @if($key == 'tr')  show active @endif" id="underline-{{ $key }}" role="tabpanel" aria-labelledby="underline-{{ $key }}-tab">
                                                    <div class="form-group">
                                                        <p>Kategori Adı ({{ $locale }})</p>
                                                        <input id="t-text" type="text" name="name[{{ $key }}]" class="form-control @error('name') is-invalid @enderror" required>
                                                        @error('name')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            @endforeach
                                                <div class="form-group">
                                                    <p>Sıra Numarası</p>
                                                    <input id="t-text" type="number" name="order_number" class="form-control @error('name') is-invalid @enderror" required>
                                                    @error('name')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="statbox widget box box-shadow" style=" display: flex; justify-content: end">
                                            <div class="widget-content widget-content-area">
                                                <div class="row">
                                                    <div class="col-lg-12 col-12 ">
                                                        <button form="mainForm" type="submit" class="btn btn-success btn-lg m-3">Kaydet
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
