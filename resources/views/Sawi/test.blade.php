<html>
    <head>
        <title> Test Pages </title>
<link href="{{ asset('css/contact/main.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('css/contact/util.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('css/css/bootstrap.css')}}" rel="stylesheet" type="text/css">  
<link rel="stylesheet" type="text/css" href="{{asset('css/css/bootstrap-responsive.min.css')}}">
    </head>
    <body>
<h1>  Contact US Pages  </h1>
<div class="bg-contact2" style="background-image: url('images/bg-01.jpg');">
    <div class="container-contact2">
        <div class="wrap-contact2">
            <form class="contact2-form validate-form">
                <span class="contact2-form-title">
                    Contact Us
                </span>

                <div class="wrap-input2 validate-input" data-validate="Name is required">
                    <input class="input2" type="text" name="name">
                    <span class="focus-input2" data-placeholder="NAME"></span>
                </div>

                <div class="wrap-input2 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                    <input class="input2" type="text" name="email">
                    <span class="focus-input2" data-placeholder="EMAIL"></span>
                </div>

                <div class="wrap-input2 validate-input" data-validate = "Message is required">
                    <textarea class="input2" name="message"></textarea>
                    <span class="focus-input2" data-placeholder="MESSAGE"></span>
                </div>

                <div class="container-contact2-form-btn">
                    <div class="wrap-contact2-form-btn">
                        <div class="contact2-form-bgbtn"></div>
                        <button class="contact2-form-btn">
                            Send Your Message
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>