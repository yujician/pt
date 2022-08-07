<x-guest-layout>
    <x-slot name="title">新規登録</x-slot>
    <x-auth-card>
        <x-slot name="logo">
            <div class="d-block">
                <a href="/" class="btn btn-white text-uppercase mb-1 btn-hover-primary">
                    {{-- <x-application-logo class="w-20 h-20 fill-current text-gray-500" /> --}}
                    <img class="w-100 h-20 fill-current" src="{{ asset('img/logos/header-logo1.png') }}" alt="Fukuda-printing">
                </a>
            </div>
        </x-slot>

        <x-slot name="slot">
            <div class="container">

        <script src="https://yubinbango.github.io/yubinbango/yubinbango.js" charset="UTF-8"></script>
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form class="h-adr" method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Company -->
            {{-- <div class="mt-3">
                <x-label for="company_name">会社名</x-label>
                <x-input id="company_name" class="block mt-1 w-full" type="text" name="company_name" :value="old('company_name')" autofocus />
            </div> --}}

            <!-- Name -->
            <div class="mt-3">
                <x-label for="company_name">名前<span class="text-danger">*</span></x-label>
                <x-input id="name" class="block mt-1 w-full form-control" type="text" name="name" minlength="2" maxlength="13" placeholder="2〜13字以内" :value="old('name')" required />
            </div>

            <!-- Email Address -->
            <div class="mt-3">
                <x-label for="company_name">メールアドレス<span class="text-danger">*</span></x-label>
                <x-input id="email" class="block mt-1 w-full form-control" type="email" name="email" :value="old('email')" maxlength="40" placeholder="40字以内" required 
                pattern="^[a-zA-Z0-9.!#$&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)+$"/>
            </div>

            <!-- Password -->
            <div class="mt-3">
                <x-label for="company_name">パスワード<span class="text-danger">*</span></x-label>
                <x-input id="password" class="block mt-1 w-full form-control" type="password" name="password" required autocomplete="new-password" 
                minlength="8" maxlength="24" pattern="(?=.*\d)(?=.*[a-zA-Z]).{8,}" placeholder="8字以上で数字とｱﾙﾌｧﾍﾞｯﾄを含む" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-3">
                <x-label for="company_name">パスワード確認<span class="text-danger">*</span></x-label>
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required />
            </div>

            {{-- <!-- Phone -->
            <div class="mt-3">
                <x-label for="company_name">電話番号<span class="text-danger">*</span></x-label>
                <x-input id="tel" class="block mt- w-25%" type="text" name="tel" :value="old('tel')" required />
            </div>

            <!-- Fax -->
            <div class="mt-3">
                <x-label for="company_name">Fax番号</x-label>
                <x-input id="tel" class="block mt- w-25%" type="text" name="fax" :value="old('fax')" required />
            </div>

            <!-- Address -->
            <input type="hidden" class="p-country-name" value="Japan">
            <div class="mt-3">
                <x-label for="company_name">郵便番号<span class="text-danger">*</span></x-label>
                <x-input id="yubin" class="block mt- w-25% p-postal-code" type="text" name="yubin" :value="old('yubin')" required />
            </div>

            <div class="mt-3">
                <x-label for="company_name">都道府県<span class="text-danger">*</span></x-label>
                <x-input id="addr1" class="block mt-1 w-full p-region" type="text" name="addr1" :value="old('addr1')" required />
            </div>

            <div class="mt-3">
                <x-label for="company_name">市区町村・番地<span class="text-danger">*</span></x-label>
                <x-input id="addr2" class="block mt-1 w-full p-locality p-street-address" type="text" name="addr2" :value="old('addr2')" required />
            </div>

            <div class="mt-3">
                <x-label for="company_name p-extended-address">建物名</x-label>
                <x-input id="addr3" class="block mt-1 w-full" type="text" name="addr3" :value="old('addr3')" />
            </div> --}}

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </div>
</x-slot>
    </x-auth-card>
</x-guest-layout>
