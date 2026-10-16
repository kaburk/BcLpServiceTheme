<?php
/**
 * BcLpServiceTheme : baserCMS5 サービス紹介 LP テーマ
 *
 * メールフォーム：完了
 *
 * 完了メッセージは、メールフォーム設定の「送信完了メッセージ」で編集する
 *
 * @var \BcMail\View\MailFrontAppView $this
 * @var \BcMail\Model\Entity\MailContent $mailContent
 */
use Cake\Core\Configure;

if (Configure::read('debug') == 0 && $mailContent->redirect_url) {
	$this->BcBaser->meta(['http-equiv' => 'Refresh'], null, ['content' => '5;url=' . $mailContent->redirect_url, 'block' => true]);
}
?>
<section class="sv-fsec">
	<div class="sv-fhead">
		<p class="sv-eyebrow">Contact</p>
		<h1 class="sv-fhead__title"><?php $this->BcBaser->contentsTitle() ?></h1>
	</div>
	<?php $this->BcBaser->element('lp_steps', ['current' => 3]) ?>
	<div class="sv-done">
		<span class="sv-done__icon" aria-hidden="true"><svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12l4 4 10-10"/></svg></span>
		<h2 class="sv-done__title">お申し込みを受け付けました</h2>
		<div class="sv-done__message">
			<?php if ($this->BcBaser->mailFormThanksExists()): ?>
				<?php $this->BcBaser->mailFormThanks() ?>
			<?php else: ?>
				<p>お問い合わせいただき、ありがとうございます。担当者からご連絡いたします。</p>
			<?php endif ?>
		</div>
		<a class="sv-btn sv-btn--line" href="<?= h($this->BcBaser->getUrl('/')) ?>">トップページへ戻る</a>
	</div>
</section>
