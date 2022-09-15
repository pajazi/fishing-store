<template>
    <h1 class="text-3xl">Create New User</h1>

    <form @submit.prevent="submit" class="max-w-md mx-auto mt-8">
        <div vlass="mb-6">
            <label
                class="block mb-2 uppercase font-bold text-xs text-gray-700"
                for="name"
            >
                Name
            </label>

            <input
                class="border border-gray-400 p-2 w-full"
                type="text"
                name="name"
                id="name"
                v-model="form.name"
            />
            <div
                v-if="form.errors.name"
                v-text="form.errors.name"
            ></div>
        </div>

        <div vlass="mt-6">
            <label
                class="block mb-2 uppercase font-bold text-xs text-gray-700"
                for="email"
            >
                Email
            </label>

            <input
                class="border border-gray-400 p-2 w-full"
                type="email"
                name="email"
                id="email"
                v-model="form.email"
                required
            />
            <div
                v-if="form.errors.email"
                v-text="form.errors.email"
            ></div>
        </div>

        <div vlass="mt-6">
            <label
                class="block mb-2 uppercase font-bold text-xs text-gray-700"
                for="password"
            >
                Password
            </label>

            <input
                class="border border-gray-400 p-2 w-full"
                type="password"
                name="password"
                id="password"
                v-model="form.password"
                required
            />
            <div
                v-if="form.errors.password"
                v-text="form.errors.password"
            ></div>
        </div>

        <div class="mt-6">
            <button
                type="submit"
                :disabled="form.processing"
                class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500"
            >
                Submit
            </button>
        </div>
    </form>
</template>

<script setup>
import { useForm } from "@inertiajs/inertia-vue3";
//when working with vue form data property
let form = useForm({
    name: "",
    email: "",
    password: "",
});

let submit = () => {
    form.post('/users');

    //Equivalent

    // Inertia.post("/users", form, {
    //     //Inertia Lifecycle hooks
    //     onStart: () => {},
    //     onFinish: () => {},
    // });
};
</script>
