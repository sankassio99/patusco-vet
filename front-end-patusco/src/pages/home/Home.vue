<script setup lang="ts">
import ManagementStore, { UserType } from '@src/stores/scheduleList';


function selectUser(userType: UserType) {
    ManagementStore.currentUserType = userType;
}

</script>

<template>
    <div class="my-10">
        <h1 class="text-4xl font-bold text-center mb-6">Login</h1>

        <div class="flex flex-col justify-center w-full items-center space-y-5">
            <div class="max-w-sm rounded overflow-hidden shadow-lg p-4 bg-white w-2/4">
                <div class="font-bold text-xl mb-2">Client</div>
                <p class="text-gray-700 text-base">
                    You can make a appointment with him.
                </p>
                <button @click="selectUser(UserType.CLIENT)"
                    class="mt-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Sign in
                </button>
            </div>
            <div class="max-w-sm rounded overflow-hidden shadow-lg p-4 bg-white w-2/4">
                <div class="font-bold text-xl mb-2">Employee</div>
                <p class="text-gray-700 text-base">
                    You can manage appointments and assign doctors.
                </p>
                <button @click="selectUser(UserType.EMPLOYEE)"
                    class="mt-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Sign in
                </button>
            </div>
            <div class="max-w-sm rounded overflow-hidden shadow-lg p-4 bg-white w-2/4">
                <div class="font-bold text-xl mb-2">Doctor</div>
                <p class="text-gray-700 text-base">
                    You can manage appointments.
                </p>
                <button @click="selectUser(UserType.DOCTOR)"
                    class="mt-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Sign in
                </button>
            </div>
        </div>

    </div>
</template>

<style scoped></style>
