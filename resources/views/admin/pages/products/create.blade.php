@extends('admin.pages.main')
@section('breadcumb','Ürün Yönetimi')
@section('content')
    <div class="container-fluid">
        <div class="row layout-top-spacing">
            <div class="col-lg-12 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Ürün Ekle</h4>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="widget-content widget-content-area">
                        <div class="row">
                            <div class="col-12">
                                <form action="{{ route('products.store') }}" method="post" id="mainForm"
                                      enctype="multipart/form-data">@csrf
                                    <ul class="nav nav-tabs  mb-3" id="lineTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active " id="underline-tab" data-toggle="tab"
                                               href="#underline-1" role="tab" aria-controls="underline-1"
                                               aria-selected="true false ">Ürün'e ait Detaylar</a>
                                        </li>
                                    </ul>

                                    <div class="row">
                                        <div class="tab-content col-6" id="lineTabContent-3">
                                            <div class="tab-pane fade  show active" id="underline-1" role="tabpanel"
                                                 aria-labelledby="underline-tab">

                                                <div class="form-group">
                                                    <p>Kategori Adı</p>
                                                    {{--<input id="t-text" type="text" name="name" class="form-control @error('name') is-invalid @enderror" required>
                                                    @error('name')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror--}}
                                                    <select name="category_id" class="form-control" id="" >
                                                        @foreach($category as $key => $categories )
                                                            <option value="{{$categories['id']}}">{{$categories['name']}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>

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
                                                                <p>Ürün Adı ({{ $locale }})</p>
                                                                <input id="t-text" type="text" name="title[{{ $key }}]" class="form-control @error('name') is-invalid @enderror" required>
                                                                @error('name')
                                                                <div class="alert alert-danger">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group">
                                                                <p>Ürün Açıklaması(Zorunlu) ({{ $locale }})</p>
                                                                <textarea class="summernote {{$key}}" name="text[{{ $key }}]" required ></textarea>
                                                                @error('text')
                                                                <div class="alert alert-danger">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group">
                                                                <p>Ürün Özellikleri(isteğe bağlı) ({{ $locale }})</p>
                                                                <textarea class="summernote {{$key}}" name="properties[{{ $key }}]" ></textarea>
                                                                @error('text')
                                                                <div class="alert alert-danger">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                                <div class="col-lg-12 col-6 layout-spacing">
                                                    <div class="statbox widget box box-shadow">
                                                        <div class="widget-header">
                                                            <div class="row">
                                                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                                    <h4>Teknik Detay Görseli(500x350)(Lütfen Ürün Görseli İle Karıştırmayınız!!) </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="widget-content widget-content-area">
                                                            <div class="row">
                                                                <div class="col-lg-12 col-12 ">
                                                                    <div class="custom-file-container" data-upload-id="mySecondImage">
                                                                        <label>Fotoğrafı Kaldır <a href="javascript:void(0)"
                                                                                                   class="custom-file-container__image-clear"
                                                                                                   title="Clear Image">x</a></label>
                                                                        <label class="custom-file-container__custom-file">
                                                                            <input type="file" form="mainForm" name="image_tecnical"
                                                                                   class="custom-file-container__custom-file__custom-file-input"
                                                                                   accept="image/*">
                                                                            <span
                                                                                    class="custom-file-container__custom-file__custom-file-control"></span>
                                                                        </label>
                                                                        <div class="custom-file-container__image-preview"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>

                                        <div class="tab-content col-6" id="lineTabContent-3">
                                            <div class="statbox widget box box-shadow">
                                                <div class="widget-header">
                                                    <div class="row">
                                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                            <h4>Ürün Görselleri(500x700)</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="widget-content widget-content-area">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-12 ">
                                                            <div class="custom-file-container"
                                                                 data-upload-id="myFirstImage">
                                                                <label>Fotoğrafı Kaldır <a href="javascript:void(0)"
                                                                                           class="custom-file-container__image-clear"
                                                                                           title="Clear Image">x</a></label>
                                                                <label class="custom-file-container__custom-file">
                                                                    <input type="file" form="mainForm" name="image[]"
                                                                           class="custom-file-container__custom-file__custom-file-input"
                                                                           accept="image/*" multiple required>
                                                                    <span
                                                                            class="custom-file-container__custom-file__custom-file-control"></span>
                                                                </label>
                                                                <div class="custom-file-container__image-preview"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade  show active" id="underline-1" role="tabpanel"
                                                 aria-labelledby="underline-tab">
                                                {{--<div class="form-group">
                                                    <p>Youtube Link Kodu <a href="#"><i class="fa-solid fa-circle-info" onclick="infoItem()" style="color: black;"></i></a></p>
                                                    <input id="t-text" type="text" name="youtube_link"
                                                           class="form-control @error('youtube_link') is-invalid @enderror" >
                                                    @error('youtube_link')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>--}}

                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-12">
                                        <div class="statbox widget box box-shadow"
                                             style=" display: flex; justify-content: end">
                                            <div class="widget-content widget-content-area">
                                                <div class="row">
                                                    <div class="col-lg-12 col-12 ">
                                                        <button form="mainForm" type="submit"
                                                                class="btn btn-success btn-lg m-3">Kaydet
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

@section('js')
    <script>
        function addNewRaw() {
            // append edilecek
        }
    </script>
@endsection
