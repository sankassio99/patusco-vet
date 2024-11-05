<script setup lang="ts">
import { Button } from '@components/ui/button'
import {
  FormField,
  FormItem,
  FormControl
} from '@components/ui/form'
import {
  Dialog,
  DialogContent,
  DialogDescription,
  DialogHeader,
  DialogTitle,
  DialogTrigger,
} from '@components/ui/dialog'
import SelectDoctor from './SelectDoctor.vue';
import DoctorService from './services/doctorsService';
import { useForm } from 'vee-validate';

const service = new DoctorService();

const form = useForm();

const onSubmit = form.handleSubmit((values) => {
  service.assignDoctor(values.doctor);
})


</script>

<template>
  <Dialog>
    <DialogTrigger as-child>
      <Button variant="outline">
        Assign doctor
      </Button>
    </DialogTrigger>
    <DialogContent class="sm:max-w-[425px]">
      <DialogHeader>
        <DialogTitle>Assign doctor</DialogTitle>
        <DialogDescription>
          Assign a doctor to this schedule.
        </DialogDescription>
      </DialogHeader>

      <form @submit="onSubmit" class="grid gap-4 py-4">
        <FormField v-slot="{ componentField }" name="doctor" class="grid grid-cols-4 items-center gap-4">
          <FormItem>
            
            <FormControl>
              <SelectDoctor v-bind="componentField" />
            </FormControl>

          </FormItem>
        </FormField>

        <Button type="submit">
          Save changes
        </Button>
      </form>
    </DialogContent>
  </Dialog>
</template>