<!DOCTYPE html>
<html>
    <head>
        <style>
            h1 {
                color: mediumseagreen;
                font-size: 30px;
                font-weight: bold;
                margin-left: 50px;
            }
            .vr {
                border: 3px solid #7733ff;
                margin-left: 90px;
                height: 70px;
                width: 520px;
            }
            .verify {
                border: 4px solid #ffbb33;
                margin-left: 90px;
                height: 500px;
                width: 520px;
            }
            .btn {
                border: 3px;
                border-radius: 3px;
                background-color: mediumseagreen;
                color: white;
                font-weight: bold;
                font-size: 18px;
                margin-left: 20px;
                height: 180px;
                width: 190px;
                style: none;
            }
        </style>
    </head>
    <body>
        <div class="vr">
            <div class="verify">
                <h1>welcome {{$name}}</h1>
                <br />
                <h2>For verify your email id.<a href="{{url('/verification/')}}/{{$rand_id}}" class="btn">Click Here</a></h2>
            </div>
            <h1>Please verify your email id</h1>
        </div>
        <br />
        <br />
    </body>
</html>
