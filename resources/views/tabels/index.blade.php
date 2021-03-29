@extends('tabels.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>PPDB</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('tabels.create') }}"> Create New Tabel</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Asal Sekolah</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($tabels as $tabel)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $tabel->nis }}</td>
            <td>{{ $tabel->nama }}</td>
            <td>{{ $tabel->jns_kelamin }}</td>
            <td>{{ $tabel->temp_lahir }}</td>
            <td>{{ $tabel->tgl_lahir }}</td>
            <td>{{ $tabel->alamat }}</td>
            <td>{{ $tabel->asal_sekolah }}</td>
            <td>{{ $tabel->kelas }}</td>
            <td>{{ $tabel->jurusan }}</td>
            <td>
                <form action="{{ route('tabels.destroy',$tabel->id) }}" method="POST">
    
                    <a class="btn btn-primary" href="{{ route('tabels.edit',$tabel->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $tabels->links() !!}
      
@endsection