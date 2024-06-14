<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#scrollingModal">
                Scrolling Modal
</button> -->
<div class="modal fade" data-bs-backdrop="static" data-bs-keyboard='false' id="scrollingModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title-nilai">Scrolling Modal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="min-height: 400px;">
                <input type="hidden" id="id" name="id">
                <div class="row">

                    <div>
                        <b class="mt-3">Data Jadwal Ujian</b>
                    </div>
                    <div class="col-12 mt-2">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control {{ $errors->has('nama') ? 'is-invalid' : '' }}"
                            id="nama" name="nama" required disabled>
                        @if ($errors->has('nama'))
                            <p class="text-danger">{{ $errors->first('nama') }}</p>
                        @endif
                    </div>
                    <div class="col-12 mt-2">
                        <label for="nisn" class="form-label">Nisn</label>
                        <input type="text" class="form-control {{ $errors->has('nisn') ? 'is-invalid' : '' }}"
                            id="nisn" name="nisn" required disabled>
                        @if ($errors->has('nisn'))
                            <p class="text-danger">{{ $errors->first('nisn') }}</p>
                        @endif
                    </div>
                    <div class="col-12 mt-2">
                        <label for="tanggal" class="form-label">Tanggal</label>
                        <input type="date" class="form-control {{ $errors->has('tanggal') ? 'is-invalid' : '' }}"
                            id="tanggal" name="tanggal" required>
                        @if ($errors->has('tanggal'))
                            <p class="text-danger">{{ $errors->first('tanggal') }}</p>
                        @endif
                    </div>
                    <div class="col-12 mt-4">
                        <label for="waktu_mulai" class="form-label">Waktu Mulai</label>
                        <select class="form-select {{ $errors->has('waktu_mulai') ? 'is-invalid' : '' }}" id="waktu_mulai" name="waktu_mulai" required>
                            <option value="">Pilih Jam Mulai</option>
                            <option value="08:00">08:00</option>
                            <option value="09:00">09:00</option>
                            <option value="10:00">10:00</option>
                            <option value="11:00">11:00</option>
                            <option value="12:00">12:00</option>
                            <option value="13:00">13:00</option>
                            <option value="14:00">14:00</option>
                            <option value="15:00">15:00</option>
                            <option value="16:00">16:00</option>
                            <option value="17:00">17:00</option>
                        </select>
                        @if ($errors->has('waktu_mulai'))
                            <p class="text-danger">{{ $errors->first('waktu_mulai') }}</p>
                        @endif
                    </div>
                    <div class="col-12 mt-4">
                        <label for="waktu_selesai" class="form-label">Waktu Selesai</label>
                        <select class="form-select {{ $errors->has('waktu_selesai') ? 'is-invalid' : '' }}" id="waktu_selesai" name="waktu_selesai" required>
                            <option value="">Pilih Jam Selesai</option>
                            <option value="08:00">08:00</option>
                            <option value="09:00">09:00</option>
                            <option value="10:00">10:00</option>
                            <option value="11:00">11:00</option>
                            <option value="12:00">12:00</option>
                            <option value="13:00">13:00</option>
                            <option value="14:00">14:00</option>
                            <option value="15:00">15:00</option>
                            <option value="16:00">16:00</option>
                            <option value="17:00">17:00</option>
                        </select>
                        @if ($errors->has('waktu_selesai'))
                            <p class="text-danger">{{ $errors->first('waktu_selesai') }}</p>
                        @endif
                    </div>
                    
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" id="simpan" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div><!-- End Scrolling Modal-->
