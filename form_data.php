<div class="wrapper">
			<h2>Remplir les champs</h2>
			<form action="upload.php" enctype = "multipart / form-data" id = "myform" method="post" class="needs-validation" novalidate>
				<div class="form-row">
					<div class="col-md-12 mb-3">
						<label for="inputEmail"></label>
						<input type="text" id="mail" class="form-control" placeholder="Adresse Email" name="mail" required autofocus>
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-6 mb-3">
						<label for="validationTooltip01"></label>
						<input type="text" class="form-control" id="validationTooltip01" placeholder="Nom" name="name" required>
					</div>
					<div class="col-md-6 mb-3">
						<label for="validationTooltip02"></label>
						<input type="text" class="form-control" id="validationTooltip02" placeholder="Prénom" name="firstName" required>
					</div>
					<div class="col-md-12 mb-3">
						<label for="validationTooltip03"></label>
						<input type="text" class="form-control" id="validationTooltip03" placeholder="Adresse" name="adress" required>
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-6 mb-3">
						<label for="validationTooltip03"></label>
						<input type="text" class="form-control" id="validationTooltip03" placeholder="Code Postal" name="zip" required>
					</div>
					<div class="col-md-6 mb-5">
						<label for="validationTooltip04"></label>
						<input type="text" class="form-control" id="validationTooltip04" placeholder="Ville" name="city" required>
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-6 mb-4">
						<input type="file" class="custom-file-input" id="customFile" name="file">
						<label class="custom-file-label" for="customFile">Choisir le fichier</label>
					</div>
				</div>
				<button class="btn btn-primary col-md-3 mb-2" type="submit">Enregistrer</button>
			</form>
		</div>

<script src="formData.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
