@extends('welcome')
@section('content')
    <!-- main -->
    <div class="main-w3layouts wrapper">
        <div class="main-agileinfo">
            <div class="agileits-top">
                <form action="{{route('n.base')}}" method="post">
                    @csrf
                  <h3>Félicitation votre inscription est validée</h3>
                    <div class="clear"> </div>
                    <input type="submit" value="Suivant">
                </form>
            
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

