<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Comment') }} &raquo {{ __('Edit Comment') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg lg:mt-5">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('comment.update', $comment->id) }}" method="post">
                        @csrf
                        @method('patch')
                        <div class="mb-3">
                            <x-input-label>Comment</x-input-label>
                            <textarea
                                class="@error('comments_content') bg-red-50 border border-red-500 text-red-900 placeholder-red-700 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 @else border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @enderror"
                                name="comments_content">{{ $comment->comments_content }}</textarea>
                            @error('comments_content')
                                <div class="text-red-600">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <x-primary-button type="submit">Edit Comment</x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
