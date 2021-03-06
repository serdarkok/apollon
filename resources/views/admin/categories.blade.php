@extends('admin.layout')

@section('content')

    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">{{ trans('text.admin.menu.allcategories') }}</div>
            <div class="panel-body">

                <table class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Kategori Adı</th>
                        <th>Slug</th>
                        <th>Düzenle</th>
                        <th>Sil</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Kategori Adı</th>
                        <th>Slug</th>
                        <th>Düzenle</th>
                        <th>Sil</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($categories as $bilgi)
                        <tr>
                            <td>{{ $bilgi->id }}</td>
                            <td>{{ $bilgi->_content['category_name'] }}</td>
                            <td>{{ $bilgi->_content['category_slug'] }}</td>
                            <td class="text-center"><a href="categories/new/{{ $bilgi->id }}" class="btn btn-default btn-xs">Düzenle</a></td>
                            <td class="text-center" id="confirm"><a href="categories/delete/{{ $bilgi->id }}" class="btn btn-danger btn-xs">Sil</a></td>
                        </tr>
                        @foreach($bilgi->child_categories as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td><i class="fa fa-long-arrow-right"></i> {{ $item->_content['category_name'] }}</td>
                                <td>{{ $item->_content['category_slug'] }}</td>
                                <td class="text-center"><a href="categories/new/{{ $item->id }}" class="btn btn-default btn-xs">Düzenle</a></td>
                                <td class="text-center" id="confirm"><a href="categories/delete/{{ $item->id }}" class="btn btn-danger btn-xs">Sil</a></td>
                            </tr>
                        @endforeach
                    @endforeach

                    </tbody>
                </table>

            </div>
        </div>
    </div>

    <script type="text/javascript">
        $('#confirm a').click(function(event) {
            event.preventDefault();
            var r=confirm("Geri dönüşü olmayacak şekilde silinecektir, devam etmek istediğinize emin misiniz?");
            if (r==true)   {
                window.location = $(this).attr('href');
            }

        });
    </script>

@endsection