import DoctorModel from "./doctorModel";

export interface Schedule {
    symptoms: string[];
    animalAge: number;
    id: string;
    assigned: DoctorModel;
    code: string;
    requesterName: string;
    requesterEmail: string;
    animalName: string;
    type: string;
    date: string;
    shift: string;
}