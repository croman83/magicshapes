@extends('index')

@section('content')

<div class="content-1330 center-relative">
    <div class="one_half">
        <strong>Contact</strong>
        <br>
        <p>We choose to go to the moon in this decade and do the other things, not because they are easy.</p>
        <p>&nbsp;</p>
        <p>Because they are hard, because that goal will serve to organize and measure the best of our energies and skills, because that challenge is one that we are willing to accept, one we are unwilling to postpone and one.</p>
        <p>&nbsp;</p>
        <p>Which we intend to win. With a warning label this big, you know they gotta be fun. Bring me the forms I need to fill out to have her taken away. I decline the title of iron cook and accept the lesser title of zinc saucier, which I just made up. Dinosaurs are extinct today because they lacked opposable thumbs and the brainpower to build a space program. Houston, Tranquillity Base here.</p>
        <p>&nbsp;</p>
        <p>
            <strong>Address:</strong>&nbsp;New York, NY, United States<br>
            <strong>Phone:</strong> +1 234-567-890<br>
            <strong>Hours:</strong> 6:00 am – 2:00 am<br>
        </p>
    </div>

    <div class="one_half last">
        <div class="contact-form">                            
            <p><input id="name" type="text" name="your-name" placeholder="Name"></p>
            <p><input id="contact-email" type="email" name="your-email" placeholder="Email"></p>
            <p><input id="subject" type="text" name="your-subject" placeholder="Subject"></p>
            <p><textarea id="message" name="your-message" placeholder="Message"></textarea></p>
            <p><input type="submit" onClick="SendMail()" value="SEND"></p>                                 
        </div>  
    </div>
    <div class="clear"></div>
</div>

@endsection