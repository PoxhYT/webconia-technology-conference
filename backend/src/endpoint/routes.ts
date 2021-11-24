import express from "express";
import { Conference } from "../Entities/Conference";
import { Customer } from "../Entities/Customer";
import { CustomerToConferenceRelation } from "../Entities/CustomerToConferenceRelation";

const router = express.Router();

router.get("/", (req, res) => {
  Customer.find().then((data) => {
    res.json(data);
  });
});

router.post('/api', (request, response) => {
  const data = request.body;
  response.json(data);
  console.log(data);
});

router.post("/register", async (req, res) => {
  const { firstName, lastName, email, company} = req.body;

  const conference = await Conference.findOne({
    where: { name: 'Java-Konferenz' },
    relations: ["customerToConferenceRelation"],
  });

  console.log("-----------------");
  console.log("USERS EMAIL: " + email);
  

  if (conference === undefined) {
    res.json({ message: "Could not find conference with name " + 'Java-Konferenz' });
    return;
  } else if (!(await checkIfCustomerAlreadyRegistered(email, conference))) {

    console.log("USER NOT REGISTERED!");
    

    const customer = await Customer.create({
      firstName: firstName,
      lastName: lastName,
      email: email,
      company: company,
    }).save();

    await CustomerToConferenceRelation.create({
      conferenceId: conference.id,
      customerId: customer.id,
    }).save();

    console.log("-----------------");
    return res.json(customer);
  } else {
    console.log("USER CREATES!");
    console.log("-----------------");
    return res.json({ message: "Already registered for that conference!" });
  }
});

router.get("/conferences", (req, res) => {
  Conference.find().then((data) => {
    res.json(data);
  });
});

router.get("/customers/:name", async (req, res) => {
  const resultConference = await Conference.findOne({
    relations: ["customerToConferenceRelation"],
    where: { name: req.params.name },
  });

  if (resultConference === undefined) {
    res.json({
      message:
        "Conference with name: " + req.params.name + " couldn't be found!",
    });
    return;
  }

  const customers = await getCustomersFromConference(resultConference);

  res.json(customers);
});

async function checkIfCustomerAlreadyRegistered(
  email: string,
  conference: Conference
): Promise<boolean> {
  const customers = await getCustomersFromConference(conference);
  return customers.some((c) => c.email === email);
}

async function getCustomersFromConference(
  resultConference: Conference
): Promise<Customer[]> {
  const customerIds = resultConference.customerToConferenceRelation.map(
    (c) => c.customerId
  );
  console.log(customerIds);
  
  const customers = await Customer.findByIds(customerIds);
  console.log(customers);

  return customers;
}

export { router };
