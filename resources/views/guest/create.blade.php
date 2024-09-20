<x-app-layout>
    <x-slot name="header">
        <h2>フォーム</h2>
    </x-slot>

    <form method="post" action="{{ route('guest.store') }}">
        @csrf
        <div>


            <div>
                名前<input type="text" name="name" id="name">
            </div>
            <div>
                電話番号<input type="tel" name="tel" id="tel">
            </div>
            <div>
                メールアドレス<input type="email" name="mail" id="mail">
            </div>
        </div>
        <x-primary-button>
            登録
        </x-primary-button>
    </form>
</x-app-layout>
