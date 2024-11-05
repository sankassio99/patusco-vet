<script setup lang="ts">
import { Button } from '@components/ui/button'
import { AutoForm } from '../../components/ui/auto-form'
import {
    Sheet,
    SheetClose,
    SheetContent,
    SheetDescription,
    SheetFooter,
    SheetHeader,
    SheetTitle,
    SheetTrigger,
} from '@components/ui/sheet'
import * as z from 'zod'

const schema = z.object({
    date: z.coerce.date(),

    animalType: z
        .enum(['Dog', 'Cat', 'Bird', 'Rabbit', 'Fish', 'Other']),

})

</script>

<template>
    <Sheet>
        <SheetTrigger as-child>
            <Button variant="outline">
                Open
            </Button>
        </SheetTrigger>
        <SheetContent>
            <SheetHeader>
                <SheetTitle>Filter</SheetTitle>
                <SheetDescription>
                    Filter the schedules by date and animal type.
                </SheetDescription>
            </SheetHeader>

            <AutoForm class="w-2/3 space-y-6" :schema="schema" :field-config="{

            }" @submit="null">

                <SheetClose as-child>
                    <Button type="submit">
                        Filter
                    </Button>
                </SheetClose>
                
            </AutoForm>
            
        </SheetContent>
    </Sheet>
</template>