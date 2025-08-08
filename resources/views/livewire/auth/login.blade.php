<div>
    @extends('welcome')
    @section('content')
        <div class="mx-auto overflow-hidden mt-10 rounded-lg main-card object-center">
            <div class="p-5">
                <form wire:submit.event='login' action="#">
                    <div class="p-5 text-white text-center text-3xl grid grid-cols-6 gap-4">
                        <div class="col-start-1 col-end-3">
                            Login
                        </div>
                        <div class="col-start-3 col-end-4">
                            <img src="{{ asset('assets/img/logo_light_round.png') }}" alt="Logo VK Beauty Scheduler"
                                width="50px">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input type="email"
                                    class="col-start-1 row-start-1 w-full appearance-none rounded-md py-1.5 pr-7 pl-3 text-base text-gray-500 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6 border-2 border-gray-300"
                                    placeholder="Email" wire:model.defer="email">
                            </div>
                        </div>
                        <div class="col-sm-12 pt-4">
                            <div class="form-group">
                                <input type="password"
                                    class="col-start-1 row-start-1 w-full appearance-none rounded-md py-1.5 pr-7 pl-3 text-base text-gray-500 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6 border-2 border-gray-300"
                                    placeholder="Senha" wire:model.defer="senha">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    @endsection
</div>
