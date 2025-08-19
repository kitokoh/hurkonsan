@extends('admin.pages.main')
@section('breadcumb','Site Yönetimi')
@section('content')
    <div class="container-fluid">
        <div class="row layout-top-spacing">
            <div class="col-lg-7 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Genel Site Ayarları</h4>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="widget-content widget-content-area">
                        <div class="row">
                            <div class="col-12">
                                <form action="{{ route('settings.update',$settings->id) }}" method="post" id="mainForm"
                                      enctype="multipart/form-data">@csrf @method('put')
                                    <ul class="nav nav-tabs  mb-3" id="lineTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active " id="underline-tab" data-toggle="tab"
                                               href="#underline-1" role="tab" aria-controls="underline-1"
                                               aria-selected="true">Genel Bilgiler</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="lineTabContent-3">
                                        <div class="tab-pane fade  show active " id="underline-1" role="tabpanel"
                                             aria-labelledby="underline-tab">

                                            {{--<div class="form-group">
                                                <p>Katolog</p>
                                                <input id="t-text" type="text" name="phone"
                                                       class="form-control @error('phone') is-invalid @enderror"
                                                       --}}{{--value="{{ $settings->catalog }}"--}}{{-- required>
                                                @error('phone')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>--}}

                                            <p>Hakkımızda(Kısaca Firmanızdan Bahsediniz) </p>
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
                                                            <p>Hakkımızda İçerik ({{ $locale }})</p>
                                                            <textarea class="form-control {{$key}}" id="t-text" type="text" name="about[{{ $key }}]">{{ $settings->getTranslation('about',$key) }}</textarea>
                                                            @error('text')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>


                                            <div class="form-group">
                                                <p>Telefon</p>
                                                <input id="t-text" type="text" name="phone"
                                                       class="form-control @error('phone') is-invalid @enderror"
                                                       value="{{ $settings->phone }}" required>
                                                @error('phone')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>


                                            <div class="form-group">
                                                <p>Whatsapp Telefon</p>
                                                <input id="t-text" type="text" name="whatsapp"
                                                       class="form-control @error('whatsapp') is-invalid @enderror"
                                                       value="{{ $settings->whatsapp }}" required>
                                                @error('whatsapp')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>



                                            <div class="form-group">
                                                <p>Fax</p>
                                                <input id="t-text" type="text" name="phone_other"
                                                       class="form-control @error('phone_other') is-invalid @enderror"
                                                       value="{{ $settings->phone_other }}" required>
                                                @error('phone_other')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <p>E-Posta</p>
                                                <input id="t-text" type="text" name="email"
                                                       class="form-control @error('email') is-invalid @enderror"
                                                       value="{{ $settings->email }}" required>
                                                @error('name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <p>Adres</p>
                                                <input id="t-text" type="text" name="address"
                                                       class="form-control @error('address') is-invalid @enderror"
                                                       value="{{ $settings->address }}" required>
                                                @error('name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <p>Facebook Link</p>
                                                <input id="t-text" type="text" name="facebook"
                                                       class="form-control @error('facebook') is-invalid @enderror"
                                                       value="{{ $settings->facebook }}" required>
                                                @error('name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <p>Twitter Link</p>
                                                <input id="t-text" type="text" name="twitter"
                                                       class="form-control @error('twitter') is-invalid @enderror"
                                                       value="{{ $settings->twitter }}" required>
                                                @error('name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <p>Instagram Link</p>
                                                <input id="t-text" type="text" name="instagram"
                                                       class="form-control @error('instagram') is-invalid @enderror"
                                                       value="{{ $settings->instagram }}" required>
                                                @error('name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <p>Youtube Link</p>
                                                <input id="t-text" type="text" name="you_tube"
                                                       class="form-control @error('you_tube') is-invalid @enderror"
                                                       value="{{ $settings->you_tube }}" required>
                                                @error('name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="statbox widget box box-shadow">
                    <div class="widget-content widget-content-area ">
                        <div class="row ">
                            <div class="col-lg-12 col-12" style="align-items: end; justify-content: end; display: flex">
                                <button form="mainForm" type="submit" class="btn btn-success btn-lg m-3">Güncelle
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
