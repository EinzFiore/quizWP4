<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Quiz WP4</title>
  </head>
  <body>
  	<center>
		<div class="card text-white bg-info mt-3" style="max-width: 18rem;">
			<div class="card-header">FORM INPUT</div>
			<div class="card-body">
				<form action="<?= base_url('welcome')?>/addData" method="post">
					<div class="form-group">
						<label>Nama :</label>
						<input type="text" class="form-control" name="nama" placeholder="Masukan nama..">
					</div>
					<div class="form-group">
						<label>Alamat :</label>
						<textarea class="form-control" name="alamat" rows="3"></textarea>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="jk" value="Laki-laki">
						<label class="form-check-label">Laki-laki</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="jk" value="Perempuan">
						<label class="form-check-label">Perempuan</label>
					</div>
					<div class="form-group pt-4 pb-3">
						<label>Foto</label>
						<input type="file" name="foto">
					</div>
					<input class="btn btn-success mr-2" value="Simpan" type="submit"></input>
					<input class="btn btn-warning" value="Cancel" type="reset"></input>
				</form>
			</div>
		</div>  
	</center>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>