import { Entity, PrimaryGeneratedColumn, Column, BaseEntity, ManyToMany, JoinTable, CreateDateColumn, ManyToOne, JoinColumn, PrimaryColumn } from "typeorm";
import { Conference } from "./Conference";
import { Customer } from "./Customer";

@Entity({ name: "CustomerToConferenceRelation" })
export class CustomerToConferenceRelation extends BaseEntity {
    @PrimaryGeneratedColumn()
    id: number

    @PrimaryColumn()
    customerId: number
    
    @PrimaryColumn()
    conferenceId: number

    @ManyToOne(() => Customer, customer => customer.customerToConferenceRelation)
    @JoinColumn({name: 'customerId'})
    customer: Customer;
    
    @ManyToOne(() => Conference, conference => conference.customerToConferenceRelation)
    conference: Conference;
    @JoinColumn({name: 'conferenceId'})

    @CreateDateColumn({ type: "datetimeoffset" })
    created_at: Date;
}