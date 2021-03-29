<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <title>Form Pendaftaran Siswa Baru</title>
</head>
<body>
  <form>
    <div class="form-group mt-5">
      <label for="nis">NIS</label>
      <input type="number" id="nis" class="form-control" placeholder="Masukan NIS">
    </div>
  
    <div class="form-group mt-3">
      <label for="nama">Nama</label>
      <input type="text" id="umur" class="form-control" placeholder="Masukkan Nama">
    </div>
  
    <div class="form-group mt-3">
      <label for="jns_kelamin">Jenis Kelamin</label>
      <select id="jns_kelamin" class="form-control">
        <option value="">- Pilih Jenis Kelamin</option>
        <option value="">Laki-laki</option>
        <option value="">Perempuan</option>
      </select>
    </div>
    
    <div class="form-group mt-3">
      <label for="temp_lahir">Tempat Lahir</label>
      <input type="text" id="temp_lahir" class="form-control" rows="3" placeholder="Masukkan Tempat Lahir">
    </div>

    <div class="form-group mt-3">
      <label for="tgl_lahir">Tanggal Lahir</label>
      <input type="date" id="tgl_lahir" class="form-control">
    </div>

    <div class="form-group mt-3">
      <label for="alamat">Alamat</label>
      <textarea class="form-control" id="alamat" placeholder="Masukkan Alamat"></textarea>
    </div>

    <div class="form-group mt-3">
      <label for="asal_sekolah">Asal Sekolah</label>
      <input type="text" id="asal_sekolah" class="form-control" placeholder="Masukkan Asal Sekolah">
    </div>

    <div class="form-group mt-3">
      <label for="kelas">Kelas</label>
      <select id="kelas" class="form-control">
        <option value="">- Pilih Kelas</option>
        <option value="">X</option>
        <option value="">XI</option>
        <option value="">XII</option>
      </select>
    </div>

    <div class="form-group mt-3">
      <label for="jurusan">Jurusan</label>
      <select id="jurusan" class="form-control">
        <option value="">- Pilih Jurusan</option>
        <option value="">RPL</option>
        <option value="">TKJ</option>
        <option value="">OTKP</option>
        <option value="">MMD</option>
        <option value="">HTL</option>
        <option value="">TBG</option>
      </select>
    </div>
  
    <button type="submit" class="btn btn-primary mt-5">SAVE</button>
  </form>
</body>
</html>