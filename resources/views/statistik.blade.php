@extends('admin_page')
@section('Header_Administrasi')
    <h2>ADMIN - STATISTIK</h2>
@stop

@section('Content_Administrasi')
<style type="text/css">
    .block1 {
    color: red;
    width: 100px;
    position: relative;
}

.block2 {
 
    width: 250px;
    height: 100px;
    position: absolute;
    top: 0px;
    right: 0px;
}
</style>

 <body>
    <div class="col-xs-6" id="chart_div" style="width: 900px; height: 500px;"></div>
    <div class="col-xs-6">
    	
 <div align="center">
            
                <a class="btn admin_btn" href="{{ route('statistikRekomendasi') }}"><h5>Lihat Statistik Hasil Rekomendasi </h5></a>

                 <script type="text/javascript">
        $(document).ready(function(){
            Waves.attach('.admin_btn', ['waves-button', 'waves-float']);
            Waves.init();
        });
    </script>
                </div>
    </div>
    <div class='block2'>
    <br><br><b>Detail Statistik</b><br><br>
    	 <table class="table table-striped table-bordered table-hover">
      <thead>
      <tr class="danger">
          <th>Asal Sekolah</th>
          <th>Total</th>
      </tr>
        </thead>
        <tbody>
        <?php $a=1 ?>
        @foreach($query as $cities)
            <tr class="info">
                <td>{{$cities->asal_sekolah}}</td>
                <td>{{$cities->total}}</td>
            </tr>
            @endforeach
        <tr>

        </tr> 
        </tbody>
    </table>

    </div>
    </body>
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>

    <script type="text/javascript">
        google.load('visualization', '1', {packages: ['corechart', 'line']});
        google.setOnLoadCallback(drawBackgroundColor);

        function drawBackgroundColor() {

            var nama_sekolah = [];
            var count_sekolah = [];

            @for($i=0; $i<count($goar);$i++ )
                nama_sekolah[{{ $i }}] = '{{ $goar[$i] }}';
                    @endfor


                @for($i=0; $i<count($jlh);$i++ )
                count_sekolah[{{ $i }}] = {{ $jlh[$i] }};
                    @endfor

           var data = new google.visualization.DataTable();

            data.addColumn('string', 'visit');
            data.addColumn('number', 'total');


            for(var i = 0; i < nama_sekolah.length; i++)
                data.addRow([nama_sekolah[i], count_sekolah[i]]);

            var options = {
                hAxis: {
                    title: 'Total'
                },
                vAxis: {
                    title: 'Nama Sekolah'
                },
                backgroundColor: 'black',
                chartArea: {
                    backgroundColor: 'black'
                },
            };

            var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
            chart.draw(data, { width:520, height:500, title:'Jumlah Pengunjung Sekolah',
            	hAxis:{title:'Nama Sekolah'},vAxis:{title:'total'}});


        }
    </script>
   

@stop

