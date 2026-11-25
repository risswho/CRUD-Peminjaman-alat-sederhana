<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Register siswa</h1>

    <form action="{{ route('registerStore') }}" method="POST">
        @csrf
        <div>
            <label>Nama Lengkap</label>
            <input type="text" name="nama_lengkap" value="{{ old('nama_lengkap') }}">

            @error('nama_lengkap')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="">Username</label>
            <input type="text" name="username" value="{{ old('username') }}">

            @error('username')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="">Kelas</label>
            <input type="text" name="kelas" value="{{ old('kelas') }}">

            @error('kelas')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="">Nomor Induk</label>
            <input type="number" name="nomor_induk" value="{{ old('nomor_induk') }}">

            @error('nomor_induk')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div>
        <label>Password</label>
        <input type="password" name="password">

        @error('password')
            <p>{{ $message }}</p>
        @enderror
        </div>

        <div>
            <label>Konfirmasi Password</label>
            <input type="password" name="password_confirmation">
        </div>

        <button type="submit">Daftar</button>
    </form>
</body>
</html>