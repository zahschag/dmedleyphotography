<?php 
	$pageTitle="Daniel Medley Photography";
	$section = "about";
	include('inc/header.php'); ?>
		<div id="about-me-section">
		<h1>About Me</h1>
			<div class="placehold3"style="float:left; margin-left:120px;clear:none;"><img src="images/dog-in-bridge-thumb.jpg" alt="A dog on a wooden bridge">
			<p id="about-me">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat eros non elit aliquet pellentesque. Cras in porta lorem, ac mollis ante. Nullam tincidunt commodo eros eget dictum. Sed vulputate varius odio, at egestas ligula venenatis vel. In quis tempor massa, et scelerisque lacus. Vestibulum sodales interdum diam vitae varius. Maecenas fermentum tortor a hendrerit congue. Maecenas elementum dictum ligula, eget accumsan risus auctor non. Nam eleifend placerat consequat. Aliquam erat volutpat.</p>
			</div>
		</div>

		<div id="contact-form">
			<h2>Contact Me</h2>
			<form method="post" action="contact.php">
				<table>
					<tr>
						<th>
							<label for="name">Name</label>
						</th>
						<td>
							<input type="text" name="id" id="name">
						</td>
					</tr>
					<tr>
						<th>
							<label for="email">Email</label>
						</th>
						<td>
							<input type="text" name="email" id="email">
						</td>
					</tr>
					<tr>
						<th>
							<label for="message">Message</label>
						</th>
						<td>
							<input type="text" name="message" id="message">
						</td>
					</tr>
				</table>
				<input type="submit" value="Send">
			</form> 
		</div>

<?php include('inc/footer.php') ?>