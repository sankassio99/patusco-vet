<script setup lang="ts">

</script>

<template>
	<nav class="bg-gray-800 p-4">
		<ul class="flex space-x-4 justify-center">
			<li>
				<RouterLink to="/" class="text-white hover:text-gray-400">Home</RouterLink>
			</li>
			<li>
				<RouterLink to="/ScheduleForm" class="text-white hover:text-gray-400">Schedule</RouterLink>
			</li>
			<li>
				<RouterLink to="/ScheduleTable" class="text-white hover:text-gray-400">Management</RouterLink>
			</li>
		</ul>
	</nav>
</template>