<script setup lang="ts">
import { Button } from '@components/ui/button'
import { AutoForm } from '../../components/ui/auto-form'
import {
    Sheet,
    SheetClose,
    SheetContent,
    SheetDescription,
    SheetHeader,
    SheetTitle,
    SheetTrigger,
} from '@components/ui/sheet'
import * as z from 'zod'
import FilterModel from '../../models/filterModel';

const schema = z.object({
    date: z.coerce.date(),

    animalType: z
        .enum(['Dog', 'Cat', 'Bird', 'Rabbit', 'Fish', 'Other']),

})

const emit = defineEmits(['submit'])

function submit(data: any) {
    var model = new FilterModel(data.date, data.animalType)

    emit('submit', model)
}

</script>

<template>
    <Sheet>
        <SheetTrigger as-child>
            <Button variant="outline">
                Filter
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

            }" @submit="submit">

                <SheetClose as-child>
                    <Button type="submit">
                        Apply
                    </Button>
                </SheetClose>

                <SheetClose as-child>
                    <Button variant="outline">
                        Cancel
                    </Button>
                </SheetClose>
                
            </AutoForm>
            
        </SheetContent>
    </Sheet>
</template>