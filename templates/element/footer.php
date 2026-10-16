<?php
/**
 * BcLpServiceTheme : baserCMS5 サービス紹介 LP テーマ
 *
 * フッター
 *
 * - 主催者名・問い合わせ先：ウィジェットエリア（テキストウィジェット）で編集する
 * - コピーライト：サイト名と年から自動で出す
 *
 * @var \BaserCore\View\BcFrontAppView $this
 */
?>
<footer class="sv-footer">
	<div class="sv-wrap">
		<div class="sv-footer__inner">
			<?php $this->BcBaser->widgetArea() ?>
		</div>
		<small class="sv-footer__copy">&copy; <?= date('Y') ?> <?= h($this->Lp->getSiteLabel()) ?></small>
	</div>
</footer>
