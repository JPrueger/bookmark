@extends('layouts.master')

@section('container')


<div class="wrapper_whole_content">

    <div class="blob_bg">

        <div class="bg_blob_left">
            <img src="img/bg_blob_left.svg" alt="background_blob">
        </div>

        <div class="bg_blob_right">
            <img src="img/bg_blob_right.svg" alt="background_blob">
        </div>

    </div>

    <div class="wrapper_form">

    <h1>Suggest your Book!</h1>

    <p>Step 1 out of 2</p>   

        <form action="#" method="GET" class="j-form" novalidate>

            <p>Tell us something about the book you’d like to recommend</p>

            <h2>The Basics!</h2>

            <p>By letting us know the ISBN of your book, we can fill out the base information quickly. If you don’t know the ISBN please just fill in a few information manually.
            </p>

            <div>
                <label for="ISBN">Type in ISBN</label> 
                <input id="ISBN" type="text" value="" name="ISBN" placeholder="9780136019743">
                <!-- <div class="j-error_full_name"></div> -->
            </div>


            <div>
                <label for="author">Author</label> 
                <input id="author" type="text" value="" name="author" placeholder="Jane Doe">
                <!-- <div class="j-error_address"></div> -->
            </div>


            <div>
                <label for="title">Title</label> 
                <input id="title" type="email" value="" name="title" placeholder="Get together">
                <!-- <div class="j-error_email"></div> -->
            </div>

            <button class="cancel_button">cancel</button>

            <button type="submit">submit</button>

            <div class="j-form_sent"></div>

            <!-- <p>* mandatory</p> -->

        </form>
        
    </div>

</div>

@endsection