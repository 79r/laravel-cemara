<div id="create-client" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0">Tambah Client Baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="alert alert-danger">
                <h4>PENTING!</h4>
                <p>Jika klien sudah pernah dibuat anda tidak perlu lagi membuat baru</p>
            </div>
            <div class="modal-body">
                {{ Form::open( array('url' => route('clientajax.store'))) }}
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
                        {{ Form::text('address', null, array('class' => 'form-control')) }}
                        <small>Isi jika memang ada</small>
                    </div>
                {{ Form::close() }}
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->