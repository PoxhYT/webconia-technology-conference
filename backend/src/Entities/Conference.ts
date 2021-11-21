import { Entity, PrimaryGeneratedColumn, Column, BaseEntity, OneToMany, ManyToMany, JoinTable } from "typeorm";
import { Customer } from "./Customer";
import { CustomerToConferenceRelation } from "./CustomerToConferenceRelation";

@Entity({ name: "conferences" })
export class Conference extends BaseEntity {
    @PrimaryGeneratedColumn()
    id: number

    @Column()
    name: string;

    @Column({type: 'datetimeoffset'})
    date: Date;

    @OneToMany(type => CustomerToConferenceRelation, (customerToConferenceRelation) => customerToConferenceRelation.conference, { cascade: true })
    customerToConferenceRelation: CustomerToConferenceRelation[];
}