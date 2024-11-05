import { Schedule } from '@src/pages/schedulesTable/models/scheduleModel';
import { reactive } from 'vue'

const SchedulesStore = reactive(
    {
        schedules: [] as Schedule[],
    }
);

export default SchedulesStore;