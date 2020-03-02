<div class="page-header">
  <h2>Daftar Quotes</h2>
</div>
<div class="row">
  <div class="col-md-8">
    <p>Saat ini ada <?=$totalQuotes?> quotes dalam database</p>
    <div class="card">
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-nowrap">
            <thead>
              <tr>
                <th>#</th>
                <th>Judul</th>
                <th>Penutur</th>
                <th>Kontributor</th>
              </tr>
            </thead>
            <tbody>
            <?php
            $i = 1;
            foreach ($quotes as $quote): ?>
              <tr>
                <td><?=$i?></td>
                <td><?=$quote['judul']?></td>
                <td><?=$quote['penutur']?></td>
                <td><?=$quote['kontributor']?></td>
              </tr>
            <?php
            $i++;
            endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
