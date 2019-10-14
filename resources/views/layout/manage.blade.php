@extends('layout.body')
@section('content')
<h1 id="titleLapangan"></h1>

<div class="row" style="margin-top: 16px;">
    <div class="col-lg-4 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="stat-widget-five">
                    <div class="stat-icon dib flat-color-1">
                        <i class="ti-pencil-alt"></i>
                    </div>
                    <div class="stat-content">
                        <div class="text-left dib">
                            <div class="stat-text" id="wait"></div>
                            <div class="stat-heading">Wait</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="stat-widget-five">
                    <div class="stat-icon dib flat-color-2">
                        <i class="ti-check"></i>
                    </div>
                    <div class="stat-content">
                        <div class="text-left dib">
                            <div class="stat-text" id="confirmed"></div>
                            <div class="stat-heading">Confirmed</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="stat-widget-five">
                    <div class="stat-icon dib flat-color-3">
                        <i class="ti-flag-alt"></i>
                    </div>
                    <div class="stat-content">
                        <div class="text-left dib">
                            <div class="stat-text" id="finish"></div>
                            <div class="stat-heading">Finish</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Data Table</strong>
            </div>
            <div class="card-body">
                <table id="data-table" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Tanggal</th>
                            <th>Jam</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody id="tBody">

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@endsection
@section('script')
<script>
    jQuery(document).ready(function() {

        firebase.database().ref('dataFutsal/{{$idFutsal}}').on('value', function (snapshot) {
            var value = snapshot.val()
            $('#titleLapangan').html(value.nama_futsal)
        })

        firebase.database().ref('dataOrder/').on('value', function (snapshot) {
                // alert(snapshot.val())
                var wait = 0
                var confirmed = 0
                var finish = 0

                $('#data-table').DataTable().clear().draw();

                var value = snapshot.val();
                $.each(value, function (index, value) {
                    // console.log(index.split("|")[1])
                    if (value && "{{$idFutsal}}" == index.split("|")[1]) {
                        $.each(value,function (index2, value2) {
                            // console.log('user/'+index.split("|")[0])
                            firebase.database().ref('user/'+index.split("|")[0]).on('value', function (snapshot2){
                                var value3 = snapshot2.val()
                                console.log(value3.name)
                                // $.each(value3, function (index4, value4) {
                                    // alert(value2.tanggal)
                                    var name = value3.name
                                    var tgl = value2.tanggal
                                    var jam = value2.jam+""
                                    // var status = value2.status
                                    // try{
                                        if (value2.status == "confirmed") {
                                            // alert(value3.name+'confirmed')
                                            confirmed++
                                            // var json =
                                            addTable([name, tgl, jam, "<button type='button' class='btn btn-outline-success'>Confirmed</button>"])
                                            // htmls.push("<tr><td>"+value3.name+"</td><td>"+value2.tanggal+"</td><td>"+value2.jam+"</td><td>"+value2.status+"</td></tr>")
                                        } else if(value2.status == "finish"){
                                            finish++
                                            addTable([name, tgl, jam, "<button type='button' class='btn btn-outline-warning'><i class='fa fa-star'></i>&nbsp; "+value2.rating+"</button>"])
                                            // addTable([value3.name,value2.tanggal,value2.jam+"",value2.status])
                                            // htmls.push("<tr><td>"+value3.name+"</td><td>"+value2.tanggal+"</td><td>"+value2.jam+"</td><td>"+value2.status+"</td></tr>")
                                        } else if(value2.status == "wait"){
                                            wait++
                                        // console.log(index2)
                                        // console.log(err)
                                        // addTable([value3.name,value2.tanggal,value2.jam+"",value2.status])
                                            addTable([name, tgl, jam, "<button type='button' onclick='confirmStatus("+index2+",\""+index+"\")' class='btn btn-outline-primary'>Wait</button>"])
                                        }
                                    // } catch(err){

                                        // htmls.push("<tr><td>"+value3.name+"</td><td>"+value2.tanggal+"</td><td>"+value2.jam+"</td><td>"+value2.status+"</td></tr>")


                                    // console.log(htmls)
                                    // $('#tBody').html(htmls);

                                    $('#wait').html("<span class='count'>"+wait+"</span>")
                                    $('#confirmed').html("<span class='count'>"+confirmed+"</span>")
                                    $('#finish').html("<span class='count'>"+finish+"</span>")
                                    // console.log(wait+' '+confirmed+' '+finish)
                                    // console.log(htmls)
                                // })
                            })
                        })
                //         htmls.push("<form action='{{URL('/admin')}}/"+index+"' method='post'><input type='hidden' name='_token' value='{{csrf_token()}}'><input type='hidden' value='"+value.uid_admin+"' name='uid_admin'/><input style='text-align:left;' class='btn btn-sm btn-link' type='submit' value='"+value.nama_futsal+"'/></form>")
                //         // htmls.push("<a href='{{URL('/admin')}}/"+index+"'>"+value.nama_futsal+"</a>")
                //     }
                }
            });
            jQuery('#data-table-export').DataTable();

        });

    } );
    function addTable(data){
        console.log(data)
        // $.each(data,function (index, value) {
            // console.log(value)
        $('#data-table').DataTable().row.add(data).draw();
        // })

    }

    function confirmStatus(idOrder, key) {
        Swal.fire({
        title: 'Konfirmasi pesanan ini?',
        type: 'question',
        showCloseButton: true,
        showCancelButton: true,
        focusConfirm: false,
        confirmButtonText:
            '<i class="fa fa-thumbs-up"></i> Iya!',
        cancelButtonText:
            '<i class="fa fa-thumbs-down">Tidak!</i>'
        }).then((result) => {
        if (result.value) {
            firebase.database().ref('dataOrder/'+key+'/'+idOrder).update({
                status: "confirmed",
            });
            Swal.fire(
            'Success!',
            'Terkonfirmasi.',
            'success'
            )
        }
})
    }
</script>
@endsection
