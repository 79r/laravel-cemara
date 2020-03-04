<div class="d-none">
    <div class="row">
        <h4 class="one">Client</h4>
        <button class="btn btn-info ml-auto" id="createNewClient">Add Client</button>
    </div>
    <br>
    <table id="dataTable" class="table table-striped table-bordered">
        <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Phone</th>
            <th width="280px">Action</th>
        </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>

{{-- create/update client modal--}}

<div class="modal fade" id="ajaxModel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0">Tambah Client Baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-sm-12 col-md-10 col-lg-8 mx-auto">
                    <div class="alert alert-danger">
                        <h4>PENTING!</h4>
                        <p>Jika klien sudah pernah dibuat anda tidak perlu lagi membuat baru</p>
                    </div>
                    {{ Form::open( array('url' => route('clientajax.store'), 'id' => 'clientForm')) }}
                        <div class="form-group">
                            <label for="name">Nama Klien</label>
                            {{ Form::text('name', null, array('class' => 'form-control')) }}
                            <small>Jika nama perusahaan tuliskan nama perusahaannya</small>
                        </div>
                        <div class="form-group">
                            <label for="phone">HP/Telepon</label>
                            {{ Form::text('phone', null, array('class' => 'form-control')) }}
                            <small>Isi jika memang ada</small>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            {{ Form::text('email', null, array('class' => 'form-control')) }}
                            <small>Isi jika memang ada</small>
                        </div>
                        <div class="form-group">
                            <label for="name">Alamat</label>
                            {{ Form::textarea('address', null, array('class' => 'form-control')) }}
                            <small>Isi jika memang ada</small>
                        </div>
                        <div class="form-group">
                            {{ Form::submit('Simpan',array('class' => 'btn btn-primary btn-block', 'id' => 'saveBtn')) }}
                        </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script type="text/javascript">
    $(function () {
        //ajax setup
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        // datatable
        var table = $('#dataTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('clientajax.index') }}",
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                {data: 'name', name: 'name'},
                {data: 'phone', name: 'phone'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ]
        });

        // create new book
        $('#createNewClient').click(function () {
            $('#saveBtn').html("Create");
            $('#client_id').val('');
            $('#clientForm').trigger("reset");
            $('#modelHeading').html("Create new client");
            $('#ajaxModel').modal('show');
        });

        // create or update
        $('#saveBtn').click(function (e) {
            e.preventDefault();
            $(this).html('Saving..');

            $.ajax({
                data: $('#clientForm').serialize(),
                url: "{{ route('clientajax.store') }}",
                type: "POST",
                dataType: 'json',
                success: function (data) {
                    $('#clientForm').trigger("reset");
                    $('#ajaxModel').modal('hide');
                    table.draw();
                    $('#saveBtn').html('Save');
                },
                error: function (data) {
                    console.log('Error:', data);
                    $('#saveBtn').html('Save');
                }
            });
        });

        // edit
        $('body').on('click', '.editClient', function () {
            var client_id = $(this).data('id');
            $.get("{{ url('clientajax') }}" + '/' + client_id + '/edit', function (data) {
                $('#modelHeading').html("Edit Client");
                $('#saveBtn').html('Update');
                $('#ajaxModel').modal('show');
                $('#client_id').val(data.id);
                $('#name').val(data.name);
                $('#author').val(data.author);
            })
        });

        // delete
        $('body').on('click', '.deleteClient', function () {
            var client_id = $(this).data("id");
            confirm("Are You sure want to delete !");

            $.ajax({
                type: "DELETE",
                url: "{{ url('client') }}" + '/' + client_id,
                success: function (data) {
                    table.draw();
                },
                error: function (data) {
                    console.log('Error:', data);
                }
            });
        });

    });
</script>