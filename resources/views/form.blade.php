<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Form</title>
    
	<link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="{{ asset('/css/style.css') }}">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
  </head>

  <body>
    <section class="container">
        <form action="/store" class="form" method="POST">
            @csrf
            <div class="input-box">
                <label>Full Name</label>
                <input type="text" placeholder="Enter full name" name="name" value="{{ old('name') }}" />
                @error('name')
                    <p class="text-danger fw-bold mt-2">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div class="input-box">
                <label>Purposes</label>
                <input type="text" placeholder="Enter purposes" name="purposes" value="{{ old('purposes') }}" />
                @error('purposes')
                    <p class="text-danger fw-bold mt-2">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div class="column">
                <div class="input-box">
                    <label>NIS</label>
                    <input type="number" placeholder="Enter nis number" name="nis" value="{{ old('nis') }}" />
                    @error('nis')
                        <p class="text-danger fw-bold mt-2">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="input-box">
                    <label>Rayon</label>
                    <input type="text" placeholder="Enter rayon" name="rayon" value="{{ old('rayon') }}" />
                    @error('rayon')
                        <p class="text-danger fw-bold mt-2">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
            </div>

            {{-- <div class="input-box">
                <label>Teacher</label>
                <div class="column">
                    <div class="select-box">
                        <select name="teacher">
                            <option hidden>please select</option>
                            <option value="Fema">Fema</option>
                            <option value="Riska">Riska</option>
                            <option value="Rio">Rio</option>
                        </select>
                        @error('teacher')
                            <p class="text-danger fw-bold mt-2">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                </div>
            </div> --}}
            <div class="input-box">
                <label>Teacher</label>
                <input type="text" placeholder="Enter Teacher" name="teacher" value="{{ old('teacher') }}" />
                @error('teacher')
                    <p class="text-danger fw-bold mt-2">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            {{-- <div class="input-box rombel">
                <label>Rombel</label>
                <div class="column">
                    <div class="select-box">
                        <select name="rombel">
                            <option hidden>please select</option>
                            <option value="PPLG 1">PPLG 1</option>
                            <option value="PPLG 2">PPLG 2</option>
                            <option value="PPLG 3">PPLG 3</option>
                            <option value="PPLG 4">PPLG 4</option>
                            <option value="PPLG 5">PPLG 5</option>
                        </select>
                        @error('rombel')
                            <p class="text-danger fw-bold mt-2">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                </div>
            </div> --}}
            <div class="input-box">
                <label>Rombel</label>
                <input type="text" placeholder="Enter Rombel" name="rombel" value="{{ old('rombel') }}" />
                @error('rombel')
                    <p class="text-danger fw-bold mt-2">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            <div class="input-box">
                <label>Date</label>
                <input type="date" name="date" value="{{ old('date') }}" />
                @error('date')
                    <p class="text-danger fw-bold mt-2">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            <button class="btn submit">Submit</button>
        </form>
        <div hidden class="total">
            <h4 class="fw-bold fst-italic text-break mt-4 mx-3 text-white">Total</h4>
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
                    <td class="text-white">
                        <div class="dkk">
                            {{ \Carbon\Carbon::now()->format('j-m') }}
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
                    <td class="text-white">
                        <div class="dkk">
                            {{ \Carbon\Carbon::now()->format('j-m') }}
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </section>
@endsection
