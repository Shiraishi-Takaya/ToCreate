<x-layout>
    <x-slot name="title">ToCreate | アカウント登録</x-slot>
    <x-slot name="style">{{ url('css/signup.css') }}</x-slot>

    <div class="container">
        <h3 class="py-3 text-center text-primary">ToCreateに登録</h3>

        {{-- アカウント登録フォーム --}}
        <form class="needs-validation" novalidate>
            {{-- ユーザー名 --}}
            <div class="mb-3">
                <label for="username">ユーザー名</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="username" placeholder="15文字以内で入力してください" required>
                    <div class="invalid-feedback" style="width: 100%;">
                        入力必須です。
                    </div>
                </div>
            </div>

            {{-- メールアドレス --}}
            <div class="mb-3">
                <label for="email">メールアドレス</label>
                <input type="email" class="form-control" id="email" placeholder="you@example.com" required>
                <div class="invalid-feedback">
                    入力必須です。
                </div>
            </div>

            {{-- パスワード --}}
            <div class="mb-3">
                <label for="password">パスワード</label>
                <input type="password" class="form-control" id="password" placeholder="6～15文字の半角英数字で入力してください" required>
                <div class="invalid-feedback">
                    入力必須です。
                </div>
            </div>

            {{-- パスワード(再入力) --}}
            <div class="pb-4">
                <label for="password-cf">パスワード(再入力)</label>
                <input type="password" class="form-control" id="password-cf" placeholder="6～15文字の半角英数字で入力してください" required>
                <div class="invalid-feedback">
                    入力必須です。
                </div>
            </div>

            {{-- アカウント登録ボタン --}}
            <button class="btn btn-primary btn-lg col-12 mt-2" type="submit">登録する</button>
        </form>

        {{-- 戻るボタン --}}
        <div class="mt-5 text-center">
            <a href="/">
                <button class="btn btn-outline-primary">&laquo;&nbsp;戻る</button>
            </a>
        </div>
    </div>

    <x-slot name="script"></x-slot>
</x-layout>
