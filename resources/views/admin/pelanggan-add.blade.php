@extends("admin.template")

@section("title")
<h1 class="d-flex flex-column text-dark fw-bolder fs-2 mb-0">Tambah Pelanggan</h1>
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
        
        <form class="form-horizontal" method="POST" action="{{ url('admin/pelanggan/post') }}">
            @csrf
            <div class="form-group mb-3">
                <h4>Informasi Pelanggan</h4>
            </div>

            <div class="form-group mb-3">
                <label class="control-label mb-2">Nama Lengkap</label>
                <div class="col-lg-9">
                    <input type="text" class="@error('namalengkap') is-invalid @enderror form-control" name="namalengkap" />

                    @error('namalengkap')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="form-group mb-3">
                <label class="control-label mb-2">Tanggal Lahir</label>
                <div class="col-lg-3">
                    <input type="text" placeholder="dd-mm-yyyy" readonly class="@error('tgl_lahir') is-invalid @enderror form-control" role="datepicker" name="tgl_lahir" />
                
                    @error('tgl_lahir')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="form-group mb-3">
                <label class="control-label mb-2">Alamat Lengkap</label>
                <div class="col-lg-9">
                    <textarea class="form-control" name="alamatlengkap"></textarea>
                </div>
            </div>

            <div class="form-group mb-3">
                <h4>Kontak Yang Bisa Dihubungi</h4>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group mb-3">
                        <label class="control-label mb-2">Email</label>
                        <div class="col-lg-9">
                            <input type="text" class="@error('tgl_lahir') is-invalid @enderror form-control" name="email" />

                            @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group mb-3">
                        <label class="control-label mb-2">No. Handphone</label>
                        <div class="col-lg-8">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">+62</span>
                                </div>
                                <input type="text" class="@error('no_hp') is-invalid @enderror form-control" name="no_hp" placeholder="829292292" value="">
                            </div>
                            @error('no_hp')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group mb-3" style="font-size:12px;">
                        <div class="col-lg-12">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Apakah No. Whatsapp sama dengan No. Handphone ?</label>
                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <label class="control-label mb-2">No. Whatsapp</label>
                        <div class="col-lg-8">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">+62</span>
                                </div>
                                <input type="text" class="@error('no_wa') is-invalid @enderror form-control" name="no_wa" placeholder="829292292" value="">
                            </div>
                            @error('no_wa')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group mb-3">
                <h4>Password Pelanggan</h4>
            </div>

            <div class="row mb-5">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="control-label col-lg-12">Password</label>
                        <div class="col-lg-10">
                            <input type="password" onblur="matchingpassword(this)" placeholder="Masukan Password . . ." class="@error('password') is-invalid @enderror form-control" name="password">
                            @error('password')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="control-label col-lg-12">Konf. Password</label>
                        <div class="col-lg-10">
                            <input type="password" onblur="matchingpassword(this)" placeholder="Masukan Konfirm Password . . ." class="@error('konf_password') is-invalid @enderror form-control" name="konf_password">
                            @error('konf_password')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">

                <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                <a href="#" type="button" class="btn btn-sm btn-danger">Kembali</a>
            </div>
            
        </form>
        
    </div>
    <!--end::Container-->
</div>
<!--end::Content-->
@endsection

@section('plugin')

<link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
@endsection

@section('javascript')
<script type="text/javascript">
    $(document).ready(function(){
        $("input[role='datepicker']").datepicker({
            dateFormat: "dd-mm-yy",
            changeMonth : true,
            changeYear : true
        });

        $("#exampleCheck1").on("click", function(){
            var checked = $(this).is(":checked");
            var nohp = $("input[name='no_hp']").val();

            if(checked)
            {
                if(nohp.length > 0)
                {
                    $("input[name='no_wa']").val(nohp);
                    $("input[name='no_wa']").attr("readonly","readonly");
                }
            }
            else
            {
                $("input[name='no_wa']").val("");
                $("input[name='no_wa']").removeAttr("readonly");
            }
        });
    });
</script>
@endsection