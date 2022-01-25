<x-layout>
    <x-slot name="title">ToCreate | アカウント管理</x-slot>
    <x-slot name="style">{{ url('css/settings.css') }}</x-slot>

    <div class="container my-5">
        {{-- アカウント情報変更フォーム --}}
        <h3 class="pb-3 text-center text-primary">アカウント情報の変更</h3>

        {{-- ユーザー名 --}}
        <form class="needs-validation pb-5" novalidate>
            <div class="mb-3">
                <label for="username">ユーザー名</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="username" placeholder="15文字以内で入力してください" value="">
                    <div class="invalid-feedback" style="width: 100%;">
                        入力必須です。
                    </div>
                </div>
            </div>

            {{-- メールアドレス --}}
            <div class="mb-3">
                <label for="email">メールアドレス</label>
                <input type="email" class="form-control" id="email" placeholder="you@example.com" value="">
                <div class="invalid-feedback">
                    入力必須です。
                </div>
            </div>

            {{-- パスワード --}}
            <div class="mb-3">
                <label for="password">パスワード</label>
                <input type="password" class="form-control" id="password" placeholder="6～15文字の半角英数字で入力してください">
                <div class="invalid-feedback">
                    入力必須です。
                </div>
            </div>

            {{-- パスワード(再入力) --}}
            <div class="pb-4">
                <label for="password-cf">パスワード(再入力)</label>
                <input type="password" class="form-control" id="password-cf" placeholder="6～15文字の半角英数字で入力してください">
                <div class="invalid-feedback">
                    入力必須です。
                </div>
            </div>

            {{-- アカウント情報変更ボタン --}}
            <button class="btn btn-primary btn-lg col-12 mt-2" type="submit">変更する</button>
        </form>

        {{-- アカウント削除フォーム --}}
        <h3 class="pt-5 pb-3 text-center text-danger">アカウントの削除</h3>

        {{-- パスワード入力 --}}
        <form class="needs-validation pb-5" novalidate>
            <div class="pb-4">
                <label for="password">パスワード</label>
                <input type="password" class="form-control" id="password" placeholder="削除するにはパスワードを入力してください" required>
                <div class="invalid-feedback">
                    入力必須です。
                </div>
            </div>

            {{-- アカウント削除ボタン --}}
            <button class="btn btn-outline-danger btn-lg col-12 mt-2" type="submit">削除する</button>
        </form>

        {{-- 戻るボタン --}}
        <div class="pt-5 text-center">
            <a href="/">
                <button class="btn btn-outline-primary">&laquo;&nbsp;戻る</button>
            </a>
        </div>
    </div>
</x-layout>
