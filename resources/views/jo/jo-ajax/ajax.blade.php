@extends('layouts.master')
@section('content')
<div id="job-list">
    <div class="text-center mt-5">
        <h4 class="header-title-lg">{{ strtoupper('Job List') }}</h4>
        <div class="sub-str mb-3">
            <p>Cemara Multi Kreatif</p>
        </div>
        <div class="text-center mb-5">
            <a href="{{ route('jo.mim.index') }}" class="btn btn-primary">Buka JO di MIM</a>
        </div>
    </div>
    <div class="table-rep-plugin">
        <div class="table-responsive mb-0" data-pattern="priority-columns">
            <table id="table-cemara-inventory" class="table table-striped">
                <thead>
                <tr>
                    <th>Jo Kode</th>
                    <th data-priority="1">Nama</th>
                    <th data-priority="2">Tanggal Masuk</th>
                    <th data-priority="3">Deadline</th>
                    <th data-priority="4">Material</th>
                    <th data-priority="5">Finishing</th>
                    <th data-priority="6">Actions</th>
                </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>

<ul id="pagination" class="pagination-sm"></ul>

<!-- Create Item Modal -->
@include('jo.jo-ajax.create')

<!-- Edit Item Modal -->
@include('jo.jo-ajax.edit')

<!-- Show Jo Item -->
@include('jo.jo-ajax.show')

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twbs-pagination/1.3.1/jquery.twbsPagination.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">

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
	$.each( data, function( key, value ) {
        rows = rows + '<tr>';
        rows = rows + '<td><a data-toggle="modal" data-target="#show-item"><span class="badge badge-primary badge-sn">'+value.jo_code+'</a></span></td>';
        rows = rows + '<td><a data-toggle="modal" data-target="#show-item">'+value.title+'</a></td>';
        rows = rows + '<td>'+value.start_date+'</td>';
        rows = rows + '<td>'+value.deadline+'</td>';
        rows = rows + '<td>'+value.material+'</td>';
        rows = rows + '<td>'+value.finishing+'</td>';
        rows = rows + '<td data-id="'+value.id+'">';
		rows = rows + '<div class="btn-group" role="group">';
			
		rows = rows + '<button data-toggle="modal" data-target="#edit-item" class="btn btn-sm btn-outline-success edit-item"><i class="mdi mdi-pencil"></i></button>';
	
		rows = rows + '<button data-toggle="modal" data-target="#show-item" class="btn btn-sm btn-outline-primary show-item"><i class="mdi mdi-eye"></i></button> ';

		// rows = rows + '<button class="btn btn-sm btn-outline-primary remove-item"><i class="mdi mdi-trash-can"></i></button>';
		
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


$("body").on("click",".remove-item",function(){
    var id = $(this).parent("td").data('id');
    var c_obj = $(this).parents("tr");

    $.ajax({
        dataType: 'json',
        type:'delete',
        url: url + '/' + id,
    }).done(function(data){
        c_obj.remove();
        toastr.success('Post Deleted Successfully.', 'Success Alert', {timeOut: 5000});
        getPageData();
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
    var id = $(this).parent("td").data('id');
    var title = $(this).parent("td").prev("td").prev("td").text();
    var details = $(this).parent("td").prev("td").text();

    /* Letakan data di DOM */
    $("#jo-item").find("#jo_start_date").html(title);
    $("#jo-item").find("#jo-item .code").html(details);
});
</script>
@endsection