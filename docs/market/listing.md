# BcLpServiceTheme baserマーケット出品 入力値

フォームの欄の順に並べています。

## 基本情報

| 欄 | 入力値 |
|---|---|
| 公開ステータス | 非公開（承認後に公開） |
| テーマ・プラグイン名（商品名） | BcLpServiceTheme |
| 種類 | 無料テーマ ／ レスポンシブデザイン |
| 販売価格（税抜） | 0 |
| カテゴリ | プロモーション、シンプル、baserCMS5対応 |
| バージョン | 1.0.0 |
| ファイル名 | BcLpServiceTheme.zip |
| ファイルアップロード | `BcLpServiceTheme.zip`（GitHub Release の zip と同じもの） |
| 対応バージョン | 5系：5.4.2、5.4.1、5.4.0 |
| 対応バージョン 備考 | baserCMS5.4以上。BurgerEditor（BcBurgerEditor）プラグインが必要です。 |
| ライセンス | URLで指定する ／ 名称：MIT License ／ URL：https://github.com/kaburk/BcLpServiceTheme/blob/main/LICENSE |
| 提供者 | 名称：kaburk ／ URL：https://blog.kaburk.com/ |
| Webサイト | 名称：（空欄） ／ URL：https://github.com/kaburk/BcLpServiceTheme |
| デモサイト | 空欄 |
| サポートページ | 公式サイト以外 ／ 名称：（空欄） ／ URL：https://github.com/kaburk/BcLpServiceTheme/issues |

## 説明概要（一覧画面・200文字以内：187文字）

```
baserCMS5.4以上向けの、BtoB のサービス紹介と資料請求のための1ページ LP テーマです。お悩み・特長・機能・料金プランと比較表・導入事例・導入の流れ・資料請求フォームまでを、BurgerEditor のブロック操作と管理画面の設定だけで編集できます。配色はテーマ設定の4色で変更でき、見本サイト一式の初期データ付きです。BurgerEditor が必要です。
```

メイン画像：`main.png`（500×500）

---

## 説明情報1

**説明見出し1**：このテーマについて

**説明詳細1**（エディタの「ソース」に貼る）

```html
<p>BcLpServiceTheme は、BtoB のサービス（クラウドサービス・SaaS、士業、制作会社など）の紹介と、資料請求・無料相談のための、1ページのランディングページ（LP）テーマです。</p>
<p>トップの固定ページ1枚に、セクションを BurgerEditor のブロックで並べる構成です。セクションの追加・削除・並べ替えは、ブロック操作だけでできます。</p>
<ul>
<li>ヒーロー／導入企業のロゴ／こんなお悩みはありませんか／特長／機能／料金プラン（比較表）／導入事例／導入の流れ／よくある質問／資料請求・無料相談（CTA）</li>
<li>大見出しブロックの「ID設定」に英字（例 features）を入れると、ヘッダーのナビに自動で載ります</li>
<li>資料請求・無料相談フォームは入力 → 確認 → 完了の3画面。「資料請求」「無料で相談する」のボタンから開くとご用件が、料金プランのボタンから開くとそのプランも選ばれた状態になります</li>
<li>テーマ設定の4色（メイン／サブ／リンク／ホバー）で全体の配色が変わります。どの色にしても文字が読みやすいよう、文字の濃さと白黒を自動で調整します。ロゴもテーマ設定で変更できます</li>
<li>初期データ：見本サイト一式（default）と最小構成（empty）</li>
<li>レスポンシブ（PC／スマホ）、prefers-reduced-motion 対応</li>
</ul>
```

**説明画像1**：`pc-1-hero.png`（PC：ヒーロー・導入企業・お悩み）

---

## 説明情報2

**説明見出し2**：動作環境とインストール

**説明詳細2**

```html
<h4>動作環境</h4>
<ul>
<li>baserCMS5.4以上</li>
<li>BurgerEditor（BcBurgerEditor）プラグインが有効であること</li>
</ul>
<h4>インストール</h4>
<ol>
<li>ダウンロードした zip を解凍し、フォルダ名が「BcLpServiceTheme」であることを確認して plugins フォルダに配置します（管理画面からのアップロードも可能です）</li>
<li>管理画面 &gt; プラグイン管理 で BcBurgerEditor が有効になっていることを確認します</li>
<li>管理画面 &gt; テーマ管理 で BcLpServiceTheme を適用します</li>
<li>同じ画面で初期データ「default」（見本サイト）または「empty」（最小構成）を読み込みます</li>
</ol>
<p><strong>初期データを読み込むと、ユーザー以外のデータ（固定ページ・メールフォーム・サイト基本設定など）は初期化されます。運用中のサイトでは読み込まないでください。</strong></p>
```

**説明画像2**：`sp.png`（スマホ：ファーストビュー・料金プラン・CTA）

---

## 説明情報3

**説明見出し3**：ソースコード・ライセンス

**説明詳細3**

```html
<p>ソースコードは GitHub で公開しています。不具合の報告・要望は Issues にお願いします。</p>
<p><a href="https://github.com/kaburk/BcLpServiceTheme" target="_blank">https://github.com/kaburk/BcLpServiceTheme</a></p>
<p>テーマ本体は MIT License です。同梱物・外部リソースのライセンスは次のとおりです。</p>
<ul>
<li>jQuery 3.7.1（同梱）：MIT License</li>
<li>Google Fonts（Noto Sans JP・Roboto、CDN から読み込み）：SIL Open Font License 1.1</li>
<li>アイコン：Lucide のアイコンをもとにしています（ISC License）</li>
</ul>
<p>ご利用は自己責任でお願いします。</p>
```

**説明画像3**：`pc-2-features.png`（PC：特長・機能）

---

## 説明情報4

**説明見出し4**：（空欄）

**説明詳細4**：（空欄）

**説明画像4**：`pc-3-price.png`（PC：料金プラン・比較表）

---

## 説明情報5

**説明見出し5**：（空欄）

**説明詳細5**：（空欄）

**説明画像5**：`form.png`（PC：資料請求・無料相談フォームの入力画面）

予備：`pc-4-cases.png`（PC：導入事例・導入の流れ）。差し替えたいときに使う。

---

## リリース

| 欄 | 入力値 |
|---|---|
| リリース種別 | 新規公開申請 |
| リリースノート | 新規リリース |

---

## zip の確認結果

GitHub Release 1.0.0 の `BcLpServiceTheme.zip` を作ったあとに確認して書く。

- 最上位フォルダ名が `BcLpServiceTheme` か（解凍してそのまま plugins に置けるか）
- `config.php`・`VERSION.txt`（1.0.0）・`screenshot.png`・初期データ（default／empty）・`LICENSE`・`README.md` を含むか
- `.github`・`docs`・`.DS_Store`・作業用ファイルを含まないか
