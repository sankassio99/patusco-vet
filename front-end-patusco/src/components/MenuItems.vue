<script setup lang="ts">
import { Badge } from '@components/ui/badge';
import ManagementStore, { UserType } from '@src/stores/scheduleList';
import { ref, watch } from 'vue';

const currentUserType = ref<string>('');

watch(ManagementStore, () => {
	currentUserType.value = ManagementStore.currentUserType;
})

</script>

<template>
	<nav v-if="currentUserType != ''" class="bg-gray-800 p-4 h-14">
		
		<Badge style="position: absolute;">{{ currentUserType }}</Badge>

		<ul class="flex space-x-4 justify-center">
			<li>
				<RouterLink to="/" class="text-white hover:text-gray-400">Home</RouterLink>
			</li>
			<li v-if="currentUserType == UserType.EMPLOYEE || currentUserType == UserType.CLIENT">
				<RouterLink to="/ScheduleForm" class="text-white hover:text-gray-400">Schedule</RouterLink>
			</li>
			<li v-if="currentUserType == UserType.EMPLOYEE || currentUserType == UserType.DOCTOR">
				<RouterLink to="/ScheduleTable" class="text-white hover:text-gray-400">Management</RouterLink>
			</li>
		</ul>
	</nav>
</template>