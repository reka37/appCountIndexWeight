<!DOCTYPE html>
<html class="full-height" lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Расчет отношения веса и роста</title>
    <meta name="description" content="Material design landing page template built by TemplateFlip.com"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{  asset('cssMy/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{  asset('cssMy/mdb.min.css') }}" rel="stylesheet">
    <link href="{{  asset('styles/main.css') }}" rel="stylesheet">
	<link href="{{  asset('cssMy/calculate.css') }}" rel="stylesheet">
  </head>
<body id="top">
<section id="contact" style="background-image:url('img/panorama-3094696_1920.jpg');">
  <div class="rgba-black-strong py-5">
    <div class="container">
      <div class="wow fadeIn">
        <h2 class="h1 text-white pt-5 pb-3 text-center">{{ $name }}</h2>
        <p class="text-white px-5 mb-5 pb-3 lead text-center">
		{{ $text }}
        </p>
      </div>
      <div class="card mb-5 wow fadeInUp" data-wow-delay=".4s">
        <div class="card-body p-5">
          <div class="row">
            <div class="col-md-8">
              <form action="" onsubmit="return false;" method="POST">
                <div class="row">
                  <div class="col-md-6">
                    <div class="md-form">
                      <input class="form-control" id="name" type="text" name="name" required="required"/>
                      <label for="name">Ваше имя</label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="md-form">
                      <input class="form-control" id="email" type="text" name="_replyto" required="required"/>
                      <label for="email">Ваш email</label>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="md-form">
                      <input class="form-control" id="weight" type="number" name="weight" min="0" max="300" step="1" required="required"/>
                      <label for="weight">Вес (кг)</label>
                    </div>
                  </div>
				   <div class="col-md-12">
						<div class="md-form">
						  <input class="form-control" id="height" type="number" name="height" min="0" max="300" step="1" required="required"/>
						  <label for="height">Рост (см)</label>
						</div>
					  </div>
                </div>
                <div class="center-on-small-only mb-4">
                  <button id="go" class="btn btn-indigo ml-0" type="submit"><i class="fa fa-paper-plane-o mr-2"></i>Рассчитать</button>
                </div>
              </form>
			  <span id="results"></span>
            </div>
            <div class="col-md-4">
              <ul class="list-unstyled text-center">
                <li class="mt-4"><i class="fa fa-map-marker indigo-text fa-2x"></i>
                  <p class="mt-2">140, Москва, Лесной проезд</p>
                </li>
                <li class="mt-4"><i class="fa fa-phone indigo-text fa-2x"></i>
                  <p class="mt-2">+ 01 234 567 89</p>
                </li>
                <li class="mt-4"><i class="fa fa-envelope indigo-text fa-2x"></i>
                  <p class="mt-2">contact@company.com</p>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section></div>
    <footer class="page-footer indigo darken-2 center-on-small-only pt-0 mt-0">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="mb-5 flex-center"><a class="px-3"><i class="fa fa-facebook fa-lg white-text"></i></a><a class="px-3"><i class="fa fa-twitter fa-lg white-text"></i></a><a class="px-3"><i class="fa fa-google-plus fa-lg white-text"></i></a><a class="px-3"><i class="fa fa-linkedin fa-lg white-text"></i></a></div>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container-fluid">
          <p>&copy; <a href="/">Расчет отношения веса и роста</a></p>
        </div>
      </div>
    </footer>
    <script type="text/javascript" src="{{  asset('jsMy/jquery-3.2.1.min.js') }}"></script>
    <script type="text/javascript" src="{{  asset('jsMy/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{  asset('jsMy/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{  asset('jsMy/mdb.min.js') }}"></script>
	<script type="text/javascript" src="{{  asset('jsMy/calculate.js') }}"></script>
    <script>new WOW().init();</script>
  </body>
</html>