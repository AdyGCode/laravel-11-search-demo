<x-guest-layout>

    <article>
        <header class="flex flex-row justify-between items-baseline">
            <h2 class="text-2xl">User List</h2>

            <form action="{{ route('users.index') }}"
                  method="get"
                  class="flex flex-row gap-4 items-center mb-4"  >
                <x-input-label for="Search" :value="__('Search')" class="sr-only"/>
                <x-text-input id="Search"
                              name="search"
                              type="text"
                              :value="old('search')??$search"
                              class="mr-2 w-72"  />
                <x-primary-button class="bg-neutral-500">{{ __('Search!') }}</x-primary-button>
            </form>

        </header>

        <section>
            <table class="w-full">
                <thead>
                <tr class="bg-neutral-800 text-neutral-200">
                    <th class="w-1/12 px-1 text-right">ID</th>
                    <th class="w-4/12 px-1 text-left">Name</th>
                    <th class="w-5/12 px-1 text-left">EMail</th>
                </tr>
                </thead>
                <tbody>

                @foreach($users as $user)
                <tr>
                    <td class="w-1/12 px-1 text-right text-neutral-400">{{ $user->id }}</td>
                    <td class="w-4/12 px-1">{{ $user->name }}</td>
                    <td class="w-5/12 px-1">{{ $user->email }}</td>
                </tr>
                @endforeach

                </tbody>
                <tfoot>
                <tr>
                    <td colspan="3">
                        {{ $users->links() }}
                    </td>
                </tr>
                </tfoot>
            </table>

        </section>
    </article>


</x-guest-layout>
