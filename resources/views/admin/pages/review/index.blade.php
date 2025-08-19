@extends('admin.pages.main')
@section('breadcumb','Yorum Yönetimi')
@section('content')
    <div class="layout-px-spacing">
        <div class="row layout-top-spacing">
            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <div class="widget-content widget-content-area br-6 ">
                    <div class="text-right">
                        <a href="{{ route('review.create') }}">
                            <button class="btn btn-success m-3">Ekle</button>
                        </a>
                    </div>
                    <table id="zero-config" class="table dt-table-hover" style="width:100%;padding: 15px">
                        <thead>
                        <tr>
                            <th>Fotoğraf</th>
                            <th>Yorum Sahibi</th>
                            <th>Ünvanı</th>
                            <th class="no-content">Eylem</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($customerReview as $key => $item)
                            <tr>
                                <td>
                                    <img width="200" height="150" src="/storage/{{ $item->image }}">
                                </td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->job }}</td>
                                <td>
                                    <a href="{{ route('review.edit',$item->id) }}"><i style="color: cornflowerblue"
                                                                                      class="far fa-edit fa-2x"></i>
                                    </a>
                                    <a href="#"
                                       onclick="deleteItem({{ $key }})"><i
                                            style="color: red" class="far fa-trash-alt fa-2x"></i></a>
                                    <form id="deleteform{{ $key }}" method="POST"
                                          action="{{ route('review.destroy',$item->id) }}">@method('DELETE')@csrf</form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Fotoğraf</th>
                            <th>Inceleme</th>
                            <th class="no-content">Eylem</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
