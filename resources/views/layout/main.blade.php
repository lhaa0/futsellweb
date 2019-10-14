@extends('layout.body')
@section('content')
<div class="animated fadeIn">
    <div class="row" id="rowUtama">

    </div>
</div>
@endsection
@section('script')
<script>
    jQuery(document).ready(function($) {
            firebase.database().ref('dataFutsal/').on('value', function (snapshot) {
                // alert(snapshot.val())
                var value = snapshot.val();
                $.each(value, function (index, value) {
                    var wait = 0
                    var confirmed = 0
                    var finish = 0
                    if (value && value.uid_admin == "{{Session('id')}}") {
                        $('#rowUtama').append('<div class="col-md-6"><div class="card"><div class="card-body"><h4 class="mb-3">'+value.nama_futsal+'</h4><canvas id="'+index+'"></canvas></div></div></div>')
                        firebase.database().ref('dataOrder/').on('value', function (snapshop2) {
                            var value2 = snapshop2.val();
                            $.each(value2, function (index3, value3) {
                                // console.log(index.split("|")[1])
                                if (value3 && index == index3.split("|")[1]) {
                                    console.log("val3"+value3)

                                    $.each(value3, function (index4, value4) {
                                        console.log(value4)

                                        if (value4) {

                                            if (value4.status == "confirmed") {
                                                // alert(value3.name+'confirmed')
                                                confirmed++
                                                // var json =
                                                // addTable([name, tgl, jam, "<button type='button' class='btn btn-outline-success'>Confirmed</button>"])
                                                // htmls.push("<tr><td>"+value3.name+"</td><td>"+value2.tanggal+"</td><td>"+value2.jam+"</td><td>"+value2.status+"</td></tr>")
                                            } else if(value4.status == "finish"){
                                                finish++
                                                // addTable([name, tgl, jam, "<button type='button' class='btn btn-outline-warning'><i class='fa fa-star'></i>&nbsp; "+value2.rating+"</button>"])
                                                // addTable([value3.name,value2.tanggal,value2.jam+"",value2.status])
                                                // htmls.push("<tr><td>"+value3.name+"</td><td>"+value2.tanggal+"</td><td>"+value2.jam+"</td><td>"+value2.status+"</td></tr>")
                                            } else if(value4.status == "wait"){
                                                wait++
                                            // console.log(index2)
                                            // console.log(err)
                                            // addTable([value3.name,value2.tanggal,value2.jam+"",value2.status])
                                                // addTable([name, tgl, jam, "<button type='button' onclick='confirmStatus("+index2+",\""+index+"\")' class='btn btn-outline-primary'>Wait</button>"])
                                            }
                                        }
                                        console.log(wait + ' ' + confirmed + ' ' + finish)
                                        var ctx = document.getElementById(index);
                                        ctx.height = 300;
                                        var myChart = new Chart( ctx, {
                                            type: 'pie',
                                            data: {
                                                datasets: [ {
                                                    data: [ wait, confirmed, finish],
                                                    backgroundColor: [
                                                                        "#007bff",
                                                                        "#28a745",
                                                                        "#ffc107"
                                                                    ],
                                                    hoverBackgroundColor: [
                                                                        "#007bff",
                                                                        "#28a745",
                                                                        "#ffc107"
                                                                    ]

                                                                } ],
                                                labels: [
                                                                "Waiting",
                                                                "Confirmed",
                                                                "Finish"
                                                            ]
                                            },
                                            options: {
                                                responsive: true
                                            }
                                        } );
                                    })

                                }

                            })
                       })
                    }
                });
                // $('#lapangan').html(htmls);
            });
        });
</script>
@endsection
