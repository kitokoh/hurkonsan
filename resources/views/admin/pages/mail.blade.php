@extends('admin.pages.main')
@section('breadcumb','Mail Yönetimi')
@section('content')
    <div class="container-fluid">
        <div class="row layout-top-spacing">
            <div class="col-lg-5 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Mail Detayı</h4>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="widget-content widget-content-area">

                        <div class="row">
                            <div class="col-12">
                                <form action="{{ route('sendMailPost') }}" method="post" id="mainForm" enctype="multipart/form-data">@method('post')@csrf
                                    <div class="form-group">
                                        <p>Şu Kullanıcılara Gönder</p>
                                        <select class="form-control @error('type') is-invalid @enderror" name="type">
                                            <option value="-1">Seçilmedi</option>
                                            <option value="1">Yeni/Kayıtlı Üyeler</option>
                                            <option value="2">Mail Gönderilenler</option>
                                            <option value="3">Dönüş Alınanlar</option>
                                            <option value="0">Mail İptal Edenler</option>
                                        </select>
                                        @error('type')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <p>Şehir</p>
                                        <select class="form-control @error('city[]') is-invalid @enderror basic" multiple name="city[]">
                                            @foreach($cities as $city)
                                                <option value="{{ $city->id }}">{{ $city->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('city')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <p>Firma</p>
                                        <select class="form-control @error('users[]') is-invalid @enderror basic" multiple name="users[]">
                                            @foreach($mailUsers as $mailUser)
                                                <option value="{{ $mailUser->id }}">{{ $mailUser->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('users[]')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <p>Sektör</p>
                                        <select class="form-control @error('category[]') is-invalid @enderror basic" multiple name="category[]">
                                            @foreach($mailCategories as $mailCategory)
                                                <option value="{{ $mailCategory->id }}">{{ $mailCategory->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('category[]')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Mail Detayı</h4>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="widget-content widget-content-area">

                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <p>Mesaj</p>
                                    <textarea form="mainForm" id="summernote" name="text"></textarea>
                                </div>
                                <button class="btn btn-success m-3" form="mainForm">Kaydet</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <style>
        $(".basic").select2({
            tags: true,
        });
    </style>
@endsection
