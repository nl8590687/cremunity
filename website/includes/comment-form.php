<?php

echo '

<!-- comments form start -->
							<div class="comments-form">
								<h2 class="title">Add your comment</h2>
								<form role="form" id="comment-form">
									<div class="form-group has-feedback">
										<label for="name4">Name</label>
										<input type="text" class="form-control" id="name4" placeholder="" name="name4" required>
										<i class="fa fa-user form-control-feedback"></i>
									</div>
									<div class="form-group has-feedback">
										<label for="subject4">Subject</label>
										<input type="text" class="form-control" id="subject4" placeholder="" name="subject4" required>
										<i class="fa fa-pencil form-control-feedback"></i>
									</div>
									<div class="form-group has-feedback">
										<label for="message4">Message</label>
										<textarea class="form-control" rows="8" id="message4" placeholder="" name="message4" required></textarea>
										<i class="fa fa-envelope-o form-control-feedback"></i>
									</div>
									<input type="submit" value="Submit" class="btn btn-default">
								</form>
							</div>
							<!-- comments form end -->

';

?>