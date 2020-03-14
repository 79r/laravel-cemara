@extends('layouts.master')
@section('content')
<div id="job-list">
    <div class="text-center">
        <h4 class="header-title-lg">Job List</h4>
    </div>


    @if ($message = Session::get('success'))
    <div class="text-center">
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
    </div>
    @endif
    
    <div class="table-rep-plugin">
        <div class="table-responsive mb-0" data-pattern="priority-columns">
            <table id="table-cemara-inventory" class="table table-striped">
                <thead>
                <tr>
                    <th>Jo Kode</th>
                    <th data-priority="1">Nama</th>
                    <th data-priority="2">Tanggal Masuk</th>
                    <th data-priority="3">Deadline</th>
                    <th class="d-none" data-priority="4">Material</th>
                    <th class="d-none" data-priority="5">Finishing</th>
                    <th data-priority="6">Status JO</th>
                    <th data-priority="7">Action</th>
                    <th data-priority="8">Buka</th>
                </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>

<ul id="pagination" class="pagination-sm mt-3"></ul>

<!-- Create Item Modal -->
@include('jo.jo-ajax.create')

<!-- Edit Item Modal -->
@include('jo.jo-ajax.edit')

<!-- Show Jo Item -->
@include('jo.jo-ajax.show')

<script>
var url = "<?php echo route('joajax.index')?>";
var page = 1;
var current_page = 1;
var total_page = 0;
var is_ajax_fire = 0;



manageData();

function manageData() {
    $.ajax({
        dataType: 'json',
        url: url,
        data: {page:page}
    }).done(function(data){
        total_page = data.last_page;
        current_page = data.current_page;

        $('#pagination').twbsPagination({
            totalPages: total_page,
            visiblePages: current_page,

            onPageClick: function (event, pageL) {
                page = pageL;
                if(is_ajax_fire != 0){
                        getPageData();
                }
            }
        });

        manageRow(data.data);
        is_ajax_fire = 1;
    });
}

$.ajaxSetup({
    headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
});

function getPageData() {
	$.ajax({
        dataType: 'json',
        url: url,
        data: {page:page}
	}).done(function(data){
		manageRow(data.data);
	});
}

function manageRow(data) {
    var	rows = '';
    console.log(data);
	$.each( data, function( key, value ) {
        rows = rows + '<tr data-joid='+ value.id+'>';
        
        // invisible rows
        rows = rows + '<td data-jo="jo_client_name" class="d-none">'+value.client.name+'</td>';
        rows = rows + '<td data-jo="jo_client_phone" class="d-none">'+value.client.phone+'</td>';
        rows = rows + '<td data-jo="jo_client_email" class="d-none">'+value.client.email+'</td>';
        rows = rows + '<td data-jo="jo_client_address" class="d-none">'+value.client.address+'</td>';

        rows = rows + '<td data-jo="jo_notes" class="d-none">'+value.notes+'</td>';

        rows = rows + '<td data-jo="jo_description" class="d-none">'+value.description+'</td>';

        rows = rows + '<td data-jo="jo_image" class="d-none">'+value.image_url+'</td>';

        rows = rows + '<td data-jo="jo_size" class="d-none">'+value.size+'</td>';

        rows = rows + '<td data-jo="jo_qty" class="d-none">'+value.qty+'</td>';
        
        rows = rows + '<td data-jo="jo_code"><span class="badge badge-primary badge-sn">'+value.jo_code+'</span></td>';

        rows = rows + '<td style="max-width:252px" data-jo="jo_title">'+value.title+'</td>';

        rows = rows + '<td data-jo="start_date" class="timestamp">'+value.start_date+'</td>';

        rows = rows + '<td data-jo="deadline" class="timestamp">'+value.deadline+'</td>';

        rows = rows + '<td data-jo="jo_material" class="d-none">'+value.material+'</td>';

        rows = rows + '<td data-jo="jo_finishing" class="d-none">'+value.finishing+'</td>';
        
        if(value.jo_status.name == "Progress") {
            rows = rows + '<td data-jo="jo_status"><span class="btn btn-sm text-white text-left" style="width:115px; background-color:'+value.jo_status.color+'"><i class="mdi mdi-trending-up"></i> '+value.jo_status.name+'</span></td>';
        } else if(value.jo_status.name == "Waiting List") {
            rows = rows + '<td data-jo="jo_status"><span class="btn btn-sm text-white text-left" style="width:115px; background-color:'+value.jo_status.color+'"><i class="mdi mdi-clock-outline"></i> '+value.jo_status.name+'</span></td>';
        } else {
            rows = rows + '<td data-jo="jo_status"><span class="btn btn-sm text-white text-left" style="width:115px; background-color:'+value.jo_status.color+'"><i class="mdi mdi-checkbox-marked-circle-outline"></i> '+value.jo_status.name+'</span></td>';
        }
        
        /** action button 
            Tombol untuk Waiting list ke Progress
            atau Progress ke Selesai */
        rows = rows + '<td data-id="'+value.id+'">';
        rows = rows + '<div class="btn-group" role="group">';
            if(value.jo_status.name == "Progress") {
                rows = rows + '<button class="btn btn-sm btn-outline-danger edit-item"><i class="mdi mdi-clock-outline"></i></button>';
                rows = rows + '<button class="btn btn-sm btn-success show-item data-toggle="tooltip" data-placement="top" title="'+value.jo_status.name+'""><i class="mdi mdi-trending-up"></i></button> ';
                rows = rows + '<button class="btn btn-sm btn-outline-primary show-item"><i class="mdi mdi-check"></i></button> ';
            } else if(value.jo_status.name == "Waiting List") {
                rows = rows + '<button class="btn btn-sm btn-danger edit-item data-toggle="tooltip" data-placement="top" title="'+value.jo_status.name+'"><i class="mdi mdi-clock-outline"></i></button>';
                rows = rows + '<button class="btn btn-sm btn-outline-success show-item"><i class="mdi mdi-trending-up"></i></button> ';
                rows = rows + '<button class="btn btn-sm btn-outline-primary show-item"><i class="mdi mdi-check"></i></button> ';
            } else {
                rows = rows + '<button class="btn btn-sm btn-outline-danger edit-item"><i class="mdi mdi-clock-outline"></i></button>';
                rows = rows + '<button class="btn btn-sm btn-outline-success show-item"><i class="mdi mdi-trending-up"></i></button> ';
                rows = rows + '<button class="btn btn-sm btn-primary show-item data-toggle="tooltip" data-placement="top" title="'+value.jo_status.name+'"><i class="mdi mdi-check"></i></button> ';
            }
        rows = rows + '</div>';
        rows = rows + '</td>';

        rows = rows + '<td data-id="'+value.id+'">';
		rows = rows + '<div class="btn-group" role="group">';
            // rows = rows + '<button data-toggle="modal" data-target="#edit-item" class="btn btn-sm btn-outline-success edit-item"><i class="mdi mdi-pencil"></i></button>';
            rows = rows + '<button data-id="'+value.id+'" data-toggle="modal" data-target="#show-item" class="btn btn-sm btn-outline-primary show-item"><i class="mdi mdi-eye"></i> Buka</button> ';
        rows = rows + '</div>';
        rows = rows + '</td>';

        rows = rows + '</tr>';
	});

	$("tbody").html(rows);
}

$(".crud-submit").click(function(e){
    e.preventDefault();
    var form_action = $("#create-item").find("form").attr("action");
    var title = $("#create-item").find("input[name='title']").val();
    var details = $("#create-item").find("textarea[name='details']").val();

    $.ajax({
        dataType: 'json',
        type:'POST',
        url: form_action,
        data:{title:title, details:details}
    }).done(function(data){
        getPageData();
        $(".modal").modal('hide');
        toastr.success('Post Created Successfully.', 'Success Alert', {timeOut: 5000});
    });
});


$("body").on("click",".edit-item",function(){
    var id = $(this).parent("td").data('id');
    var title = $(this).parent("td").prev("td").prev("td").text();
    var details = $(this).parent("td").prev("td").text();

    $("#edit-item").find("input[name='title']").val(title);
    $("#edit-item").find("textarea[name='details']").val(details);
    $("#edit-item").find("form").attr("action",url + '/' + id);
});

$(".crud-submit-edit").click(function(e){
    e.preventDefault();

    var form_action = $("#edit-item").find("form").attr("action");
    var title = $("#edit-item").find("input[name='title']").val();
    var details = $("#edit-item").find("textarea[name='details']").val();

    $.ajax({
        dataType: 'json',
        type:'PUT',
        url: form_action,
        data:{title:title, details:details}
    }).done(function(data){
        getPageData();
        $(".modal").modal('hide');
        toastr.success('Post Updated Successfully.', 'Success Alert', {timeOut: 5000});
    });
});


// Show
$("body").on("click",".show-item",function(){
    var joID = $(this).attr('data-id');
    var tableTR = $('#table-cemara-inventory tbody tr[data-joid="'+joID+'"]');

    var joCode, joTitle, joStatus, joDescription, material, size, qty, startDate, deadline, finishing, joImage, clientName, clientId, clietPhone, clientEmail, clientAddress;

    joCode      = tableTR.find('td[data-jo="jo_code"]').text();
    joTitle     = tableTR.find('td[data-jo="jo_title"]').text();
    joStatus     = tableTR.find('td[data-jo="jo_status"]').text();
    joImage     = tableTR.find('td[data-jo="jo_image"]').text();
    startDate = tableTR.find('td[data-jo="start_date"]').text();
    deadline = tableTR.find('td[data-jo="deadline"]').text();
    size = tableTR.find('td[data-jo="jo_size"]').text();
    material = tableTR.find('td[data-jo="jo_material"]').text();
    qty = tableTR.find('td[data-jo="jo_qty"]').text();
    finishing = tableTR.find('td[data-jo="jo_finishing"]').text();
    joDescription = tableTR.find('td[data-jo="jo_description"]').text();
    notes = tableTR.find('td[data-jo="jo_notes"]').text();

    clientName = tableTR.find('td[data-jo="jo_client_name"]').text();
    clientPhone = tableTR.find('td[data-jo="jo_client_phone"]').text();
    clientEmail = tableTR.find('td[data-jo="jo_client_email"]').text();
    clientAddress = tableTR.find('td[data-jo="jo_client_address"]').text();
    
    /* Letakan data di DOM */
    $("#jo_code").html(joCode);
    $("#jo-item").find("#jo_image").attr('src', '{{ asset('uploads/jo') }}/'+joImage+'');
    $("#jo-item").find("#jo_status").html(joStatus);
    $("#jo-item").find("#jo_title").html(joTitle);
    $("#jo-item").find("#jo_start_date").html(startDate);
    $("#jo-item").find("#jo_deadline").html(deadline);
    $("#jo-item").find("#jo_size").html(size);
    $("#jo-item").find("#jo_material").html(material);
    $("#jo-item").find("#jo_qty").html(qty);
    $("#jo-item").find("#jo_finishing").html(finishing);
    $("#jo-item").find("#jo_description").html(joDescription);
    $("#jo-item").find("#jo_notes").html(notes);

    $("#jo-item").find("#jo_client_name").html(clientName);
    $("#jo-item").find("#jo_client_phone").html(clientPhone);
    $("#jo-item").find("#jo_client_email").html(clientEmail);
    $("#jo-item").find("#jo_client_address").html(clientAddress);
});



// Tombol untuk membuat JO dari waiting list ke progress
$("body").on("click",".edit-item",function() {
    var id = $(this).parent("td").data('id');
    var title = $(this).parent("td").prev("td").prev("td").text();
    var details = $(this).parent("td").prev("td").text();

    $("#edit-item").find("input[name='title']").val(title);
    $("#edit-item").find("textarea[name='details']").val(details);
    $("#edit-item").find("form").attr("action",url + '/' + id);
});

$(".crud-submit-edit").click(function(e){
    e.preventDefault();

    var form_action = $("#edit-item").find("form").attr("action");
    var title = $("#edit-item").find("input[name='title']").val();
    var details = $("#edit-item").find("textarea[name='details']").val();

    $.ajax({
        dataType: 'json',
        type:'PUT',
        url: form_action,
        data:{title:title, details:details}
    }).done(function(data){
        getPageData();
        $(".modal").modal('hide');
        toastr.success('Post Updated Successfully.', 'Success Alert', {timeOut: 5000});
    });
});


</script>

<script>
function convertWaktu(timeHere){

    // Unixtimestamp
    var unixtimestamp = $('.timestamp').value;

    // Months array
    var months_arr = ['Jan','Feb','Mar','Apr','Mei','Jun','Jul','Aug','Sep','Okt','Nov','Des'];

    // Convert timestamp to milliseconds
    var date = new Date(unixtimestamp*1000);

    // Year
    var year = date.getFullYear();

    // Month
    var month = months_arr[date.getMonth()];

    // Day
    var day = date.getDate();

    // Hours
    var hours = date.getHours();

    // Minutes
    var minutes = "0" + date.getMinutes();

    // Seconds
    var seconds = "0" + date.getSeconds();

    // Display date time in MM-dd-yyyy h:m:s format
    var timeHere = month+'-'+day+'-'+year+' '+hours + ':' + minutes.substr(-2) + ':' + seconds.substr(-2);

    return timeHere;
}
</script>


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twbs-pagination/1.3.1/jquery.twbsPagination.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">

@endsection