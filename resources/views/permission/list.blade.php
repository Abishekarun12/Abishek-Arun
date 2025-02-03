<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Permission') }}
            </h2>
            <div class="flex items-center space-x-4">
                @can('permission_create')
                    <a href="{{ route('permission.create') }}">
                        <x-primary-button class="ms-4">{{ __('Create') }}</x-primary-button>
                    </a>
                @endcan
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-4">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Permission List") }}
                </div>

                <div class="py-12" id="refresh_div">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <!-- Web Guard Permissions -->
                        <div class="bg-white rounded-lg shadow-lg p-4">
                            <h3 class="text-lg font-semibold text-gray-700 mb-4">Web Guard Permissions</h3>
                            <table class="min-w-full divide-y divide-gray-200 table-auto">
                                <thead>
                                    <tr>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Permission Name</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Created At</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach ($permissions->where('guard_name', 'web') as $permission)
                                        <tr class="hover:bg-gray-100 transition-colors">
                                            <td class="px-6 py-4 text-sm font-medium text-gray-900">{{ $permission->id }}</td>
                                            <td class="px-6 py-4 text-sm font-medium text-gray-900">{{ $permission->name }}</td>
                                            <td class="px-6 py-4 text-sm text-gray-500">{{ $permission->created_at }}</td>
                                            <td class="px-6 py-4 text-right text-sm font-medium space-x-2">
                                                @can('permission_edit')
                                                    <a href="{{ route('permission.edit', $permission->id) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                                @endcan
                                                <br>
                                                @can('permission_delete')
                                                    <form id="del_permission_{{ $permission->id }}" class="del_permission_form" data-id="{{ $permission->id }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
                                                    </form>
                                                @endcan
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <!-- Admin Guard Permissions -->
                        <div class="bg-white rounded-lg shadow-lg p-4">
                            <h3 class="text-lg font-semibold text-gray-700 mb-4">Admin Guard Permissions</h3>
                            <table class="min-w-full divide-y divide-gray-200 table-auto">
                                <thead>
                                    <tr>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Permission Name</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Created At</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach ($permissions->where('guard_name', 'admin') as $permission)
                                        <tr class="hover:bg-gray-100 transition-colors">
                                            <td class="px-6 py-4 text-sm font-medium text-gray-900">{{ $permission->id }}</td>
                                            <td class="px-6 py-4 text-sm font-medium text-gray-900">{{ $permission->name }}</td>
                                            <td class="px-6 py-4 text-sm text-gray-500">{{ $permission->created_at }}</td>
                                            <td class="px-6 py-4 text-right text-sm font-medium space-x-2">
                                                @can('permission_edit')
                                                    <a href="{{ route('permission.edit', $permission->id) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                                @endcan
                                                <br>
                                                @can('permission_delete')
                                                    <form id="del_permission_{{ $permission->id }}" class="del_permission_form" data-id="{{ $permission->id }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
                                                    </form>
                                                @endcan
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
    $(document).ready(function() {
        $('.del_permission_form').submit(function(e) {
            e.preventDefault();
            const form = $(this);
            const formData = new FormData(this);
            const permissionId = form.data('id');
            $.ajax({
                type: 'POST',
                url: '{{ route('permission.destroy', 0) }}' + permissionId,
                data: formData,
                processData: false,
                contentType: false,
                dataType: 'json',
                success: function(response) {
                    toastr.success(response.message || "Permission Deleted Successfully!");
                    setTimeout(() => {
                        $("#refresh_div").load(location.href + " #refresh_div");
                    }, 1000);
                },
                error: function(xhr) {
                    let errorMsg = xhr.responseJSON?.error || "An error occurred. Please try again.";
                    if (xhr.responseJSON?.errors) {
                        errorMsg = Object.values(xhr.responseJSON.errors).join('<br>');
                    }
                    toastr.error(errorMsg);
                }
            });
        });
    });
</script>
