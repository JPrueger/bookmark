@extends('layouts.master')

@section('container')

<div class="wrapper_whole_content">

    <div class="wrapper_form">

    <h1>Login here!</h1>

    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod.
    </p>   

        <form action="successfully_sent.html" method="GET" class="j-form" novalidate>

            <div>
                <label for="username">Username (your E-Mail Addess)</label> 
                <input id="username" type="text" value="" name="username" placeholder="john.doe@gmail.com">
                <!-- <div class="j-error_full_name"></div> -->
            </div>


            <div>
                <label for="tel">Password</label>
                <input id="tel" type="password" value="" name="tel" class="j-input_tel" placeholder="*********">
                <div class="j-error_tel"></div>
            </div>

            <button type="submit">submit</button>

            <div class="j-form_sent"></div>

            <!-- <p>* mandatory</p> -->

        </form>

        <p>No account yet? <a href="#">Register here!</a></p>
        
    </div>

</div>

@endsection