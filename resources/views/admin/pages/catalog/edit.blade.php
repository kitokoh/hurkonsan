@extends('admin.pages.main')
@section('breadcumb','Katalog Yönetimi')
@section('content')
    <div class="container-fluid">
        <div class="row layout-top-spacing">
            <div class="col-lg-12 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Katalog Düzenle</h4>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="widget-content widget-content-area">
                        <div class="row">
                            <div class="col-12">
                                <form action="{{ route('catalog.update',$catalog->id) }}" method="post" id="mainForm" enctype="multipart/form-data">@csrf @method('PUT')
                                    <ul class="nav nav-tabs  mb-3" id="lineTab" role="tablist">
                                        {{--                                            @foreach($locales as $key => $locale)--}}
                                        <li class="nav-item">
                                            <a class="nav-link active " id="underline-tab" data-toggle="tab" href="#underline-1" role="tab" aria-controls="underline-1" aria-selected="true false ">Ürün'e ait Detaylar</a>
                                        </li>
                                        {{--                                            @endforeach--}}
                                    </ul>

                                    <div class="row">
                                        <div class="tab-content col-12" id="lineTabContent-3">
                                            {{--                                            @foreach($locales as $key => $locale)--}}
                                            <div class="tab-pane fade  show active" id="underline-1" role="tabpanel" aria-labelledby="underline-tab">
                                                <div class="form-group">
                                                    <p>Katalog Adı</p>
                                                    <input id="t-text" type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{$catalog->name}}" required>
                                                    @error('name')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                {{--<div class="form-group">
                                                    <p>Ürün Açıklaması</p>
                                                    <textarea class="summernote" name="description"></textarea>
                                                    @error('text')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>--}}
                                            </div>
                                            {{--                                            @endforeach--}}
                                        </div>
                                        <div class="col-6 layout-spacing">
                                            <div class="statbox widget box box-shadow">
                                                <div class="widget-header">
                                                    <div class="row">
                                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                            <h4>Katalog İçeriği (1920x1280)</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="widget-content widget-content-area">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-12 ">
                                                            <div class="custom-file-container" data-upload-id="myFirstImage">
                                                                <label>Katalog Kaldır <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
                                                                <label class="custom-file-container__custom-file" >
                                                                    <input type="file" form="mainForm" name="images" class="custom-file-container__custom-file__custom-file-input" accept=".jpg,.pdf"  multiple >
                                                                    <span class="custom-file-container__custom-file__custom-file-control"></span>
                                                                </label>
                                                                <div class="custom-file-container__image-preview"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{--<div class="col-lg-6 layout-spacing">
                                            <div class="statbox widget box box-shadow">
                                                <div class="widget-header">
                                                    <div class="row">
                                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                            <h4>Katalog Kapak Fotosu (840x457)</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="widget-content widget-content-area">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-12 ">
                                                            <div class="custom-file-container" data-upload-id="mySecondImage">
                                                                <label>Fotoğrafı Kaldır <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
                                                                <label class="custom-file-container__custom-file" >
                                                                    <input type="file" form="mainForm" name="image_inner_page" class="custom-file-container__custom-file__custom-file-input" accept="image/*">
                                                                    <span class="custom-file-container__custom-file__custom-file-control"></span>
                                                                </label>
                                                                <div class="custom-file-container__image-preview"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>--}}
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
