@extends('layouts.master')

@section('title')
    Dashboard
@endsection

@section('header')
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="btn-group pull-right">
                <ol class="breadcrumb hide-phone p-0 m-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Tata Kelola</li>
                </ol>
            </div>
            <h4 class="page-title">Home</h4>
        </div>
    </div>
</div>
@endsection

@section('contents')
@php
 $menu = 'dashboard';
@endphp

<div class="row">

<div class="col-lg-12 col-sm-12">
    <div class="card">
        <div class="card-body table-responsive">
            <h5 class="header-title">Data Kelola</h5>
            <div class="">
                <table id="datatable2" class="table">
                    <thead>
                    <tr>
                        <th>Judul</th>
                        <th>Deskripsi</th>
                        <th>Nomor Regulasi</th>
                        <th>Sektor</th>
                        <th>Tahun Berlaku</th>
                        <th>Jenis Regulasi</th>
                    </tr>
                    </thead>


                    <tbody>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>61</td>
                        <td>Edinburgh</td>
                        <td>2011/04/25</td>
                        <td>System</td>
                    </tr>
                    <tr>
                        <td>Garrett Winters</td>
                        <td>Accountant</td>
                        <td>63</td>
                        <td>Tokyo</td>
                        <td>2011/07/25</td>
                        <td>Accountant</td>
                    </tr>
                    <tr>
                        <td>Ashton Cox</td>
                        <td>Junior Technical Author</td>
                        <td>66</td>
                        <td>San Francisco</td>
                        <td>2009/01/12</td>
                        <td>Junior Technical</td>
                    </tr>
                    <tr>
                        <td>Cedric Kelly</td>
                        <td>Senior Javascript Developer</td>
                        <td>22</td>
                        <td>Edinburgh</td>
                        <td>2012/03/29</td>
                        <td>Javascript</td>
                    </tr>
                    <tr>
                        <td>Airi Satou</td>
                        <td>Accountant</td>
                        <td>33</td>
                        <td>Tokyo</td>
                        <td>2008/11/28</td>
                        <td>Accountant</td>
                    </tr>
                    <tr>
                        <td>Brielle Williamson</td>
                        <td>Integration Specialist</td>
                        <td>61</td>
                        <td>New York</td>
                        <td>2012/12/02</td>
                        <td>Specialist</td>
                    </tr>
                    <tr>
                        <td>Herrod Chandler</td>
                        <td>Sales Assistant</td>
                        <td>59</td>
                        <td>San Francisco</td>
                        <td>2012/08/06</td>
                        <td>Sales</td>
                    </tr>
                    <tr>
                        <td>Rhona Davidson</td>
                        <td>Specialist</td>
                        <td>55</td>
                        <td>Tokyo</td>
                        <td>2010/10/14</td>
                        <td>Integration</td>
                    </tr>
                    <tr>
                        <td>Colleen Hurst</td>
                        <td>Javascript </td>
                        <td>39</td>
                        <td>San Francisco</td>
                        <td>2009/09/15</td>
                        <td>Developer</td>
                    </tr>
                    <tr>
                        <td>Sonya Frost</td>
                        <td>Software Engineer</td>
                        <td>23</td>
                        <td>Edinburgh</td>
                        <td>2008/12/13</td>
                        <td>Software</td>
                    </tr>
                    <tr>
                        <td>Jena Gaines</td>
                        <td>Office Manager</td>
                        <td>30</td>
                        <td>London</td>
                        <td>2008/12/19</td>
                        <td>Office</td>
                    </tr>
                    <tr>
                        <td>Quinn Flynn</td>
                        <td>Support Lead</td>
                        <td>22</td>
                        <td>Edinburgh</td>
                        <td>2013/03/03</td>
                        <td>Support</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>

</div><!--end row-->

@endsection

@section('js')
    <script src="{{ url('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('assets/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <!-- Buttons examples -->
    <script src="{{ url('assets/plugins/datatables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ url('assets/plugins/datatables/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ url('assets/plugins/datatables/jszip.min.js') }}"></script>
    <script src="{{ url('assets/plugins/datatables/pdfmake.min.js') }}"></script>
    <script src="{{ url('assets/plugins/datatables/vfs_fonts.js') }}"></script>
    <script src="{{ url('assets/plugins/datatables/buttons.html5.min.js') }}"></script>
    <script src="{{ url('assets/plugins/datatables/buttons.print.min.js') }}"></script>
    <script src="{{ url('assets/plugins/datatables/buttons.colVis.min.js') }}"></script>
    <!-- Responsive examples -->
    <script src="{{ url('assets/plugins/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ url('assets/plugins/datatables/responsive.bootstrap4.min.js') }}"></script>

    <!-- Datatable init js -->
    <script src="{{ url('assets/pages/datatables.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ url('assets/js/app.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#datatable2').DataTable();
        } );
    </script>
@endsection
