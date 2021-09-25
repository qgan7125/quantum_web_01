<!-- Contact -->
<div id="Contact" class='sectionTop sectionBot'>
        <div class="row m-0 p-0">
            <div class="col-xl-6 p-0">
                <div class="col bg-light ">
                    <h1 class='col-my-6 pt-3'>Contact us</h1>
                    <form action='sendEmail.php' method="post">
                        <div class='px-3'>
                            <!-- Name -->
                            <div class='row'>
                                <div class='col p-0 pr-3'>
                                    <label for="form_name">Firstname *</label>
                                    <input id="form_name" type="text" name="firstname" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class='col-0'>
                                </div>
                                <div class='col p-0 pl-3'>
                                    <label for="form_lastname">Lastname *</label>
                                    <input id="form_lastname" type="text" name="lastname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <!-- Email and question type -->
                            <div class='row pt-2'>
                                <div class='col p-0 pr-3'>
                                    <label for="form_email">Email *</label>
                                    <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class='col-0'>
                                </div>
                                <div class='col p-0 pl-3'>
                                    <label for="form_need">Please specify your need *</label>
                                    <select id="form_need" name="need" class="form-control" required="required" data-error="Please specify your need.">
                        					<option value=""></option>
                        					<option value="Need to know more about project">Need to know more about project</option>
                        					<option value="Want to donate">Want to sponsor</option>
											<option value="Want to cooperate">Want to cooperate</option>
                        					<option value="Other">Other</option>
                    					</select>
                                </div>
                            </div>
                            <!-- Message -->
                            <div class='row pt-2'>
                                <label for="form_message">Message *</label>
                                <textarea id="form_message" name="message" class="form-control" placeholder="Message for us *" rows="4" required="required" data-error="Please, leave us a message."></textarea>
                            </div>
                            <div class="row col-xl-12 py-3 pl-0">
                                <input type="submit" name='submit' class="btn btn-success btn-send" value='Send message'>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-xl-6 p-0">
                <iframe width="100%" height="440px" style="border:0" loading="lazy" allowfullscreen src="https://www.google.com/maps/embed/v1/place?q=1235%20E.%20James%20E.%20Rogers%20Way&key=AIzaSyAp1tWB_c2D-7XVZOoIQpQ8VPHlvtCNYnY&language=en"></iframe>
            </div>
        </div>
    </div>