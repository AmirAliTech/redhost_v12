<?php include('header.php') ?>

<section class="breadcrumb-area bg-primary-gradient">

	<div class="container">
		<div class="breadcrumb-content text-center">
			<h2 class="mb-3">Datele Dumneavoastra
			</h2>
			<nav>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="index.php">Home</a></li>
					<li class="breadcrumb-item active">Datele Dumneavoastra
					</li>
				</ol>
			</nav>
		</div>
	</div>
</section>

<section class="hm-contact-area position-relative pt-60 pb-120 overflow-hidden bg-white zindex-1">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8">
				<div class="ct-section-title text-center">
					<h2>DATELE DUMNEAVOASTRA</h2>
				</div>
			</div>
		</div>
		<div class="hm-contact-form mt-5" id="contact">
			<div class="col-12 pb-3 message-box d-none">
				<div class="alert alert-danger"></div>
			</div>
			<form action="" method="POST" id="contactForm" class="contact-us-form">
				<div class="row justify-content-center">
					<div class="col-lg-12">
						<div class="row g-4">
							<div class="col-md-6">

								<div class="input-field">
									<label for="customer-type">Customer type</label>

									<select id="customer-type" class="form-select" style="width: 100%;
	 padding: 22px 20px 18px 20px;
	 font-size: 14px;
	 color: #656565;
	 border: 1px solid #e7e7e7;
	 border-radius: 6px;
	 background-color: #fff;
	 margin-bottom: 10px; box-shadow:none;">
										<option value="" selected="">Va rugam alegeti</option>
										<option value="p">Persoana fizica</option>
										<option value="c">Societate comerciala</option>
										<option value="ap">Persoana fizica autorizata</option>
										<option value="pi">Institutie publica</option>
										<option value="gi">Institutie guvernamentala</option>
										<option value="nc">ONG</option>
										<option value="o">Altele</option>

									</select>

								</div>
							</div>
							<div class="col-md-6">
								<div class="input-field">
									<label for="name">Nume Firma/Institutie</label>
									<input type="text" class="" name="name" id="name"
										placeholder="persoanele fizice nu completeaza acest camp" required="required">
								</div>
							</div>
							<div class="col-md-6">
								<div class="input-field">
									<label for="natural-person">Nume persoana fizica (sau reprezentant)</label>
									<input type="text" class="" name="natural-person" id="natural-person"
										placeholder="Nu omiteti! Specificati in ordinea: Prenume Nume" required="required">
								</div>
							</div>
							<div class="col-md-6">
								<div class="input-field">
									<label for="email">Adresa email</label>
									<input type="email" class="" name="email" id="email"
										placeholder="pe aceasta adresa veti primi o copie a proformei si datele de logare"
										required="required">
								</div>
							</div>
							<div class="col-md-6">
								<div class="input-field">
									<label for="phone">Telefon</label>
									<input type="phone" class="" name="phone" id="phone" placeholder="intra in telefon"
										required="required">
								</div>
							</div>
							<div class="col-md-6">
								<div class="input-field">
									<label for="mob">Mobil</label>
									<input type="phone" class="" name="mob" id="mob" placeholder="intra in mobil"
										required="required">
								</div>
							</div>
							<div class="col-md-6">
								<div class="input-field">
									<label for="address">Adresa</label>
									<input type="text" class="" name="address" id="address"
										placeholder="Strada, numar (obligatoriu scara si ap. daca exista)" required="required">
								</div>
							</div>
							<div class="col-md-6">
								<div class="input-field">
									<label for="post">Cod postal</label>
									<input type="text" class="" name="post" id="post"
										placeholder="Noul cod postal (poate fi gasit la www.coduripostale.ro)"
										required="required">
								</div>
							</div>
							<div class="col-md-6">
								<div class="input-field">
									<label for="location">Localitate</label>
									<input type="text" class="" name="location" id="location" placeholder="intra in Localitate"
										required="required">
								</div>
							</div>
							<div class="col-md-6">
								<div class="input-field">
									<label for="judet">Judet</label>
									<input type="text" class="" name="judet" id="judet" placeholder="judet">
								</div>
							</div>

							<div class="col-md-6">
								<div class="input-field">
									<label for="fiscal">Cod fiscal / CNP</label>
									<input type="text" class="" name="fiscal" id="fiscal"
										placeholder="Persoanele fizice completeaza CNP-ul din buletin doar in cazul comenzilor care implica inregistrarea de domenii .ro (registrul roman de domenii, solicita CNP-ul pentru inregistrarea domeniilor .ro inregistrate de persoane fizice)."
										required="required">
								</div>
							</div>
							<div class="col-md-6">
								<div class="input-field">
									<label for="inreg">Nr. Inreg. la Registrul Comertului</label>
									<input type="text" class="" name="inreg" id="inreg"
										placeholder="persoanele fizice nu completeaza acest camp" required="required">
								</div>
							</div>

						</div>
					</div>
				</div>

				<div class="row mt-4">
					<div class="col-md-12">
						<div class="ct-section-title text-start">
							<h5>Va rugam frumos sa ne spuneti cum ati aflat despre RedHost</h5>
						</div>
					</div>
					<div class="col-md-6 mt-4">

						<div class="input-field">
							<label for="customer-type">alegeti ceea ce se potriveste mai bine</label>

							<select id="customer-type" class="form-select" style="width: 100%;
	 padding: 22px 20px 18px 20px;
	 font-size: 14px;
	 color: #656565;
	 border: 1px solid #e7e7e7;
	 border-radius: 6px;
	 background-color: #fff;
	 margin-bottom: 10px; box-shadow:none;">
								<option value="ask">Va rugam alegeti</option>
								<option value="google">Google</option>
								<option value="alt_motor">Alt motor de cautare</option>
								<option value="friend">Printr-o cunostinta</option>
								<option value="bydesigner">Prin intermediul unui designer web</option>
								<option value="designer">Sunt un web designer</option>
								<option value="client">Sunt deja sau am fost client RedHost</option>

							</select>



						</div>
					</div>


				</div>

				<div class="row mt-4">
					<div class="col-md-12">
						<div class="ct-section-title text-start">
							<h5>DATE INFORMATIVE DESPRE COMANDA</h5>
						</div>
					</div>
					<div class="col-sm-4 col-lg-2 mt-3">
						<p class="text-dark fw-bold ">DOMENIUL ALES</p>
					</div>
					<div class="col-sm-8 col-lg-8 mt-3">
						<p>
							Ati ales domeniul www.abc.ro. Daca trebuie sa modificati adresa NU apasati butonul Back al
							broserului. Modificare domeniu.</p>
					</div>

				</div>
				<div class="row">
					<div class="col-sm-4 col-lg-2">
						<p class="text-dark fw-bold ">PACHETUL ALES</p>
					</div>
					<div class="col-sm-8 col-lg-8">
						<p class="text-dark fw-bold ">Basic.</p>
					</div>
				</div>

				<div class="row mt-4">
					<div class="col-md-12">
						<div class="ct-section-title text-start">
							<h5>CONDITII PENTRU EFECTUAREA COMENZII
							</h5>
						</div>
					</div>
					<div class="col-12 mt-3">
						<p class="">Prin apasarea butonului 'Trimitere comanda' declarati ca ati citit
							<strong>politica de prelucrare date cu caracter personal</strong> Euroweb Srl publicata la adresa
							<br /> <span><a href="">www.redhost.ro/confidentialitate.php</a></span>.
						</p>
						<p class="">Prin apasarea butonului 'Trimitere comanda' declarati ca ati citit si sunteti de acord cu
							<strong>termenii de utilizare</strong> RedHost.ro publicati la adresa
							<br /> <span><a href="">www.redhost.ro/conditii.php.</a></span>.
						</p>
						<p class="">Prin continuarea comenzii si efectuarea platii unei comenzi <strong>care include si
								inregistrarea unui domeniu .ro,</strong>declarati ca ati citit si ca sunteti de acord cu
							<strong>Regulile de Inregistrare si cu Contractul de Inregistrare</strong> pentru domenii .ro,
							documente prezente pe site-ul ROTLD (www.rotld.ro).
						</p>

					</div>

					<div class="col-12">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
							<label class="form-check-label" for="flexCheckDefault">
								Va rugam sa bifati daca sunteti de acord sa va transmitem din cand in cand comunicari comerciale
								cum ar fi <strong>ocazii speciale si promotii.</strong>
								Nu aveti obligatia de a bifa acest camp si puteti retrage oricand acest acord.
							</label>
						</div>
					</div>


				</div>


		</div>

		<div class="submit-btn mt-4">
			<button type="submit" class="template-btn primary-btn border-0 rounded-pill">Trimitere comanda<i
					class="fa-solid fa-chevron-right ms-2"></i></button>
		</div>
		</form>
	</div>
	</div>
</section>


<?php include('footer.php') ?>