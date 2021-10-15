<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-6">
                <h3>Setting Profile Pemda</h3>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="card mb-4">
        <div class="card-header py-4">
            Update Profil Pemda
        </div>
        <div class="card-body">
            <form action="{{ route('setting-pemda.store', $pemda) }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group row">
                    <label for="kode_provinsi" class="col-md-2 col-form-label">Kode Prov.</label>
                    <input id="kode_provinsi" type="text" class="form-control col-md-3 @error('kode_provinsi') is-invalid @enderror" name="kode_provinsi" value="{{ old('kode_provinsi') ?? $pemda->kode_provinsi }}">
                    @error('kode_provinsi')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group row">
                    <label for="nama_provinsi" class="col-md-2 col-form-label">Provinsi</label>
                    <input id="nama_provinsi" type="text" class="form-control col-md-3 @error('nama_provinsi') is-invalid @enderror" name="nama_provinsi" value="{{ old('nama_provinsi') ?? $pemda->nama_provinsi }}">
                    @error('nama_provinsi')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group row">
                    <label for="kode_dati2" class="col-md-2 col-form-label">Kode Kab./Kota</label>
                    <input id="kode_provinsi" type="text" class="form-control col-md-3 @error('kode_dati2') is-invalid @enderror" name="kode_dati2" value="{{ old('kode_dati2') ?? $pemda->kode_dati2 }}">
                    @error('kode_dati2')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group row">
                    <label for="nama_dati2" class="col-md-2 col-form-label">Nama Kab/Kota</label>
                    <input id="nama_dati2" type="text" class="form-control col-md-3 @error('nama_dati2') is-invalid @enderror" name="nama_dati2" value="{{ old('nama_dati2') ?? $pemda->nama_dati2 }}">
                    @error('nama_dati2')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group row">
                    <label for="nama_ibu_kota" class="col-md-2 col-form-label">Ibu Kota Kab.</label>
                    <input id="nama_ibu_kota" type="text" class="form-control col-md-3 @error('nama_ibu_kota') is-invalid @enderror" name="nama_ibu_kota" value="{{ old('nama_ibu_kota') ?? $pemda->nama_ibu_kota }}">
                    @error('nama_ibu_kota')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group row">
                    <label for="nama" class="col-md-2 col-form-label">Nama Instansi</label>
                    <input id="nama" type="text" class="form-control col-md-3 @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') ?? $pemda->nama }}">
                    @error('nama')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group row">
                    <label for="nama_singkat" class="col-md-2 col-form-label">Nama Singkat</label>
                    <input id="nama_singkat" type="text" class="form-control col-md-3 @error('nama_singkat') is-invalid @enderror" name="nama_singkat" value="{{ old('nama_singkat') ?? $pemda->nama_singkat }}">
                    @error('nama_singkat')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group row">
                    <label for="alamat" class="col-md-2 col-form-label">Alamat</label>
                    <input id="alamat" type="text" class="form-control col-md-3 @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') ?? $pemda->alamat }}">
                    @error('alamat')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group row">
                    <label for="no_telp" class="col-md-2 col-form-label">No. Telp.</label>
                    <input id="no_telp" type="text" class="form-control col-md-3 @error('no_telp') is-invalid @enderror" name="no_telp" value="{{ old('no_telp') ?? $pemda->no_telp }}">
                    @error('no_telp')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group row">
                    <label for="fax" class="col-md-2 col-form-label">Fax.</label>
                    <input id="fax" type="text" class="form-control col-md-3 @error('fax') is-invalid @enderror" name="fax" value="{{ old('fax') ?? $pemda->fax }}">
                    @error('fax')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group row">
                    <label for="email" class="col-md-2 col-form-label">Email</label>
                    <input id="email" type="text" class="form-control col-md-3 @error('email') is-invalid @enderror" name="email" value="{{ old('email') ?? $pemda->email }}">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group row">
                    <label for="website" class="col-md-2 col-form-label">Website</label>
                    <input id="website" type="text" class="form-control col-md-3 @error('website') is-invalid @enderror" name="website" value="{{ old('website') ?? $pemda->website }}">
                    @error('website')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group row">
                    <label for="kode_pos" class="col-md-2 col-form-label">Kode Pos</label>
                    <input id="kode_pos" type="text" class="form-control col-md-3 @error('kode_pos') is-invalid @enderror" name="kode_pos" value="{{ old('kode_pos') ?? $pemda->kode_pos }}">
                    @error('kode_pos')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary" style="background-color: #143ebd;">Update</button>
            </form>
        </div>
    </div>
</div>
