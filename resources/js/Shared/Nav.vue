<script setup>
import NavLink from "./NavLink.vue";
</script>

<template>
    <nav>
        <ul class="flex space-x-6 list-inside">
            <li>
                <NavLink href="/" component="Home">Home</NavLink>
            </li>
            <li>
                <NavLink href="/users" component="Users">Users</NavLink>
            </li>
            <li>
                <NavLink href="/settings" component="Settings"
                    >Settings</NavLink
                >
            </li>
            <li>
                <!-- Every item that is not defined as a props will directly be inherited to the parent of the template !!!!-->
                <NavLink
                    href="logout"
                    method="post"
                    as="button"
                    :data="{ username: 'pajazi' }"
                >
                    Log Out
                </NavLink>
            </li>
        </ul>
    </nav>
</template>
