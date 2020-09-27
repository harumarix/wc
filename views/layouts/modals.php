<!-- Pop-ups -->
<section class="contact-us">
	<div id="contact-us" class="zoom-anim-dialog mfp-hide pop-up-form">
		<div class="pop-up-form__head">Связаться с нами</div>
		<form action="/send/contact-us">
			<input type="text" placeholder="Имя" name="name" required>
			<input type="text" placeholder="Телефон" name="phone" required>
			<input type="text" placeholder="Комментарий" name="message">
			<input type="submit" value="Отправить" class="btn-red">
			<div class="pop-up-form__footer">
				<span>Сургут, ТРЦ «АГОРА»</span>
				<span>+7 (3462) 94-00-00</span>
			</div>
		</form>	
	</div>
</section>

<section class="contact-us">
	<div id="card-request" class="zoom-anim-dialog mfp-hide pop-up-form">
		<div class="pop-up-form__head">Оформить карту</div>
		<form action="/send/card-request">
			<input type="hidden" name="card" id="input-card">
			<input type="text" placeholder="Имя" name="name" required>
			<input type="text" placeholder="Телефон" name="phone" required>
			<input type="text" placeholder="email" name="email">
			<input type="submit" value="Отправить" class="btn-red">
			<div class="pop-up-form__footer">
				<span>Сургут, ТРЦ «АГОРА»</span>
				<span>+7 (3462) 94-00-00</span>
			</div>
		</form>	
	</div>
</section>
<section class="contact-us">
	<div id="success-form" class="zoom-anim-dialog mfp-hide pop-up-form">
		<div class="pop-up-form__head">Заявка успешно отправлена!</div>		
	</div>
	<a href="#success-form" class="popup-with-zoom-anim" id="show-success"></a>
</section>
<section class="contact-us">
	<div id="sign-up" class="zoom-anim-dialog mfp-hide pop-up-form">
		<div class="pop-up-form__head">Записаться на тренировку</div>
		<form action="/send/sign-up">
			<input type="text" placeholder="Имя" name="name" required>
			<input type="hidden" name="instructor" id="input-instructor">
			<input type="text" placeholder="Телефон" name="phone" required>
			<input type="text" placeholder="email" name="email">
			<input type="submit" value="Отправить" class="btn-red">
			<div class="pop-up-form__footer">
				<span>Сургут, ТРЦ «АГОРА»</span>
				<span>+7 (3462) 94-00-00</span>
			</div>
		</form>	
	</div>
</section>
<section class="freeze">
	<div id="freeze" class="zoom-anim-dialog mfp-hide pop-up-form">
		<div class="pop-up-form__head">Заявка на заморозку</div>
		<form action="/send/freeze">
			<input type="text" placeholder="Имя" name="name" required>
			<input type="text" placeholder="Номер карты" name="cardnumber" required>
			<input type="date" placeholder="Дата заморозки" name="datestart" required>
			<input type="date" placeholder="Дата разморозки" name="dateend" required>
			

			<input type="submit" value="Отправить" class="btn-red">
			<div class="pop-up-form__footer">
				<span>Сургут, ТРЦ «АГОРА»</span>
				<span>+7 (3462) 94-00-00</span>
			</div>
		</form>	
	</div>
</section>
<section class="instructor-pop-up-section">
	<div id="instructor-pop-up" class="zoom-anim-dialog mfp-hide instructor-pop-up">
		<img src="" alt="" id="popup-member-image">
		<div class="instructor-pop-up__container">
			<div class="instructor-pop-up__head" id="popup-member-name">Марат Зинатуллин</div>
			<div class="instructor-pop-up__subhead" id="popup-member-post">Фитнес-директор</div>

			<div class="instructor-pop-up__scroll-container">
				<div class="instructor-pop-up__title js-education">Образование</div>
				<div class="instructor-pop-up__text js-education" id="popup-member-education"></div>
				<div class="instructor-pop-up__title js-achievments">Творческие и спортивные достижения</div>
				<div class="instructor-pop-up__text js-achievments" id="popup-member-achievments"></div>

				<div class="instructor-pop-up__title js-specialization">Фитнес специализация</div>
				<div class="instructor-pop-up__text js-specialization" id="popup-member-specialization"></div>				
				<div class="instructor-pop-up__text js-text" id="popup-member-text">	</div>
			</div>
			<a class="btn-red popup-with-zoom-anim" id="training-sign-up" href="#sign-up">Записаться на тренировку</a>
		</div>	
	</div>
</section>
