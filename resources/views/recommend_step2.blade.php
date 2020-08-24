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

    <p>Step 2 out of 2</p>   

        <form action="#" method="GET" class="j-form" novalidate>

            <h2>Add your personal touch</h2>

            <div>
                <label for="fast_three">What three words describe your book the best?</label> 
                <input id="fast_three" type="text" value="" name="fast_three" placeholder="Surprising, loud, intense">
                <!-- <div class="j-error_full_name"></div> -->
            </div>


            <div>
                <label for="description">Tell your friend something about it</label> 
                <textarea name="description" id="description" cols="30" rows="10"></textarea>
                <!-- <div class="j-error_address"></div> -->
            </div>


            <div>
                <label for="img_upload">What does the book look like?</label> 
                <br>
                <br>
                <br>
                <!-- <input id="title" type="email" value="" name="title" placeholder="Get together"> -->
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

