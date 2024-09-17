<?php

include '../components/connect.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:admin_login.php');
}

if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   $delete_user = $conn->prepare("DELETE FROM `user` WHERE admin_id = ?");
   $delete_user->execute([$delete_id]);
   
   header('location:admin.php');
}

// Fetch booking data for Underwater Photography (Normal Bookings)
$booking_data = $conn->prepare("SELECT booking_id, FullName, booking_date FROM booking");
$booking_data->execute();
$bookings = $booking_data->fetchAll(PDO::FETCH_ASSOC);

// Fetch booking data for VR Experience (VR Bookings from booking_vr2)
$vr_booking_data = $conn->prepare("SELECT booking_id, FullName, booking_date FROM booking_vr2");
$vr_booking_data->execute();
$vr_bookings = $vr_booking_data->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- FullCalendar CSS -->
    <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.css' rel='stylesheet' />
    <!-- FullCalendar JS (Including dependencies) -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js'></script>
    <!-- My CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../booking.css">

    <title>Booking</title>

</head>

<body>

    <!-- SIDEBAR -->
    <section id="sidebar">
        <a href="dashboard.php" class="brand">
            <span class="text text2">Booking</span>
        </a>

        <?php
        $select_accounts = $conn->prepare("SELECT * FROM `admins` WHERE admin_id = '$admin_id'");
        $select_accounts->execute();
        if ($select_accounts->rowCount() > 0) {
            while ($fetch_accounts = $select_accounts->fetch(PDO::FETCH_ASSOC)) {
        ?> 
		<span class="text brand1">
			 <?= $fetch_accounts['name'] ?>
		</span>
		<?php
            }
        }
        ?> 
		<ul class="side-menu top">
			<li>
				<a href="dashboard.php">
					<i class='bx bxs-dashboard'></i>
					<span class="text">Home</span>
				</a>
			</li>
			<li>
				<a href="admin.php">
					<i class='bx bxs-user'></i>
					<span class="text">Admin</span>
				</a>
			</li>
			<li class="user.php">
				<a href="user.php">
					<i class='bx bxs-user'></i>
					<span class="text">User</span>
				</a>
			</li>
            <li class="active">
				<a href="booking.php">
					<i class='bx bxs-book'></i>
					<span class="text">Booking</span>
				</a>
			</li>
			<li>
				<a href="contact_us.php">
					<i class='bx bxs-envelope'></i>
					<span class="text">Contact Us</span>
				</a>
			</li>
		</ul>

		<ul class="side-menu">
			<li>
				<a href="../components/admin_logout.php" class="logout">
					<i class='bx bxs-log-out-circle'></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
    <!-- SIDEBAR -->

    <!-- CONTENT -->
    <section id="content">
        <!-- NAVBAR -->
        <nav>
            <i class='bx bx-menu'></i>
        </nav>
        <!-- NAVBAR -->

        <!-- MAIN -->
        <main>
            <div class="head-title">
                <div class="left">
                    <h1>Booking</h1>
                </div>
            </div>

			<!-- Underwater Photography Bookings -->
			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Underwater Photography</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i> 
					</div>
					<table>
						<thead>
							<tr>
                                <th>Booking ID</th>
                                <th>FullName</th>
								<th>Email</th>
                                <th>Booking Date</th>
                                <th>Start Time</th>
                                <th>End Time</th>
                                <th>Status</th>
                                <th>Additional Requests</th>
                                <th>Tools</th>
							</tr>
						</thead>
						<tbody>
                        <?php
							$select_accounts = $conn->prepare("SELECT * FROM `booking`");
							$select_accounts->execute();
							if($select_accounts->rowCount() > 0){
								while($fetch_accounts = $select_accounts->fetch(PDO::FETCH_ASSOC)){   
						?>
							<tr>
								<th scope="row"><?= $fetch_accounts['booking_id']; ?></th>
								<td><?= $fetch_accounts['FullName']; ?></td>
								<td><?= $fetch_accounts['email']; ?></td>
								<td><?= $fetch_accounts['booking_date']; ?></td>
								<td><?= $fetch_accounts['start_time']; ?></td>
								<td><?= $fetch_accounts['end_time']; ?></td>
								<td><?= $fetch_accounts['status']; ?></td>
								<td><?= $fetch_accounts['Additional_Requests']; ?></td>
								<td><a href="admin.php?delete=<?= $fetch_accounts['booking_id']; ?>" onclick="return confirm('delete this account? the user related information will also be deleted!')"><i class="fa-solid fa-trash"></i></a></td>
							</tr>
						<?php
								}
							}else{
								echo '<p class="empty">No accounts available!</p>';
							}
						?>
						</tbody>
					</table>
                </div>
            </div>

			<!-- VR Experience Bookings -->
			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>VR Experience</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i> 
					</div>
					<table>
						<thead>
							<tr>
                                <th>Booking ID</th>
                                <th>FullName</th>
								<th>Email</th>
                                <th>Booking Date</th>
                                <th>Start Time</th>
                                <th>End Time</th>
                                <th>Additional Requests</th>
                                <th>Tools</th>
							</tr>
						</thead>
						<tbody>
                        <?php
							$select_accounts = $conn->prepare("SELECT * FROM `booking_vr2`");
							$select_accounts->execute();
							if($select_accounts->rowCount() > 0){
								while($fetch_accounts = $select_accounts->fetch(PDO::FETCH_ASSOC)){   
						?>
							<tr>
								<th scope="row"><?= $fetch_accounts['booking_id']; ?></th>
								<td><?= $fetch_accounts['FullName']; ?></td>
								<td><?= $fetch_accounts['email']; ?></td>
								<td><?= $fetch_accounts['booking_date']; ?></td>
								<td><?= $fetch_accounts['start_time']; ?></td>
								<td><?= $fetch_accounts['end_time']; ?></td>
								<td><?= $fetch_accounts['Additional_Requests']; ?></td>
								<td><a href="admin.php?delete=<?= $fetch_accounts['booking_id']; ?>" onclick="return confirm('delete this account? the user related information will also be deleted!')"><i class="fa-solid fa-trash"></i></a></td>
							</tr>
						<?php
								}
							}else{
								echo '<p class="empty">No accounts available!</p>';
							}
						?>
						</tbody>
					</table>
                </div>
            </div>

            <!-- Calendar -->
            <div id="calendar"></div>

        </main>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->

	<?php
	   if(isset($message)){
	      foreach($message as $message){
	         echo '
	         <div>
	            <span>'.$message.'</span>
	            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
	         </div>
	         ';
	      }
	   }
	?>

    <script>
	document.addEventListener('DOMContentLoaded', function() {
		var calendarEl = document.getElementById('calendar');

		var calendar = new FullCalendar.Calendar(calendarEl, {
			initialView: 'dayGridMonth',
			headerToolbar: {
				left: 'prev,next today',
				center: 'title',
				right: 'dayGridMonth,timeGridWeek,timeGridDay'
			},
			events: [
				<?php 
				// Output events for normal bookings
				foreach($bookings as $booking) {
					echo "{ title: '" . $booking['FullName'] . " - Photography', start: '" . $booking['booking_date'] . "', className: 'bg-blue' },";
				}
				// Output events for VR bookings
				foreach($vr_bookings as $vr_booking) {
					echo "{ title: '" . $vr_booking['FullName'] . " - VR', start: '" . $vr_booking['booking_date'] . "', className: 'bg-green' },";
				}
				?>
			]
		});

		calendar.render();
	});
	</script>
</body>

</html>
