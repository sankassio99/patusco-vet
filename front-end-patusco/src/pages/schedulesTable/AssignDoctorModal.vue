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
  DialogFooter,
  DialogHeader,
  DialogTitle,
  DialogTrigger,
} from '@components/ui/dialog'
import { Label } from '@components/ui/label'
import SelectDoctor from './SelectDoctor.vue';
import DoctorService from './services/doctorsService';
import { ref } from 'vue';
import DoctorModel from './models/doctorModel';
import { useForm } from 'vee-validate';

const service = new DoctorService();

const selectedDoctor: DoctorModel = null;

const form = useForm();

const onSubmit = form.handleSubmit((values) => {
  console.log('Form submitted!', values)
})

function assignDoctor(data: any) {
  service.assignDoctor(selectedDoctor);
}

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