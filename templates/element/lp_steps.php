<?php
/**
 * BcLpServiceTheme : baserCMS5 サービス紹介 LP テーマ
 *
 * お申し込みの手順（1. 入力 → 2. 確認 → 3. 完了）
 *
 * @var \BaserCore\View\BcFrontAppView $this
 * @var int $current 現在の手順（1〜3）
 */
$steps = [1 => '入力', 2 => '確認', 3 => '完了'];
?>
<ol class="sv-steps" aria-label="お申し込みの手順">
	<?php foreach ($steps as $no => $label): ?>
		<li<?= ($no === $current)? ' class="is-current" aria-current="step"' : '' ?>><?= $no ?>. <?= h($label) ?></li>
	<?php endforeach ?>
</ol>
