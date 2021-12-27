@extends('layouts.master')
@section('content')
<style>
    .footer{
       
    }
    .requestcontent{
        border:2px solid;
        margin: 10px 50px;
        height: 500px;

    }
    .formcontent{
        margin-left: 400px;
    }
    .f-content{
        margin-bottom: 12px;
    }
    .f-content input{
        width: 50%;
        border: none;
        border-bottom: 2px solid;
    }
    .links{
        display: flex;
    }

    .links a{
        border: 2px solid;
        padding: 8px;
        margin: 2px 20px;
        background-color: blue;
        color: white;
        text-decoration: none; 
    }
    .btn{
        margin-top: 20px;
        margin-left: 150px;
    }
</style>
    <div class="requestcontent">
        <div class="formcontent">
            <form action="">
                <div class="f-content">
                <label for="name">Full Name :</label>
                <input type="text" id="name">
            </div>
            <div class="f-content">
                <label for="name">Animal Location :</label>
                <input type="text" id="name">
            </div>
            <div class="f-content">
                <label for="name">Details :</label>
                <input type="text" id="name">
            </div>

                <div class="links">
                    <a href="">Select Organization</a>
                    <a href="">Upload Photo</a>
                    <a href="">Ping Location</a>
                </div>

                <div class="btn">
                <button class="send">Send</button>
                <button class="send">Cancel</button>
                </div>
            </form>
        </div>
    </div>
@endsection

