@extends('layout')
@section('container')
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
                    <label>Region</label>
                    <input type="text" placeholder="Enter rayon" name="rayon" value="{{ old('rayon') }}" />
                    @error('rayon')
                        <p class="text-danger fw-bold mt-2">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
            </div>

            <div class="input-box">
                <label>Teacher</label>
                <input type="text" placeholder="Enter Teacher" name="teacher" value="{{ old('teacher') }}" />
                @error('teacher')
                    <p class="text-danger fw-bold mt-2">
                        {{ $message }}
                    </p>
                @enderror
            </div>

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
            <button class="btn submit" id="btn">Submit</button>  
        </form>
    </section>
@endsection
