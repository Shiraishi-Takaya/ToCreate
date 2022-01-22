<x-layout>
    <x-slot name="title">ToCreate | ログイン</x-slot>
    <x-slot name="style">{{ url('css/login.css') }}</x-slot>

    <form class="form-signin">
        <input type="email" id="inputEmail" class="form-control" placeholder="メールアドレス" required autofocus>
        <input type="password" id="inputPassword" class="form-control" placeholder="パスワード" required>
        <div class="checkbox mb-3">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">ログイン</button>
      </form>
</x-layout>
