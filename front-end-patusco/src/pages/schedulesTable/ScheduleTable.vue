<script setup lang="ts">
import {
  Table,
  TableBody,
  TableCaption,
  TableCell,
  TableHead,
  TableHeader,
  TableRow,
} from '@components/ui/table'

export interface Schedule {
  code: string;
  requesterName: string;
  animalName: string;
  type: string;
  date: string;
  shift: string;
}

const props = defineProps<{
  schedules: Schedule[];
}>();

</script>

<template>
  <Table>
    <TableCaption>A list of your recent invoices.</TableCaption>
    <TableHeader>
      <TableRow>
        <TableHead class="w-[100px]">
          Code
        </TableHead>
        <TableHead>Requester name</TableHead>
        <TableHead>Animal name</TableHead>
        <TableHead>Type</TableHead>
        <TableHead>Date</TableHead>
        <TableHead>Shift</TableHead>
        <TableHead class="text-right">
          Actions
        </TableHead>
      </TableRow>
    </TableHeader>
    <TableBody>
      <TableRow v-for="schedule in schedules" :key="schedule.code">
        <TableCell class="font-medium">
          {{ schedule.code }}
        </TableCell>
        <TableCell>{{ schedule.requesterName }}</TableCell>
        <TableCell>{{ schedule.animalName }}</TableCell>
        <TableCell>{{ schedule.type }}</TableCell>
        <TableCell>{{ schedule.date }}</TableCell>
        <TableCell>{{ schedule.shift }}</TableCell>
        <TableCell class="text-right">
          <!-- Add any actions here -->
        </TableCell>
      </TableRow>
    </TableBody>
  </Table>
</template>