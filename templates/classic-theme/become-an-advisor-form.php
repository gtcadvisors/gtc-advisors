<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1"/>
		<title>Become an Advisor</title>
		<!--  stylesheets-->
		<link href="<?php _esc(TEMPLATE_URL);?>/assets/css/become_form.css" rel="stylesheet">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag/dist/css/multi-select-tag.css">
		<!--	bootstrap icons			-->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
	</head>
	<body>
		<form method="post" action="./process.php" enctype="multipart/form-data" id="advisor-form">

			<div class="container-fluid border-bottom border-top p-3">
				<div class="row align-items-center ms-lg-2">
						<div class="col-10 col-md-12 col-lg-10">
								<div class="row gy-2">
									<div class="col-sm-12 col-md-auto">
											<div class="row align-items-center header-circle-cont">
												<div class="col-auto"><i class="bi bi-1-circle-fill circle-active"></i></div>
												<div class="col-auto"><span class="text-primary header-text">Personal Information</span></div>
												<div class="col-auto"><i class="bi bi-chevron-right d-none d-md-block "></i></div>
											</div>
									</div>
										
									<div class="col-sm-12 col-md-auto">
											<div class="row align-items-center header-circle-cont">
												<div class="col-auto"><i class="bi bi-2-circle circle"></i></div>
												<div class="col-auto"><span class="header-text">Professional Information</span></div>
												<div class="col-auto"><i class="bi bi-chevron-right d-none d-md-block "></i></div>
											</div>
									</div>
										
									<div class="col-sm-12 col-md-auto">
											<div class="row align-items-center header-circle-cont">
												<div class="col-auto"><i class="bi bi-3-circle circle"></i></div>
												<div class="col-auto"><span class="header-text">Certifications</span></div>
												<div class="col-auto"><i class="bi bi-chevron-right d-none d-md-block "></i></div>
											</div>
									</div>
										
									<div class="col-sm-12 col-md-auto">
											<div class="row align-items-center header-circle-cont">
												<div class="col-auto"><i class="bi bi-4-circle circle"></i></div>
												<div class="col-auto"><span class="header-text">Licenses</span></div>
												<div class="col-auto"><i class="bi bi-chevron-right d-none d-md-block "></i></div>
											</div>
									</div>
									
									<div class="col-sm-12 col-md-auto">
											<div class="row align-items-center header-circle-cont">
												<div class="col-auto"><i class="bi bi-5-circle circle"></i></div>
												<div class="col-auto"><span class="header-text">Resume</span></div>
											</div>
									</div>
								</div>
						</div>
						<div class="col-1 ms-auto text-end me-2 exit-btn mt-auto mt-lg-1">
							<a href="./become_advisor.php" class="">Exit</a>
						</div>
				</div>
			</div>
					

					

				<!--#########################  PERSONAL INFORMATION  #############################-->

			<div id="0" class="form-section active">
	
				<div class="container-fluid ms-md-4 p-4 pt-lg-5 pb-lg-5">
					<div class="row section-2">
						<div class="col-lg-6 col-sm-8">
							<h3 class="text-primary mb-3">Personal Information</h3>
							<span class="text-primary subheader-text lh-lg">Tell us a bit about yourself. This Information will appear on your </span>
							<span class="text-primary subheader-text lh-lg">public profile, so that potential customers can get to know you better</span>
						</div>
						<div class="col-4 align-self-end text-end ms-auto me-4"><span class="light-text">* Mandatory fields</span></div>
					</div>
				</div>
					
				<div class="container-fluid border-top p-4 pt-2 p-md-4">
					<div class="row ms-md-5 mt-4">
						<span class="text-dark fw-bold text mb-2">Profile Picture <span class="text text-danger">*</span></span>
						<span class="mb-4">Add a profile picture of yourself so customers will know exactly who you are</span>
						<div class="img-circle mb-4" id="profile-picture"><i class="bi bi-camera"></i></div>
						<div class="row" id="upload-pic-cntr">
							<div class="col-auto"><input class="btn btn-md btn-primary ps-3 pt-2 pb-2 pe-3" id="upload-pic-btn" type="button" value="Upload a picture"></div>
						</div>
						<div class="row 	hidden" id="upload-delete-cntr">
							<div class="col-auto"><input type="button" class="btn btn-md btn-primary ps-3 pt-2 pb-2 pe-3 rounded-3" id="upload-new-pic-btn" value="Upload new picture"></div>
							<div class="col-auto"><input type="button" class="btn btn-light btn-md ps-3 pt-2 pb-2 pe-3 rounded-3 grey-btn" id="delete-pic-btn" value="Delete"></div>
						</div>
							<span class="file-error hidden ms-1 mt-1"></span>
								
						<input type="file" id="profile-image-upload" name="profileImage" class="hidden" accept="image/*">
							
						<div class="row mt-3">
							<div class="col-lg-4 col-md-6 col-xs-12">
								<label class="text-dark fw-bold fs-6 text mt-2" for="fullname">Name <span class="text text-danger">*</span></label>
								<input class="form-input mt-3 text-required" id="fullname" name="fullName" type="text" placeholder="Full Name">
								<label class="mt-2">We’re big on real names around here, so people know who’s who.</label>
							</div>
						</div>
							
						<div class="row">
							<div class="col-lg-4 col-md-6 col-xs-12">
								<label class="text-dark fw-bold text mt-4" for="username">Username</label>
								<input class="form-input mt-3" id="username" name="userName" type="text" placeholder="Username">
								<label class="mt-2">Your Global Tax Complaince URL: https://gtc.co/faridahux</label>
							</div>
						</div>
						
						<div class="row">
							<div class="col-lg-4 col-md-6 col-xs-12">
								<label class="text-dark fw-bold text mt-4" for="email">Email <span class="text text-danger">*</span></label>
								<input class="form-input mt-3 text-required" id="email" name="email" type="email" placeholder="Email">
							</div>
						</div>
							
						<div class="row">
							<div class="col-lg-4 col-md-6 col-xs-12">
								<label class="text-dark fw-bold text mt-4" for="phone">Phone number <span class="text text-danger">*</span></label>
								<input class="form-input mt-3 text-required" id="phone" name="phone" type="tel" placeholder="Phone number">
							</div>
						</div>
							
						<div class="row mt-4">
							<div class="col-lg-4 col-md-6 col-xs-12">
								<div class="row align-items-center">
									<div class="col-auto"><label class="text-dark fw-bold text mb-3" for="bio">Bio <span class="text text-danger">*</span></label></div>
									<div class="col-auto ms-auto"><label class="text fs-6 mb-3"><span id="bio-word-count">0</span>/500</label></div>
								</div>
								<textarea id="bio" name="bio" class="text-required" placeholder="Bio" maxlength="500"></textarea>
								<label class="mt-2">A catchphrase for why clients should hire you</label>
							</div>
						</div>
							
						<div class="row mt-4">
							<div class="col-lg-4 col-md-6 col-xs-12">
								<div class="row align-items-center">
									<div class="col-auto"><label class="text-dark fw-bold text mb-3" for="description">Description / About you <span class="text text-danger">*</span></label></div>
									<div class="col-auto ms-auto"><label class="text fs-6 mb-3"><span id="desc-word-count">0</span>/1024</label></div>
								</div>
									<textarea id="description" name="description" placeholder="Description" maxlength="1024" class="text-required"></textarea>
									<label class="mt-2">Share a bit about yourself, your work experience, projects you have worked on and your area of expertise</label>
							</div>
						</div>
							
						<label class="text-dark fw-bold fs-6 text mt-4 mb-3" for="languages">Languages<span class="text text-danger">*</span></label>
						<div class="row">
							<div class="col-lg-4 col-md-6 col-xs-12">
								<select id="languages" class="mb-5" multiple name="languages[]">
									<option value="arabic">Arabic</option>
									<option value="english">English</option>
									<option value="bengali">Bengali</option>
									<option value="french">French</option>
									<option value="spanish">Spanish</option>
								</select>
							</div>
						</div>

						<div class="row text-end mt-5 mb-5">
							<div class="col-lg-5 col-sm-8"><input type="button" class="btn btn-lg btn-primary continue-btn" value="Continue" ></div>
						</div>
					</div>
				</div>
			</div>
				




			<!--############################  PROFESSIONAL INFORMATION  ###############################-->

			<div id="1" class="form-section hidden">


				<div class="container-fluid ms-md-4 p-4 pt-lg-5 pb-lg-5">
					<div class="row section-2">
						<div class="col-lg-6 col-sm-8">
							<h3 class="text-primary mb-3">Professional Information</h3>
							<span class="text-primary subheader-text lh-lg">This is your time to shine. Let potential customers know what you do </span>
							<span class="text-primary subheader-text lh-lg">best and how you gained your licences, certifications and experience.</span>
						</div>
						<div class="col-4 align-self-end text-end ms-auto me-4"><span class="light-text">* Mandatory fields</span></div>
					</div>
				</div>

				<div class="container-fluid border-top p-4 pt-2 p-md-4">
					<div class="row ms-md-5">
						<!--		agency or freelancer			-->
						<div class="row">
							<div class="col-sm-12 col-md-12 col-lg-6">
								<label class="text-dark fw-bold text mt-3 mb-3">Contractor <span class="text text-danger">*</span></label>
								<br>
								<label class="mb-1">We want to know if you are an Agency or a Freelancer</label>
								<hr>
								<div class="form-check m-2">
									<input class="form-check-input" type="radio" name="contractor[]" id="flexRadioDefault1" value="freelancer">
									<label class="form-check-label text-dark fw-semibold ms-2" for="flexRadioDefault1">Freelancer</label>
								</div>
								<div class="form-check m-2">
									<input class="form-check-input" type="radio" name="contractor[]" id="flexRadioDefault2" value="agency">
									<label class="form-check-label text-dark fw-semibold ms-2" for="flexRadioDefault2">Agency</label>
								</div>
									<span class="contractor-radio-error ms-2 hidden" style="color: #E02B1D">You must select an option</span>
							</div>
						</div>
						
						<!--		Expertise -->
						<div class="row expertise-section">
							<div class="col-sm-12 col-md-12 col-lg-6">
								<label class="text-dark fw-bold text mt-4">Expertise <span class="text text-danger">*</span></label>
								<div class="row mt-2">
									<div class="col-auto"><label class="mb-1">Choose your area of expertise</label></div>
									<div class="col-auto ms-auto text-primary"><label class="mb-1">Select all that apply</label></div>
								</div>
								
								<div class="row border-top border-bottom mt-2 pb-3 mb-3 gy-3 expertise-list">
									<div class="col-sm-12 col-md-4">
										<input type="checkbox" class="form-check-input expertise" id="c1" name="expertise[]" value="Tax Audit">
										<label for="c1" class="form-check-label text-dark fw-semibold ms-2">Tax Audit</label>
									</div>
									<div class="col-sm-12 col-md-4">
										<input type="checkbox" class="form-check-input expertise" id="c2" name="expertise[]" value="Tax Compliance">
										<label for="c2" class="form-check-label text-dark fw-semibold ms-2">Tax Compliance</label>
									</div>
									<div class="col-sm-12 col-md-4">
										<input type="checkbox" class="form-check-input expertise" id="c3" name="expertise[]" value="Tax Dispute">
										<label for="c3" class="form-check-label text-dark fw-semibold ms-2">Tax Dispute</label>
									</div>
									<div class="col-sm-12 col-md-4">
										<input type="checkbox" class="form-check-input expertise" id="c4" name="expertise[]" value="Corporate Income Tax">
										<label for="c4" class="form-check-label text-dark fw-semibold ms-2">Corporate Income Tax</label>
									</div>
									<div class="col-sm-12 col-md-4">
										<input type="checkbox" class="form-check-input expertise" id="c5" name="expertise[]" value="Personal Income Tax">
										<label for="c5" class="form-check-label text-dark fw-semibold ms-2">Personal Income Tax</label>
									</div>
									<div class="col-sm-12 col-md-4">
										<input type="checkbox" class="form-check-input expertise" id="c6" name="expertise[]" value="Tax Pricing">
										<label for="c6" class="form-check-label text-dark fw-semibold ms-2">Tax Pricing</label>
									</div>
									<div class="col-sm-12 col-md-4">
										<input type="checkbox" class="form-check-input expertise" id="c7" name="expertise[]" value="Value Added Tax">
										<label for="c7" class="form-check-label text-dark fw-semibold ms-2">Value Added Tax</label>
									</div>
									<div class="col-sm-12 col-md-4">
										<input type="checkbox" class="form-check-input expertise" id="c8" name="expertise[]" value="Tax Planning">
										<label for="c8" class="form-check-label text-dark fw-semibold ms-2">Tax Planning</label>
									</div>
									<div class="col-sm-12 col-md-4">
										<input type="checkbox" class="form-check-input expertise" id="c9" name="expertise[]" value="Tax Law Research">
										<label for="c9" class="form-check-label text-dark fw-semibold ms-2">Tax Law Research</label>
									</div>
									<div class="col-sm-12 col-md-4">
										<input type="checkbox" class="form-check-input expertise" id="c10" name="expertise[]" value="Tax Advice">
										<label for="c10" class="form-check-label text-dark fw-semibold ms-2">Tax Advice</label>
									</div>
									
										<span class="checkbox-error hidden" style="color: #E02B1D">You must check at least one expertise</span>
								</div>
								<span class="text-primary" id="add-new-expertise"><i class="bi bi-plus text-primary"></i>Add New</span>
								<div class="row hidden align-items-center new-expertise gy-2">
									<div class="col-9 col-md-5 new-expertise-input"><input class="form-input-2" placeholder="Add Expertise"></div>
									<div class="col-1 col-md-1"><i class="bi bi-plus-circle-fill text-primary display-6" id="add-expertise" role="button"></i></div>
								</div>
							</div>
						</div>

						<div class="row mt-5 mb-5">
							<div class="col-12 col-lg-6">
								<div class="row">
									<div class="col-auto"><input type="button" class="btn btn-lg ps-3 pt-2 pb-2 pe-3 rounded-3 button-3 previous-btn" value="Previous" ></div>
									<div class="col-auto ms-auto"><input type="button" class="btn btn-lg ps-3 pt-2 pb-2 pe-3 rounded-3 btn-primary continue-btn" value="Continue" ></div>
								</div>
							</div>
						</div>

					</div>
				</div>					
			</div>
	


			<!--################################ CERTIFICATIONS #########################-->

			<div id="2" class="form-section hidden">

				<div class="row justify-content-center mt-5">
					<div class="col-10 col-md-9">
							<div class="row">
								<div class="col-auto ms-auto"><input type="button" class="btn btn-primary	ps-3 pt-2 pb-2 pe-3 rounded-3 add-file" value="Add Certificate" data-bs-toggle="modal" data-bs-target="#cert-modal"></div>
							</div>
					</div>
				</div>
				
				<!--Cert modal -->
				<div class="modal" id="cert-modal" tabindex="-1" aria-labelledby="cert-modalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-body">
								<div class="container-fluid" id="certifications-section">
									<label class="text-dark fw-bold fs-6 text mb-3">Certifications <span class="text text-danger">*</span></label>
									<br>
									<label class="mb-1">Include any certificates or awards that are relevant to the services you are offering.</label>
									<div class="row mt-4">
										<input type="file" class="certificate"  accept="image/*,.pdf*" capture="user">
										<span class="file-error hidden"></span>
									</div>
									<div class="row">
										<div class="col-9 col-md-6 mt-3 "><input class="form-input-2" id="certificate-name" placeholder="Certificate Name"></div>
										<div class="col-9 col-md-6 mt-3 "><input class="form-input-2" id="certificate-from" placeholder="Certificate From (e.g ICAN)"></div>
									</div>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="close-cert-modal">Close</button>
								<button type="button" class="btn btn-primary"  id="add-certificate-btn">Add</button>
							</div>
						</div>
					</div>
				</div>

				<div class="row justify-content-center mt-2">
					<div class="container-1 col-10 col-md-9 overflow-y-auto">
						<table class="table cert-table hidden">
							<thead>
								<tr>
									<th scope="col">#</th>
									<th scope="col">Certificate Name</th>
									<th scope="col">Certificate From</th>
									<th scope="col"></th>
								</tr>
							</thead>
							<tbody></tbody>
						</table>

						<div class="text-center mt-5 no-cert-placeholder">
								<img src="<?php _esc(TEMPLATE_URL);?>/assets/imgs/inbox.png" alt="">
								<h2>Your certificates would appear here</h2>
						</div>
					</div>
				</div>
				<div class="row justify-content-center mt-5">
					<div class="col-10 col-md-9">
						<div class="row">
							<div class="col-auto">
								<input type="button" class="btn btn-lg ps-3 pt-2 pb-2 pe-3 rounded-3 button-3 previous-btn" value="Previous">
							</div>
							<div class="col-auto ms-auto">
								<input type="button" class="btn btn-lg ps-3 pt-2 pb-2 pe-3 rounded-3 btn-primary continue-btn" value="Continue">
							</div>
						</div>
					</div>
				</div>

			</div>




			<!--############################  LICENCES ############################-->

			<div id="3" class="form-section hidden">
				<div class="row justify-content-center mt-5">
					<div class="col-10 col-md-9">
						<div class="row">
							<div class="col-auto ms-auto"><input type="button" class="btn btn-primary	 ps-3 pt-2 pb-2 pe-3 rounded-3 add-file" value="Add License" data-bs-toggle="modal" data-bs-target="#license-modal"></div>
						</div>
					</div>
				</div>
			
				<!--License Modal -->
				<div class="modal" id="license-modal" tabindex="-1" aria-labelledby="license-modalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-body">
								<div class="container-fluid" id="license-section">
										<label class="text-dark fw-bold fs-6 text mb-3">License <span class="text text-danger">*</span></label>
										<br>
										<label class="mb-1">Include any license that are relevant to the services you are offering.</label>
										<div class="row mt-4">
											<input type="file" class="license"  accept="image/*,.pdf*" capture="user">
											<span class="file-error hidden"></span>
										</div>
										<div class="row">
											<div class="col-9 col-md-6 mt-3 "><input class="form-input-2" id="license-name" placeholder="License Name"></div>
											<div class="col-9 col-md-6 mt-3 "><input class="form-input-2" id="license-from" placeholder="License From (e.g ICAN)"></div>
											<div class="col-12 col-md-12 mt-3 "><input class="form-input-2" id="license-number" placeholder="National organization membership number"></div>
										</div>
									</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="close-license-modal">Close</button>
								<button type="button" class="btn btn-primary"  id="add-license-btn">Add</button>
							</div>
						</div>
					</div>
				</div>

				<div class="row justify-content-center mt-2">
					<div class="container-1 col-10 col-md-9 overflow-y-auto">
						<table class="table license-table hidden">
							<thead>
								<tr>
									<th scope="col">#</th>
									<th scope="col">License Name</th>
									<th scope="col">License From</th>
									<th scope="col">License Number</th>
									<th scope="col"></th>
								</tr>
							</thead>
							<tbody></tbody>
						</table>
							<div class="text-center mt-5 no-license-placeholder">
								<img src="<?php _esc(TEMPLATE_URL);?>/assets/imgs/inbox.png" alt="">
								<h2>Your licenses would appear here</h2>
							</div>
					</div>
				</div>

				<div class="row justify-content-center mt-5 mb-5 mb-lg-2">
					<div class="col-10 col-md-9">
						<div class="row">
							<div class="col-auto">
								<input type="button" class="btn btn-lg ps-3 pt-2 pb-2 pe-3 rounded-3 button-3 previous-btn" value="Previous">
							</div>
							<div class="col-auto ms-auto">
								<input type="button" class="btn btn-lg ps-3 pt-2 pb-2 pe-3 rounded-3 btn-primary continue-btn" value="Continue">
							</div>
						</div>
					</div>
				</div>

			</div>



			<!--###########################  RESUME  ###########################-->
			<div id="4" class="form-section hidden">

				<div class="container-fluid resume-section mt-5 ms-2">

					<div class="row ms-md-5">
						<div class="col-12 col-md-10 col-lg-8">
							<div class="row">
								<label class="text-dark fw-bold text mb-3">CV / Resume <span class="text text-danger">*</span></label>
								<br>
								<div class="col-auto">
									<input class="btn btn-primary ps-3 pt-2 pb-2 pe-3 rounded-3" type="button" id="add-resume-btn" value="Upload your CV / Resume">
								</div>
								<div class="hidden resume-upload-container">
									<input type="file" id="resume-upload" class="mt-3" accept=".docx*,.pdf*,.jpeg*,.jpg*" name="resume" capture="user">
										<span class="file-error hidden"></span>
									<p class="mt-1">JPG, PDF or DOCX. Max size of 2MB</p>
								</div>
							</div>
									
							<div class="row mt-4">	

								<div class="row">
										<div class="col-12">
												<input type="checkbox" class="form-check-input" id="c12" name="policy" value="Terms of Use">
												<label for="c12" class="form-check-label text-dark fw-semibold ms-2">I have read and agree to the Privacy Policy and Terms <br class="d-block d-md-none"> of Use</label>
										</div>
								</div>

								<div class="row mt-4">
										<div class="col">
												<a href="#	" class="text-primary">Privacy Policy | Terms of Use</a>
										</div>
								</div>
							
								<div class="row mt-4">
									<div class="col-12">
											<input type="checkbox" class="form-check-input" id="c13" name="policy" value="Terms of Use">
											<label for="c13" class="form-check-label text-dark fw-semibold ms-2">I confirm that the information given in this form is true,<br class="d-block d-md-none"> complete and accurate</label>
									</div>
								</div>
							</div>
								<span class="checkbox-error mt-3 hidden" style="color: #E02B1D">You must check all boxes</span>
									
							<div class="row mb-5 ms-2 ms-lg-0 mt-5">
								<div class="col-auto mt-5"><input type="button" class="btn btn-lg ps-3 pt-2 pb-2 pe-3 rounded-3 button-3 previous-btn" value="Previous" ></div>
								<div class="col-auto mt-5 offset-2 offset-md-4"><input type="button" class="btn btn-lg ps-3 pt-2 pb-2 pe-3 rounded-3 btn-primary" id="register-btn" value="Register" ></div>
							</div>
							
						</div>
					</div>
				</div>

			</div>
		
		</form>


		<!-- JQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
		<!--		Multiselect Dropdown		-->
		<script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag/dist/js/multi-select-tag.js"></script>
		<script>
						new MultiSelectTag('languages')  // id
		</script>
		<!--	JS File			-->
		<script src = "<?php _esc(TEMPLATE_URL);?>/assets/js/become_form.js"></script>
		<!-- Bootstrap JS				-->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
	</body>
</html>