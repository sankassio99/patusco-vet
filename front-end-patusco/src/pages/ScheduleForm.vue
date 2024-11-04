<script setup lang="ts">
import { AutoForm } from '../components/ui/auto-form'
import { Button } from '../components/ui/button'
import { toast } from '../components/ui/toast'
import { h } from 'vue'
import * as z from 'zod'

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

function onSubmit(values: Record<string, any>) {
    console.log(values);
    toast({
        title: 'You submitted the following values:',
        description: h('pre', { class: 'mt-2 w-[340px] rounded-md bg-slate-950 p-4' }, h('code', { class: 'text-white' }, JSON.stringify(values, null, 2))),
    })
}
</script>

<template>
    <div>
        <h1>Schedule Form</h1>

        <AutoForm class="w-2/3 space-y-6" :schema="schema" :field-config="{
        
            animalType: {
                label: 'Animal Type',
            },

            shift: {
                component: 'radio',
            },
        
        }" @submit="onSubmit">
            <Button type="submit">
                Submit
            </Button>
        </AutoForm>
    </div>
</template>