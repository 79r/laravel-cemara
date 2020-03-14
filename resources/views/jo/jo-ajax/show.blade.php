<div id="modal-left">
    <div class="modal fade" id="show-item" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                        <span class="badge badge-single-jo-code badge-primary" id="jo_code"></span>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <div id="jo-item">
                        <div class="row">
                    
                            {{-- Jo Information --}}
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="bg-transparent">
                                        @if(Auth::user()->profile->role == "admin")
                                            <a href="{{ route('jo.cemara.edit', ) }}" class="btn btn-danger">Edit jo ini</a>
                                        @endif
                                        <h5 class="header-title-lg mb-3" data-toggle="tooltip" data-placement="top" id="jo_title"></h5>
                                    </div>
                                    <ul class="list-group list-group-flush">
                    
                                        <li class="list-group-item">
                                            <div class="media my-2">
                                                <div class="media-body">
                                                    <div class="col-md-6">
                                                        <p class="text-muted mb-1">Image</p>
                                                        <img id="jo_image" class="img-fluid" src="" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="media my-2">
                                                <div class="media-body">
                                                    <p class="text-muted mb-1">Tanggal Masuk</p>
                                                    <h5 class="mb-0">
                                                        <span class="start_date" id="jo_start_date">
                                                        </span>
                                                    </h5>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="media my-2">
                                                <div class="media-body">
                                                    <p class="text-muted mb-1">Deadline</p>
                                                    <h5 class="mb-0">
                                                        <span class="deadline" id="jo_deadline">
                                                        </span>
                                                    </h5>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="media my-2">
                                                <div class="media-body">
                                                    <p class="text-muted mb-1">Ukuran</p>
                                                    <h5 class="mb-0" id="jo_size"></h5>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="media my-2">
                                                <div class="media-body">
                                                    <p class="text-muted mb-1">Material</p>
                                                    <h5 class="mb-0" id="jo_material"></h5>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="media my-2">
                                                <div class="media-body">
                                                    <p class="text-muted mb-1">Finishing</p>
                                                    <h5 class="mb-0" id="jo_finishing"></h5>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="media my-2">
                                                <div class="media-body">
                                                    <p class="text-muted mb-1">Deskripsi</p>
                                                    <div id="inventory-notes">
                                                        <h6 class="mb-0" id="jo_description"></h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="media my-2">
                                                <div class="media-body">
                                                    <p class="text-muted mb-1">Catatan</p>
                                                    <div id="inventory-notes">
                                                        <h6 class="mb-0" id="jo_notes"></h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                    
                            {{-- Client information --}}
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="bg-transparent">
                                        <h5 class="header-title-lg mb-2 mt-4" data-toggle="tooltip" data-placement="top" title="">Client Info</h5>
                                    </div>
                                    <ul class="list-group list-group-flush">
                    
                                        <li class="list-group-item">
                                            <div class="media my-2">
                                                <div class="media-body">
                                                    <p class="text-muted mb-1">Nama</p>
                                                    <h5 class="mb-0" id="jo_client_name"></h5>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="media my-2">
                                                <div class="media-body">
                                                    <p class="text-muted mb-1">HP/Telp</p>
                                                    <h5 class="mb-0" id="jo_client_phone"></h5>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="my-3">
                                        <a href="" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Show">
                                            <i class="mdi mdi-pencil"></i> <span>Lihat data klien</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>