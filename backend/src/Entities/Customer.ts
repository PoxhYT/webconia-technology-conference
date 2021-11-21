import { Entity, PrimaryGeneratedColumn, Column, BaseEntity, ManyToMany, JoinTable, CreateDateColumn, OneToMany } from "typeorm";
import { Conference } from "./Conference";
import { CustomerToConferenceRelation } from "./CustomerToConferenceRelation";

@Entity({ name: "customers" })
export class Customer extends BaseEntity {
    @PrimaryGeneratedColumn()
    id: number

    @Column()
    firstName: string;

    @Column()
    lastName: string;

    @Column()
    email: string;

    @Column()
    company: string;

    @OneToMany(() => CustomerToConferenceRelation, customerToConferenceRelation => customerToConferenceRelation.customer, { cascade: true })
    customerToConferenceRelation: CustomerToConferenceRelation[];
}