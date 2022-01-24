<x-layout>
    <x-slot name="title">ToCreate | ログイン</x-slot>
    <x-slot name="style">{{ url('css/login.css') }}</x-slot>

    <form class="form-signin">
        <input type="email" id="inputEmail" class="form-control" placeholder="メールアドレス" required autofocus>
        <input type="password" id="inputPassword" class="form-control" placeholder="パスワード" required>
        <div class="checkbox mb-3">
          <label>
            <input type="checkbox" value="remember-me"> ログイン状態を保存する
          </label>
        </div>
        <button class="btn btn-lg btn-primary col-12" type="submit">ログイン</button>
      </form>
</x-layout>
