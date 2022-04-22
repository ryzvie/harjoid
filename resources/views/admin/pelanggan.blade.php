
@extends("admin.template")

@section("title")
<h1 class="d-flex flex-column text-dark fw-bolder fs-2 mb-0">Pelanggan</h1>
<!--begin::Breadcrumb-->
<ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 pt-1">
    <!--begin::Item-->
    <li class="breadcrumb-item text-muted">
        <a href="/good/index.html" class="text-muted text-hover-primary">Home</a>
    </li>
    <!--end::Item-->
    <!--begin::Item-->
    <li class="breadcrumb-item">
        <span class="bullet bg-gray-300 w-5px h-2px"></span>
    </li>
    <!--end::Item-->
    <!--begin::Item-->
    <li class="breadcrumb-item text-muted">Pelanggan</li>
    <!--end::Item-->
    <!--begin::Item-->
    <li class="breadcrumb-item">
        <span class="bullet bg-gray-300 w-5px h-2px"></span>
    </li>
    <!--end::Item-->
    <!--begin::Item-->
    <li class="breadcrumb-item text-dark">Multipurpose</li>
    <!--end::Item-->
</ul>
<!--end::Breadcrumb-->
@endsection

@section("content")
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Container-->
    <div id="kt_content_container" class="container-fluid">

        @if(Session('success'))
            <div class="alert alert-success">{{ Session('success') }}</div>
        @endif

        <div id="notif"></div>
        
        <div class="mb-3">
            <a href="{{ url('admin/pelanggan/add') }}" class="btn btn-primary btn-sm">Tambah Data</a>
            <a onclick="deleteall(this)" class="btn btn-danger btn-sm">Selected Delete</a>
        </div>
        <div class="table-responsive">
            <table class="table" id="datatable">
                <thead>
                    <tr class="fw-bolder fs-6 text-gray-800">
                        <th></th>
                        <th>#</th>
                        <th>Nama Pelanggan</th>
                        <th>Tanggal Lahir</th>
                        <th>Email</th>
                        <th>No. Whatsapp / No. Handphone</th>
                        <th>Alamat</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @php $seq = 1; @endphp
                    @foreach($pelanggan as $data)
                    <tr>
                        <td><input type="checkbox" value="{{ $data->id }}" /></td>
                        <td>{{ $seq }}</td>
                        <td>{{ $data->nama }}</td>
                        <td>{{ date("d M Y", strtotime($data->tgl_lahir)) }}</td>
                        <td>{{ $data->email }}</td>
                        <td>{{ "+62".$data->no_wa." / +62".$data->no_hp }}</td>
                        <td>{{ $data->alamat }}</td>
                        <td>
                            <a href="{{ url('admin/pelanggan/edit/'.$data->id) }}" class="btn btn-primary btn-xs" type="button">edit</a>
                            <a href="{{ url('admin/pelanggan/delete/'.$data->id) }}" class="btn btn-danger btn-xs" type="button">Delete</a>
                        </td>
                    </tr>
                    @php $seq++; @endphp
                    @endforeach
                </tbody>
            </table>
        </div>
   
   
    </div>
    <!--end::Container-->
</div>
@csrf
<!--end::Content-->
@endsection

@section('plugin')
    
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <script src="//cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
@endsection


@section('javascript')
    <script type="text/javascript">
        $(document).ready(function(){
            $('#datatable').DataTable();
        });

        function deleteall(obj)
        {
            var table = $("#datatable").find("tbody").find("tr");
            var idpost = [];

            $.each($(table), function(a,b){

                var checked = $(this).find("td:eq(0)").find("input").is(":checked");

                if(checked)
                {
                    dataID = {
                        id : $(this).find("td:eq(0)").find("input").val()
                    }

                    idpost.push(dataID);
                }
            });
            
            $.ajax({
                url : "{{ url('admin/pelanggan/post') }}",
                type : "POST",
                dataType : "JSON",
                data : {
                    idpost : idpost,
                    _token : $("input[name='_token']").val()
                },
                success : function(result, status, xhr){
                    console.log(result);
                    if(result.status == 200)
                    {
                        $("#notif").append("<div class='alert alert-success'>"+result.message+"</div>");

                        setTimeout(() => {
                            window.location.href = "{{ url('admin/pelanggan') }}";
                        }, 1500);
                    }
                }
            });
        }
    </script>
@endsection
