<x-app-layout>
    <x-slot name="title">ダッシュボード</x-slot>
    
        <x-slot name="header">
        <div class="container">
                <div class="row">
                    <div class="col-12 p-3">
                        <h2 class="text-secondary">MYページ</h2>		
                    </div>
                </div>
            </div>  
        </x-slot>
    
        <x-slot name="slot">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                    @if (session('flash_message'))
                        <div class="flash_message">
                            {{ session('flash_message') }}
                        </div>
                    @endif
                    @if (count($errors) > 0)
                    <ul>
                        @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    @endif
                </div>

                    </div>
                </div>
            </div>
        </x-slot>


        <x-slot name="script">
            <script>
            
            </script>
        </x-slot>
    </x-app-layout>
    