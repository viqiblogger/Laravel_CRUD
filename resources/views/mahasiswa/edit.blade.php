<!DOCTYPE html>
<html>
    <head>
        <title</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h1>Edit Data Mahasiswa</h1>
        @if(session('sukses'))
        <div class="alert alert-success" role="alert">
            {{session('sukses')}}
        </div>
        @endif
            <div class="row">
                <div class="col-lg-12">
            <form action="/mahasiswa/{{$mahasiswa->id}}/update" method="POST">
                        {{csrf_field()}}
                        
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Mahasiswa</label>
                            <input name="nama_mahasiswa" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Mahasiswa" value="{{$mahasiswa->nama_mahasiswa}}">
                          </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">NPM</label>
                            <input name="npm_mahasiswa" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="NPM" value="{{$mahasiswa->npm_mahasiswa}}">
                          </div>

                                <div class="form-group">
                                <label for="exampleFormControlSelect1">Pilih Jenis Kelamin</label>
                                <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                                    <option value="Lk" @if{$mahasiswa->jenis_kelamin == "Lk"} selected @endif>Laki-Laki</option>
                                    <option value="Pr" @if{$mahasiswa->jenis_kelamin == "Pr"} selected @endif>Perempuan</option>
                                </select>
                            </div>

                            <div class="form-group">
                            <label for="exampleInputEmail1">Agama</label>
                            <input name="agama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Agama" value="{{$mahasiswa->agama}}">
                          </div>

                          <div class="form-group">
                             <label for="exampleFormControlTexta">Alamat</label>
                            <textarea name="alamat" class="form-control" id="exampleFormControlTextareal" rows="3">({$mahasiswa->alamat})</textarea>
                          </div>
                          <button type="submit" class="btn btn-warning">Update</button>
                        </form>
                      </div>


            </div>
        </div>

       




    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>

