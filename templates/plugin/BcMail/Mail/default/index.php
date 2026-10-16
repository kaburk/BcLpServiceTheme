<?php
/**
 * BcLpServiceTheme : baserCMS5 サービス紹介 LP テーマ
 *
 * メールフォーム：入力
 *
 * - 見出し：メールフォームのタイトル
 * - リード文：メールフォーム設定の「説明文」
 * - 項目：メールフィールド（管理画面で追加・並べ替えできる）
 *
 * @var \BcMail\View\MailFrontAppView $this
 */
?>
<section class="sv-fsec">
	<div class="sv-fhead">
		<p class="sv-eyebrow">Contact</p>
		<h1 class="sv-fhead__title"><?php $this->BcBaser->contentsTitle() ?></h1>
	</div>
	<?php $this->BcBaser->element('lp_steps', ['current' => 1]) ?>
	<div class="sv-flead"><?php $this->Mail->description() ?></div>
	<?php $this->BcBaser->flash() ?>
	<div class="sv-form">
		<?php $this->BcBaser->element('mail_form') ?>
	</div>
</section>
