@extends('admin.pages.main')
@section('breadcumb','Kategori Yönetimi')
@section('content')
    <div class="layout-px-spacing">
        <div class="row layout-top-spacing">
            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <div class="widget-content widget-content-area br-6 ">
                    <div class="text-right">
                        <a href="{{ route('categories.create') }}">
                            <button class="btn btn-success m-3">Ekle</button>
                        </a>
                    </div>
                    <table id="zero-config" class="table dt-table-hover" style="width:100%;padding: 15px">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Kategori Adı</th>
                            <th class="no-content">İşlem</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($categories as $key => $categories){{--
                            @php $prod = explode(',',str_replace(['[',']'],'',str_replace('"','',$product->images))); @endphp--}}
                            <tr>
                                <td>{{ $categories->order_number }}</td>
                                <td>{{ $categories->name }}</td>
                                <td>
                                    <a href="{{ route('categories.edit',$categories->id) }}"><i style="color: cornflowerblue" class="far fa-edit fa-2x"></i>  </a>
                                    <a href="#" {{--onclick="document.getElementById('deleteform{{ $key }}').submit()"--}} onclick="deleteItem({{ $key }})"><i style="color: red" class="far fa-trash-alt fa-2x"></i></a>
                                    <form id="deleteform{{ $key }}" method="POST" action="{{ route('categories.destroy',$categories->id) }}">@method('DELETE')@csrf</form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Kategori Adı</th>
                            <th class="no-content">İşlem</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
