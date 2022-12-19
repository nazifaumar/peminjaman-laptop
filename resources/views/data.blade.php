    @extends('layout')
    @section('container')
    
    <div class="gam mx-5">
        <div class="total">
            <h4 class="fw-bold text-break mt-4 mx-3 text-black">Total</h4>
            <hr>
            <table class="table" id="oiw">
                <tr>
                    <td class="text-black" style="width: 20px"><i class="bi bi-box-arrow-in-right"
                            style="font-size: 45px"></i></td>
                    <td class="text-black" style="width: 300px">
                        <div class="kon">
                            <div class="fw-bold">
                                Dipinjamkan
                            </div>
                            Total laptop yang dipinjamkan hari ini
                        </div>
                    </td>
                    <td class="text-black" style="width: 60px">
                        <div class="pls px-2">
                            {{ $laptops->where('return_date', '=', null)->count() }}
                        </div>
                    </td>
                </tr>
            </table>
            <table class="table" id="oiw">
                <tr>
                    <td class="text-black" style="width: 20px"><i class="bi bi-arrow-left-right"
                            style="font-size: 45px"></i></td>
                    <td class="text-black" style="width: 300px">
                        <div class="kon">
                            <div class="fw-bold">
                                Dikembalikan
                            </div>
                            Total laptop yang dikembalikan hari ini
                        </div>
                    </td>
                    <td class="text-black" style="width: 60px">
                        <div class="pls px-2">
                            {{ $laptops->where('return_date', '!=', null)->count() }}
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <br>
        <table class="table table-striped table-bordered ">
            <tr>
                <td>Nis</td>
                <td>Name</td>
                <td>Region</td>
                <td>Rombel</td>
                <td>Purposes</td>
                <td>Date</td>
                <td>Return Date</td>
                <td>Teacher</td>
                <td>Action</td>
            </tr>
            @foreach ($laptops as $laptop)
                <tr class="table-rows">
                    <td>{{ $laptop['nis'] }}</td>
                    <td>{{ $laptop['name'] }}</td>
                    <td>{{ $laptop['rayon'] }}</td>
                    <td>{{ $laptop['rombel'] }}</td>
                    <td>{{ $laptop['purposes'] }}</td>
                    {{-- 
                    F j, Y — January 15, 2019
                    j.F.Y — 15.January.2019
                    Y/m/d — 2019/01/15
                    m/d/Y — 01/15/2019
                    d-m-y — 15-01-2019
                    y-m-d — 19-01-15 
                    carbon parse untuk mengurai dan mengformat date atau tanggal--}}
                    <td>{{ \Carbon\Carbon::parse($laptop['date'])->format('j F, Y') }}</td>
                    {{-- Kalau data return date kosong maka akan menampilkan Belum di Kembalikan --}}
                    @if ($laptop['return_date'] == null)
                        <td class="text-warning">Belum dikembalikan</td>
                    @else
                    {{--Sedangkan kalao return date nya ada atau tidak null maka akan menampilkan tanggal dikembalikan--}}
                        <td class="text-warning">{{ \Carbon\Carbon::parse($laptop['return_date'])->format('j F, Y') }}
                        </td>
                    @endif
                    <td>{{ $laptop['teacher'] }}</td>
                    <td class="d-flex gap-2">
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
        </table>
    </div>
    @endsection