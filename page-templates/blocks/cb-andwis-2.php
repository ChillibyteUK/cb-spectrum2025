<?php
/**
 * Block template for CB Andwis 2.
 *
 * @package cb-spectrum2025
 */

defined( 'ABSPATH' ) || exit;

?>
<style>
	.service-card {
		transition: all 0.3s ease;
		min-height: 220px;
		background-color: var(--col-green-900);
	}
	
	.service-card__front {
		display: grid;
		grid-template-rows: 4rem auto;
		cursor: pointer;
	}
	.service-card__title {
		font-size: 1.2rem;
		font-weight: 700;
		margin-bottom: 0.5rem;
		color: white;
	}
	.service-card__subtitle {
		font-size: 1rem;
		margin-bottom: 1rem;
		color: hsl(127, 45%, 78%);
	}

	.service-card__back {
		transform: translateY(100%);
		transition: transform 0.4s ease;
		z-index: 2;
		background-color: hsl(127, 45%, 78%);
		color: black;
		pointer-events: none;
		font-size: 0.9rem;
		height: 100%;
	}

	.service-card:hover .service-card__back,
	.service-card:focus-within .service-card__back {
		transform: translateY(0);
		pointer-events: auto;
	}

	.has-green-900-color {
		color: var(--col-green-900);
	}
	.has-green-400-color {
		color: var(--col-green-400);
	}
</style>
<section class="andwis2 py-5">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-4">
				<h2>We are an <strong class="has-green-900-color">andwis<span class="has-green-400-color">.</span></strong> group company.</h2>
				<h3>Experts in Technical &amp; Compliance Services</h3>
				<p>As an andwis group company, we are proud to be part of a national network of technical and compliance services across six core areas of expertise.</p>
				<p>Like us, our colleagues treat customer delivery and long-term partnerships in the highest regard, ensuring we deliver industry-leading technical and compliance solutions from a single provider.</p>
				<div class="btn btn-primary">Find out More</div>
			</div>
			<div class="col-12 col-md-8">
				<div class="row g-2">
					<div class="col-md-4">
						<div class="service-card position-relative overflow-hidden p-4 h-100">
							<div class="service-card__front position-relative z-1">
								<div class="service-card__title">Fire<br>&amp; Security</div>
								<div class="service-card__subtitle">Complete fire, safety and security solutions</div>
							</div>
							<div class="service-card__back position-absolute start-0 end-0 bottom-0 p-3">
								<p class="mb-0">Whether you’re completing a Cat A fit out or looking for a fully integrated access control and CCTV system for an enterprise organisation, our Fire &amp; Security services offer a comprehensive solution for all your security and life safety systems.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="service-card position-relative overflow-hidden p-4 h-100">
							<div class="service-card__front position-relative z-1">
								<div class="service-card__title">Water<br>&amp; Air Hygiene</div>
								<div class="service-card__subtitle">Prevention for waterborne and airborne hazards</div>
							</div>
							<div class="service-card__back position-absolute start-0 end-0 bottom-0 p-3">
								<p class="mb-0">When it comes to water and air hygiene, we minimise risk and deliver compliance. Our turnkey solutions ensure your water and air systems remain safe, clean and hygienic.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="service-card position-relative overflow-hidden p-4 h-100">
							<div class="service-card__front position-relative z-1">
								<div class="service-card__title">Asbestos<br>Management</div>
								<div class="service-card__subtitle">Simple, fast, and fully assured asbestos compliance</div>
							</div>
							<div class="service-card__back position-absolute start-0 end-0 bottom-0 p-3">
								<p>For your peace-of-mind, andwis offers complete asbestos management and remediation solutions throughout the UK. Our services range from UKAS-accredited surveys to HSE-licensed removal, management plans, air monitoring, and training.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="service-card position-relative overflow-hidden p-4 h-100">
							<div class="service-card__front position-relative z-1">
								<div class="service-card__title">Lifts<br>&amp; Entrance</div>
								<div class="service-card__subtitle">Improving movement flow and access for people in buildings</div>
							</div>
							<div class="service-card__back position-absolute start-0 end-0 bottom-0 p-3">
								<p>Managing the flow of people within a busy commercial space can be challenging. Yet, with our expertise, combined with the industry’s leading technology, we can improve how people move, use and access your building.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="service-card position-relative overflow-hidden p-4 h-100">
							<div class="service-card__front position-relative z-1">
								<div class="service-card__title">Maintenance<br>&amp; Response</div>
								<div class="service-card__subtitle">Turnkey building maintenance with fast and effective emergency support</div>
							</div>
							<div class="service-card__back position-absolute start-0 end-0 bottom-0 p-3">
								<p>Keeping your building fully functional, safe and compliant with planned and reactive maintenance across all andwis disciplines. For those unexpected emergencies, you can enjoy round-the-clock emergency response.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="service-card position-relative overflow-hidden p-4 h-100">
							<div class="service-card__front position-relative z-1">
								<div class="service-card__title">Mechanical<br>&amp; Electrical</div>
								<div class="service-card__subtitle">Expert M&amp;E engineering to deliver more efficient and sustainable buildings</div>
							</div>
							<div class="service-card__back position-absolute start-0 end-0 bottom-0 p-3">
								<p>Our focus is on delivering more efficient, sustainable and comfortable buildings using expert engineering, design and innovation. We work across all sectors to provide heating, cooling, ventilation, refrigeration, and electrical installations.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>