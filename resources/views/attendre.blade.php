@extends('welcome')
@section('content')
    <!-- main -->
    <script type="text/javascript">
        setTimeout(function(){
            location.reload();
        },15000);
    </script>
    <div class="main-w3layouts wrapper">
        <div class="main-agileinfo">
            <div class="agileits-top">
             
                    @csrf
                  <h3>Bienvenue</h3>
                    <div class="clear"> </div>
                    <h3>username:{{$name}}</h3>
                    <h3>idpartie:{{$idpartie}}</h3>
                    <h3>nombre de joueurs:{{$count}}</h3>
             
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

