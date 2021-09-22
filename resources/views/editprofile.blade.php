@extends('layouts.app')

@section('content')

   <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Edit page</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <script src="https://unpkg.com/feather-icons"></script>
        <script src="js/bootstrap.js"></script>
        <script src="path/to/dist/feather.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
        </script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

        <link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <link href="https://getbootstrap.com/docs/5.0/examples/carousel/carousel.css" rel="stylesheet">
        <link rel="stylesheet" href="resources/css/style.css">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>

            .row {
                border: 10px solid #80C2B6;
                margin: auto;
                margin-top: auto;
                max-width: 900px;
                border-radius: 10px;
                border-top-width: 60px;
                border-bottom-width: 10px;
                padding: 10px;
            }
            .grid {
                display: grid;
                grid-template-columns: 1fr 1fr 1fr;
                column-gap: 15px;
                row-gap: 5px;
            }
            h4 {
                text-align: center;
            }
            .submit {
                text-align: center;
            }
    </style>
</head>
<body>
    <main>

<div class="container">


    @if (session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
    @endif

    <form action="{{ route('user.update_profile', $users->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row ">
            <div class="col-md-auto"></div>
            <div class="col-md-auto">
                <h4>Goat</h4>

                <h5>พ่อพันธุ์เเม่พันธุ์เเพะ</h5>
                <div class="grid">
                    <div class="mb-2">
                        <label for="fname">ชื่อ :</label>
                    <input type="text" name="fname" value="{{ $users->fname }}" class="form-control"
                        placeholder="First name">
                    @error('fname')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="grid">
                    <div class="mb-2">
                        <label for="lname">นามสกุล :</label>
                    <input type="text" name="lname" value="{{ $users->lname }}" class="form-control"
                        placeholder="Last name">
                    @error('lname')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="grid">
                    <div class="mb-2">
                        <label for="email">Email :</label>
                    <input type="text" name="email" value="{{ $users->email }}" class="form-control"
                        placeholder="Email">
                    @error('lname')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="grid">
                    <div class="mb-2">
                        <label for="farmName">Farm name :</label>
                    <input type="text" name="farmName" value="{{ $users->farmName }}" class="form-control"
                        placeholder="Farm name">
                    @error('farmName')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>


            <div class="submit">
            <button type="submit" class="btn "style="background-color: #80C2B6;">ยืนยันการเเก้ไข</button>
            <a class="btn "style="background-color: #80C2B6;" href="{{ route('user.edit_profile') }}" enctype="multipart/form-data">
                ไปยังหน้าข้อมูลผู้ใช้งาน</a>
            </div>
        </div>

    </form>
</div>

</body>

</html>@endsection
