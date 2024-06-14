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
            <div class="modal-body" style="min-height: 800px;">
                <input type="hidden" id="id" name="id">
                <div class="row">

                    <div>
                        <b class="mt-3">Data Nilai</b>
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
                        <label for="matematika" class="form-label">Matematika</label>
                        <input type="number" class="form-control {{ $errors->has('matematika') ? 'is-invalid' : '' }}"
                            id="matematika" name="matematika" required>
                        @if ($errors->has('matematika'))
                            <p class="text-danger">{{ $errors->first('matematika') }}</p>
                        @endif
                    </div>
                    <div class="col-12 mt-4">
                        <label for="bahasa_indonesia" class="form-label">Bahasa Indonesia</label>
                        <input type="number"
                            class="form-control {{ $errors->has('bahasa_indonesia') ? 'is-invalid' : '' }}"
                            id="bahasa_indonesia" name="bahasa_indonesia" required>
                        @if ($errors->has('bahasa_indonesia'))
                            <p class="text-danger">{{ $errors->first('bahasa_indonesia') }}</p>
                        @endif
                    </div>
                    <div class="col-12 mt-4">
                        <label for="bahasa_inggris" class="form-label">Bahasa Inggris</label>
                        <input type="number"
                            class="form-control {{ $errors->has('bahasa_inggris') ? 'is-invalid' : '' }}"
                            id="bahasa_inggris" name="bahasa_inggris" required>
                        @if ($errors->has('bahasa_inggris'))
                            <p class="text-danger">{{ $errors->first('bahasa_inggris') }}</p>
                        @endif
                    </div>
                    <div class="col-12 mt-4">
                        <label for="ipa" class="form-label">Ipa</label>
                        <input type="number" class="form-control {{ $errors->has('ipa') ? 'is-invalid' : '' }}"
                            id="ipa" name="ipa" required>
                        @if ($errors->has('ipa'))
                            <p class="text-danger">{{ $errors->first('ipa') }}</p>
                        @endif
                    </div>
                    <div class="col-12 mt-4">
                        <label for="agama" class="form-label">Agama</label>
                        <input type="number" class="form-control {{ $errors->has('agama') ? 'is-invalid' : '' }}"
                            id="agama" name="agama" required>
                        @if ($errors->has('agama'))
                            <p class="text-danger">{{ $errors->first('agama') }}</p>
                        @endif
                    </div>
                    <div class="col-12 mt-4">
                        <label for="bacaan_quran" class="form-label">Bacaan Al-Qur'an</label>
                        <input type="number"
                            class="form-control {{ $errors->has('bacaan_quran') ? 'is-invalid' : '' }}"
                            id="bacaan_quran" name="bacaan_quran" required>
                        @if ($errors->has('bacaan_quran'))
                            <p class="text-danger">{{ $errors->first('bacaan_quran') }}</p>
                        @endif
                    </div>
                    <div class="col-12 mt-4">
                        <label for="praktek_ibadah" class="form-label">Praktek Ibadah</label>
                        <input type="number"
                            class="form-control {{ $errors->has('praktek_ibadah') ? 'is-invalid' : '' }}"
                            id="praktek_ibadah" name="praktek_ibadah" required>
                        @if ($errors->has('praktek_ibadah'))
                            <p class="text-danger">{{ $errors->first('praktek_ibadah') }}</p>
                        @endif
                    </div>
                    <div class="col-12 mt-4">
                        <label for="doa_harian" class="form-label">Doa Harian</label>
                        <input type="number"
                            class="form-control {{ $errors->has('doa_harian') ? 'is-invalid' : '' }}" id="doa_harian"
                            name="doa_harian" required>
                        @if ($errors->has('doa_harian'))
                            <p class="text-danger">{{ $errors->first('doa_harian') }}</p>
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
