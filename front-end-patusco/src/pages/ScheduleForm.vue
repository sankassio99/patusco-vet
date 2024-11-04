<script setup lang="ts">
import { AutoForm } from '../components/ui/auto-form'
import { Button } from '../components/ui/button'
import * as z from 'zod'
import ScheduleFormController from './ScheduleFormController'

const schema = z.object({
    yourName: z
        .string({
            required_error: 'User name is required.',
        }),

    email: z
        .string({
            required_error: 'Email is required.',
        }),
    
    animalName: z
        .string({
            required_error: 'Animal Name is required.',
        }),

    age: z
        .number({
            required_error: 'Animal Age is required.',
        }),

    date: z.coerce.date().optional(),

    animalType: z
        .enum(['Dog', 'Cat', 'Bird', 'Rabbit', 'Fish', 'Other']),

    symptoms: z
        .enum([
            'Loss of appetite', 
            'Fever', 
            'Abnormal consistent of the faeces', 
            'Vomiting',
            'Diarrhea',
            'Lethargy',
            'Coughing',
            'Sneezing',
            'Itching',
            'Others'
        ]),

    shift: z
        .enum(['Morning', 'Afternoon']),
})

const controller = new ScheduleFormController();

</script>

<template>
    <div class="w-full flex flex-col justify-center items-center my-20">
        <h1 class="text-4xl font-bold text-center mb-6">Schedule Form</h1>

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