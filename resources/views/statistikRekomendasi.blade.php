@extends('admin_page')
@section('Header_Administrasi')
    <h2>ADMIN - TENTANG WEB</h2>
@stop

@section('Content_Administrasi')
  

    <div class="container">

        <div class row>

            <div class = "col-md-8">
                <script type="text/javascript" src="https://www.google.com/jsapi"></script>
                <script type="text/javascript">

                    google.load("visualization", "1", {packages:["corechart"]});
                    google.setOnLoadCallback(drawChart);
                    function drawChart() {

                        var prodi = [] ;

                        @for($i = 0; $i < count($prodi) ; $i++)
                        prodi[{{ $i }}]         = {{ $prodi[$i] }};
                                @endfor

                        var data = google.visualization.arrayToDataTable([
                            ['Type Caregiver', 'Jumlah Anak'],
                            ['Teknik Informatika', prodi[0]],
                            ['Sistem Informasi', prodi[1]],
                            ['Akuntansi', prodi[2]],
                            ['Manajemen', prodi[3]],
                            ['Manajemen Informatika', prodi[4]]
                        ]);

                        var options = {
                            title: 'Statistika Hasil Rekomendasi Program Studi'
                        };

                        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

                        //fungsi klik slice diagram untuk menampilkan data grafik
                        function selectHandler()
                        {
                            var selectedItem = chart.getSelection()[0];
                            if(selectedItem)
                            {
                                var Name_Prodi = data.getValue(selectedItem.row, 0);
                                alert("kamu pilih prodi : " + Name_Prodi);
                            }
                        }
                        google.visualization.events.addListener(chart, 'select', selectHandler);
                        chart.draw(data, options);
                    }

                </script>
                <body>
                <div id="piechart" style="width: 900px; height: 500px;"></div>
                </body>
            </div

        </div>

    </div>
    </div>
<div align="center">
            
                <a class="btn admin_btn" href="{{ route('statistik') }}"><h5>Kembali</h5></a>

                 <script type="text/javascript">
        $(document).ready(function(){
            Waves.attach('.admin_btn', ['waves-button', 'waves-float']);
            Waves.init();
        });
    </script>
                </div>
    </div>
@stop