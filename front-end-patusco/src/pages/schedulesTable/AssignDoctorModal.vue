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
  DialogClose,
  DialogTrigger,
} from '@components/ui/dialog'
import SelectDoctor from './SelectDoctor.vue';
import DoctorService from './services/doctorsService';
import { useForm } from 'vee-validate';
import DoctorModel from './models/doctorModel';
import { Schedule } from './models/scheduleModel';
import { ref } from 'vue';

const service = new DoctorService();

const form = useForm();

const props = defineProps<{
  schedule: Schedule;
}>();

const onSubmit = form.handleSubmit((values) => {
  const doctorId = values.doctor;

  const doctorList = selectDoctorRef.value.doctorsList;

  const doctorName = doctorList.find((doctor: DoctorModel) => doctor.id === doctorId).name;
  
  const doctor = new DoctorModel(doctorId, doctorName);

  props.schedule.assign = doctor;

  service.assignDoctor(props.schedule.id, values.doctor.id);
})

const selectDoctorRef = ref(null);

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
              <SelectDoctor ref="selectDoctorRef" :selected-doctor="schedule.assign" v-bind="componentField" />
            </FormControl>

          </FormItem>
        </FormField>
        
        <DialogClose as-child>
            <Button type="submit">
              Save changes
            </Button>
        </DialogClose>
      </form>
    </DialogContent>
  </Dialog>
</template>