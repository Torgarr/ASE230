<!DOCTYPE html>
<html lang="en">

<head>

	<title>Jakob Banta's Resume</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Jakob Banta's resume">
	<meta name="author" content="Jakob Banta">
	<link rel="shortcut icon" href="favicon.ico">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

	<!-- FontAwesome JS-->
	<script defer src="assets/fontawesome/js/all.min.js"></script>

	<!-- Theme CSS -->
	<link id="theme-style" rel="stylesheet" href="assets/css/pillar-1.css">


</head>

<body>
	<article class="resume-wrapper text-center position-relative">
		<div class="resume-wrapper-inner mx-auto text-start bg-white shadow-lg">
			<header class="resume-header pt-4 pt-md-0">
				<div class="row">
					<div class="col-block col-md-auto resume-picture-holder text-center text-md-start">
						<img class="picture" src="assets/images/profile.jpg" alt="">
					</div><!--//col-->
					<div class="col">
						<div class="row p-4 justify-content-center justify-content-md-between">
							<div class="primary-info col-auto">
								<?php
								echo '<h1 class="name mt-0 mb-1 text-white text-uppercase text-uppercase">Jakob Banta</h1>';
								echo '<div class="title mb-3">Cyber Security Red Team Specalist</div>';
								?>
								<ul class="list-unstyled">
									<?php
									echo '<li class="mb-2"><a class="text-link" href="#"><i class="far fa-envelope fa-fw me-2" data-fa-transform="grow-3"></i>Bantaj3@nku.edu</a></li>';
									echo '<li><a class="text-link" href="#"><i class="fas fa-mobile-alt fa-fw me-2" data-fa-transform="grow-6"></i>(859) 707-1605</a></li>';
									?>
								</ul>
							</div><!--//primary-info-->
							<div class="secondary-info col-auto mt-2">
								<ul class="resume-social list-unstyled">
									<?php
									echo '<li class="mb-3"><a class="text-link" href="#"><span class="fa-container text-center me-2"><i class="fab fa-linkedin-in fa-fw"></i></span>www.linkedin.com/in/jakob-banta-a3085a187</a></li>';
									echo '<li class="mb-3"><a class="text-link" href="#"><span class="fa-container text-center me-2"><i class="fab fa-github-alt fa-fw"></i></span> https://github.com/Torgarr</a></li>';
									?>
								</ul>
							</div><!--//secondary-info-->
						</div><!--//row-->

					</div><!--//col-->
				</div><!--//row-->
			</header>
			<div class="resume-body p-5">
				<section class="resume-section summary-section mb-5">
					<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Summary</h2>
					<div class="resume-section-content">
						<?php
						echo '<p class="mb-0">Highly motivated and enthusiastic IT professional with expertise in cyber security. Skilled in vulnerability assessments, penetration testing, and compliance and regulatory requirements. Strong analytical skills with the ability to quickly analyze and interpret complex information to develop effective solutions. Excellent communication and collaboration skills. Seeking a challenging and dynamic role in the cyber security field to further develop skills and contribute to the success of the organization.</p>';
						?>
					</div>
				</section><!--//summary-section-->
				<div class="row">
					<div class="col-lg-9">
						<section class="resume-section experience-section mb-5">
							<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Work Experience</h2>
							<div class="resume-section-content">
								<div class="resume-timeline position-relative">
									<article class="resume-timeline-item position-relative pb-5">

										<div class="resume-timeline-item-header mb-2">
											<div class="d-flex flex-column flex-md-row">
												<?php
												echo '<h3 class="resume-position-title font-weight-bold mb-1">Desktop Support Specialist</h3>';
												echo '<div class="resume-company-name ms-auto">Northern Kentucky University</div>';
												?>
											</div><!--//row-->
											<?php
											echo '<div class="resume-position-time">2019 - Present</div>';
											?>
										</div><!--//resume-timeline-item-header-->
										<div class="resume-timeline-item-desc">
											<?php
											echo '<p>Technical support of faculty, staff and students over the phone, chat, and in person.</p>';
											echo '<h4 class="resume-timeline-item-desc-heading font-weight-bold">Achievements:</h4>';
											?>
											<ul>
												<?php
												echo '<li>Manage escalated IT Help Desk tickets, demonstrating excellent time management skills.</li>';
												echo '<li>Conduct large-scale projects to ensure smooth university operations, including adjustments to project plans, timelines, and budgets due to unexpected events or changes in priorities.</li>';
												echo '<li>Identify hardware performance trends and common system issues, reporting findings for remediation.</li>';
												echo '<li>Author detailed service call resolution documentation for personnel performance and effective remediation techniques.</li>';
												?>
											</ul>
											<?php
											echo '<h4 class="resume-timeline-item-desc-heading font-weight-bold">Technologies used:</h4>';
											?>
											<ul class="list-inline">
												<?php
												echo '<li class="list-inline-item"><span class="badge bg-secondary badge-pill">Parted Magic</span></li>';
												echo '<li class="list-inline-item"><span class="badge bg-secondary badge-pill">Team Dynamics</span></li>';
												echo '<li class="list-inline-item"><span class="badge bg-secondary badge-pill">Teams</span></li>';
												echo '<li class="list-inline-item"><span class="badge bg-secondary badge-pill">Cisco VPN</span></li>';
												echo '<li class="list-inline-item"><span class="badge bg-secondary badge-pill">Zoom</span></li>';
												echo '<li class="list-inline-item"><span class="badge bg-secondary badge-pill">Evo Server</span></li>';
												?>
											</ul>

										</div><!--//resume-timeline-item-desc-->

									</article><!--//resume-timeline-item-->

									<article class="resume-timeline-item position-relative pb-5">

										<div class="resume-timeline-item-header mb-2">
											<div class="d-flex flex-column flex-md-row">
												<?php
												echo '<h3 class="resume-position-title font-weight-bold mb-1">ISOC Intern</h3>';
												echo '<div class="resume-company-name ms-auto">Kroger</div>';
												?>
											</div><!--//row-->
											<div class="resume-position-time">2021 - 2021</div>
										</div><!--//resume-timeline-item-header-->
										<div class="resume-timeline-item-desc">
											<?php
											echo '<p>Support the Information Security Operations Center by monitoring security alerts and incidents, contributing to incident response activities, and analyzing threat intelligence data. </p>';
											echo '<h4 class="resume-timeline-item-desc-heading font-weight-bold">Achievements</h4>';
											?>
											<ul>
												<?php
												echo '<li>Conducted penetration testing on external routers, identifying potential security vulnerabilities and developing effective remediation strategies.</li>';
												echo '<li>Monitored vulnerability exceptions, demonstrating strong analytical skills.</li>';
												?>
											</ul>
											<h4 class="resume-timeline-item-desc-heading font-weight-bold">Technologies used:</h4>
											<ul class="list-inline">
												<?php
												echo '<li class="list-inline-item"><span class="badge bg-secondary badge-pill">Python</span></li>';
												echo '<li class="list-inline-item"><span class="badge bg-secondary badge-pill">Cobalt Strike</span></li>';
												echo '<li class="list-inline-item"><span class="badge bg-secondary badge-pill">Kali Linux</span></li>';
												?>
											</ul>
										</div><!--//resume-timeline-item-desc-->

									</article><!--//resume-timeline-item-->




								</div>
						</section><!--//projects-section-->
					</div>
					<div class="col-lg-3">
						<section class="resume-section skills-section mb-5">
							<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Skills &amp; Tools</h2>
							<div class="resume-section-content">
								<div class="resume-skill-item">
									<ul class="list-unstyled mb-4">
										<li class="mb-2">
											<?php
											echo '<div class="resume-skill-name">Python</div>';
											?>
											<div class="progress resume-progress">
												<div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 98%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</li>
										<li class="mb-2">
											<?php
											echo '<div class="resume-skill-name">Java</div>';
											?>
											<div class="progress resume-progress">
												<div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 94%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</li>
										<li class="mb-2">
											<?php
											echo '<div class="resume-skill-name">JavaScript</div>';
											?>
											<div class="progress resume-progress">
												<div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 96%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</li>

										<li class="mb-2">
											<?php
											echo '<div class="resume-skill-name">C/C++</div>';
											?>
											<div class="progress resume-progress">
												<div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 92%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</li>
										<li class="mb-2">
											<?php
											echo '<div class="resume-skill-name">HTML/CSS</div>';
											?>
											<div class="progress resume-progress">
												<div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 96%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</li>
									</ul>
								</div><!--//resume-skill-item-->
								<div class="resume-skill-item">
									<h4 class="resume-skills-cat font-weight-bold">Others</h4>
									<ul class="list-inline">
										<?php
										echo '<li class="list-inline-item"><span class="badge badge-light">Cisco Switch Configuration</span></li>';
										echo '<li class="list-inline-item"><span class="badge badge-light">Cisco Router Configuration</span></li>';
										echo '<li class="list-inline-item"><span class="badge badge-light">Git</span></li>';
										echo '<li class="list-inline-item"><span class="badge badge-light">Unit Testing</span></li>';
										echo '<li class="list-inline-item"><span class="badge badge-light">Network Management</span></li>';
										echo '<li class="list-inline-item"><span class="badge badge-light">Penetration Testing</span></li>';
										echo '<li class="list-inline-item"><span class="badge badge-light">Firewall Management (Palo Alto, PFsense)</span></li>';
										echo '<li class="list-inline-item"><span class="badge badge-light">Linux Server Administration</span></li>';
										?>
									</ul>
								</div><!--//resume-skill-item-->
							</div><!--resume-section-content-->
						</section><!--//skills-section-->
						<section class="resume-section education-section mb-5">
							<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Education</h2>
							<div class="resume-section-content">
								<ul class="list-unstyled">
									<li class="mb-2">
										<?php
										echo '<div class="resume-degree font-weight-bold">BSc in Cyber Security</div>';
										echo '<div class="resume-degree-org">Northern Kentucky University</div>';
										echo '<div class="resume-degree-time">2018 - 2023</div>';
										?>
									</li>
									<li>
										<?php
										echo '<div class="resume-degree font-weight-bold">BSc in Computer Information Technology</div>';
										echo '<div class="resume-degree-org">Northern Kentucky University</div>';
										echo '<div class="resume-degree-time">2018 - 2023</div>';
										?>
									</li>
									<li>
										<?php
										echo '<div class="resume-degree font-weight-bold">BSc in Computer Science</div>';
										echo '<div class="resume-degree-org">Northern Kentucky University</div>';
										echo '<div class="resume-degree-time">2018 - 2023</div>';
										?>
									</li>
								</ul>
							</div>
						</section><!--//education-section-->
						<section class="resume-section reference-section mb-5">
							<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Accomplishments</h2>
							<div class="resume-section-content">
								<ul class="list-unstyled resume-awards-list">
									<li class="mb-2 ps-4 position-relative">
										<i class="resume-award-icon fas fa-trophy position-absolute" data-fa-transform="shrink-2"></i>
										<?php
										echo '<div class="resume-award-name">Leadership in NKCyber Club (2020 - 2023):</div>';
										echo '<div class="resume-award-desc">Elevated from Secretary (2020-2021) to President (2021-2023) of NKCyber Club at Northern Kentucky University. Directed training, competitions, and research initiatives, enhancing cybersecurity proficiency and fostering innovation within the club.</div>';
										?>
									</li>
									<li class="mb-2 ps-4 position-relative">
										<i class="resume-award-icon fas fa-trophy position-absolute" data-fa-transform="shrink-2"></i>
										<?php
										echo '<div class="resume-award-name">Member of NKU Cyber Defense Team (2019 - Present):</div>';
										echo '<div class="resume-award-desc">Managed network infrastructure for a competition, collaborated with team members, gained expertise in network management and troubleshooting.</div>';
										?>
									</li>
									<li class="mb-0 ps-4 position-relative">
										<i class="resume-award-icon fas fa-trophy position-absolute" data-fa-transform="shrink-2"></i>
										<?php
										echo '<div class="resume-award-name">Member of NKCyber Research and Development (2019 - Present):</div>';
										echo '<div class="resume-award-desc">Expanded organization\'s wiki page on Penetration Testing, gained skills in research, technical writing, and project management.</div>'
										?>
									</li>
									<li class="mb-2 ps-4 position-relative">
										<i class="resume-award-icon fas fa-trophy position-absolute" data-fa-transform="shrink-2"></i>
										<?php
										echo '<div class="resume-award-name">Network Designer/Architect for NKCyber Server Rebuild (2022 - Present):</div>';
										echo '<div class="resume-award-desc">Demonstrated expertise in retention and deployment of networking devices, including switches, routers, and firewalls, ensured devices met organizational requirements.</div>';
										?>
									</li>
								</ul>
							</div>
						</section><!--//interests-section-->
						<section class="resume-section language-section mb-5">
							<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Languages</h2>
							<div class="resume-section-content">
								<ul class="list-unstyled resume-lang-list">
									<?php
									echo '<li class="mb-2"><span class="resume-lang-name font-weight-bold">English</span> <small class="text-muted font-weight-normal">(Native)</small></li>';
									echo '<li class="mb-2 align-middle"><span class="resume-lang-name font-weight-bold">German</span> <small class="text-muted font-weight-normal">(Elementary)</small></li>';
									?>
								</ul>
							</div>
						</section><!--//language-section-->
						<section class="resume-section interests-section mb-5">
							<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Interests</h2>
							<div class="resume-section-content">
								<ul class="list-unstyled">
									<?php
									echo '<li class="mb-1">Parkour</li>';
									echo '<li class="mb-1">Skateboarding</li>';
									echo '<li class="mb-1">Cooking</li';
									?>
								</ul>
							</div>
						</section><!--//interests-section-->

					</div>
				</div><!--//row-->
				<section class="resume-section experience-section mb-5">
					<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Projects</h2>
					<div class="row mt-4">
						<div class="col-md-4">
							<div class="card">
								<img src=".\nkcyber_logo_small.png" alt="Project 1" class="card-img-top">
								<div class="card-body">
									<?php
									echo '<h5 class="card-title">Development of NKCyber\'s Website</h5>';
									echo '<p class="card-text">Contributed to the development of the NKCyber Club\'s official website, collaborating with team members to enhance the online platform. Assisted in implementing user-friendly features, organizing content, and optimizing functionality to effectively represent the club and its activities online.</p>';
									echo '<a href="https://nkcyber-club.github.io/" href="#">Go to link</a>';
									?>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<img src=".\nkcyber_logo_small.png" alt="Project 2" class="card-img-top">
								<div class="card-body">
									<?php
									echo '<h5 class="card-title">Network Designer/Architect for NKCyber Server Rebuild (2022 - Present)</h5>';
									echo '<p class="card-text">Demonstrated expertise in retention and deployment of networking devices, including switches, routers, and firewalls, ensured devices met organizational requirements.</p>';
									?>
								</div>
							</div>
						</div>
						
					</div>
				</section><!--//projects-section-->
			</div><!--//resume-body-->


		</div>
	</article>


	<footer class="footer text-center pt-2 pb-5">
		<!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
		<small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart"></i> by Jakob Banta</small>
	</footer>



</body>

</html>