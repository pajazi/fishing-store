<template>
    <main>
        <section class="bg-white p-8">
            <form @submit.prevent="submit" class="max-w-md mx-auto mt-8">
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
                        Login
                    </button>
                </div>
            </form>
        </section>
    </main>
</template>

<script>
export default {
    layout: null,
};
</script>

<script setup>
import { useForm } from "@inertiajs/inertia-vue3";

const form = useForm({
    email: "",
    password: "",
});

let submit = () => {
    form.post('/login');
};
</script>
