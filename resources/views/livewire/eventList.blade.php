<div>
    <div class="grid grid-cols-1 text-blue-800 font-semibold content-center justify-items-center gap-2 my-12 h-96">
        @foreach ($Events as $item)
            <div class="grid grid-cols-8 bg-gray-200 w-1/2 rounded-xl text-md h-8 content-center px-3">
                <div class="grid col-span-7">
                    {{$item->title}} 
                </div> 
                <div class="content-center hover:cursor-pointer">
                    <i class="fa fa-times float-end text-red-500 " aria-hidden="true" wire:click="remove({{$item->id}})"></i></div>
                </div>
        @endforeach
    </div>
    <div class="grid px-10">
        {{$Events->links()}}
    </div>
</div>