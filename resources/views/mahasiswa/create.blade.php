<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <h1>Tambah Data Mahasiswa</h1>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ url('/store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="input1">NIM</label>
                        <input type="text" class="form-control" id="input1" name="nim">
                    </div>
                    <div class="mb-3">
                        <label for="input1">Nama Lengkap</label>
                        <input type="text" class="form-control" id="input1" name="nama">
                    </div>
                    <div class="mb-3">
                        <label for="input1">Kelas</label>
                        <input type="text" class="form-control" id="input1" name="kelas">
                    </div>
                    <div class="mb-3">
                        <label for="input1">Prodi</label>
                        <input type="text" class="form-control" id="input1" name="prodi">
                    </div>
                    <div class="mb-3">
                        <label for="input1">Universitas</label>
                        <input type="text" class="form-control" id="input1" name="univ">
                    </div>
                    <div class="mb-3">
                        <label for="input1">Status</label>
                        <select class="form-control" id="select1" name="status">
                            <option value="AKTIF">AKTIF</option>
                            <option value="NONAKTIF">NONAKTIF</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="input1">Jenis Kelamin</label>
                        <select class="form-control" id="select1" name="gender">
                            <option value="L">Laki-Laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success">Tambah Data</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>
