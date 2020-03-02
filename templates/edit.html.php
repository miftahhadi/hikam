<div class="page-header">
  <h2><?=$page['title']?></h2>
</div>
<div class="row">
  <div class="col-md-8">
    <div class="alert alert-warning" role="alert">
      Semua kolom wajib diisi
    </div>
    <form action="" method="post">
      <div class="card">
        <div class="card-body">
          <div class="mb-3">
            <label class="form-label">Judul</label>
            <input type="text" class="form-control" name="quote[judul]" placeholder="Tuliskan judul quote" value="">
          </div>
          <div class="mb-3">
            <label class="form-label">Penutur</label>
            <input type="text" class="form-control" name="quote[penutur]" placeholder="Tuliskan judul quote">
          </div>
          <div class="mb-3">
            <label class="form-label">Redaksi Bahasa Arab</label>
            <textarea class="form-control" name="quote[redaksi_ar]" placeholder="اكتب الإقتباس باللغة العربية" dir="rtl"></textarea>
          </div>
          <div class="mb-3">
            <label class="form-label">Redaksi Bahasa Indonesia</label>
            <textarea class="form-control" name="quote[redaksi_id]" placeholder="Tulis redaksi Bahasa Indonesia untuk kutipan di atas"></textarea>
          </div>
          <div class="mb-3">
            <label class="form-label">Sumber</label>
            <input type="text" class="form-control" name="quote[sumber]" placeholder="Tuliskan sumber quote">
          </div>
          <div class="mb-3">
            <label class="form-label">Kategori</label>
            <input type="text" class="form-control" name="" placeholder="Tuliskan sumber quote">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">
          <input type="submit" name="simpan" class="btn btn-primary btn-block" value="Kirim">
        </div>
        <div class="col-md-3">
          <a href="#" class="btn btn-light btn-block">
            Batal
          </a>
        </div>
      </div>
    </form>
  </div>
</div>
