@extends('webprofil.main')

@section('title')
    Dapen SG - Manajemen
@endsection

@section('header')
    <section class="page-title" style="background-image:url({{ url('webprofil/images/background/1.jpg')}})">
        <div class="auto-container">
			<h1>Manajemen</h1>
			<ul class="page-breadcrumb">
				<li><a href="{{url('/')}}">home</a></li>
				<li>Manajemen</li>
			</ul>
        </div>
    </section>
@endsection

@section('contents')
    <div class="container">
            <div class="row">
               <div class="col-lg-9 col-md-9">
                  <span class="name-rog">
                     <div class="hr-line"></div>
                     Newsfeed
                  </span>
                  <div class="promo-donate">
                     <div class="col-md-1 dv lv">
                        <span class="ic-info"></span>
                     </div>
                     <div class="col-md-10 lv">
                        <h3 class="th-name">Загрузка игрового клиента:</h3>
                        <p class="desctop">
                           Для игры на наших серверах требуется наш игровой клиент, без него невозможно зайти на наши сервера.
                           <br><br>
                           Лаунчер - это программа запуска наших игровых клиентов, эта программа автоматически загружает нужные модификации и обновления наших клиентов.
                           <br>
                           Так же для работы лаунчера необходима установленная Java (загрузить её можно ниже)
                        </p>
                        <a href="#" class="btn-startgames lf"><span class="ic-dw"></span> Для Windows</a>
                        <a href="#" class="btn-startgames linux lf"><span class="ic-dw"></span> Для Linux</a>
                        <a href="#" class="btn-startgames macosx lf"><span class="ic-dw"></span> Для MacOs</a>
                     </div>
                  </div>
                  <span class="name-rog">
                     <div class="hr-line"></div>
                     ВОПРОСЫ И ОТВЕТЫ ПО ЛАУНЧЕРУ
                  </span>
                  <div class="cd-faq-items">
                     <ul id="basics" class="cd-faq-group">
                        <br>
                        <li>
                           <a class="cd-faq-trigger" href="#0">Каковы рекомендуемые системные требования?</a>
                           <div class="cd-faq-content">
                              <p>Мы рекомендуем запускать наши клиенты на 64-х разрядных системах.
                                 Необходимое количество оперативной памяти для работы игры - 1024 Мб.
                              </p>
                           </div>
                           <!-- cd-faq-content -->
                        </li>
                        <li>
                           <a class="cd-faq-trigger" href="#0">Почему лаунчер был заблокирован моим антивирусом?</a>
                           <div class="cd-faq-content">
                              <p>Наш лаунчер не содержит в себе вирусов. Не бойтесь за свою безопасность!
                                 Положитесь на нас! Если ваш антивирус ругается на наш лаунчер, то просто добавьте его в исключения! В том случае, если Вы не доверяете нам, просто проверьте лаунчер на содержание вредоносного кода в сервисе virustotal.com
                                 <BR><BR>
                                 Антивирус может заблокировать наш лаунчер из-за обфуксации кода (защита от взлома лаунчера).
                              </p>
                           </div>
                           <!-- cd-faq-content -->
                        </li>
                        <li>
                           <a class="cd-faq-trigger" href="#0">Почему лаунчер закрывается после загрузки файлов и не запускает игру?</a>
                           <div class="cd-faq-content">
                              <p>Дело в том, что вам скорее всего нужно установить или обновить драйвер вашей видеокарты.
                                 Загрузить официальные драйверы можно здесь: AMD NVidia Intel Graphics
                              </p>
                           </div>
                           <!-- cd-faq-content -->
                        </li>
                        <li>
                           <a class="cd-faq-trigger" href="#0">Что делать при ошибке соединения лаунчера и серверов авторизации?</a>
                           <div class="cd-faq-content">
                              <p>Достаточно установить DNS сервера от Yandex или Google.
                                 Решение проблемы: Информация о настройке DNS
                              </p>
                           </div>
                           <!-- cd-faq-content -->
                        </li>
                        <li>
                           <a class="cd-faq-trigger" href="#0">Все пункты выше не помогли?</a>
                           <div class="cd-faq-content">
                              <p>Напишите нам о своей проблеме, мы попытаемся помочь вам.
                                 Обратиться в поддержку можно перейдя по этой: ссылке
                              </p>
                           </div>
                           <!-- cd-faq-content -->
                        </li>
                     </ul>
                     <!-- cd-faq-group -->
                  </div>
                  <!-- cd-faq-items -->
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
