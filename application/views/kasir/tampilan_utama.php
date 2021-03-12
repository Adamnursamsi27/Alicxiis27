<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

<div class="container">
  <h2>Aplikasi Kasir</h2>
  <form action="<?php echo base_url('kasir/aksi_perhitungan'); ?>" method="post">
    <div class="form-group">
      <label for="email">jumlah permen:</label>
      <input type="number" class="form-control" placeholder="Enter jumlah permen" name="jumlah">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
  <div class="alert alert-danger">
  <?php echo $hasil; ?>
  </div>
</div>

</body>
</html>
