@php 
    $editing = isset($agent);
@endphp

<div class="flex flex-wrap -mx-4 -mb-4 md:mb-0">
    <x-inputs.text name="name" :label="__('crud.inputs.name')" value="{{ old('name', ($editing ? $agent->name : '')) }}"></x-inputs.text>

    <x-inputs.email name="email" :label="__('crud.inputs.email')" value="{{ old('email', ($editing ? $agent->email : '')) }}"></x-inputs.email>

    <div class="w-full md:w-1/2 px-4 mb-4 md:mb-0">
        <div class="mb-6">
            <label class="block text-gray-800 text-sm font-semibold mb-2" for="phone">{{ __('crud.inputs.phone') }}</label>
            <input type="tel" class="dark:bg-gray-700 dark:text-gray-300 appearance-none w-full p-4 text-xs font-semibold leading-none bg-gray-50 rounded outline-none mb-2 inptFielsd" id="phone" value="{{ old('mobile', ($editing ? $agent->mobile : '')) }}" placeholder="123456789" />
        </div>
    </div>
    
    @if(!$editing)
        <x-inputs.password name="password" :label="__('crud.inputs.password')" value="{{ old('password', ($editing ? $agent->password : '')) }}"></x-inputs.password>
    @endif
    <x-inputs.select name="geoFencing_id" id="geoFencing_id" label="{{ __('crud.inputs.city_name') }}">
        <option value="NULL" hidden>Select City For Agent</option>
        @forelse ($geoFencing as $geo)
            <option {{ ($editing ? ($agent->geoFence->city_name == $geo->city_name ? 'selected' : '') : '') }}  value="{{ $geo->id }}">{{ $geo->city_name }}</option>
        @empty
            <option hidden>No City Found</option>
        @endforelse
    </x-inputs.select>
 
    
    <div class="w-full md:w-1/2 px-4 mb-4 md:mb-0">
        <div class="mb-6">
            <div x-data="avatarComponentData()">
                <x-inputs.partials.label name="avatar" :label="__('crud.inputs.avatar')"></x-inputs.partials.label>
                
                <img
                    :src="avatarDataUrl"
                    style="object-fit: cover; width: 150px; height: 150px;"
                /><br />

                <div class="mt-2">
                    <input
                        class="block dark:text-gray-400 text-gray-800 text-sm font-semibold mb-2"
                        type="file"
                        name="avatar"
                        id="avatar"
                        @change="fileChanged"
                    />
                </div>
            </div>
        </div>
    </div>
</div>

@push('endScripts')
    <script>

$(document).on('change', '.statusPrimary', function() {
            var id = $(this).data('id');
            var url = baseUrl+'api/user/city/'+id;
            $.get(url, { }, function(response) {
                if (response.success == true) {
                   
                } 
            }, 'json');
    });


        /* Alpine component for avatar uploader viewer */
        function avatarComponentData() {
            return {
                avatarDataUrl: '{{ $editing && $agent->avatar ? asset("storage/".$agent->avatar) : asset("img/avatar.png") }}',

                fileChanged(event) {
                    this.fileToDataUrl(event, src => this.avatarDataUrl = src)
                },

                fileToDataUrl(event, callback) {
                    if (! event.target.files.length) return

                    let file = event.target.files[0],
                        reader = new FileReader()

                    reader.readAsDataURL(file)
                    reader.onload = e => callback(e.target.result)
                }
            }
        }
    </script>
@endpush