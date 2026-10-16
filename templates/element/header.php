<?php
/**
 * BcLpServiceTheme : baserCMS5 サービス紹介 LP テーマ
 *
 * ヘッダー
 *
 * - ロゴ：テーマ設定のロゴ。未設定ならサイト名を文字で出す
 * - ナビ：本文で「ID設定」をしたブロックの見出しから自動で作る（LpHelper::getNavItems()）
 * - 資料請求ボタン：公開中の最初のメールフォームへリンクする（LpHelper::getFormUrl()）
 * - メールフォームの画面では、ナビの代わりに「戻る」リンクを出す
 *
 * @var \BaserCore\View\BcFrontAppView $this
 */
$isMailPage = ($this->getRequest()->getParam('plugin') === 'BcMail');
$page = $this->get('page');
$navItems = (!$isMailPage && !empty($page))? $this->Lp->getNavItems($page->contents) : [];
$formUrl = $isMailPage? '' : $this->Lp->getFormUrl();
$hasMenu = ($navItems || $formUrl);

ob_start();
$this->BcBaser->logo(['link' => '']);
$logo = trim(ob_get_clean());
?>
<header class="sv-header">
	<div class="sv-wrap sv-header__inner">
		<a class="sv-header__logo" href="<?= h($this->BcBaser->getUrl('/')) ?>">
			<?php if ($logo): ?>
				<?= $logo ?>
			<?php else: ?>
				<?= h($this->Lp->getSiteLabel()) ?>
			<?php endif ?>
		</a>

		<?php if ($isMailPage): ?>
			<a class="sv-back" href="<?= h($this->BcBaser->getUrl('/')) ?>">サービス紹介へ戻る</a>
		<?php else: ?>
			<?php if ($navItems): ?>
				<nav class="sv-nav" aria-label="ページ内">
					<ul>
						<?php foreach ($navItems as $item): ?>
							<li><a href="#<?= h($item['id']) ?>"><?= h($item['label']) ?></a></li>
						<?php endforeach ?>
					</ul>
				</nav>
			<?php endif ?>
			<?php if ($formUrl): ?>
				<a class="sv-btn sv-btn--sm sv-header__cta" href="<?= h($this->BcBaser->getUrl($formUrl)) ?>">資料請求</a>
			<?php endif ?>
			<?php if ($hasMenu): ?>
				<button class="sv-burger" type="button" data-sv-drawer-toggle aria-expanded="false" aria-controls="sv-drawer" aria-label="メニューを開く">
					<svg class="sv-burger__open" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" aria-hidden="true"><path d="M4 6h16M4 12h16M4 18h16"/></svg>
					<svg class="sv-burger__close" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" aria-hidden="true"><path d="M18 6 6 18M6 6l12 12"/></svg>
				</button>
			<?php endif ?>
		<?php endif ?>
	</div>

	<?php if (!$isMailPage && $hasMenu): ?>
		<nav class="sv-drawer" id="sv-drawer" aria-label="メニュー" hidden>
			<?php if ($navItems): ?>
				<ul>
					<?php foreach ($navItems as $item): ?>
						<li><a href="#<?= h($item['id']) ?>"><?= h($item['label']) ?></a></li>
					<?php endforeach ?>
				</ul>
			<?php endif ?>
			<?php if ($formUrl): ?>
				<a class="sv-btn" href="<?= h($this->BcBaser->getUrl($formUrl)) ?>">資料請求</a>
			<?php endif ?>
		</nav>
	<?php endif ?>
</header>
