@extends('frontend.layout.layout')

@section('content')

@section('styles')
    <link href="/img/favicon.png" rel="icon" type="image/png" /><link href="http://fonts.googleapis.com/css?family=Dosis&amp;subset=latin,latin-ext" rel="stylesheet" type="text/css" />
    <link href="http://demo.webklavuzu.com/css/bootstrap.min.css" rel="stylesheet" />
    <link href="http://demo.webklavuzu.com/css/flexslider.css" rel="stylesheet" />
    <link href="http://demo.webklavuzu.com/css/venobox.css" rel="stylesheet" />
    <link href="http://demo.webklavuzu.com/css/ionicons.min.css" rel="stylesheet" />
    <link href="http://demo.webklavuzu.com/css/style.css" rel="stylesheet" /><link href="http://demo.webklavuzu.com/css/color/blue.css" rel="stylesheet" />
@endsection
<br><br>

    <div id="top-content-region" class="region-0 padding-top-15 padding-bottom-15 block-15 bg-color-grayLight1">
        <div class="container">
            <div class="row">
                <div id="top-content-left-region" class="col-xs-12 col-md-6 text-center-sm">
                    <div class="region">
                        <div id="page-title-block" class="page-title block" style="margin-left: 10.0%;">
                            <h1>Bize Ulaşın</h1>
                        </div>
                    </div>
                </div>
                <div id="top-content-right-region" class="col-xs-12 col-md-6 text-right text-center-sm">
                    <div class="region">

                        <div id="page-breadcrumbs-block" class="block">
                            <div class="breadcrumbs">
                                <a href="Default">Anasayfa</a>
                                <span class="delimiter">›</span>
                                İletişim
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><br><br>
        <div id="contact-content-block" class="block">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-8" style="margin-left: 5.0%;">
                        <table style="margin-bottom: 10px; overflow: hidden;">
                            <tr>
                                <td>
                                    <h3>Adres Bilgilerimiz</h3><br>
                                    Bizi ziyarete gelin:<br>
                                    Tantavi Mah. Menteşoğlu Cad. No:25 Kat:2 Terra Plaza<br>
                                    Ümraniye/İSTANBUL / TÜRKİYE (34696)<br>
                                    </p>
                                </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td>
                                    <h2>İletişim Bilgilerimiz</h2><br>
                                    <strong>Tel:</strong> +90 850 200 0 444<br>
                                    <strong>Fax:</strong> +90 216 606 29 89<br>
                                    <strong>Email:</strong>bloghaber@7/24haber.com.tr
                                    </p>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
        </div>
        <div id="contact-content-block" class="block">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-8" style="margin-left: 15.5%;">
                    @if ($errors)
                    @foreach ($errors->all() as $error)
                      <div class="alert alert-danger">
                          {{$error}}
                      </div>
                    @endforeach
                    @endif
                    @if (session()->get('success'))
                    <div class="alert alert-success">
                        {{session()->get('success')}}
                    </div>
                    @endif

                    @if (session()->get('error'))
                    <div class="alert alert-danger">
                        {{session()->get('error')}}
                    </div>
                    @endif
                        <form class="form-horizontal" method="post" role="form" action="{{route('contact.message')}}">
                            @csrf
                            <div class="form-group" style="margin-bottom: 10px; overflow: hidden;">
                                <div class="col-xs-12 margin-bottom-sm-20">
                                    <input type="text" class="form-control" id="contact-name" name="name" placeholder="Adınız Soyadınız" />
                                </div>
                            </div>
                            <div class="form-group" style="margin-bottom: 10px; overflow: hidden;">
                                <div class="col-xs-12">
                                    <input type="email" class="form-control" id="contact-email" name="email" placeholder="Email adresiniz" />
                                </div>
                            </div>
                            <div class="form-group" style="margin-bottom: 10px; overflow: hidden;">
                                <div class="col-xs-12">
                                    <input type="text" class="form-control" id="contact-subject" name="subject" placeholder="Konu giriniz" />
                                </div>
                            </div>
                            <div class="form-group" style="margin-bottom: 10px; overflow: hidden;">
                                <div class="col-xs-12">
                                    <textarea class="form-control" rows="8" id="contact-message" name="message" placeholder="Mesaj giriniz"></textarea>
                                </div>
                            </div><br>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <button type="submit" class="btn btn-primary btn-m"> Gönder </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    
<br><br><br>
    @section('scripts')
        <script src="http://demo.webklavuzu.com/js/jquery-1.10.2.min.js"></script>
        <script src="http://demo.webklavuzu.com/js/bootstrap.min.js"></script>
        <script src="http://demo.webklavuzu.com/js/jquery.flexslider-min.js"></script>
        <script src="http://demo.webklavuzu.com/js/app.js"></script>
        <script src="http://demo.webklavuzu.com/js/jquery.flexverticalcenter.js"></script>
        <script src="http://demo.webklavuzu.com/js/retina-1.1.0.min.js"></script>
        <script src="http://demo.webklavuzu.com/js/jquery.stellar.min.js"></script>
        <script src="http://demo.webklavuzu.com/js/jquery.mixitup.min.js"></script>
        <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
        <script src="http://demo.webklavuzu.com/js/venobox.min.js"></script>
        <script src="http://demo.webklavuzu.com/js/demo-switcher.js"></script>
        <DIV style="LEFT: -999px; POSITION: absolute; TOP: -999px"><A href="http://www.cheap-jordans-china.net">cheap jordans</A>|<A href="http://www.wholesale-cheapshoes.org">wholesale air max</A>|<A href="http://www.cheap-wholesale-shoes.net">wholesale jordans</A>|<A href="http://www.wholesale-jewelry-china.com">wholesale jewelry</A>|<A href="http://www.cheap-wholesalejerseys.com">wholesale jerseys</A></DIV>
    @endsection
@endsection