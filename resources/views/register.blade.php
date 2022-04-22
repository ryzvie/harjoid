@extends('template')

@section('content')

<div class="container">
    <div class="row">
        <div class="d-flex align-items-center col-lg-5">
            <div class="">
                <img class="d-block w-100" src="{{ asset('img/working.svg') }}" alt="First slide">
            </div>
        </div>
        <div class="col-lg-7 col-12">
            <div class="card mb-5">
                <div class="card-body">
                    <h4 style="line-height:10px; font-weight:600; font-size:18px; color:#1e1c53;">Form Pendaftaran Akun</h4>
                    <hr>
                    
                    <form class="form-horizontal" method="POST" action="{{ url('register/add') }}">
                        @csrf                                
                        <div class="form-group">
                            <div style="font-size:16px; font-weight:600; color:#1e1c53;" class="col-lg-12">Informasi Diri Anda</div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label col-lg-12">Nama Lengkap</label>
                                    <div class="col-lg-12">
                                        <input type="text" value="" placeholder="Masukan Nama Lengkap . . ." class="@error('namalengkap') is-invalid @enderror form-control" name="namalengkap">
                                        @error('namalengkap')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label col-lg-12">Tanggal Lahir</label>
                                    <div class="col-lg-12">
                                        <input type="text" readonly placeholder="Masukan Tanggal Lahir . . ." role="datepicker" class="form-control" value="" name="tgllahir">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="control-label col-lg-12">Alamat Lengkap</label>
                                    <div class="col-lg-12">
                                        <input type="text" placeholder="Masukan Alamat Lengkap . . ." class="form-control" value="" name="alamatlengkap">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div style="font-size:16px; font-weight:600; color:#1e1c53;" class="col-lg-12">Kontak Yang Bisa Dihubungi</div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label col-lg-12">Email</label>
                                    <div class="col-lg-12">
                                        <input type="text" placeholder="Masukan Email . . ." class="@error('email') is-invalid @enderror form-control" name="email" value="">
                                        @error('email')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label col-lg-12">No. Handphone</label>
                                    <div class="col-lg-12">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">+62</span>
                                            </div>
                                            <input type="text" class="@error('no_hp') is-invalid @enderror form-control" name="no_hp" placeholder="829292292" value="">
                                            @error('no_hp')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group" style="font-size:12px;">
                                    <div class="col-lg-12">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Apakah No. Handphone sama dengan No. Whatsapp ?</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-12">No. Whatsapp</label>
                                    <div class="col-lg-12">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">+62</span>
                                            </div>
                                            <input type="text" class="form-control" name="no_wa" placeholder="829292292" value="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div style="font-size:16px; font-weight:600;" class="col-lg-12">Password Anda</div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label col-lg-12">Password</label>
                                    <div class="col-lg-12">
                                        <input type="password" onblur="matchingpassword(this)" placeholder="Masukan Password . . ." class="@error('password') is-invalid @enderror form-control" name="password">
                                        @error('password')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label col-lg-12">Konfirmasi Password</label>
                                    <div class="col-lg-12">
                                        <input type="password" onblur="matchingpassword(this)" placeholder="Masukan Konfirmasi Password . . ." class="@error('password') is-invalid @enderror form-control" name="konf_password">
                                        @error('konf_password')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-12">
                                <button style="width:100%;" type="submit" class="btn btn-daftar btn-warning">Daftar Akun</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

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
    });
</script>
@endsection