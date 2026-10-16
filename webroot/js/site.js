/**
 * BcLpServiceTheme : baserCMS5 サービス紹介 LP テーマ
 *
 * 共通 JS（jQuery 不要）
 * - SP メニューの開閉
 * - セクション見出しの英字ラベル（ブロックの ID から生成）
 * - ヒーローの実績・料金プランの金額の数字を大きくする
 * - よくある質問の開閉（最初はすべて閉じる）
 * - メールフォームの送信モード設定（BcMail の form-submit.js の代わり）
 */
(function () {
	'use strict';

	// SP メニュー
	var burger = document.querySelector('[data-sv-drawer-toggle]');
	var drawer = document.getElementById('sv-drawer');
	if (burger && drawer) {
		var setMenu = function (open) {
			burger.setAttribute('aria-expanded', open ? 'true' : 'false');
			burger.setAttribute('aria-label', open ? 'メニューを閉じる' : 'メニューを開く');
			drawer.hidden = !open;
		};
		burger.addEventListener('click', function () { setMenu(drawer.hidden); });
		drawer.querySelectorAll('a').forEach(function (a) {
			a.addEventListener('click', function () { setMenu(false); });
		});
		document.addEventListener('keydown', function (e) {
			if (e.key === 'Escape' && !drawer.hidden) { setMenu(false); burger.focus(); }
		});
	}

	// セクション見出しの英字ラベル：ID「bge-case-studies」→「CASE STUDIES」（見出しの枠に付け、見出しの上に出す）
	document.querySelectorAll('.bge-contents > .sv-blk--section[id^="bge-"]').forEach(function (el) {
		var label = el.id.replace(/^bge-/, '').replace(/-and-/g, ' & ').replace(/[-_]+/g, ' ').toUpperCase();
		var box = el.querySelector('.bgt-title-h2-container');
		if (label && box) { box.setAttribute('data-sv-label', label); }
	});

	// 数字を大きくする：テキストの中の最初の数字（1,200 や 3,000）を <span class="sv-num"> で包む
	var wrapNumber = function (node) {
		var m = node.nodeValue.match(/^(\D*?)(\d[\d,.]*)(.*)$/s);
		if (!m) { return false; }
		var frag = document.createDocumentFragment();
		if (m[1]) { frag.appendChild(document.createTextNode(m[1])); }
		var num = document.createElement('span');
		num.className = 'sv-num';
		num.textContent = m[2];
		frag.appendChild(num);
		if (m[3]) { frag.appendChild(document.createTextNode(m[3])); }
		node.parentNode.replaceChild(frag, node);
		return true;
	};
	// ヒーローの実績：「<strong>導入企業</strong>1,200社」の数字
	document.querySelectorAll('.sv-blk--hero .bge-ckeditor > ul li').forEach(function (li) {
		Array.prototype.some.call(li.childNodes, function (node) { return node.nodeType === 3 && wrapNumber(node); });
	});
	// 料金プラン：見出しの次の段落「月額 3,000円」の数字
	document.querySelectorAll('.sv-blk--plans .bge-ckeditor > h3 + p').forEach(function (p) {
		Array.prototype.some.call(p.childNodes, function (node) { return node.nodeType === 3 && wrapNumber(node); });
	});

	// よくある質問：h3 の中にボタンを入れ、直後の回答を開閉する（最初はすべて閉じる）
	document.querySelectorAll('.sv-blk--faq .bge-ckeditor').forEach(function (box, boxIndex) {
		box.querySelectorAll('h3').forEach(function (h3, i) {
			var answers = [];
			var next = h3.nextElementSibling;
			while (next && next.tagName !== 'H3') { answers.push(next); next = next.nextElementSibling; }
			if (!answers.length) { return; }
			var id = 'sv-faq-' + boxIndex + '-' + i;
			var btn = document.createElement('button');
			btn.type = 'button';
			btn.className = 'sv-faq__toggle';
			btn.setAttribute('aria-controls', id);
			while (h3.firstChild) { btn.appendChild(h3.firstChild); }
			h3.appendChild(btn);
			answers[0].id = id;
			var set = function (open) {
				btn.setAttribute('aria-expanded', open ? 'true' : 'false');
				h3.classList.toggle('is-collapsed', !open);
				answers.forEach(function (a) { a.hidden = !open; });
			};
			set(false);
			btn.addEventListener('click', function () { set(btn.getAttribute('aria-expanded') !== 'true'); });
		});
	});

	// メールフォーム：押したボタンに応じて mode を設定（Confirm / Back / Submit）
	var mode = document.getElementById('MailMessageMode');
	if (mode) {
		document.querySelectorAll('.form-submit').forEach(function (btn) {
			btn.addEventListener('click', function () {
				btn.style.pointerEvents = 'none';
				mode.value = (btn.id || '').replace('BtnMessage', '');
			});
		});
	}
})();
