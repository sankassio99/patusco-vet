import DoctorModel from "./doctorModel";

export interface Schedule {
    assign: DoctorModel;
    code: string;
    requesterName: string;
    animalName: string;
    type: string;
    date: string;
    shift: string;
}