<script setup lang="ts">
import { AutoForm } from '../../components/ui/auto-form'
import { Button } from '../../components/ui/button'
import * as z from 'zod'
import ScheduleFormController from './ScheduleFormController';
import { Schedule } from '../schedulesTable/models/scheduleModel';
import {
    CalendarDate,
} from '@internationalized/date'

const props = defineProps<{
    schedule: Schedule;
}>();

enum AnimalType {
    Dog = 'Dog',
    Cat = 'Cat',
    Bird = 'Bird',
    Rabbit = 'Rabbit',
    Fish = 'Fish',
    Other = 'Other'
}

function getDate(): CalendarDate {
    const date = props?.schedule?.date ? new Date(props?.schedule?.date) : new Date();

    const year = date.getFullYear();
    const month = date.getMonth();
    const day = date.getDate();

    return new CalendarDate(year, month, day)
}

const schema = z.object({
    yourName: z
        .string({
            required_error: 'User name is required.',
        })
        .default(props?.schedule?.requesterName ?? ''),

    email: z
        .string({
            required_error: 'Email is required.',
        })
        .default(props?.schedule?.requesterEmail ?? ''),

    animalName: z
        .string({
            required_error: 'Animal Name is required.',
        })
        .default(props?.schedule?.animalName ?? ''),

    age: z
        .number({
            required_error: 'Animal Age is required.',
        })
        .default(props?.schedule?.animalAge ?? null),

    date: z.coerce.date({
        required_error: 'Date is required.',
    }).default(getDate()),

    animalType: z
        .nativeEnum(AnimalType)
        .default(props?.schedule?.type ?? AnimalType.Other),

    symptoms: z
        .array(
        // Define the fields for each item
            z.object({
                name: z.string(),
            })
        ),

    shift: z
        .enum(['Morning', 'Afternoon']),
})

const controller = new ScheduleFormController();

</script>

<template>
    <div class="w-full flex flex-col justify-center items-center my-10">
        <h1 class="text-4xl font-bold text-center mb-6">Make an appointment</h1>

        <AutoForm class="w-2/3 space-y-6" :schema="schema" :field-config="{
            animalType: {
                label: 'Animal Type',
            },

            shift: {
                component: 'radio',
            },

        }" @submit="controller.onSubmit">
            <Button type="submit">
                Submit
            </Button>
        </AutoForm>
    </div>
</template>