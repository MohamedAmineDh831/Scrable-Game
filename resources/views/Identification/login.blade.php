@extends('welcome')
@section('content')
    <!-- main -->
    <div class="main-w3layouts wrapper">
        <h1>Creative SignUp Form</h1>
        <div class="main-agileinfo">
            <div class="agileits-top">
                <form action="#" method="post">
                    @csrf
                    <input class="text" type="text" name="Username" placeholder="Username" required="">
                    <input class="text" type="password" name="password" placeholder="Password" required="">
                    <div class="clear"> </div>
                    <input type="submit" value="SIGNUP">
                </form>
                <p>Don't have an Account? <a href="#"> Register Now!</a></p>
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
@endsection

