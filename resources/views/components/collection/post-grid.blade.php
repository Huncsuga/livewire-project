@props(['posts'])

<div>
<table class="table-auto w-full">
        <thead>
            <tr class="bg-gray-200">
                <th class="px-4 py-2">Title</th>
                <th class="px-4 py-2">Body</th>
                <th class="px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
                <tr>
                    <td class="border px-4 py-2">{{ $post->title }}</td>
                    <td class="border px-4 py-2">{{ $post->body }}</td>
                    <td class="border px-4 py-2">
                        <button wire:click="edit({{ $post->id }})" class="bg-yellow-500 text-white px-4 py-2 rounded">Edit</button>
                        <button wire:click="delete({{ $post->id }})" class="bg-red-500 text-white px-4 py-2 rounded">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $posts->links() }}
</div>
