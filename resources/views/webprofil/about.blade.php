@extends('webprofil.main')

@section('title')
    Dapen SG - Tentang Kami
@endsection

@section('header')
    <section class="page-title" style="background-image:url({{ url('webprofil/images/background/1.jpg')}})">
        <div class="auto-container">
            <h1>Tentang Kami</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{url('/')}}">home</a></li>
                <li>About</li>
            </ul>
        </div>
    </section>
@endsection

@section('contents')
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9">
                <span class="name-rog"><div class="hr-line"></div> Tentang Kami</span>
			<div class="promo-donate">
			    <div class="col-md-1 dv lv">
                <span class="ic-love"></span>
                </div>
                <div class="col-md-10 lv">
                <h3 class="th-name">Коротко о пожертвованиях:</h3>
                <p class="desctop">
                Как и все мы нуждаемся в материальной помощи. Нам необходимо арендовать оборудование для игровых серверов, совершенствовать старое и разрабатывать совершенно новое и необычное! Именно по этим причинам мы и ввели систему пожертвований на нашем проекте.
                <br><br>
                За пожертвование вы получаете монеты, за которые можно приобрести привилегии на наших серверах.</p>
                <a href="#" class="love-donate"><span class="ic-loveb"></span> Пожертвовать</a>
            </div>
        </div>
    </div>
               <div class="col-lg-3 col-md-3">
                  <div class="right-block">
                     <div class="n-m">Мониторинг Серверов</div>
                     <div class="server online">
                        <div class="second circle">
                           <strong></strong>
                        </div>
                        <div class="server_name"><a href="#">01 Сервер</a></div>
                        <div class="server_players">
                           Онлайн: 50/100
                        </div>
                     </div>
                     <div class="server online">
                        <div class="second circle">
                           <strong></strong>
                        </div>
                        <div class="server_name"><a href="#">01 Сервер</a></div>
                        <div class="server_players">
                           Онлайн: 50/100
                        </div>
                     </div>
                     <div class="server online">
                        <div class="second circle">
                           <strong></strong>
                        </div>
                        <div class="server_name"><a href="#">01 Сервер</a></div>
                        <div class="server_players">
                           Онлайн: 50/100
                        </div>
                     </div>
                     <div class="server online">
                        <div class="second circle">
                           <strong></strong>
                        </div>
                        <div class="server_name"><a href="#">01 Сервер</a></div>
                        <div class="server_players">
                           Онлайн: 50/100
                        </div>
                     </div>
                     <div class="server online">
                        <div class="second circle">
                           <strong></strong>
                        </div>
                        <div class="server_name"><a href="#">01 Сервер</a></div>
                        <div class="server_players">
                           Онлайн: 50/100
                        </div>
                     </div>
                     <div class="server online">
                        <div class="second circle">
                           <strong></strong>
                        </div>
                        <div class="server_name"><a href="#">01 Сервер</a></div>
                        <div class="server_players">
                           Онлайн: 50/100
                        </div>
                     </div>
                     <div class="server online not-hr">
                        <div class="second circle">
                           <strong></strong>
                        </div>
                        <div class="server_name"><a href="#">01 Сервер</a></div>
                        <div class="server_players">
                           Онлайн: 50/100
                        </div>
                     </div>
                     <div class="server online not-hr">
                        <div class="second circle">
                           <strong></strong>
                        </div>
                        <div class="server_name"><a href="#">01 Сервер</a></div>
                        <div class="server_players">
                           Онлайн: 50/100
                        </div>
                     </div>
                     <p class="tdx-strom"><span class="online-o"></span> Общий онлайн: 2173</p>
                  </div>
                  <div class="right-block vk">
                     <div class="n-m">Мониторинг Серверов</div>
                     <div class="widget-vk">
                        WIDGET VK
                     </div>
                  </div>
               </div>
            </div>
         </div>

@endsection
