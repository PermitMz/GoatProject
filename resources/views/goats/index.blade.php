@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

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

    .header{
        padding: 10px;
        margin-top: 20px;
        text-align: center;
    }
    .profile_image {
     margin: 2em;
     }
    .profile_image img {
     border-radius: 50%;
    }
    .container{
        background-color: #80C2B6;
        border-radius: 10px;
    }

</style>
<head>
    <meta charset="UTF-8">
    <title>ทะเบียนเเพะ</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<!--<header>

    <nav class="navbar navbar-expand-lg navbar-light fixed-top">

        <div class="container-fluid">

            <a class="navbar-brand" href="#">
                <div><img src="image/logo/logo.png" style="width:60px;"></div>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggle">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarToggle">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="{{ route('home') }}" class="nav-link">หน้าเเรก</a>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('goats.create') }}" class="nav-link">สร้างทะเบียนเเพะ</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('goats.index') }}" class="nav-link">ทะเบียนเเพะ</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link" aria-current="page">
                            <i data-feather="bell"></i>
                            <span class="ml-2"></span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown" href="#" id="navbarDropdown" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <span data-feather="user"></span></a>

                        <ul class="dropdown-menu dropdown-menu-end" aria-labeledby="navbarDropdown">
                            <li><a href="#" class="dropdown-item">ตั้งค่าโปรไฟล์</a></li>
                            <li><a href="#" class="dropdown-item">ตั้งค่าการเเจ้งเตือน</a></li>
                            <li><a href="#" class="dropdown-item">ออกจากระบบ</a></li>
                    </li>  </ul> </div> </div>  </nav></header>
<body> -->



        <div class="header">

         <h2>ทะเบียนเเพะ</h2>

        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        @foreach ($goats as $goat)
        <div class="row">

        <div class="container ">

                <div class="profile_image ">
                    <img src="{{ Storage::url($goat->image) }}" height="100" width="100" alt="" />
                </div>
                <div class="container ">

                   {{ $goat->goatId }}&nbsp;&nbsp;
                   {{ $goat->goatName }}
                </div>

                    <div class="bt">
                    <form action="{{ route('goats.destroy', $goat->goatId) }}" method="POST">

                        <br><a class="btn "style="background-color: #eee"
                        href="{{ route('goats.edit', $goat->goatId) }}">เเก้ไขข้อมูลเเพะ</a>



                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">ลบข้อมูล</button>
                    </form>
           </div>

        @endforeach
    </div></div>
       </div>
            <!--<table class="table table-bordered">
                <tr>
                    <th>Goat ID</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Gene</th>
                    <th width="280px">Action</th>
                </tr>
                @foreach ($goats as $goat)
                    <tr>
                        <td>{{ $goat->goatId }}</td>
                        <td><img src="{{ Storage::url($goat->image) }}" height="100" width="100" alt="" /></td>
                        <td>{{ $goat->goatName }}</td>
                        <td>{{ $goat->gene }}</td>
                        <td>
                            <form action="{{ route('goats.destroy', $goat->goatId) }}" method="POST">

                                <a class="btn btn-primary" href="{{ route('goats.edit', $goat->goatId) }}">Edit</a>

                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>-->

            {!! $goats->links() !!}
</body>

</html>
