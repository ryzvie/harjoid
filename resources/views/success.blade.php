<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Pendaftaran Berhasil</title>
        <style type="text/css">
        *,*:before,*:after{margin:0;padding:0;box-sizing: border-box;}
        body {margin: 0; padding: 0; min-width: 100%!important;font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;color:#333;line-height: 150%;}
        .content {width: 100%; max-width: 600px;}  
        img{max-width: 100%;}
        </style>
    </head>
    <body style="background:#f9f9f9;" width="100%">
        <div style="text-align:center; padding:20px; width:500px; border:1px solid #ccc; background:#fff; border-radius:10px; margin:40px auto;">
            <div>
                <img src="https://www.harianjogja.com/assets/v1/images/logo-harjo.png" style="width:150px;">
            </div>
            <div style="font-size:20px; font-weight:500; margin-bottom:10px;">Selamat anda berhasil terdaftar</div>
            <div style="text-align:left; margin-bottom:30px;">
                <div>Hai {{ $nama }},</div>
                <div>Selamat anda telah berhasil terdaftar di aplikasi harianjogja.com, Silahkan cek email anda karena link aktifasi kami kirim melalui email.</div>
                <div style="text-align:center; margin-top:10px;">Terima kasih</div>
            </div>
            <div>
                <a href="{{ url('/') }}" style="padding:10px; color:#fff; border-radius:5px; background:#1e1c53 !important" type="button">Kembali ke halaman depan</a>
            </div>
        </div>
    
    </body>
</html>
