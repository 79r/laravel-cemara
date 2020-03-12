<div id="modal-left">
    <div class="modal fade" id="show-item" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Show</h4>
                </div>
                <div class="modal-body">
                    <div id="jo-item">
                        <div class="row">
                    
                            {{-- Jo Information --}}
                            <div class="col-sm-12">
                                <div class="card pl-sm-0 pl-md-4">
                                    <div class="bg-transparent">
                                        <div class="my-3">
                                            <a href="#"
                                                class="btn btn-prmary"
                                                style="padding-left: 2rem; padding-right: 2rem;
                                                color: #fff;
                                                background-color:">
                                                <span id="jo_status">
                                                </span>
                                            </a>
                                            
                                        </div>
                                        <h5 class="header-title-lg mb-3" data-toggle="tooltip" data-placement="top"> <span class="badge badge-primary" id="jo_code"></span></h5>
                                    </div>
                                    <ul class="list-group list-group-flush">
                    
                                        <li class="list-group-item">
                                            <div class="media my-2">
                                                <div class="media-body">
                                                    <p class="text-muted mb-1">Image</p>
                                                    <img id="jo_image" src="" alt="">
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
                                <div class="card pl-sm-0 pl-md-4">
                                    <div class="bg-transparent">
                                        <h5 class="header-title-lg mb-3" data-toggle="tooltip" data-placement="top" title="">Kontak Klien</h5>
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
                                        <li class="list-group-item">
                                            <div class="media my-2">
                                                <div class="media-body">
                                                    <p class="text-muted mb-1">Email</p>
                                                    <h5 class="mb-0" id="jo_client_email"></h5>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="media my-2">
                                                <div class="media-body">
                                                    <p class="text-muted mb-1">Alamat</p>
                                                    <h5 class="mb-0" id="jo_client_address"></h5>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="my-3">
                                        <a href="" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Show">
                                            <i class="mdi mdi-pencil"></i> <span>See more..</span>
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