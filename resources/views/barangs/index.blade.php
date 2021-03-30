@extends('barangs.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2>DATA BARANG - TOKO SUMBER MAKMUR</h2>
            </div>

            <div class="float-right my-2">
                <a class="btn btnsuccess" href="{{ route('barangs.create') }}"> Input Barang</a>
            </div>

            <div>
            <div class="mx-auto pull-right">
                <div class="float-left">
                    <form action="{{ route('barangs.index') }}" method="GET" role="search">
                        <div class="input-group">
                            <span class="input-group-btn mr-5 mt-1">
                                <button class="btn btn-info" type="submit" title="Search Barang">
                                    <span class="fas fa-search">Search</span>
                                </button>
                            </span>

                            <input type="text" class="form-control mr-2" name="term" placeholder="Search Nama Barang" id="term">
                            <a href="{{ route('barangs.index') }}" class=" mt-1">
                                <span class="input-group-btn">
                                    <button class="btn btn-danger" type="button" title="Refresh page">
                                        <span class="fas fa-sync-alt">Refresh</span>
                                    </button>
                                </span>
                            </a>
                        </div>
                    </form>
                </div>
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
            <th>Id Barang</th>
            <th>Kode barang</th>
            <th>Nama Barang</th>
            <th>Kategori Barang</th>
            <th>Harga</th>
            <th>QTY</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($barangs as $Barang)
        <tr>
            <td>{{ $Barang->id_barang }}</td>
            <td>{{ $Barang->kode_barang }}</td>
            <td>{{ $Barang->nama_barang }}</td>
            <td>{{ $Barang->kategori_barang }}</td>
            <td>{{ $Barang->harga }}</td>
            <td>{{ $Barang->qty }}</td>
            <td>
                <form action="{{ route('barangs.destroy',$Barang->id_barang) }}" method="POST">
                    <a class="btn btninfo" href="{{ route('barangs.show',$Barang->id_barang) }}">Show</a>
                    <a class="btn btnprimary" href="{{ route('barangs.edit',$Barang->id_barang) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
    </table>
    {{ $barangs->links() }}
@endsection