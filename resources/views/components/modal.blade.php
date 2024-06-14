<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#scrollingModal">
                Scrolling Modal
</button> -->
              <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard='false' id="scrollingModal" tabindex="-1">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Scrolling Modal</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" style="min-height: 1500px;">
                     <input type="hidden" id="id" name="id">
                     <div class="row">

                        <div>
                            <b class="mt-3">Data Diri</b>
                          </div>
                        <div class="col-12 mt-2">
                        <label for="asal_sekolah" class="form-label">Asal Sekolah</label>
                        <input type="text"  class="form-control {{$errors->has('asal_sekolah') ? 'is-invalid' : ''}}" id="asal_sekolah" name="asal_sekolah" required>
                            @if ($errors->has('asal_sekolah'))
                                <p class="text-danger">{{$errors->first('asal_sekolah')}}</p>
                            @endif
                        </div>
                        <div class="col-12 mt-4">
                          <label for="npsn_asal_sekolah" class="form-label">NPSN Sekolah Asal</label>
                          <input type="number" class="form-control {{$errors->has('npsn_asal_sekolah') ? 'is-invalid' : ''}}" id="npsn_asal_sekolah" name="npsn_asal_sekolah" required>
                              @if ($errors->has('npsn_asal_sekolah'))
                                  <p class="text-danger">{{$errors->first('npsn_asal_sekolah')}}</p>
                              @endif
                        </div>
                        <div class="col-12 mt-4">
                          <label for="nik" class="form-label">NIK</label>
                          <input type="number" class="form-control {{$errors->has('nik') ? 'is-invalid' : ''}}" id="nik" name="nik" required maxlength="16" min="16">
                              @if ($errors->has('nik'))
                                      <p class="text-danger">{{$errors->first('nik')}}</p>
                              @endif
                        </div>
                        <div class="col-12 mt-4">
                          <label class="form-label">Kewernegaraan</label> 
                            <select class="form-select" aria-label="Default select example" name="kewernegaraan" id="kewernegaraan"  required>
                              <option  value="WNI">WNI</option>
                              <option value="WNA">WNA</option>
                            </select>  
                            @if ($errors->has('kewernegaraan'))
                                <p class="text-danger">{{$errors->first('kewernegaraan')}}</p>
                            @endif
                        </div>
                    <div class="col-12 mt-4">
                      <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                      <input type="text" class="form-control {{$errors->has('nama_lengkap') ? 'is-invalid' : ''}}" id="nama_lengkap" name="nama_lengkap"  required>
                      @if ($errors->has('nama_lengkap'))
                          <p class="text-danger">{{$errors->first('nama_lengkap')}}</p>
                      @endif
                    </div>
                    <div class="col-12 mt-4">
                      <label for="tempat" class="form-label">Tempat</label>
                      <input type="text" class="form-control {{$errors->has('tempat') ? 'is-invalid' : ''}}" id="tempat" name="tempat" required>
                      @if ($errors->has('tempat'))
                                <p class="text-danger">{{$errors->first('tempat')}}</p>
                      @endif
                    </div>
                    <div class="col-12 mt-4">
                      <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                      <input type="date" class="form-control {{$errors->has('tanggal_lahir') ? 'is-invalid' : ''}}" id="tanggal_lahir" name="tanggal_lahir" required>
                      @if ($errors->has('tanggal_lahir'))
                            <p class="text-danger">{{$errors->first('tanggal_lahir')}}</p>
                      @endif
                    </div>
                    <div class="col-12 mt-4">
                      <label class="form-label">Jenis Kelamin</label> 
                        <select class="form-select" aria-label="Default select example" name="jenis_kelamin" id="jenis_kelamin" required>
                          <option value="Laki-Laki">Laki-Laki</option>
                          <option value="Perempuan">Perempuan</option>
                        </select>  
                         @if ($errors->has('jenis_kelamin'))
                            <p class="text-danger">{{$errors->first('jenis_kelamin')}}</p>
                          @endif
                    </div>
                    <div class="col-12 mt-4">
                      <label for="anak_dari" class="form-label">Anak Ke</label>
                      <input type="number" class="form-control {{$errors->has('anak_dari') ? 'is-invalid' : ''}}" id="anak_dari" name="anak_dari" required>
                       @if ($errors->has('anak_dari'))
                          <p class="text-danger">{{$errors->first('anak_dari')}}</p>
                      @endif
                    </div>
                    <div class="col-12 mt-4">
                      <label for="jumlah_saudara" class="form-label">Jumlah Saudara</label>
                      <input type="number" class="form-control {{$errors->has('jumlah_saudara') ? 'is-invalid' : ''}}" id="jumlah_saudara" name="jumlah_saudara" required>
                      @if ($errors->has('jumlah_saudara'))
                          <p class="text-danger">{{$errors->first('jumlah_saudara')}}</p>
                      @endif
                    </div>
                    <div class="col-12 mt-4">
                      <label for="agama" class="form-label">Agama</label>
                      <select class="form-select" aria-label="Default select example" name="agama" id="agama" required>
                          <option value="Islam">Islam</option>
                          <option value="Kristen">Kristen</option>
                          <option value="Katholik">Katholik</option>
                          <option value="Budha">Budha</option>
                          <option value="Hindu">Hindu</option>
                          <option value="Khong Hucu">Khong Hucu</option>
                      </select> 
                      @if ($errors->has('agama'))
                          <p class="text-danger">{{$errors->first('agama')}}</p>
                      @endif 
                    </div>
                    <div class="col-12 mt-4">
                      <label for="cita_cita" class="form-label">Cita-cita</label>
                      <select class="form-select" aria-label="Default select example" name="cita_cita" id="cita_cita" required>
                          <option value="PNS">PNS</option>
                          <option value="TNI/Polri">TNI/Polri</option>
                          <option value="Guru/Dosen">Guru/Dosen</option>
                          <option value="Dokter">Dokter</option>
                          <option value="Politikus">Politikus</option>
                          <option value="Wiraswasta">Wiraswasta</option>
                          <option value="Seniman/Artis">Seniman/Artis</option>
                          <option value="Ilmuwan">Ilmuwan</option>
                          <option value="Agamawan">Agamawan</option>
                          <option value="Lainnya">Lainnya</option>
                        </select> 
                        @if ($errors->has('cita_cita'))
                            <p class="text-danger">{{$errors->first('cita_cita')}}</p>
                        @endif 
                    </div>
                    <div class="col-12 mt-4">
                      <label for="hobi" class="form-label">hobi</label>
                      <select class="form-select" aria-label="Default select example" name="hobi" id="hobi" required>
                          <option value="Olahraga">Olahraga</option>
                          <option value="Keseniaan">Keseniaan</option>
                          <option value="Membaca">Membaca</option>
                          <option value="Menulis">Menulis</option>
                          <option value="Jalan-jalan">Jalan-jalan</option>
                          <option value="Lainnya">Lainnya</option>
                        </select> 
                         @if ($errors->has('hobi'))
                            <p class="text-danger">{{$errors->first('hobi')}}</p>
                          @endif
                    </div>
                     <div class="col-12 mt-4">
                      <label for="email" class="form-label">Email</label>
                      <input type="email" class="form-control {{$errors->has('email') ? 'is-invalid' : ''}}" id="email" name="email" required>
                       @if ($errors->has('email'))
                            <p class="text-danger">{{$errors->first('email')}}</p>
                        @endif
                    </div>
                     <div class="col-12 mt-4">
                      <label for="handphone" class="form-label">No Handphone</label>
                      <input type="number" class="form-control {{$errors->has('handphone') ? 'is-invalid' : ''}}" id="handphone" name="handphone"  required>
                       @if ($errors->has('handphone'))
                            <p class="text-danger">{{$errors->first('handphone')}}</p>
                        @endif
                    </div>
                    <div class="col-12 mt-4">
                      <label for="biaya_sekolah" class="form-label">Yang Membiayai Sekolah</label>
                      <select class="form-select" aria-label="Default select example" name="biaya_sekolah" id="biaya_sekolah"  required>
                          <option value="Orang Tua">Orang Tua</option>
                          <option value="Wali/Orang Tua Asuh">Wali/Orang Tua Asuh</option>
                          <option value="Tanggungan Sendiri">Tanggungan Sendiri</option>
                          <option value="Lainnya">Lainnya</option>
                        </select>  
                         @if ($errors->has('biaya_sekolah'))
                            <p class="text-danger">{{$errors->first('biaya_sekolah')}}</p>
                          @endif
                    </div>
                    <div class="col-12 mt-4">
                      <label for="paud" class="form-label">Pernah Paud</label>
                      <select class="form-select" aria-label="Default select example" name="paud" id="paud" required>
                          <option value="1">YA</option>
                          <option value="0">Tidak</option>
                      </select> 
                       @if ($errors->has('paud'))
                            <p class="text-danger">{{$errors->first('paud')}}</p>
                        @endif 
                    </div>
                    <div class="col-12 mt-4">
                      <label for="tk" class="form-label">Pernah TK</label>
                      <select class="form-select" aria-label="Default select example" name="tk" id="tk" required>
                          <option value="1">YA</option>
                          <option value="0">Tidak</option>
                      </select>  
                       @if ($errors->has('tk'))
                            <p class="text-danger">{{$errors->first('tk')}}</p>
                        @endif
                    </div>
                    <div class="col-12 mt-4">
                      <label for="hepatitis" class="form-label">Imunisasi Hepatitis B</label>
                      <select class="form-select" aria-label="Default select example" name="hepatitis" id="hepatitis" required>
                          <option value="1">YA</option>
                          <option value="0">Tidak</option>
                      </select> 
                       @if ($errors->has('hepatitis'))
                            <p class="text-danger">{{$errors->first('hepatitis')}}</p>
                      @endif 
                    </div>
                    <div class="col-12 mt-4">
                      <label for="polio" class="form-label">Imunisasi Polio</label>
                      <select class="form-select" aria-label="Default select example" name="polio" id="polio" required>
                          <option value="1">YA</option>
                          <option value="0">Tidak</option>
                        </select>  
                         @if ($errors->has('polio'))
                            <p class="text-danger">{{$errors->first('polio')}}</p>
                          @endif
                    </div>
                    <div class="col-12 mt-4">
                      <label for="bcg" class="form-label">Imunisasi BCG</label>
                      <select class="form-select" aria-label="Default select example" name="bcg" id="bcg" required>
                          <option value="1">YA</option>
                          <option value="0">Tidak</option>
                        </select>  
                        @if ($errors->has('bcg'))
                            <p class="text-danger">{{$errors->first('bcg')}}</p>
                        @endif
                    </div>
                    <div class="col-12 mt-4">
                      <label for="campak" class="form-label">Imunisasi Campak</label>
                      <select class="form-select" aria-label="Default select example" name="campak" id="campak" required>
                          <option value="1">YA</option>
                          <option value="0">Tidak</option>
                      </select>  
                       @if ($errors->has('campak'))
                          <p class="text-danger">{{$errors->first('campak')}}</p>
                        @endif
                    </div>
                    <div class="col-12 mt-4">
                      <label for="dpt" class="form-label">Imunisasi DPT</label>
                      <select class="form-select" aria-label="Default select example" name="dpt" id="dpt" required>
                          <option value="1">YA</option>
                          <option value="0">Tidak</option>
                      </select>  
                       @if ($errors->has('dpt'))
                            <p class="text-danger">{{$errors->first('dpt')}}</p>
                        @endif
                    </div>
                    <div class="col-12 mt-4">
                      <label for="covid" class="form-label">Imunisasi Covid</label>
                      <select class="form-select" aria-label="Default select example" name="covid" id="covid" required>
                          <option value="1">YA</option>
                          <option value="0">Tidak</option>
                        </select>  
                        @if ($errors->has('covid'))
                            <p class="text-danger">{{$errors->first('covid')}}</p>
                        @endif
                    </div>
                    <div class="col-12 mt-4">
                      <label for="no_kip" class="form-label">No KIP</label>
                      <input type="number" class="form-control {{$errors->has('no_kip') ? 'is-invalid' : ''}}" id="no_kip" name="no_kip">
                       @if ($errors->has('no_kip'))
                            <p class="text-danger">{{$errors->first('no_kip')}}</p>
                        @endif
                    </div>
                    <div class="col-12 mt-4">
                      <label for="no_kk" class="form-label">No KK</label>
                      <input type="number" class="form-control {{$errors->has('no_kk') ? 'is-invalid' : ''}}" id="no_kk" name="no_kk" required maxlength="16" min="16">
                      @if ($errors->has('no_kk'))
                            <p class="text-danger">{{$errors->first('no_kk')}}</p>
                      @endif
                    </div>
                    <div class="col-12 mt-4">
                      <label for="kepala_keluarga" class="form-label">Nama Kepala Keluarga</label>
                      <input type="text" class="form-control {{$errors->has('kepala_keluarga') ? 'is-invalid' : ''}}" id="kepala_keluarga" name="kepala_keluarga" required>
                      @if ($errors->has('kepala_keluarga'))
                            <p class="text-danger">{{$errors->first('kepala_keluarga')}}</p>
                      @endif
                    </div>
                    <div class="mt-4">
                            <b class="mt-3">Data Alamat</b>
                    </div>
                     <div class="col-12 mt-2">
                      <label class="form-label">Status Tempat Tinggal</label> 
                        <select class="form-select" aria-label="Default select example" id="stts_tempat_tinggal" name="stts_tempat_tinggal" required>
                          <option value="Tinggal dengan orang tua/wali">Tinggal dengan orang tua/wali</option>
                          <option value="Ikut saudara atau kerabat">Ikut saudara atau kerabat</option>
                          <option value="Asrama atau Madrasah">Asrama atau Madrasah</option>
                          <option value="Kontrak/Kost">Kontrak/Kost</option>
                          <option value="Tinggal di asrama pesantren">Tinggal di asrama pesantren</option>
                          <option value="Panti Asuhan">Panti Asuhan</option>
                          <option value="Rumah Singgah">Rumah Singgah</option>
                          <option value="Lainnya">Lainnya</option>
                        </select>  
                        @if ($errors->has('stts_tempat_tinggal'))
                                <p class="text-danger">{{$errors->first('stts_tempat_tinggal')}}</p>
                        @endif
                    </div>
                    <div class="col-12 mt-4">
                      <label for="alamat" class="form-label">Alamat</label>
                      <input type="text" class="form-control {{$errors->has('alamat') ? 'is-invalid' : ''}}" id="alamat" name="alamat" required>
                      @if ($errors->has('alamat'))
                            <p class="text-danger">{{$errors->first('alamat')}}</p>
                      @endif
                    </div>
                    <div class="col-6 mt-4">
                      <label for="rt" class="form-label">RT</label>
                      <input type="number" class="form-control {{$errors->has('rt') ? 'is-invalid' : ''}}" id="rt" name="rt" required>
                      @if ($errors->has('rt'))
                              <p class="text-danger">{{$errors->first('rt')}}</p>
                      @endif
                    </div>
                    <div class="col-6 mt-4">
                      <label for="rw" class="form-label">RW</label>
                      <input type="number" class="form-control {{$errors->has('rw') ? 'is-invalid' : ''}}" id="rw" name="rw" required>
                      @if ($errors->has('rw'))
                              <p class="text-danger">{{$errors->first('rw')}}</p>
                      @endif
                    </div>
                    <div class="col-12 mt-4">
                      <label for="desa" class="form-label">Desa</label>
                      <input type="text" class="form-control {{$errors->has('desa') ? 'is-invalid' : ''}}" id="desa" name="desa" required>
                      @if ($errors->has('desa'))
                          <p class="text-danger">{{$errors->first('desa')}}</p>
                      @endif
                    </div>
                    <div class="col-12 mt-4">
                      <label for="kecamatan" class="form-label">Kecamatan</label>
                      <input type="text" class="form-control {{$errors->has('kecamatan') ? 'is-invalid' : ''}}" id="kecamatan" name="kecamatan" required>
                      @if ($errors->has('kecamatan'))
                                <p class="text-danger">{{$errors->first('kecamatan')}}</p>
                      @endif
                    </div>
                    <div class="col-12 mt-4">
                      <label for="kabupaten" class="form-label">Kabupaten/Kota</label>
                      <input type="text" class="form-control {{$errors->has('kabupaten') ? 'is-invalid' : ''}}" id="kabupaten" name="kabupaten" required>
                      @if ($errors->has('kabupaten'))
                                <p class="text-danger">{{$errors->first('kabupaten')}}</p>
                      @endif
                    </div>
                    <div class="col-12 mt-4">
                      <label for="provinsi" class="form-label">Provinsi</label>
                      <input type="text" class="form-control {{$errors->has('provinsi') ? 'is-invalid' : ''}}" id="provinsi" name="provinsi" required>
                      @if ($errors->has('provinsi'))
                                <p class="text-danger">{{$errors->first('provinsi')}}</p>
                      @endif
                    </div>
                    <div class="col-12 mt-4">
                      <label for="kode_pos" class="form-label">Kode Pos</label>
                      <input type="number" class="form-control {{$errors->has('kode_pos') ? 'is-invalid' : ''}}" id="kode_pos" name="kode_pos" required>
                      @if ($errors->has('kode_pos'))
                                <p class="text-danger">{{$errors->first('kode_pos')}}</p>
                      @endif
                    </div>
                    <div class="col-12 mt-4">
                      <label for="koordinat_alamat" class="form-label">Koordinat Alamat</label>
                      <input id="koordinat" type="text" class="form-control {{$errors->has('koordinat_alamat') ? 'is-invalid' : ''}}" name="koordinat_alamat" required>
                      @if ($errors->has('koordinat_alamat'))
                                <p class="text-danger">{{$errors->first('koordinat_alamat')}}</p>
                      @endif
                    </div>
                    <div class="col-12 mt-4">
                      <label class="form-label">Transportasi</label> 
                        <select class="form-select" aria-label="Default select example" id="transportasi" name="transportasi" required>
                          <option value="Sepeda Motor">Sepeda Motor</option>
                          <option value="Mobil Pribadi">Mobil Pribadi</option>
                          <option value="Antar Jemput Sekolah">Antar Jemput Sekolah</option>
                          <option value="Angkutan Umum">Angkutan Umum</option>
                          <option value="Perahu/Sampan">Perahu/Sampan</option>
                          <option value="Lainnya">Lainnya</option>
                        </select>  
                        @if ($errors->has('transportasi'))
                                <p class="text-danger">{{$errors->first('transportasi')}}</p>
                        @endif
                    </div>
                    <div class="col-12 mt-4">
                      <label class="form-label">Jarak</label> 
                        <select class="form-select" aria-label="Default select example" id="jarak" name="jarak" required>
                          <option value="Kurang dari 5 km">Kurang dari 5 km</option>
                          <option value="Antara 5-10 km">Antara 5-10 km</option>
                          <option value="Antara 11-20 km">Antara 11-20 km</option>
                          <option value="Antara 21-30 km">Antara 21-30 km</option>
                          <option value="lebih dari 30 km">lebih dari 30 km</option>   
                        </select>  
                        @if ($errors->has('jarak'))
                                <p class="text-danger">{{$errors->first('jarak')}}</p>
                        @endif
                    </div>
                    <div class="col-12 mt-4">
                      <label class="form-label">Waktu Tempuh</label> 
                        <select class="form-select" aria-label="Default select example" id="waktu_tempu" name="waktu_tempu" required>
                          <option value="1-10 menit">1-10 menit</option>
                          <option value="10-19 menit">10-19 menit</option>
                          <option value="20-29 menit">20-29 menit</option>
                          <option value="30-39 menit">30-39 menit</option>
                          <option value="1-2 jam">1-2 jam</option>   
                          <option value="> 2 jam"> >2 jam</option>   
                        </select>  
                        @if ($errors->has('waktu_tempu'))
                                <p class="text-danger">{{$errors->first('waktu_tempu')}}</p>
                        @endif
                    </div>
                      <div class="mt-4">
                            <b class="mt-3">Data Orang Tua</b>
                      </div>
                      <div class="col-12 mt-4">
                            <label class="form-label">Status Ayah</label> 
                              <select class="form-select" aria-label="Default select example" id="stts_ayah" name="stts_ayah">
                                <option value="Masih Hidup">Masih Hidup</option>
                                <option value="Meninggal Dunia">Meninggal Dunia</option>
                              </select>  
                              @if ($errors->has('stts_ayah'))
                                    <p class="text-danger">{{$errors->first('stts_ayah')}}</p>
                              @endif
                          </div>
                          <div class="col-12 mt-4">
                            <label for="nik_ayah" class="form-label">NIK Ayah</label>
                            <input type="number" class="form-control {{$errors->has('nik_ayah') ? 'is-invalid' : ''}}" id="nik_ayah" name="nik_ayah">
                            @if ($errors->has('nik_ayah'))
                                  <p class="text-danger">{{$errors->first('nik_ayah')}}</p>
                            @endif
                          </div>
                          <div class="col-12 mt-4">
                            <label for="nama_ayah" class="form-label">Nama Ayah</label>
                            <input type="text" class="form-control {{$errors->has('nama_ayah') ? 'is-invalid' : ''}}" id="nama_ayah" name="nama_ayah">
                            @if ($errors->has('nama_ayah'))
                                    <p class="text-danger">{{$errors->first('nama_ayah')}}</p>
                            @endif
                          </div>
                          <div class="col-12 mt-4">
                            <label for="tempat_lahir_ayah" class="form-label">Tempat Lahir</label>
                            <input type="text" class="form-control {{$errors->has('tempat_lahir_ayah') ? 'is-invalid' : ''}}" id="tempat_lahir_ayah" name="tempat_lahir_ayah">
                            @if ($errors->has('tempat_lahir_ayah'))
                                <p class="text-danger">{{$errors->first('tempat_lahir_ayah')}}</p>
                            @endif
                          </div>
                          <div class="col-12 mt-4">
                            <label for="tgl_lahir_ayah" class="form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control {{$errors->has('tgl_lahir_ayah') ? 'is-invalid' : ''}}" id="tgl_lahir_ayah" name="tgl_lahir_ayah">
                            @if ($errors->has('tgl_lahir_ayah'))
                                      <p class="text-danger">{{$errors->first('tgl_lahir_ayah')}}</p>
                            @endif
                          </div>
                          <div class="col-12 mt-4">
                            <label class="form-label">Pendidikan</label> 
                              <select class="form-select" aria-label="Default select example" id="pendidikan_ayah" name="pendidikan_ayah">
                                <option value="SD/Sederajat">SD/Sederajat</option>
                                <option value="SMP/Sederajat">SMP/Sederajat</option>
                                <option value="SMA/Sederajat">SMA/Sederajat</option>
                                <option value="D1">D1</option>
                                <option value="D2">D2</option>
                                <option value="D3">D3</option>
                                <option value="D4/S1">D4/S1</option>
                                <option value="S2">S2</option>
                                <option value="S3">S3</option>
                                <option value="Tidak Bersekolah">Tidak Bersekolah</option>
                              </select>  
                              @if ($errors->has('pendidikan_ayah'))
                                      <p class="text-danger">{{$errors->first('pendidikan_ayah')}}</p>
                              @endif
                          </div>
                          <div class="col-12 mt-4">
                            <label class="form-label">Pekerjaan</label> 
                              <select class="form-select" aria-label="Default select example" id="pekerjaan_ayah" name="pekerjaan_ayah">
                                <option value="Tidak Bekerja">Tidak Bekerja</option>
                                <option value="Pensiunan">Pensiunan</option>
                                <option value="PNS">PNS</option>
                                <option value="TNI/Polisi">TNI/Polisi</option>
                                <option value="Guru/Dosen">Guru/Dosen</option>
                                <option value="Pegawai Swasta">Pegawai Swasta</option>
                                <option value="Wiraswasta">Wiraswasta</option>
                                <option value="Pengacara/Jaksa/Hakim/Notaris">Pengacara/Jaksa/Hakim/Notaris</option>
                                <option value="Seniman/Pelukis/Artis/Sejeni">Seniman/Pelukis/Artis/Sejenis</option>
                                <option value="Dokter/Bidan/Perawat">Dokter/Bidan/Perawat</option>
                                <option value="Pilot/Pramugara">Pilot/Pramugara</option>
                                <option value="Pedagang">Pedagang</option>
                                <option value="Petani/Peternak">Petani/Peternak</option>
                                <option value="Nelayan">Nelayan</option>
                                <option value="Buruh (Tani/Pabrik/Bangunan)">Buruh (Tani/Pabrik/Bangunan)</option>
                                <option value="Sopir/Masinis/Kondektur">Sopir/Masinis/Kondektur</option>
                                <option value="Politikus">Politikus</option>
                                <option value="Lainnya">Lainnya</option>
                              </select>  
                              @if ($errors->has('pekerjaan_ayah'))
                                      <p class="text-danger">{{$errors->first('pekerjaan_ayah')}}</p>
                              @endif
                          </div>
                          <div class="col-12 mt-4">
                            <label class="form-label">Penghasilan</label> 
                              <select class="form-select" aria-label="Default select example" id="penghasilan_ayah" name="penghasilan_ayah">
                                <option value="Kurang dari 500.000">Kurang dari 500.000</option>
                                <option value="500.000 - 1.000.000">500.000 - 1.000.000</option>
                                <option value="1.000.000 - 2.000.000">1.000.000 - 2.000.000</option>
                                <option value="2.000.000 - 3.000.000">2.000.000 - 3.000.000</option>
                                <option value="3.000.000 - 5.000.000">3.000.000 - 5.000.000</option>
                                <option value="lebih dari 5.000.000">lebih dari 5.000.000</option>
                                <option value="Tidak Ada">Tidak Ada</option>
                              </select>  
                              @if ($errors->has('penghasilan_ayah'))
                                      <p class="text-danger">{{$errors->first('penghasilan_ayah')}}</p>
                              @endif
                          </div>
                          <div class="col-12 mt-4">
                            <label for="no_hp_ayah" class="form-label">No HP Ayah</label>
                            <input type="text" class="form-control {{$errors->has('no_hp_ayah') ? 'is-invalid' : ''}}" id="no_hp_ayah" name="no_hp_ayah">
                            @if ($errors->has('no_hp_ayah'))
                                <p class="text-danger">{{$errors->first('no_hp_ayah')}}</p>
                            @endif
                          </div>
                          <div class="col-12 mt-4">
                            <label class="form-label">Status Ibu</label> 
                              <select class="form-select" aria-label="Default select example" id="stts_ibu" name="stts_ibu">
                                <option value="Masih Hidup">Masih Hidup</option>
                                <option value="Meninggal Dunia">Meninggal Dunia</option>
                              </select>  
                              @if ($errors->has('stts_ibu'))
                                      <p class="text-danger">{{$errors->first('stts_ibu')}}</p>
                              @endif
                          </div>
                          <div class="col-12 mt-4">
                            <label for="nik_ibu" class="form-label">NIK ibu</label>
                            <input type="number" class="form-control {{$errors->has('nik_ibu') ? 'is-invalid' : ''}}" id="nik_ibu" name="nik_ibu">
                            @if ($errors->has('nik_ibu'))
                                  <p class="text-danger">{{$errors->first('nik_ibu')}}</p>
                            @endif
                          </div>
                          <div class="col-12 mt-4">
                            <label for="nama_ibu" class="form-label">Nama Ibu</label>
                            <input type="text" class="form-control {{$errors->has('nama_ibu') ? 'is-invalid' : ''}}" id="nama_ibu" name="nama_ibu">
                            @if ($errors->has('nama_ibu'))
                                    <p class="text-danger">{{$errors->first('nama_ibu')}}</p>
                            @endif
                          </div>
                          <div class="col-12 mt-4">
                            <label for="tempat_lahir_ibu" class="form-label">Tempat Lahir</label>
                            <input type="text" class="form-control {{$errors->has('tempat_lahir_ibu') ? 'is-invalid' : ''}}" id="tempat_lahir_ibu" name="tempat_lahir_ibu">
                            @if ($errors->has('tempat_lahir_ibu'))
                                <p class="text-danger">{{$errors->first('tempat_lahir_ibu')}}</p>
                            @endif
                          </div>
                          <div class="col-12 mt-4">
                            <label for="tgl_lahir_ibu" class="form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control {{$errors->has('tgl_lahir_ibu') ? 'is-invalid' : ''}}" id="tgl_lahir_ibu" name="tgl_lahir_ibu">
                            @if ($errors->has('tgl_lahir_ibu'))
                                      <p class="text-danger">{{$errors->first('tgl_lahir_ibu')}}</p>
                            @endif
                          </div>
                          <div class="col-12 mt-4">
                            <label class="form-label">Pendidikan</label> 
                              <select class="form-select" aria-label="Default select example" id="pendidikan_ibu" name="pendidikan_ibu">
                                <option value="SD/Sederajat">SD/Sederajat</option>
                                <option value="SMP/Sederajat">SMP/Sederajat</option>
                                <option value="SMA/Sederajat">SMA/Sederajat</option>
                                <option value="D1">D1</option>
                                <option value="D2">D2</option>
                                <option value="D3">D3</option>
                                <option value="D4/S1">D4/S1</option>
                                <option value="S2">S2</option>
                                <option value="S3">S3</option>
                                <option value="Tidak Bersekolah">Tidak Bersekolah</option>  
                              </select>  
                              @if ($errors->has('pendidikan_ibu'))
                                      <p class="text-danger">{{$errors->first('pendidikan_ibu')}}</p>
                              @endif
                          </div>
                          <div class="col-12 mt-4">
                            <label class="form-label">Pekerjaan</label> 
                              <select class="form-select" aria-label="Default select example" id="pekerjaan_ibu" name="pekerjaan_ibu">
                                <option value="Tidak Bekerja">Tidak Bekerja</option>
                                <option value="Pensiunan">Pensiunan</option>
                                <option value="PNS">PNS</option>
                                <option value="TNI/Polisi">TNI/Polisi</option>
                                <option value="Guru/Dosen">Guru/Dosen</option>
                                <option value="Pegawai Swasta">Pegawai Swasta</option>
                                <option value="Wiraswasta">Wiraswasta</option>
                                <option value="Pengacara/Jaksa/Hakim/Notaris">Pengacara/Jaksa/Hakim/Notaris</option>
                                <option value="Seniman/Pelukis/Artis/Sejeni">Seniman/Pelukis/Artis/Sejenis</option>
                                <option value="Dokter/Bidan/Perawat">Dokter/Bidan/Perawat</option>
                                <option value="Pilot/Pramugara">Pilot/Pramugara</option>
                                <option value="Pedagang">Pedagang</option>
                                <option value="Petani/Peternak">Petani/Peternak</option>
                                <option value="Nelayan">Nelayan</option>
                                <option value="Buruh (Tani/Pabrik/Bangunan)">Buruh (Tani/Pabrik/Bangunan)</option>
                                <option value="Sopir/Masinis/Kondektur">Sopir/Masinis/Kondektur</option>
                                <option value="Politikus">Politikus</option>
                                <option value="Lainnya">Lainnya</option>   
                              </select>  
                              @if ($errors->has('pekerjaan_ibu'))
                                      <p class="text-danger">{{$errors->first('pekerjaan_ibu')}}</p>
                              @endif
                          </div>
                          <div class="col-12 mt-4">
                            <label class="form-label">Penghasilan</label> 
                              <select class="form-select" aria-label="Default select example" id="penghasilan_ibu" name="penghasilan_ibu">
                                <option value="Kurang dari 500.000">Kurang dari 500.000</option>
                                <option value="500.000 - 1.000.000">500.000 - 1.000.000</option>
                                <option value="1.000.000 - 2.000.000">1.000.000 - 2.000.000</option>
                                <option value="2.000.000 - 3.000.000">2.000.000 - 3.000.000</option>
                                <option value="3.000.000 - 5.000.000">3.000.000 - 5.000.000</option>
                                <option value="lebih dari 5.000.000">lebih dari 5.000.000</option>
                                <option value="Tidak Ada">Tidak Ada</option>
                                
                              </select>  
                              @if ($errors->has('penghasilan_ibu'))
                                      <p class="text-danger">{{$errors->first('penghasilan_ibu')}}</p>
                              @endif
                          </div>
                          <div class="col-12 mt-4">
                            <label for="no_hp_ibu" class="form-label">No HP ibu</label>
                            <input type="text" class="form-control {{$errors->has('no_hp_ibu') ? 'is-invalid' : ''}}" id="no_hp_ibu" name="no_hp_ibu">
                            @if ($errors->has('no_hp_ibu'))
                                <p class="text-danger">{{$errors->first('no_hp_ibu')}}</p>
                            @endif
                          </div>
                          <div class="mt-4">
                            <b class="mt-3">Data Lengkap Wali</b>
                          </div>
                          <div class="col-12 mt-4">
                            <label for="nik_wali" class="form-label">NIK Wali</label>
                            <input type="number" class="form-control {{$errors->has('nik_wali') ? 'is-invalid' : ''}}" id="" name="nik_wali">
                            @if ($errors->has('nik_wali'))
                                  <p class="text-danger">{{$errors->first('nik_wali')}}</p>
                            @endif
                          </div>
                          <div class="col-12 mt-4">
                            <label for="nama_wali" class="form-label">Nama wali</label>
                            <input type="text" class="form-control {{$errors->has('nama_wali') ? 'is-invalid' : ''}}" id="nama_wali" name="nama_wali">
                            @if ($errors->has('nama_wali'))
                                    <p class="text-danger">{{$errors->first('nama_wali')}}</p>
                            @endif
                          </div>
                          <div class="col-12 mt-4">
                            <label for="tgl_lahir_wali" class="form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control {{$errors->has('tgl_lahir_wali') ? 'is-invalid' : ''}}" id="tgl_lahir_wali" name="tgl_lahir_wali">
                            @if ($errors->has('tgl_lahir_wali'))
                                      <p class="text-danger">{{$errors->first('tgl_lahir_wali')}}</p>
                            @endif
                          </div>
                          <div class="col-12 mt-4">
                            <label class="form-label">Pendidikan</label> 
                              <select class="form-select" aria-label="Default select example" id="pendidikan_wali" name="pendidikan_wali">
                                <option value="SD/Sederajat">SD/Sederajat</option>
                                <option value="SMP/Sederajat">SMP/Sederajat</option>
                                <option value="SMA/Sederajat">SMA/Sederajat</option>
                                <option value="D1">D1</option>
                                <option value="D2">D2</option>
                                <option value="D3">D3</option>
                                <option value="D4/S1">D4/S1</option>
                                <option value="S2">S2</option>
                                <option value="S3">S3</option>
                                <option value="Tidak Bersekolah">Tidak Bersekolah</option>
                              </select>  
                              @if ($errors->has('pendidikan_wali'))
                                      <p class="text-danger">{{$errors->first('pendidikan_wali')}}</p>
                              @endif
                          </div>
                          <div class="col-12 mt-4">
                            <label class="form-label">Pekerjaan</label> 
                              <select class="form-select" aria-label="Default select example" id="pekerjaan_wali" name="pekerjaan_wali">
                                <option value="Tidak Bekerja">Tidak Bekerja</option>
                                <option value="Pensiunan">Pensiunan</option>
                                <option value="PNS">PNS</option>
                                <option value="TNI/Polisi">TNI/Polisi</option>
                                <option value="Guru/Dosen">Guru/Dosen</option>
                                <option value="Pegawai Swasta">Pegawai Swasta</option>
                                <option value="Wiraswasta">Wiraswasta</option>
                                <option value="Pengacara/Jaksa/Hakim/Notaris">Pengacara/Jaksa/Hakim/Notaris</option>
                                <option value="Seniman/Pelukis/Artis/Sejeni">Seniman/Pelukis/Artis/Sejenis</option>
                                <option value="Dokter/Bidan/Perawat">Dokter/Bidan/Perawat</option>
                                <option value="Pilot/Pramugara">Pilot/Pramugara</option>
                                <option value="Pedagang">Pedagang</option>
                                <option value="Petani/Peternak">Petani/Peternak</option>
                                <option value="Nelayan">Nelayan</option>
                                <option value="Buruh (Tani/Pabrik/Bangunan)">Buruh (Tani/Pabrik/Bangunan)</option>
                                <option value="Sopir/Masinis/Kondektur">Sopir/Masinis/Kondektur</option>
                                <option value="Politikus">Politikus</option>
                                <option value="Lainnya">Lainnya</option>   
                                
                              </select>  
                              @if ($errors->has('pekerjaan_wali'))
                                      <p class="text-danger">{{$errors->first('pekerjaan_wali')}}</p>
                              @endif
                          </div>
                          <div class="col-12 mt-4">
                            <label class="form-label">Penghasilan</label> 
                              <select class="form-select" aria-label="Default select example" id="penghasilan_wali" name="penghasilan_wali">
                                <option value="Kurang dari 500.000">Kurang dari 500.000</option>
                                <option value="500.000 - 1.000.000">500.000 - 1.000.000</option>
                                <option value="1.000.000 - 2.000.000">1.000.000 - 2.000.000</option>
                                <option value="2.000.000 - 3.000.000">2.000.000 - 3.000.000</option>
                                <option value="3.000.000 - 5.000.000">3.000.000 - 5.000.000</option>
                                <option value="lebih dari 5.000.000">lebih dari 5.000.000</option>
                                <option value="Tidak Ada">Tidak Ada</option>
                                
                              </select>  
                              @if ($errors->has('penghasilan_wali'))
                                      <p class="text-danger">{{$errors->first('penghasilan_wali')}}</p>
                              @endif
                          </div>
                          <div class="col-12 mt-4">
                            <label for="no_hp_wali" class="form-label">No HP Wali</label>
                            <input type="text" class="form-control {{$errors->has('no_hp_wali') ? 'is-invalid' : ''}}" id="no_hp_wali" name="no_hp_wali">
                            @if ($errors->has('no_hp_Wali'))
                                <p class="text-danger">{{$errors->first('no_hp_wali')}}</p>
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