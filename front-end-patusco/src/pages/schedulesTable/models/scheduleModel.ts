import DoctorModel from "./doctorModel";

export interface Schedule {
    id: string;
    assigned: DoctorModel;
    code: string;
    requesterName: string;
    animalName: string;
    type: string;
    date: string;
    shift: string;
}