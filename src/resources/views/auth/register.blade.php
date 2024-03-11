<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo" >
            <div>
                <h1 class="text-20 italic">会員登録</h1>
            </div>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" placeholder="名前" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" placeholder="メールアドレス" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('')" />

                <x-input id="password" class="block mt-1 w-full"
                                placeholder="パスワード"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation"  :value="__('')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                placeholder="確認用パスワード"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <div class="login">アカウントをお持ちの方はこちら<br/></div>
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('ログイン') }}
                </a>

                <x-button class="ml-4">
                    {{ __('会員登録') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>