<?php
/**
 * BcLpServiceTheme : baserCMS5 サービス紹介 LP テーマ
 *
 * メールフォーム：確認
 *
 * @var \BcMail\View\MailFrontAppView $this
 * @var bool $freezed 確認画面かどうか（入力エラーのときは false）
 */
if ($freezed) {
	$this->Mailform->freeze();
}
?>
<section class="sv-fsec">
	<div class="sv-fhead">
		<p class="sv-eyebrow">Contact</p>
		<h1 class="sv-fhead__title"><?php $this->BcBaser->contentsTitle() ?></h1>
	</div>
	<?php $this->BcBaser->element('lp_steps', ['current' => $freezed? 2 : 1]) ?>
	<?php if ($freezed): ?>
		<p class="sv-flead">入力内容をご確認ください。よろしければ「送信する」を押してください。</p>
	<?php else: ?>
		<div class="sv-flead"><?php $this->Mail->description() ?></div>
	<?php endif ?>
	<?php $this->BcBaser->flash() ?>
	<div class="sv-form<?= $freezed? ' is-confirm' : '' ?>">
		<?php $this->BcBaser->element('mail_form') ?>
	</div>
</section>
