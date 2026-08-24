<!DOCTYPE html>
<html lang="fa" dir="rtl">

<?php
include "../include/database/connect.php";
include "include/config/aouth.php";
global $connection;

$send = $connection->prepare("SELECT COUNT(id_training_courses_mast) FROM training_courses_mast WHERE training_courses_teacher_mast=?");
$send->bindValue(1, $_SESSION['full_name_teacher']);
$send->execute();
$count_id = $send->fetch(PDO::FETCH_ASSOC);
foreach ($count_id AS $count_ids){}

?>

<?php
include "include/layout/head.php";
?>

<body>

<?php
include "include/layout/header.php";
?>

<!-- **************** MAIN CONTENT START **************** -->
<main>
	
<!-- =======================
Page Banner START -->
<section class="pt-0">
	<!-- Main banner background image -->
	<div class="container-fluid px-0">
		<div class="bg-blue h-100px h-md-100px rounded-0" style="background:url(assets/images/pattern/04.png) no-repeat center center ; background-size:cover">
		</div>
	</div>
	<div class="container mt-n4">
		<div class="row">
			<!-- Profile banner START -->
			<div class="col-12">
				<div class="card bg-transparent card-body p-0">
					<div class="row d-flex justify-content-between">
						<!-- Profile info -->
						<div class="col d-md-flex justify-content-between align-items-center mt-4">
							<div><br><br>
								<h1 class="my-1 fs-4"><i class="bi bi-patch-check-fill text-info small"></i> <?php echo $_SESSION['full_name_teacher'];?></h1>
							</div>
						</div>
					</div>
				</div>
				<!-- Profile banner END -->

				<!-- Advanced filter responsive toggler START -->
				<!-- Divider -->
				<hr class="d-xl-none">
				<div class="col-12 col-xl-3 d-flex justify-content-between align-items-center">
					<a class="h6 mb-0 fw-bold d-xl-none" href="#">منوی کاربری</a>
					<button class="btn btn-primary d-xl-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar">
						<i class="fas fa-sliders-h"></i>
					</button>
				</div>
				<!-- Advanced filter responsive toggler END -->
			</div>
		</div>
	</div>
</section>
<!-- =======================
Page Banner END -->

<!-- =======================
Page content START -->
<section class="pt-0">
	<div class="container">
		<div class="row">

            <?php
            include "include/layout/sidebar.php";
            ?>

			<!-- Main content START -->
			<div class="col-xl-9">

				<!-- Counter boxes START -->
				<div class="row g-4">
					<!-- Counter item -->
					<div class="col-sm-6 col-lg-4">
						<div class="d-flex justify-content-center align-items-center p-4 bg-warning bg-opacity-15 rounded-3">
							<span class="display-5 text-warning mb-0"><i class="fas fa-tv fa-fw"></i></span>
							<div class="ms-4">
								<div class="d-flex">
									<h5 class="purecounter mb-0 fw-bold" data-purecounter-start="0" data-purecounter-end="<?php echo $count_ids ?>" data-purecounter-delay="200">0</h5>
								</div>
								<span class="mb-0 h6 fw-light">دوره موجود</span>
							</div>
						</div>
					</div>
				</div>
				<!-- Counter boxes END -->
			</div>
			<!-- Main content END -->
		</div><!-- Row END -->
	</div>
</section>
<!-- =======================
Page content END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

<!-- Back to top -->
<div class="back-top"><i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i></div>

<!-- Bootstrap JS -->
<script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<!-- Vendors -->
<script src="../assets/vendor/purecounterjs/dist/purecounter_vanilla.js"></script>
<script src="../assets/vendor/apexcharts/js/apexcharts.min.js"></script>

<!-- Template Functions -->
<script src="../assets/js/functions.js"></script>

</body>

</html>