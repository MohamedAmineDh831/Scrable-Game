@extends('welcome')
@section('content')
    <!-- main -->
    <div class="main-w3layouts wrapper">
        <h1>Choisir le type de partie</h1>
        <div class="main-agileinfo">
            <div class="agileits-top">
                <form action="{{route('nizar.affichage')}}" method="post">
                    @csrf
                    <input class="text" type="text" name="tp" placeholder="typepartie" required="">
                    
                    <div class="clear"> </div>
                    <input type="submit" value="Valider">
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

