@extends('webprofil.main')

@section('title')
    Dapen SG - Manajemen
@endsection

@section('header')
    <section class="page-title" style="background-image:url({{ url('webprofil/images/background/1.jpg')}})">
        <div class="auto-container">
			<h1>Penghargaan</h1>
			<ul class="page-breadcrumb">
				<li><a href="{{url('/')}}">home</a></li>
				<li>Penghargaan</li>
			</ul>
        </div>
    </section>
@endsection

@section('contents')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                 {{-- <span class="name-rog">
				    <div class="hr-line"></div> Hukum Online
				 </span>

				 <div class="section-how">
                    <span class="num-1"> 01 </span>
                    <div class="reved">
                        <div class="arrow-road"></div>
                        <p>
                        Для начала вам нужно зарегистрировать свой игровой аккаунт перейдя к регистрации.
                        Запомните, что только Вы в силах защитить свой аккаунт от рук злоумышленников установив сложный пароль, например: <span style="color: #000;">xR3E8g1bHjLM</span>
                        </p>
                    </div>
                </div>

				<div class="section-how">
                    <span class="num-2">02</span>
                    <div class="reved">
                        <div class="arrow-road"></div>
                        <p>
                        Перед непосредственным началом игры Вам в обязательном порядке необходимо ознакомиться с правилами игры на игровых серверах StreamCraft.net. Все эти правила призваны сделать игру максимально честной, комфортной и интересной.
                        </p>
                    </div>
                </div>

				<div class="section-how">
				<span class="num-3">03</span>
                    <div class="reved">
                        <div class="arrow-road"></div>
                        <p>
                        Теперь Вам стоит определиться с тем, какой тематики сервер вам больше нравится. На сегодняшний день мы предлагаем Вам самые стабильные сборки серверов среди русскоязычного Minecraft сообщества на самых последних версиях доступных игровых модов.
                        </p>
                    </div>
                </div> --}}
                <br>

                <span class="name-rog">
				    <div class="hr-line"></div> <h4> Hukum Online </h4>
				</span>
                <br>

                <table id="example" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th width="20%">No Dokumen</th>
                            <th width="25%">Perihal</th>
                            <th width="40%">Keterangan</th>
                            <th width="15%">File</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($berkas as $value)
                        <tr>
                            <td>{{$value->no_dokumen}}</td>
                            <td>{{$value->perihal}}</td>
                            <td>{{$value->keterangan}}</td>
                            <td><a href="{{ url('public/berkasnya/hukumonline/'.$value->file) }}" title="{{$value->file}}" target="_blank">{{$value->perihal}}</a></td>
                        </tr>
                       @endforeach
                    </tbody>
                </table>
                <br><br><br>
            </div>
        </div>
    </div>

@endsection
@section('js')
    <script>

        $(document).ready(function() {
            $('#example').DataTable( {
                "order": [[ 3, "desc" ]]
            } );
        } );

    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.2/js/jquery.dataTables.min.js"></script>
@endsection

