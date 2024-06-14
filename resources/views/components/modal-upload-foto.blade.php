              <div class="modal fade" id="basicModal" tabindex="-1">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Basic Modal</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <form class="row g-3" id="upload-image-form"  method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" id="id">
                            <div class="col-12">
                            <label for="inputNumber" class="col-sm-2 col-form-label">Kartu Keluarga</label>
                            <div class="col-sm-12">
                                <input class="form-control" type="file" name="kartu_keluarga" id="kartu_keluarga">   
                           
                            </div>
                            </div>   
                            <div class="col-12">
                            <label for="inputNumber" class="col-sm-2 col-form-label">Akta Kelahiran</label>
                            <div class="col-sm-12">
                                <input class="form-control" type="file" name="akta_kelahiran" id="akta_kelahiran">
                               
                                <p class="text-danger" id="akta_kelahiran"></p>
                           
                            </div>
                            </div>   
                            <div class="col-12">
                            <label for="inputNumber" class="col-sm-2 col-form-label">Ijazah</label>
                            <div class="col-sm-12">
                                <input class="form-control" type="file" name="ijazah" id="ijazah">   
                                <p class="text-danger" id="ijazah"></p>
                            </div>
                            </div>   
                            <div class="col-12">
                            <label for="inputNumber" class="col-sm-2 col-form-label">Nilai Rapor</label>
                            <div class="col-sm-12">
                                <input class="form-control" type="file" name="rapor" id="rapor">
                                <p class="text-danger" id="kartu_indonesia_pintar"></p>
                            </div>
                            </div>   
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                  </div>
                </div>
              </div><!-- End Basic Modal-->