@extends('admin.pages.main')
@section('breadcumb','Hakkımızda Yönetimi')
@section('content')

    <div class="container-fluid">
        <div class="row layout-top-spacing">
            <div class="col-lg-12 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Hakkımızda Düzenle</h4>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="widget-content widget-content-area">
                        <div class="row">
                            <div class="col-12">
                                <form action="{{ route('about.update',$about->id) }}" method="post" id="mainForm"
                                      enctype="multipart/form-data">@csrf @method('put')
                                    <ul class="nav nav-tabs  mb-3" id="lineTab" role="tablist">
                                        @foreach($locales as $key => $locale)
                                            <li class="nav-item">
                                                <a class="nav-link @if($key == 'tr') active @endif" id="underline-{{ $key }}-tab" data-toggle="tab" href="#underline-{{ $key }}" role="tab" aria-controls="underline-{{ $key }}" aria-selected=" @if($key == 'tr') true @else false @endif">{{ $locale }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                    <div class="tab-content" id="lineTabContent-3">
                                        @foreach($locales as $key => $locale)
                                            <div class="tab-pane fade @if($key == 'tr')  show active @endif" id="underline-{{ $key }}" role="tabpanel" aria-labelledby="underline-{{ $key }}-tab">
                                                <div class="form-group">
                                                    <p>Hakkımızda Yazısı İçeriği ({{ $locale }})</p>
                                                    <textarea class="summernote {{$key}}" name="text[{{ $key }}]">{{ $about->getTranslation('text',$key) }}</textarea>
                                                    @error('text')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    {{--<div class="form-group">
                                        <p>Hakkımızda Yazısı İçeriği</p>
                                        <textarea class="summernote" style=" min-width: 100%"
                                                  name="content">{{ $about->content ?? '' }}</textarea>
                                        @error('text')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>--}}
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-12 col-12 text-right ">
                            <button form="mainForm" type="submit" class="btn btn-success btn-lg">Değişiklikleri Kaydet
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
