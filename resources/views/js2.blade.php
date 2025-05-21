<html>
    <head>
        <title>Kalkulator</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            function formvalidation()
            {
                var nrp = document.getElementById("nrp").value;
                var nama = document.getElementById("nama").value;
                if (nrp.length == 0)//nrp harus ada isinya
                    {
                        Swal.fire({
                            title: "Pesan Kesalahan",
                            text: "NRP harus diisi!",
                            icon: "error"
                            });
                        document.getElementById("nrp").focus();
                        return false ;
                    }
                if (isNaN(nrp))
                    {
                        Swal.fire({
                                title: "Pesan Kesalahan",
                                text: "NRP harus angka",
                                icon: "error"
                                });
                            document.getElementById("nrp").focus();
                            return false ;
                    }
                if (nrp.length != 10)
                    {
                        Swal.fire({
                                title: "Pesan Kesalahan",
                                text: "NRP harus 10 angka",
                                icon: "error"
                                });
                            document.getElementById("nrp").focus();
                            return false ; 
                    }
                
                if (nama.length == 0)
                    {
                        Swal.fire({
                            title: "Pesan Kesalahan",
                            text: "Nama harus diisi!",
                            icon: "error"
                            });
                        document.getElementById("nama").focus();
                        return false ;
                    }
                
              //kalu diubah, returnnya true  
            }
        </script>
    </head>
    <body>
        <div class = " container">
            <h3>Form Pendaftran ISE</h3>
            <form id="formpendaftaran" action="https://google.co.id" method="get" onsubmit="return formvalidation();" >
                NRP : 
                <input type ="text" id="nrp" class="form-control" placeholder="Silahkan Isi Nrp, 10 digit, harus angka, gak boleh kosong" name="nrp">
                <br>
                Nama :
                <input type ="text" id="nama" class="form-control" placeholder="Silahkan Isi Nama, minimal 1 digit, gak boleh kosong" name="nama">
                <br>
                <input type="submit" class="btn btn-primary" value="Daftar">
            </form>
        </div>
    </body>
</html>