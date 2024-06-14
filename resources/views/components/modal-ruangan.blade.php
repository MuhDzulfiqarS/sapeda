<div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="scrollingModalRuangan" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered"> <!-- Menggunakan modal-dialog-centered untuk membuat modal lebih terpusat -->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Scrolling Modal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="max-height: 500px; overflow-y: auto;"> <!-- Mengurangi min-height dan menambahkan overflow-y untuk mengatasi ukuran yang terlalu besar -->
                <input type="hidden" id="id" name="id">
                <div class="row">
                    <div class="col-12 mt-4">
                        <select class="form-select" aria-label="Default select example" name="ruangan" id="ruangan" required>
                        <option value="" disabled selected>Pilih Ruangan</option>
                            @foreach($ruangan as $ruang)
                            <option value="{{$ruang->id}}">{{$ruang->nama}}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('ruangan'))
                            <p class="text-danger">{{$errors->first('ruangan')}}</p>
                        @endif
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" id="simpanRuangan" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>