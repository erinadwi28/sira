                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Ubah Profil Saya</h1>
                    </div>

                    <!-- Content Row line 1-->
                    <div class="row">
                        <div class="col-md-12 mb-4">
                            <!-- Detail Data -->
                            <div class="card shadow mb-4">
                                <div class="card-body">
                                    <!-- <table class="table-responsive">
                                        
                                    </table> -->
                                    <form role="form" id="formUbah">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="label-control" for="nik"><b>NIK</b></label>
                                                    <input type="text" class="form-control form-user-input" name="nik"
                                                        id="nik" value="123456789">
                                                </div>

                                                <div class="form-group">
                                                    <label class="label-control" for="nama"><b>Nama Lengkap</b></label>
                                                    <input type="text" class="form-control form-user-input" name="nama"
                                                        id="nama" value="Erina Dwi Utami">
                                                </div>
                                                <div class="form-group">
                                                    <label class="label-control" for="tempat_lahir"><b>Tempat
                                                            Lahir</b></label>
                                                    <input type="text" class="form-control form-user-input"
                                                        value="Sleman" name="tempat_lahir" id="tempat_lahir">
                                                </div>
                                                <div class="form-group">
                                                    <label class="label-control" for="tanggal_lahir"><b>Tanggal
                                                            Lahir</b></label>
                                                    <input type="date" class="form-control form-user-input"
                                                        value="2000-08-28" name="tanggal_lahir" id="tanggal_lahir">
                                                </div>
                                                <div class="form-group">
                                                    <label class="label-control" for="jenis_kelamin"><b>Jenis
                                                            Kelamin</b></label>
                                                    <select class="form-control form-user-input" name="jenis_kelamin"
                                                        id="jenis_kelamin">
                                                        <option value="Laki-Laki" class="form-user-input">Laki-Laki
                                                        </option>
                                                        <option value="Perempuan" class="form-user-input">Perempuan
                                                        </option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label class="label-control" for="goldar"><b>Golongan
                                                            Darah</b></label>
                                                    <select class="form-control form-user-input" name="goldar"
                                                        id="goldar">
                                                        <option value="AB" class="form-user-input">AB</option>
                                                        <option value="A" class="form-user-input">A</option>
                                                        <option value="B" class="form-user-input">B</option>
                                                        <option value="O" class="form-user-input">O</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label class="label-control" for="agama"><b>Agama</b></label>
                                                    <select class="form-control form-user-input" name="goldar"
                                                        id="goldar">
                                                        <option value="AB" class="form-user-input">Islam</option>
                                                        <option value="A" class="form-user-input">Protestan</option>
                                                        <option value="B" class="form-user-input">Katholik</option>
                                                        <option value="O" class="form-user-input">Hindu</option>
                                                        <option value="O" class="form-user-input">Budha</option>
                                                        <option value="O" class="form-user-input">Khonghucu</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="label-control" for="alamat"><b>Alamat</b></label>
                                                    <input type="text" class="form-control form-user-input"
                                                        value="Mudal" name="alamat" id="alamat">
                                                </div>
                                                <div class="form-group">
                                                    <label class="label-control" for="rt"><b>RT</b></label>
                                                    <input type="text" class="form-control form-user-input" value="005"
                                                        name="rt" id="rt">
                                                </div>
                                                <div class="form-group">
                                                    <label class="label-control"
                                                        for="kelurahan"><b>Kelurahan</b></label>
                                                    <input type="text" class="form-control form-user-input"
                                                        value="Argomulyo" name="kelurahan" id="kelurahan">
                                                </div>
                                                <div class="form-group">
                                                    <label class="label-control"
                                                        for="kecamatan"><b>Kecamatan</b></label>
                                                    <input type="text" class="form-control form-user-input"
                                                        value="Cangkringan" name="kecamatan" id="kecamatan">
                                                </div>
                                                <div class="form-group">
                                                    <label class="label-control" for="status_perkawinan"><b>Status
                                                            Perkawinan</b></label>
                                                    <select class="form-control form-user-input"
                                                        name="status_perkawinan" id="status_perkawinan">
                                                        <option value="Kawin" class="form-user-input">Kawin</option>
                                                        <option value="Belum Kawin" class="form-user-input">Belum Kawin
                                                        </option>
                                                    </select>
                                                </div>
                                                <label class="label-control" for="pekerjaan"><b>Pekerjaan</b></label>
                                                <div class="form-group">
                                                    <input type="text" class="form-control form-user-input"
                                                        value="Pelajar/Mahasiswa" name="pekerjaan" id="pekerjaan">
                                                </div>
                                                <div class="form-group">
                                                    <label class="label-control"
                                                        for="kewarganegaraan"><b>Kewarganegaraan</b></label>
                                                    <select class="form-control form-user-input" name="kewarganegaraan"
                                                        id="kewarganegaraan">
                                                        <option value="WNI" class="form-user-input">WNI</option>
                                                        <option value="WNA" class="form-user-input">WNA</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="label-control" for="no_kk"><b>No KK</b></label>
                                                    <input type="text" class="form-control form-user-input"
                                                        value="340429377111" name="no_kk" id="no_kk">
                                                </div>
                                                <div class="form-group">
                                                    <label class="label-control" for="pendidikan_terakhir"><b>Pendidikan
                                                            Terakhir</b></label>
                                                    <select class="form-control form-user-input" name="pendidikan_terakhir"
                                                        id="pendidikan_terakhir">
                                                        <option value="TAMAT SD / SEDERAJAT" class="form-user-input">TAMAT SD / SEDERAJAT</option>
                                                        <option value="SLTP / SEDERAJAT" class="form-user-input">SLTP / SEDERAJAT</option>
                                                        <option value="TIDAK / BELUM SEKOLAH" class="form-user-input">TIDAK / BELUM SEKOLAH</option>
                                                        <option value="SLTA / SEDERAJAT" class="form-user-input">SLTA / SEDERAJAT</option>
                                                        <option value="BELUM TAMAT SD / SEDERAJAT" class="form-user-input">BELUM TAMAT SD / SEDERAJAT</option>
                                                        <option value="DIPLOMA IV / STRATA I" class="form-user-input">DIPLOMA IV / STRATA I</option>
                                                        <option value="AKADEMI / DIPLOMA III / S.MUDA" class="form-user-input">AKADEMI / DIPLOMA III / S.MUDA</option>
                                                        <option value="DIPLOMA I / II" class="form-user-input">DIPLOMA I / II</option>
                                                        <option value="STRATA II" class="form-user-input">STRATA II</option>
                                                        <option value="STRATA III" class="form-user-input">STRATA III</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label class="label-control" for="status_hub_keluarga"><b>Status Hub
                                                            Keluarga</b></label>
                                                            <select class="form-control form-user-input" name="status_hub_keluarga"
                                                            id="status_hub_keluarga">
                                                            <option value="Kepala Keluarga" class="form-user-input">Kepala Keluarga</option>
                                                            <option value="Suami" class="form-user-input">Suami</option>
                                                            <option value="Isteri" class="form-user-input">Isteri</option>
                                                            <option value="Anak" class="form-user-input">Anak</option>
                                                            <option value="Menantu" class="form-user-input">Menantu</option>
                                                            <option value="Cucu" class="form-user-input">Cucu</option>
                                                            <option value="Orang Tua" class="form-user-input">Orang Tua</option>
                                                            <option value="Mertua" class="form-user-input">Mertua</option>
                                                            <option value="Famili Lain" class="form-user-input">Famili Lain</option>
                                                            <option value="Pembantu" class="form-user-input">Pembantu</option>
                                                        </select>
                                                </div>
                                                <div class="form-group">
                                                    <label class="label-control" for="no_hp"><b>No HandPhone</b></label>
                                                    <input type="text" class="form-control form-user-input"
                                                        value="085713609299" name="no_hp" id="no_hp">
                                                </div>
                                                <div class="form-group">
                                                    <label class="label-control" for="kata_sandi"><b>Kata
                                                            Sandi</b></label>
                                                    <input type="password"
                                                        class="form-control form-user-input form-password"
                                                        value="erinadwi" name="kata_sandi" id="kata_sandi">
                                                    <input type="checkbox" class="form-checkbox" /> lihat
                                                    kata sandi
                                                    <br />
                                                </div>
                                                <div class="form-group">
                                                    <label class="label-control" for="foto_profil"><b>Foto
                                                            Profil</b></label>
                                                    <div class="input-group">
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input"
                                                                id="foto_profil" name="foto_profil">
                                                            <label class="custom-file-label upload-area"
                                                                for="exampleInputFile">Pilih File...</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-sm btn-primary float-right" type="submit"><i
                                            class="far fa-save nav-icon"></i> Simpan</button>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
