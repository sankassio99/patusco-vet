import FilterModel from "../models/filterModel";
import { Schedule } from "../ScheduleTable.vue";

export default class ScheduleService {
    async getSchedules(filter: FilterModel) : Promise<Schedule[]> {
        console.log('Getting schedules');
        console.log(filter);

        return [
            <Schedule>{
                code: '1',
                requesterName: 'John Doe',
                animalName: 'Dog',
                type: 'Vaccination',
                date: '2022-01-01',
                shift: 'Morning',
            }
        ];
    }
}