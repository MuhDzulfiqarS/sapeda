<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#scrollingModal">
                Scrolling Modal
</button> -->
<div class="modal fade" data-bs-backdrop="static" data-bs-keyboard='false' id="scrollingModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title-nilai">Add Ruangan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="min-height: 200px;">
                <input type="hidden" id="id" name="id">
                <div class="row">

                    <div>
                        <b class="mt-3">Ruangan</b>
                    </div>
                    <div class="col-12 mt-2">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control {{ $errors->has('nama') ? 'is-invalid' : '' }}"
                            id="nama" name="nama" required >
                        @if ($errors->has('ruangan'))
                            <p class="text-danger">{{ $errors->first('ruangan') }}</p>
                        @endif
                    </div>
                    <div class="col-12 mt-2">
                        <label for="kuota" class="form-label">kuota</label>
                        <input type="number" class="form-control {{ $errors->has('kuota') ? 'is-invalid' : '' }}"
                            id="kuota" name="kuota" required >
                        @if ($errors->has('kuota'))
                            <p class="text-danger">{{ $errors->first('kuota') }}</p>
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

<div class="modal fade" data-bs-backdrop="static" data-bs-keyboard='false' id="createModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title-nilai">Add Ruangan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="min-height: 200px;">
                <div class="row">
                    <div>
                        <b class="mt-3">Ruangan</b>
                    </div>
                    <form id="formCreateRuangan" action="{{ route('admin.siswa.createRuangan') }}" method="POST">
                        @csrf
                        <div class="col-12 mt-2">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control {{ $errors->has('nama') ? 'is-invalid' : '' }}"
                                id="nama" name="nama" required>
                            @if ($errors->has('ruangan'))
                                <p class="text-danger">{{ $errors->first('ruangan') }}</p>
                            @endif
                        </div>
                        <div class="col-12 mt-2">
                            <label for="kuota" class="form-label">kuota</label>
                            <input type="number" class="form-control {{ $errors->has('kuota') ? 'is-invalid' : '' }}"
                                id="kuota" name="kuota" required>
                            @if ($errors->has('kuota'))
                                <p class="text-danger">{{ $errors->first('kuota') }}</p>
                            @endif
                        </div>
                    </form>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" form="formCreateRuangan" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div><!-- End Scrolling Modal-->
