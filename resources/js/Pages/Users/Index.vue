<script setup>
import { defineProps, ref, watch } from "vue";
import { Inertia } from "@inertiajs/inertia";

const props = defineProps({
    users: Object,
    filters: Object,
});

let search = ref(props.filters?.search || "");

watch(search, (value) => {
    Inertia.get(
        "/users",
        { search: value },
        { preserveState: true, replace: true }
    ); //Included the query string
});
</script>

<template>
    <div>
        <div class="flex justify-between">
            <h1 class="text-3xl">Users</h1>

            <Link href="/users/create" class="text-blue-500">New User</Link>

            <input
                v-model="search"
                type="search"
                placeholder="Search..."
                class="border p-1 rounded my-2"
            />
        </div>
        <div class="flex flex-col">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="overflow-hidden">
                        <table class="min-w-full">
                            <tbody>
                                <tr v-for="user in users.data" class="border-b">
                                    <td
                                        class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"
                                    >
                                        {{ user.id }}
                                    </td>
                                    <td
                                        class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap"
                                    >
                                        {{ user.email }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-6 w-full flex justify-between">
            <Link
                v-for="link in users.links"
                :href="link.url"
                v-html="link.label"
            ></Link>
        </div>
    </div>
</template>
