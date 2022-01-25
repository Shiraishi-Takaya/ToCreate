<x-layout>
    <x-slot name="title">ToCreate | アカウント登録</x-slot>
    <x-slot name="style">{{ url('css/signup.css') }}</x-slot>

    <div class="container">
        <h3 class="py-3 text-center text-primary">ToCreateに登録</h3>

        <form class="needs-validation" novalidate>
            <div class="mb-3">
                <label for="username">ユーザー名</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="username" placeholder="15文字以内で入力してください" required>
                    <div class="invalid-feedback" style="width: 100%;">
                        入力必須です。
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="email">メールアドレス</label>
                <input type="email" class="form-control" id="email" placeholder="you@example.com">
                <div class="invalid-feedback">
                    入力必須です。
                </div>
            </div>

            <div class="mb-3">
                <label for="password">パスワード</label>
                <input type="password" class="form-control" id="password" placeholder="6～15文字の半角英数字で入力してください" required>
                <div class="invalid-feedback">
                    入力必須です。
                </div>
            </div>

            <div class="pb-4">
                <label for="re-password">パスワード(再入力)</label>
                <input type="password" class="form-control" id="re-password" placeholder="6～15文字の半角英数字で入力してください" required>
                <div class="invalid-feedback">
                    入力必須です。
                </div>
            </div>

            <button class="btn btn-primary btn-lg col-12 mt-2" type="submit">登録する</button>
        </form>

        <div class="mt-5 text-center">
            <a href="/">
                <button class="btn btn-outline-primary">&laquo;&nbsp;戻る</button>
            </a>
        </div>
    </div>
</x-layout>
