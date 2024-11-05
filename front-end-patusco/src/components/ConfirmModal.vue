<script setup lang="ts">
import { Button } from '@components/ui/button'
import {
  Dialog,
  DialogClose,
  DialogContent,
  DialogDescription,
  DialogFooter,
  DialogHeader,
  DialogTitle,
  DialogTrigger,
} from '@components/ui/dialog'

const emit = defineEmits(['confirm'])

function onConfirm() {
  emit('confirm');
}

</script>

<template>
  <Dialog>
    <DialogTrigger as-child>
      <Button type="button" variant="link">
        Delete
      </Button>
    </DialogTrigger>
    <DialogContent class="sm:max-w-md">
      <DialogHeader>
        <DialogTitle>Delete Item</DialogTitle>
        <DialogDescription>
          Are you sure you want to delete this item? This action cannot be undone.
        </DialogDescription>
      </DialogHeader>
      <DialogFooter class="sm:justify-start">
        <DialogClose as-child>
          <Button @click="onConfirm" type="button" variant="destructive">
            Confirm
          </Button>
        </DialogClose>
        <DialogClose as-child>
          <Button type="button" variant="secondary">
            Close
          </Button>
        </DialogClose>
      </DialogFooter>
    </DialogContent>
  </Dialog>
</template>