<form wire:submit.prevent="submit">
<div class="grid grid-cols-1 mt-10 border p-5 border-inherit bg-slate-500 gap-6 rounded-xl">
    <input type="text" name="title" placeholder="Title" class="p-2 rounded-xl" wire:model="title" >
    @error('title') <span class="text-red-500 text-sm font-bold">{{ $message }}</span> @enderror
    <textarea name="description" cols="30" rows="4" placeholder="Description" wire:model="description" class="rounded-xl p-2"></textarea>
    <div class="grid grid-cols-3 items-baseline">
        <label for="starting_date_time" class="text-white font-bold">Start Date & Time</label>
        <input type="datetime-local" min="{{$now}}" name="starting_time" wire:model="starting_time" placeholder="Start time and date" id="" class="rounded-xl p-2 col-span-2">
        @error('starting_time') <span class="text-red-500 text-sm col-span-2 font-bold">{{ $message }}</span> @enderror
    </div>
    <div class="grid grid-cols-3 items-baseline">
        <label for="starting_date_time" class="text-white font-bold">End Date & Time</label>
        <input type="datetime-local" min="{{$now}}"  wire:model="ending_time" name="starting_date_time" placeholder="End time and date" id="" class="rounded-xl p-2 col-span-2">
    </div>
    <div class="grid grid-cols-3 items-baseline">
        <label for="departments" class="text-white font-bold" wire:model="notify_data">Departments</label>
        <select name="departments" class="rounded-xl p-2 col-span-2" wire:model="notify_data">
            <option value="" selected>Select a Course</option>
            @foreach($courses as $option)
            <option value="{{ $option }}">{{ $option->title }}</option>
            @endforeach
        </select>
        @error('notify_data') <span class="text-red-500 text-sm col-span-2 font-bold">{{ $message }}</span> @enderror
    </div>
    <button type="submit" class="bg-blue-600 p-1 rounded-xl text-white font-semibold w-1/3 hover:bg-blue-400">Schedule Event</button>
</div>
</form>