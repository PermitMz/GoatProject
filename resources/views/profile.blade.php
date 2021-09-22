@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit page</title>

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


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style>
        .dropdown-menu {
            margin: 0px;
            padding: 0;
        }
        .row {
            background-color: #80C2B6;
            margin: auto;
            margin-top: auto;
            max-width: 700px;
            border-radius: 10px;
            border-top-width: 60px;
            border-bottom-width: 10px;
            padding: 10px;
        }

        h4 {
            text-align: center;

        }
        .submit {
            text-align: center;
        }
        .centered {
        margin: 60px auto;
        text-align: center;
        }
        .button{
            background-color: #ffffff;
            width: 50%;
            padding: 20px 50px;
            display: inline-block;
            cursor: pointer;
            border: 1px solid #bbb;
            overflow: visible;
            border-radius: 5px;


        }
        .button:hover{
         background-color: #eee;
         color: #555;
        }



</style>
</head>
<body>
    <div class="row">
        <h4>ข้อมูลผู้ใช้งาน</h4>
        <div class="centered">
           <button class="button">{{ Auth::user()->fname }}</button>
           <button class="button">{{ Auth::user()->lname }}</button>
           <button class="button">{{ Auth::user()->email }}</button>
           <button class="button">{{ Auth::user()->farmName }}</button>
           <button class="button">{{ Auth::user()->created_at }}</button>
           <button class="button">แก้ไขข้อมูลผู้ใช้</button>


        </div>


</body>








<!--<div class="card">
    <div class="card-header">{{ __('Dashboard') }}</div>

      <div class="card-body">
          @if (session('status'))
              <div class="alert alert-success" role="alert">
                  {{ session('status') }}
              </div>
          @endif

          {{ __('You are logged in!') }}
</div>-->
@endsection
