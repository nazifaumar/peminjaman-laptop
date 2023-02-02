    @extends('layout')
    @section('container')
    <body class="ol">
    <div class="gam mx-5">
        <div class="total">
            <br>
            <h4 class="fw-bold text-break mt-4 mx-3 text-white">Total</h4>
            <hr>
            <table class="table" id="oiw">
                <tr>
                    <td class="text-white" style="width: 20px"><i class="bi bi-box-arrow-in-right"
                            style="font-size: 45px"></i></td>
                    <td class="text-white" style="width: 300px">
                        <div class="kon">
                            <div class="fw-bold">
                                Dipinjamkan
                            </div>
                            Total laptop yang dipinjamkan hari ini
                        </div>
                    </td>
                    <td class="text-white" style="width: 60px">
                        <div class="pls px-2">
                            {{ $laptops->where('return_date', '=', null)->count() }}
                        </div>
                    </td>
                </tr>
            </table>
            <table class="table" id="oiw">
                <tr>
                    <td class="text-white" style="width: 20px"><i class="bi bi-arrow-left-right"
                            style="font-size: 45px"></i></td>
                    <td class="text-white" style="width: 300px">
                        <div class="kon">
                            <div class="fw-bold">
                                Dikembalikan
                            </div>
                            Total laptop yang dikembalikan hari ini
                        </div>
                    </td>
                    <td class="text-white" style="width: 60px">
                        <div class="pls px-2">
                            {{ $laptops->where('return_date', '!=', null)->count() }}
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <br>
        <table class="table text-white table-striped table-bordered ">
            <tr>
                <td class="text-white">Nis</td>
                <td class="text-white">Name</td>
                <td class="text-white">Region</td>
                <td class="text-white">Rombel</td>
                <td class="text-white">Purposes</td>
                <td class="text-white">Date</td>
                <td class="text-white">Return Date</td>
                <td class="text-white">Teacher</td>
                <td class="text-white">Action</td>
            </tr>
            @foreach ($laptops as $laptop)
                <tr class="table-rows">
                    <td class="text-white">{{ $laptop['nis'] }}</td>
                    <td class="text-white">{{ $laptop['name'] }}</td>
                    <td class="text-white">{{ $laptop['rayon'] }}</td>
                    <td class="text-white">{{ $laptop['rombel'] }}</td>
                    <td class="text-white">{{ $laptop['purposes'] }}</td>
                    {{-- 
                    F j, Y — January 15, 2019
                    j.F.Y — 15.January.2019
                    Y/m/d — 2019/01/15
                    m/d/Y — 01/15/2019
                    d-m-y — 15-01-2019
                    y-m-d — 19-01-15 
                    carbon parse untuk mengurai dan mengformat date atau tanggal--}}
                    <td class="text-white">{{ \Carbon\Carbon::parse($laptop['date'])->format('j F, Y') }}</td>
                    {{-- Kalau data return date kosong maka akan menampilkan Belum di Kembalikan --}}
                    @if ($laptop['return_date'] == null)
                        <td class="text-warning">Belum dikembalikan</td>
                    @else
                    {{--Sedangkan kalao return date nya ada atau tidak null maka akan menampilkan tanggal dikembalikan--}}
                        <td class="text-warning">{{ \Carbon\Carbon::parse($laptop['return_date'])->format('j F, Y') }}
                        </td>
                    @endif
                    <td class="text-white">{{ $laptop['teacher'] }}</td>
                    <td class="d-flex gap-2 text-white">
                    {{-- kalau tanggal dikembalikannya kosong atau null maka akan menampilkan button kembalikan, ketika tanggal dikembalikannya ada
                        maka tidak menampilkan apa apa --}}
                        @if ($laptop['return_date'] == null)
                            <form action="/done/{{ $laptop['id'] }}" method="POST">
                                @csrf
                                @method('patch')
                                <button type="submit" class="btn btn-warning text-white">Kembalikan</button>
                            </form>
                        @endif
                        <form action="/delete/{{ $laptop['id'] }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger text-white me-2" >Hapus</button>
                        </form>
                    </td>
                </tr>
                
            @endforeach
        </table>x
    </div>
</body>
    @endsection