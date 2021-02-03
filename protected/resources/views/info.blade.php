@extends('app')

@section('section')
<section>
    <div class="container animated fadeIn">
        <div class="text-center">
            <h2 style="margin-bottom: 6px"><i class="fa fa-info fa-fw"></i> INFORMASI LEMBAGA</h2>
        </div>
        <br>
        <br>
        <div class="row">
            <div id="panel-form" class="panel-form col-md-6">
                <div class="col-sm-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Unit Pendidikan</th>
                                <th class="text-center">Menu</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <h5><strong>SDIC Al-Yasini</strong></h5>
                                </td>
                                <td class="text-center">
                                    <a href="https://sd-islam-cendikia-al-yasini.business.site/" class="btn btn-sm btn-info disabled">Info</a>
                                    <a href="{{('pdf/2021/sdic.pdf')}}" class="btn btn-sm btn-success disabled">Unduh Brosur</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5><strong>MTs Genius Al-Yasini</strong></h5>
                                </td>
                                <td class="text-center">
                                    <a href="https://mtsalyasini.sch.id/" class="btn btn-sm btn-info">Info</a>
                                    <a href="{{('pdf/2021/mts.pdf')}}" class="btn btn-sm btn-success">Unduh Brosur</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5><strong>SMP Unggulan Al-Yasini</strong></h5>
                                </td>
                                <td class="text-center">
                                    <a href="https://www.smp-alyasini.sch.id/" class="btn btn-sm btn-info">Info</a>
                                    <a href="{{('pdf/2021/smpu.pdf')}}" class="btn btn-sm btn-success">Unduh Brosur</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5><strong>SMPN 2 Kraton Al-Yasini</strong></h5>
                                </td>
                                <td class="text-center">
                                    <a href="https://smpn2kraton.sch.id/" class="btn btn-sm btn-info">Info</a>
                                    <a href="{{('pdf/2021/smpn.pdf')}}" class="btn btn-sm btn-success">Unduh Brosur</a>
                            </tr>
                            <tr>
                                <td>
                                    <h5><strong>MAN 2 Pasuruan Al-Yasini</strong></h5>
                                </td>
                                <td class="text-center">
                                    <a href="https://man2pasuruan.sch.id/spdb" class="btn btn-sm btn-info">Info</a>
                                    <a href="{{('pdf/2021/man.pdf')}}" class="btn btn-sm btn-success">Unduh Brosur</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5><strong>SMA Excellent Al-Yasini</strong></h5>
                                </td>
                                <td class="text-center">
                                    <a href="http://smaya.sch.id/" class="btn btn-sm btn-info">Info</a>
                                    <a href="{{url('pdf/2021/sma.pdf')}}" class="btn btn-sm btn-success">Unduh Brosur</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5><strong>SMK Leader Al-Yasini</strong></h5>
                                </td>
                                <td class="text-center">
                                    <a href="https://www.smkkesehatan-alyasini.sch.id/" class="btn btn-sm btn-info">Info</a>
                                    <a href="{{('pdf/2021/smkl.pdf')}}" class="btn btn-sm btn-success">Unduh Brosur</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5><strong>SMKN 1 Wonorejo Al-Yasini</strong></h5>
                                </td>
                                <td class="text-center">
                                    <a href="" class="btn btn-sm btn-info disabled">Info</a>
                                    <a href ="{{url('pdf/2021/smkn.pdf')}}" class="btn btn-sm btn-success disabled">Unduh Brosur</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5><strong>STAI Al-Yasini</strong></h5>
                                </td>
                                <td class="text-center">
                                    <a href ="http://www.stai-alyasini.ac.id/" class="btn btn-sm btn-info">Info</a>
                                    <a href ="{{url('pdf/2021/stai.pdf')}}" class="btn btn-sm btn-success disabled">Unduh Brosur</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection