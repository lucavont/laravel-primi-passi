@extends('layouts.freelancer')
@section('main')
<section id="bottom-header">
      <div class="bottom-header" class="container">
        <div class="row">
          <div><img class="boy-image" src="img/boy.svg" alt="ragazzo che ride"></div>
          <div><h1>start bootstrap</h1></div>
          <div>
            <div class="divider-custom-line"></div>
            <div class="divider-star"><i class="fa fa-star fa-2x" aria-hidden="true"></i>
            </div>
            <div class="divider-custom-line"></div>
          </div>
          <div><p>graphic artist - web designer - illustrator</p></div>
        </div>
      </div>
    </section>
    <section id="cards" class="text-center text-uppercase">
      <div class="container">
        <h1>portfolio</h1>
        <div class="divider-custom-line"></div>
        <div class="divider-star"><i class="fa fa-star fa-2x" aria-hidden="true"></i>
        </div>
        <div class="divider-custom-line"></div>
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4"><img src="img/cabin.png" alt="casetta di legno"></div>
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4"><img src="img/cake.png" alt="torta"></div>
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4"><img src="img/circus.png" alt="circo"></div>
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4"><img src="img/game.png" alt="joystick"></div>
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4"><img src="img/safe.png" alt="cassaforte"></div>
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4"><img src="img/submarine.png" alt="sottomarino"></div>
        </div>
      </div>
    </section>
    <section id="about" class="text-center">
      <div class="container">
        <h1 class="text-uppercase">about</h1>
        <div class="divider-custom-line"></div>
        <div class="divider-star"><i class="fa fa-star fa-2x" aria-hidden="true"></i>
        </div>
        <div class="divider-custom-line"></div>
        <p>Freelancer is a free bootstrap theme created by Start Bootstrap. The download includes the complete source files including HTML, CSS, and JavaScript as well as optional SASS stylesheets for easy customization.</p>
        <p>You can create your own custom avatar for the masthead, change the icon in the dividers, and add your email address to the contact form to make it fully functional!</p>
        <a class="btn btn-default" href="#" role="button"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span> Download</a>
      </div>
    </section>
    <section id="contact-me" class="text-center">
      <div class="container">
        <h1 class="text-uppercase text-center">contact me</h1>
        <div class="divider-custom-line"></div>
        <div class="divider-star"><i class="fa fa-star fa-2x" aria-hidden="true"></i>
        </div>
        <div class="divider-custom-line"></div>
        <form>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div>
          <textarea class="form-control" rows="3"></textarea>
          <button type="submit" class="btn btn-default">Submit</button>
        </form>
      </div>
    </section>
@endsection
