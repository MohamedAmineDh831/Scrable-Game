@extends('welcome')
@section('content')
    <!-- main -->
    <div class="main-w3layouts wrapper">
        <h1>Creative SignUp Form</h1>
        <div class="main-agileinfo">
            <div class="agileits-top">
                <form action="#" method="post"  enctype="multipart/form-data">
                    <input class="text" type="text" name="Username" placeholder="Username" id="username" required="">
                    <input class="text email" type="email" name="email" placeholder="Email" id="email" required="">
                    <input class="text" type="password" name="password" placeholder="Password" id="password" required="">
                    <input class="text w3lpass" type="password" name="password" placeholder="Confirm Password" id="repassword" required="">
                    {{ csrf_field() }}
                    <input class="text w3lpass" type="file" name="picture" >
                    {{ $errors->first('picture', ':message') }}
                    <div class="wthree-text">
                        <label class="anim">
                            <input type="checkbox" class="checkbox" required="">
                            <span>I Agree To The Terms & Conditions</span>
                        </label>
                        <div class="clear"> </div>
                    </div>
                    <input id="submit" type="submit" value="SIGNUP">
                </form>
                <p>Don't have an Account? <a href="#"> Login Now!</a></p>
            </div>
        </div>
        <!-- copyright -->
        <div class="colorlibcopy-agile">
            <p>© 2018 Colorlib Signup Form. All rights reserved | Design by <a href="https://colorlib.com/" target="_blank">Colorlib</a></p>
        </div>
        <!-- //copyright -->
        <ul class="colorlib-bubbles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
    <!-- //main -->
    <script>
        var username = document.getElementById('username').value;
        var email = document.getElementById('email').value;
        var password = document.getElementById('password').value;
        var repassword = document.getElementById('repassword').value;

        function verif_username(){
            var verif = true;
            username = $('#username').val();
            if(username.length<4){
                verif = false;
            }
            if("0123456789".includes(username[0])){
                verif = false;
            }
           // console.log('username : '+verif);
            return verif;

        }

        function verif_email(){
            var verif = true;
            email = $('#email').val();
            if(!email.includes('@')){
               // console.log('email must have @');
                verif = false;
            }
            if(email.slice(0, email.indexOf('@')).length==0){
                //console.log('set a char before @');
                verif = false;
            }
          //  console.log('email : '+verif);
            return verif;
        }

        function verif_password(){
            var verif = true;
            password = $('#password').val();
            if(password.length<8){
                verif = false;
            }
            //console.log('password : '+verif);
            return verif;
        }

        function verif_repassword(){
            var verif = true;
            repassword = $('#repassword').val();
            password = document.getElementById('password').value;
            if( password != repassword ){
                verif = false;
            }
            //console.log('repassword : '+verif);
            return verif;
        }
        $('#submit').prop('disabled', true); //disable clicked button

        setInterval(function (){
            console.log(verif_username()&&verif_email()&&verif_repassword()&&verif_password());
            if(verif_username()&&verif_email()&&verif_repassword()&&verif_password()){
                $('#submit').prop('disabled', false);
            }
            else {
                $('#submit').prop('disabled', true);
            }
            }, 500);

    </script>
@endsection
