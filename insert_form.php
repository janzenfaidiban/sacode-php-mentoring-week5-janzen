<!DOCTYPE html>
<html>
<head>
	<title>Insert Form</title>

	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>
<body>

	<div class="container p-5">

		<div class="row mb-5">

			<div class="col-12">



		<?php 
	
			// INTEGRASI KONEKSI
			require_once('connection.php');	

			if(isset($_GET['insert']) && $_GET['first_name'] != ''){

				// MEMBUAT VARIABEL DATA
				$first_name = $_GET['first_name'];
				$last_name = $_GET['last_name'];
			
				// FUNGSI SQL INSERT DATA
				$sql = "INSERT INTO tutors(first_name, last_name) VALUES ('$first_name','$last_name')";

				// FUNGSI MENGIRIM DATA KE DATABASE
				$connection->query($sql);

				// REDIRECT SETELAH SUKSES MENAMBAH DATA
				header("Location: insert_success.html");

			} elseif(isset($_GET['first_name']) && $_GET['first_name'] == ''){
				echo "<span class='alert alert-danger'>First Name wajib diisi...</span>";

			} else {
				echo "<span class='alert alert-info'>Silahkan isi data dan klik tombol INSERT</span>";
			}

		?>
				
			</div>
			
		</div>

		<div class="row shadow border rounded">

			<div class="col-lg-6">
				<form>

					<h3>Insert New Tutor</h3>

					<div class="form-group mb-3">
						<input type="text" name="first_name" placeholder="First Name" class="form-control">
					</div>

					<div class="form-group mb-3">
						<input type="text" name="last_name" placeholder="Last Name" class="form-control">
					</div>	

					<div class="form-group mb-3">			
						<input type="submit" name="insert" value="INSERT" class="btn btn-primary">
						<input type="reset" value="RESET" class="btn btn-dark">
					</div>

				</form>
			</div>
			
		</div>
		
	</div>

	

</body>
</html>