@props(['name' => 'image_file', 'current' => null])

<div x-data="{
    preview: '{{ $current }}',
    dragover: false,
    handleFile(file) {
        if (file && file.type.startsWith('image/')) {
            const reader = new FileReader();
            reader.onload = (e) => this.preview = e.target.result;
            reader.readAsDataURL(file);
        }
    }
}" class="space-y-2">
    <div
        x-on:dragover.prevent="dragover = true"
        x-on:dragleave="dragover = false"
        x-on:drop.prevent="dragover = false; handleFile($event.dataTransfer.files[0]); $refs.input.files = $event.dataTransfer.files"
        :class="{ 'border-blue-500 bg-blue-50 dark:bg-blue-900/20': dragover }"
        class="relative flex flex-col items-center justify-center rounded-lg border-2 border-dashed border-gray-300 dark:border-gray-600 p-6 transition-colors cursor-pointer hover:border-gray-400 dark:hover:border-gray-500"
        x-on:click="$refs.input.click()"
    >
        <template x-if="preview">
            <img :src="preview" class="max-h-40 rounded-md object-cover mb-2" />
        </template>
        <template x-if="!preview">
            <svg class="w-10 h-10 text-gray-400 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>
        </template>
        <p class="text-sm text-gray-500 dark:text-gray-400">
            <span class="font-medium text-blue-600 dark:text-blue-400">Click to upload</span> or drag and drop
        </p>
        <p class="text-xs text-gray-400 dark:text-gray-500 mt-1">PNG, JPG, WEBP up to 5MB</p>
        <input x-ref="input" type="file" name="{{ $name }}" accept="image/*" class="hidden" x-on:change="handleFile($event.target.files[0])" />
    </div>
</div>
