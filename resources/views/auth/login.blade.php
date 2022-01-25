<x-layout>
    <x-slot name="title">ToCreate | ログイン</x-slot>
    <x-slot name="style">{{ url('css/login.css') }}</x-slot>

    {{-- ログインフォーム --}}
    <form class="form-signin">
        {{-- メール --}}
        <input type="email" id="inputEmail" class="form-control" placeholder="メールアドレス" required autofocus>
        {{-- パスワード --}}
        <input type="password" id="inputPassword" class="form-control" placeholder="パスワード" required>
        {{-- ログイン状態保存ボタン --}}
        <div class="checkbox mb-3">
          <label>
            <input type="checkbox" value="remember-me"> ログイン状態を保存する
          </label>
        </div>
        {{-- ログインボタン --}}
        <button class="btn btn-lg btn-primary col-12" type="submit">ログイン</button>
      </form>
</x-layout>
