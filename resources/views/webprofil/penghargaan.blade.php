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

                <div class="col-lg-4 col-md-4">
                 <center> <a href="#" class="btn-startgames lf"><span class="ic-dw"></span>SK Pengurus </a> </center>
                </div>
                <div class="col-lg-4 col-md-4">
                 <center> <a href="#" class="btn-startgames lf"><span class="ic-dw"></span> Instruksi Pengurus DPSG </a> </center>
                </div>
                <div class="col-lg-4 col-md-4">
                  <center> <a href="#" class="btn-startgames lf"><span class="ic-dw"></span> Perundang - undangan </a> </center>
                </div>
                <div class="col-lg-12 col-md-12">
                    <br>
                </div>
            <div class="col-lg-12 col-md-12">
                 <span class="name-rog">
                     <div class="hr-line"></div>
                     <h5>Indeks Berita</h5>
                  </span>
                  <div class="cd-faq-items">
                     <ul id="basics" class="cd-faq-group">
                        <br>
                        @foreach($berkas->slice(0, 4) as $value)
                        <li>
                           <a href="{{ url('berkasnya/hukumonline/'.$value->file) }}" title="{{$value->file}}" target="_blank">{{$value->perihal}}</a>
                        </li>
                        @endforeach
                     </ul>
                     <!-- cd-faq-group -->
                  </div>
                <br>

                <span class="name-rog">
				    <div class="hr-line"></div> <h5> Hukum Online </h5>
				</span>
                <br>

                <table id="example" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th width="10%">No Dokumen</th>
                            <th width="25%">Perihal</th>
                            <th width="15%">Jenis</th>
                            <th width="35%">Keterangan</th>
                            <th width="15%">File</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($berkas as $value)
                        <tr>
                            <td>{{$value->no_dokumen}}</td>
                            <td>{{$value->perihal}}</td>
                            <td>{{$value->jenis}}</td>
                            <td>{{$value->keterangan}}</td>
                            <td><a href="{{ url('berkasnya/hukumonline/'.$value->file) }}" title="{{$value->file}}" target="_blank">{{$value->perihal}}</a></td>
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

