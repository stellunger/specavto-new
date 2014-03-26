						<?php $attributes = array('class' => 'order-form'); ?>
						<?php echo form_open('send_email',$attributes); ?>
							<h2>Заявка</h2>
							<div class="form-group">
									<input type="text" class="form-control" placeholder="Имя и фамилия" name="inputName">
							</div>							
							<div class="form-group">
									<input type="text" class="form-control" placeholder="Компания" name="inputCompany">
							</div>
							<div class="form-group">
									<input type="text" class="form-control" placeholder="Телефон" name="inputPhone">
							</div>
							<div class="form-group">
									<input type="text" class="form-control" placeholder="E-mail" name="inputEmail">
							</div>
							<div class="form-group">
									<textarea class="form-control" placeholder="Текст сообщения" name="inputMessage"></textarea>
							</div>
							<div class="b-button">
									<button type="submit" class="b-link1">Отправить</button>
							</div>
						</form>