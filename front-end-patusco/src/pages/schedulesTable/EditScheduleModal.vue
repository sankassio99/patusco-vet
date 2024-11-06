<script setup lang="ts">
import {
    Dialog,
    DialogContent,
    DialogDescription,
    DialogFooter,
    DialogHeader,
    DialogTitle,
    DialogScrollContent,
    DialogTrigger,
} from '@components/ui/dialog'
import { Button } from '@components/ui/button'
import ScheduleForm from '../schedule/ScheduleForm.vue';
import { Schedule } from '../../models/scheduleModel';

const props = defineProps<{
    schedule: Schedule;
}>();

</script>

<template>
    <Dialog>
        <DialogTrigger>
            <Button type="button" variant="link">
                Edit
            </Button>
        </DialogTrigger>
        <DialogScrollContent class="sm:max-w-[705px]">
            <DialogHeader>
                <DialogTitle>Edit Appointment</DialogTitle>
                <DialogDescription>
                    Make changes to your profile here. Click save when you're done.
                </DialogDescription>
            </DialogHeader>

            <div class="grid gap-4 py-4">
                <ScheduleForm :is-update="true" :schedule="props.schedule" />
            </div>

        </DialogScrollContent>
    </Dialog>
</template>